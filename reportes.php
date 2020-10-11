<?php

include 'config.php';

$query = "SELECT cu_id, cu_nombre FROM curso";
$result = $conexion->query($query) or die(mysqli_errno($conexion) . ": " . mysqli_error($conexion) . " ");

$curso = "<option></option>";
while ($row_curso = $result->fetch_assoc()) {
    $curso .= '<option value="'.$row_curso['cu_id'].'">'.$row_curso['cu_nombre'].'</option>';
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Reportes</title>

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
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox-content">
                                <form action="consultas.php" method="POST" id="valida_datos">
                                    <div class="form-group col-lg-12">
                                        <label>Nombre del curso</label>
                                        <select name="curso" id="curso" class="form-control">
                                            <?php echo $curso;?>
                                        </select>
                                    </div>

                                    <div class="form-group col-lg-6">
                                        <button id="formulario_ajax" class="btn btn-success" type="button">Consultar</button>
                                    </div>
                                </form>
                            </div>
                                <div id="carga_tabla"></div>
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

        <script>
            $(document).ready(function() {
                $("#formulario_ajax").click(function(evento) {
                    evento.preventDefault(); 
                    var curso = document.getElementById('curso').value;

                    $("#carga_tabla").load("tabla_reporte.php", {curso: curso}, function(){});
                });
            });
        </script>
    </body>
</html>