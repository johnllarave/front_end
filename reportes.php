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
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="inicio.php">ADMINISTRACIÓN DEL CPT</a>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <h4 class="dropdown-toggle"> John Alexander Llarave Herrán</h4>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="index.html"><i class="fa fa-sign-out fa-fw"></i>Salir</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <br>
                            <li>
                                <a href="inicio.html"><i class="fa fa-home"></i>Inicio</a>
                            </li>
                            <li>
                                <a href="cursos.html"><i class="fa fa-file-text-o"></i> Cursos</a>
                            </li>
                            
                            <li>
                                <a href="reportes.html"><i class="fa fa-file-excel-o"></i> Reportes</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div id="page-wrapper"><br>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="inicio.html"><button type="button" class="btn btn-success">Regresar</button></a>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox-content">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="tabla">
                                        <thead>
                                            <tr>
                                                <th>Curso</th>
                                                <th>Nombre</th>
                                                <th>Apellido</th>
                                                <th>Correo</th>
                                                <th>Teléfono</th>
                                                <th>Ciudad</th>
                                                <th>Observación</th>
                                                <th>Acepta TC</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Matematicas avanzado</td>
                                                <td>John Alexander</td>
                                                <td>Llarave Herrán</td>
                                                <td>jollarave@poligran.edu.co</td>
                                                <td>3211234567</td>
                                                <td>Bogotá</td>
                                                <td>Sin comentarios</td>
                                                <td>Si</td>
                                            </tr>
                                            <tr>
                                                <td>Diseño web</td>
                                                <td>John Alexander</td>
                                                <td>Llarave Herrán</td>
                                                <td>jollarave@poligran.edu.co</td>
                                                <td>3211234567</td>
                                                <td>Bogotá</td>
                                                <td>Sin comentarios</td>
                                                <td>Si</td>
                                            </tr>
                                            <tr>
                                                <td>Introduccion a la lengua francesa</td>
                                                <td>John Alexander</td>
                                                <td>Llarave Herrán</td>
                                                <td>jollarave@poligran.edu.co</td>
                                                <td>3211234567</td>
                                                <td>Bogotá</td>
                                                <td>Sin comentarios</td>
                                                <td>Si</td>
                                            </tr>
                                            <tr>
                                                <td>Introduccion a la lengua francesa</td>
                                                <td>Juan Camilo</td>
                                                <td>Arias Moque</td>
                                                <td>juancamilo@poligran.edu.co</td>
                                                <td>3217654321</td>
                                                <td>Bogotá</td>
                                                <td>Sin comentarios</td>
                                                <td>Si</td>
                                            </tr>
                                            <tr>
                                                <td>Desarrollo de la mente creativa</td>
                                                <td>Juan Camilo</td>
                                                <td>Arias Moque</td>
                                                <td>juancamilo@poligran.edu.co</td>
                                                <td>3217654321</td>
                                                <td>Bogotá</td>
                                                <td>Sin comentarios</td>
                                                <td>Si</td>
                                            </tr>
                                            <tr>
                                                <td>Introduccion a la lengua italiana</td>
                                                <td>Juan Camilo</td>
                                                <td>Arias Moque</td>
                                                <td>juancamilo@poligran.edu.co</td>
                                                <td>3217654321</td>
                                                <td>Bogotá</td>
                                                <td>Sin comentarios</td>
                                                <td>Si</td>
                                            </tr>
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

        <script>
            $(document).ready(function() {
                $('#tabla').DataTable( {
                    pageLength: 10,
                    responsive: true,
                    dom: '<"html5buttons"B>lTfgitp',
                    buttons: [
                        //{extend: 'copy'},
                        {extend: 'csv'},
                        {extend: 'excel', title: 'reporte'},
                        //{extend: 'pdf', title: 'ExampleFile'},
                    ],
                    "language": {
                        "url": "js/plugins/Spanish.json"
                    }
                });
            });
        </script>
    </body>
</html>