<?php

include 'config.php';

if (isset($_POST['btn_edita_curso'])) {
    $id = mysqli_real_escape_string($conexion, $_POST['id']);

    $query = "SELECT * FROM curso WHERE cu_id = ".$id."";
    $result = $conexion->query($query) or die(mysqli_errno($conexion) . ": " . mysqli_error($conexion) . " ");

    $info = $result->fetch_array();

    if ($info['cu_estado'] == '1') {
        $opcion = '<option value="1" selected>Activo</option>
                   <option value="0">Inactivo</option>';
    } else {
        $opcion = '<option value="1">Activo</option>
                   <option value="0" selected>Inactivo</option>';
    }

    $div_estado =  '<div class="form-group col-lg-12">
                        <label>Estado</label>
                        <input type="hidden" name="id" value="'.$id.'">
                        <select name="estado" class="form-control">
                            '.$opcion.'
                        </select>
                    </div>';

    $opcion_btn = '<input type="submit" class="btn btn-success" value="Editar" name="btn_edita">';
} else {
    $opcion_btn = '<input type="submit" class="btn btn-success" value="Guardar" name="btn_curso">';
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Crear cursos</title>

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
                        <a href="cursos.php"><button type="button" class="btn btn-success">Regresar</button></a>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox-content">
                                <form action="consultas.php" method="POST" id="valida_datos">
                                    <div class="form-group col-lg-12">
                                        <label>Nombre del curso</label>
                                        <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $info['cu_nombre'];?>" required>
                                    </div>

                                    <div class="form-group col-lg-4">
                                        <label>Área</label>
                                        <input type="text" class="form-control" name="area" id="area" value="<?php echo $info['cu_area'];?>" required>
                                    </div>

                                    <div class="form-group col-lg-4">
                                        <label>Fecha</label>
                                        <input type="date" class="form-control" name="fecha" id="fecha" value="<?php echo $info['cu_fecha'];?>" required>
                                    </div>

                                    <div class="form-group col-lg-4">
                                        <label>Hora</label>
                                        <input type="time" class="form-control" name="hora" id="hora" value="<?php echo $info['cu_hora'];?>" required>
                                    </div>

                                    <?php echo $div_estado;?>

                                    <div class="form-group col-lg-6">
                                        <?php echo $opcion_btn;?>
                                    </div>
                                </form>
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
        <script src="js/plugins/jquery.validate.js"></script>

        <script>
            $().ready(function () {
                $("#valida_datos").validate({
                    rules: {
                        nombre: {
                            required: true
                        },

                        area: {
                            required: true
                        },

                        fecha: {
                            required: true,
                            date: true
                        },

                        hora: {
                            required: true
                        }
                    },
                });
            });
        </script>
    </body>
</html>