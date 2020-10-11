<?php

include 'config.php';

if (isset($_POST['btn_curso'])) {
	$nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
	$area = mysqli_real_escape_string($conexion, $_POST['area']);
	$fecha_curso = mysqli_real_escape_string($conexion, $_POST['fecha']);
	$hora = mysqli_real_escape_string($conexion, $_POST['hora']);

	$insert = " INSERT INTO curso (cu_nombre, cu_area, cu_fecha, cu_hora, cu_fecha_crea, cu_fecha_edita, us_id)
                VALUES ('".$nombre."','".$area."','".$fecha_curso."','".$hora."','".$fecha."','".$fecha."','".$_SESSION['us_id']."')";
    $conexion->query($insert) or die(mysqli_errno($conexion) . ": " . mysqli_error($conexion) . " ");

    header("location:cursos.php");

}

if (isset($_POST['btn_edita'])) {
	$nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
	$area = mysqli_real_escape_string($conexion, $_POST['area']);
	$fecha_curso = mysqli_real_escape_string($conexion, $_POST['fecha']);
	$hora = mysqli_real_escape_string($conexion, $_POST['hora']);
	$estado = mysqli_real_escape_string($conexion, $_POST['estado']);
	$id = mysqli_real_escape_string($conexion, $_POST['id']);

	$update = " UPDATE curso SET cu_nombre = '".$nombre."', cu_area = '".$area."', cu_fecha = '".$fecha_curso."', cu_hora = '".$hora."', cu_fecha_edita = '".$fecha."', cu_estado = '".$estado."'
                WHERE cu_id = ".$id."";

    $conexion->query($update) or die(mysqli_errno($conexion) . ": " . mysqli_error($conexion) . " ");
    header("location:cursos.php");
}

if (isset($_POST['cascada']) == 1) {
	$curso = mysqli_real_escape_string($conexion, $_POST['curso']);

    $info = "SELECT cu_fecha, cu_hora FROM curso WHERE cu_id = '" . $curso . "'";
    $result = $conexion->query($info) or die(mysqli_errno($conexion) . ": " . mysqli_error($conexion) . " ");
    $row = $result->fetch_array();

    echo "(Fecha: ".$row['cu_fecha']." - Hora: ".$row['cu_hora'].")";
}







else {
	header("location:index.php");
}

?>