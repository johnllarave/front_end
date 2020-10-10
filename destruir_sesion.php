<?php
include 'config.php';

if ($_SESSION['us_nombre'] == "") {
    header("location:admin.php");
}

if ($_SESSION['us_nombre']) {
    session_destroy();
    header("location:admin.php");
}
?>