<?php

include 'config.php';

$query = "SELECT cu_id, cu_nombre, cu_area, cu_fecha, cu_hora, cu_estado
          FROM curso";
$result = $conexion->query($query) or die(mysqli_errno($conexion) . ": " . mysqli_error($conexion) . " ");

while ($row_curso = $result->fetch_assoc()) {
    if ($row_curso['cu_estado'] == '1') {
        $estado = "Activo";
    } else {
        $estado = "Inactivo";
    }

    $tabla .= "<tr>";
    $tabla .= "<td>" . $row_curso['cu_nombre'] . "</td>";
    $tabla .= "<td>" . $row_curso['cu_area'] . "</td>";
    $tabla .= "<td>" . $row_curso['cu_fecha'] . "</td>";
    $tabla .= "<td>" . $row_curso['cu_hora'] . "</td>";
    $tabla .= "<td>" . $estado . "</td>";
    $tabla .= "<td>
                <form method='POST' action='crear_curso.php'>
                    <input type='hidden' name='id' value='".$row_curso['cu_id']."'>
                    <button type='submit' class='btn tf-btn btn-link' name='btn_edita_curso'><i class='fa fa-edit'></i></button>
                </form>
              </td>";
    $tabla .= "</tr>";
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cursos</title>

        <!--<link rel="icon" href="img/favicon.ico" type="image/x-icon">-->
        <link href="css/plugins/bootstrap.css" rel="stylesheet">
        <link href="css/plugins/metisMenu.css" rel="stylesheet">
        <link href="css/plugins/datatables.min.css" rel="stylesheet">
        <link href="css/plugins/style.css" rel="stylesheet">
        <link href="css/plugins/sb-admin-2.css" rel="stylesheet">
        <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>

    <body>

        <div id="wrapper">
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <?php include 'menu_superior.php';?>
                <?php include 'menu_lateral.php';?>
            </nav>
            <div id="page-wrapper"><br>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="crear_curso.php"><button type="button" class="btn btn-success">Crear curso</button></a>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox-content">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="tabla">
                                        <thead>
                                            <tr>
                                                <th>Curso</th>
                                                <th>Área</th>
                                                <th>Fecha</th>
                                                <th>Hora</th>
                                                <th>Estado</th>
                                                <th>Editar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                echo $tabla;
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/plugins/jquery.js"></script>
        <script src="js/plugins/bootstrap.js"></script>
        <script src="js/plugins/metisMenu.js"></script>
        <script src="js/plugins/sb-admin-2.js"></script>
        <script src="js/plugins/datatables.min.js"></script>

        <?php include 'config_table.php';?>
    </body>
</html>