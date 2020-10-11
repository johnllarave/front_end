<?php

error_reporting(0);
session_start();

$host = "localhost"; 
$user = "root"; 
$pass = ""; 
$bd = "front_end";

$conexion = mysqli_connect($host, $user, $pass, $bd) or die("Error en la conexion: " . mysqli_connect_errno() . PHP_EOL);
$conexion -> set_charset("utf8");

$fechas = new DateTime("now", new DateTimeZone('America/Bogota'));
$fecha = $fechas->format('Y-m-d H:i:s');

$url_aplicacion = "http://localhost/front_end/";
?>