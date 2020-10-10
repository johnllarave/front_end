<?php

include 'config.php';

$user = mysqli_real_escape_string($conexion, $_POST['user']);
$pass = mysqli_real_escape_string($conexion, sha1($_POST['pass']));

$login="SELECT us_id, us_nombre, us_apellido, rol.ro_id, ro_nombre
        FROM usuario
        INNER JOIN rol ON usuario.ro_id = rol.ro_id
        WHERE us_user = '" . $user . "' AND us_pass = '" . $pass . "' AND us_estado = '1'";

//die($login);

$resultado_login = $conexion->query($login) or die(mysqli_errno($conexion) . ": " . mysqli_error($conexion) . "");

if ($resultado_login->num_rows >= 1) {

	$dato_login = $resultado_login->fetch_array();

	//Resultado de la consulta login//
	$us_id = $dato_login['us_id'];
	$us_nombre = $dato_login['us_nombre'];
	$us_apellido = $dato_login['us_apellido'];
	$ro_id = $dato_login['ro_id'];
	$ro_nombre = $dato_login['ro_nombre'];

	//Variables de sesion persona//
	$_SESSION['us_id'] = $us_id;
	$_SESSION['us_nombre'] = $us_nombre;
	$_SESSION['us_apellido'] = $us_apellido;
	$_SESSION['ro_id'] = $ro_id;
	$_SESSION['ro_nombre'] = $ro_nombre;

  header("location:inicio.php");
} else {
  	echo "<script>
	          alert('Usuario o contraseña Incorrecto');
	          window.location.href = 'admin.php';
	      </script>";
}
?>