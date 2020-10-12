<?php

require_once 'include/Mailer.php';
error_reporting(0);

Class NewCorreo {

	private $server;

	public function __construct() {

	}

	function getUsers() {

		if ($_POST['btn_inscripcion'] == "") {
		    header("location:index.php");
		}

		include 'config.php';

		$curso = mysqli_real_escape_string($conexion, $_POST['curso']);
		$nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
		$apellido = mysqli_real_escape_string($conexion, $_POST['apellido']);
		$correo = mysqli_real_escape_string($conexion, $_POST['correo']);
		$telefono = mysqli_real_escape_string($conexion, $_POST['telefono']);
		$ciudad = mysqli_real_escape_string($conexion, $_POST['ciudad']);
		$acepta = mysqli_real_escape_string($conexion, $_POST['acepta']);

		$insert = " INSERT INTO inscripcion (ins_nombre, ins_apellido, ins_correo, ins_telefono, ins_ciudad, ins_terminos, ins_fecha_inscripcion, cu_id)
	                VALUES ('".$nombre."','".$apellido."','".$correo."','".$telefono."','".$ciudad."','".$acepta."','".$fecha."', '".$curso."')";
	    $conexion->query($insert) or die(mysqli_errno($conexion) . ": " . mysqli_error($conexion) . " ");
		//Fin proceso de almacenar la inscripción//

		//Inicio del proceso para el envío de correos con la información del curso//
		$query="SELECT * FROM curso WHERE cu_id = '".$curso."'";

		$result = $conexion->query($query) or die(mysqli_errno($conexion) . ": " . mysqli_error($conexion) . "");
		$row = $result->fetch_array();

		$nombre = utf8_decode($row['cu_nombre']);
		$area = utf8_decode($row['cu_area']);
		$fecha_curso = $row['cu_fecha'];
		$hora = $row['cu_hora'];

		$cuerpo = " Apreciado/a Usuario
				    <br><br>
					Su inscripci&oacute;n al curso ".$nombre." ha sido exitoso, recuerde que esta actividad se llevar&aacute; a cabo el d&iacute;a ".$fecha_curso." a las ".$hora.".
					<br><br>
					Si usted no ha realizado el registro por favor dir&iacute;jase al siguiente enlace:<br>
					<a href='http://localhost/front_end/' target='_blank'>http://localhost/front_end//</a>";

		$mensaje_final = $cuerpo;

		$this->arrary_report = array("correo" => $correo, "asunto" => "Inscripción");
		$this->sendReport($mensaje_final);

		header("location:index.php?ok");
	}

	function sendReport($mensaje_final) {

		$address = "app.cursos@gmail.com";
		$asunto = $this->arrary_report["asunto"];
		$alert_mails_list = $this->arrary_report["correo"];
		$mail_user_name = "correoingsoftwarepoli@gmail.com";

		$mail_password = "####";
		$mail_host = "smtp.gmail.com";

		$mailer = new Mailer(true);
		$mailer->ClearAddresses();
		$mails_array = explode(",", $alert_mails_list);
		$mails_count = count($mails_array);
		for ($i = 0; $i < $mails_count; $i++) {
			$mail = $mails_array[$i];
			$mailer->AddAddress($mail);
		}

		if ($mails_count == 0)
			$mailer->PluginDir = "include";

			$mailer->SMTPSecure = "tls";
			$mailer->Mailer = "smtp";
			$mailer->Host = $mail_host;
			$mailer->Port = "587";
			//$mailer->SMTPDebug = true;
			$mailer->SMTPAuth = true;
			$mailer->Username = $mail_user_name;
			$mailer->Password = $mail_password;
			$mailer->From = $mail_user_name;
			$mailer->FromName = 'app.cursos@gmail.com';
			//$mailer->Timeout = 30;
			$mailer->Subject = $asunto;
			$mailer->Body = $mensaje_final;
			$mailer->AltBody = $mensaje_final;

			$exito = $mailer->Send();

			return $mailer->ErrorInfo;

			unset($mailer);
	}

	// ingreso de datos
	function logFile($string, $file) {
		$output = @fopen($file, "a");
		@fwrite($output, $string);
		@fclose($output);
	}
}

$envio = new NewCorreo();
$envio->getUsers();

?>
