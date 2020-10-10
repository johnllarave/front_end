<?php

include 'config.php';

$query = "SELECT cu_id, cu_nombre FROM curso WHERE cu_estado = '1'";
$result = $conexion->query($query) or die(mysqli_errno($conexion) . ": " . mysqli_error($conexion) . " ");

while ($row_curso = $result->fetch_assoc()) {
    $curso .= '<option value="'.$row_curso['cu_id'].'">'.$row_curso['cu_nombre'].'</option>';
}

?>

<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CPT - Cursos Para Todos online</title>

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

    <!-- Slider
    ================================================== -->
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>
    </head>
    <body>
    <!-- Navigation
    ==========================================-->
    <nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><strong><span class="color">C</span></strong><small>ursos</small>
            <strong><span class="color">P</span></strong><small>ara</small><strong><span class="color">T</span></strong><small>odos</small>
          </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#tf-home" class="page-scroll">Inicio</a></li>
            <li><a href="#tf-contact" class="page-scroll">Inscripcion</a></li>
            <li><a href="#tf-testimonials" class="page-scroll">Pautas</a></li>
            <li><a href="admin.php" class="page-scroll">Admin</a></li>
            
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <!-- Inicio Page
    ==========================================-->
    <div id="tf-home" class="text-center">
        <div class="overlay">
            <div class="content">
                <h1><strong><span class="color">C</span></strong>ursos 
                <strong><span class="color">P</span></strong>ara 
                <strong><span class="color">T</span></strong>odos</h1>
                <p class="lead">Bienvenido a la mejor experiencia en educacion para toda la <strong>familia.</strong></p> 
                <p class="lead">Tenemos a tu disposicion cientos de cursos muy utiles en diferentes areas del conocimeinto con materiales didacticos y un entorno de aprendizaje interactivo</p>
                <p class="lead">para que te diviertas y aprendas,todo en un solo lugar.</p>
                
            </div>
        </div>
    </div>

    <!-- Inscripcion
    ==========================================-->
     <div id="tf-contact" class="text-center">
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                    <div class="section-title center">
                        <h2>Empieza tu viaje hacia el <strong>conocimiento</strong></h2>
                        <div class="line">
                            <hr>
                        </div>
                        <div class="clearfix"></div>
                        <p>
                            <em>
                                Inscribete ahora a alguno de los cursos que tenemos preparados para ti diligenciando el siguiente 
                                <strong>
                                    formulario de inscripcion
                                </strong>.
                            </em>
                        </p>  
                        <p>
                            <em>
                                No debes dejar ninguna casilla en blanco puesto que nuestro sistema valida que los datos solicitados se encuentren diligenciados en su totalidad, Bienvenido.
                            </em>
                        </p>          
                    </div>

                    <form method="POST" action="consultas.php" id="form_inscripcion" name="form_inscripcion">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Curso de interes <span id="info"></span> </label>
                                    <select name="curso" id="curso" class="form-control">
                                        <?php echo $curso;?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nombres</label>
                                    <input type="text" class="form-control" name="nombre" id="nombre">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Apellidos</label>
                                    <input type="text" class="form-control" name="apellido" id="apellido">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Correo</label>
                                    <input type="email" class="form-control" name="correo" id="correo">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Teléfono</label>
                                    <input type="text" class="form-control" name="telefono" id="telefono">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Ciudad</label>
                                    <input type="text" class="form-control" name="ciudad" id="ciudad">
                                </div>
                            </div>
                        </div>
                        <label>
                            ¿Acepta nuestra politíca de tratamiento de la información personal? 
                            <a href="https://github.com/johnllarave/front_end" target="_blank">Consultar!</a> 
                            <input type="checkbox" name="acepta" id="acepta" value="1">
                        </label>
                        <button type="submit" class="btn tf-btn btn-default" id="btn_envia" name="btn_inscripcion" disabled>Inscribirse</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Pautas
    ==========================================-->
    <div id="tf-testimonials" class="text-center">
        <div class="overlay">
            <div class="container">
                <div class="section-title center">
                    <h2>Pautas y <strong>Reglamentos</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div id="testimonial" class="owl-carousel owl-theme">
                            <div class="item">
                                <h5>La organizacion <strong><span class="color">Cursos para todos</span></strong> (CPT) tiene plena libertad de cancelar los cursos que no haya suficientes personas inscritas o por causas ajenas a nuestra voluntad, como puede ser la enfermedad del instructor</h5>
                                <p><strong>Pautas y reglamentos</strong>, Cursos para todos online 2020</p>
                            </div>

                            <div class="item">
                                <h5>El formulario de inscripción a los cursos puede ser utilizado para pre-inscribirse con anticipación a la realización de un curso. Con ello, usted puede contar con que, al abrirse las inscripciones, se le enviará un correo con la información respectiva. Sin embargo, solamente podrá contar con el cupo de asistencia al curso, una vez tramite el pago.</h5>
                                <p><strong>Pautas y reglamentos</strong>, Cursos para todos online 2020</p>
                            </div>

                            <div class="item">
                                <h5>Tenga en cuenta que si no puede asistir al curso, lo puede cancelar máximo con 15 días de anticipación a su fecha de inicio. Si lo cancela después, tendrá una sanción del 25% del valor del curso.</h5>
                                <p><strong>Pautas y reglamentos</strong>, Cursos para todos online 2020</p>
                            </div>
                            <div class="item">
                                <h5>Algunas veces por problemas de seguridad en los servidores no nos llega su formulario de inscripción. Por esa razón, el sistema le enviará una copia del formulario para que en caso de ser necesario usted nos lo envíe vía correo electrónico.</h5>
                                <p><strong>Pautas y reglamentos</strong>, Cursos para todos online 2020</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav id="footer">
        <div class="container">
            <div class="pull-left fnav">
                <p>Derechos reservados. Politecnico gran colombiano © 2020. Desarrollado por 
                    <a href="https://github.com/johnllarave/front_end">John Alexander Llarave Herrán </a> and 
                    <a href="https://github.com/johnllarave/front_end"> Juan Camilo Arias Moque</a>
                </p>
            </div>
            <div class="pull-right fnav">
                <ul class="footer-social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <script type="text/javascript" src="js/modernizr.custom.js"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.js"></script>

    <script src="js/owl.carousel.js"></script>

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="js/main.js"></script>
    <script src="js/plugins/jquery.validate.js"></script>

    <script>
        $(document).ready(function () {
            $("#form_inscripcion").validate({
                rules: {
                    curso: {
                        required: true
                    },

                    nombre: {
                        required: true
                    },

                    apellido: {
                        required: true
                    },

                    correo: {
                        required: true,
                        email: true
                    },

                    telefono: {
                        required: true
                    },

                    ciudad: {
                        required: true
                    }
                },
            });

            $("#acepta").click(function(){
                if (document.getElementById("acepta").checked) {
                    document.form_inscripcion.btn_envia.disabled = false;
                } else {
                    document.form_inscripcion.btn_envia.disabled = true;
                }
            });

            $("#curso").change(function () {
                $("#curso option:selected").each(function () {
                    curso = $(this).val();

                    //SWITCH temporal mientras se realiza el desarrollo
                    //y se trae la información de la base de datos
                    switch (curso) {
                        case "1":
                            $("#info").html("(Fecha: 2020-10-10 Hora: 12:00)");
                        break;
                        case "2":
                            $("#info").html("(Fecha: 2020-10-10 Hora: 13:00)");
                        break;
                        case "3":
                            $("#info").html("(Fecha: 2020-10-10 Hora: 14:00)");
                        break;
                        case "4":
                            $("#info").html("(Fecha: 2020-10-11 Hora: 12:00)");
                        break;
                        case "5":
                            $("#info").html("(Fecha: 2020-10-11 Hora: 13:00)");
                        break;
                        case "6":
                            $("#info").html("(Fecha: 2020-10-11 Hora: 14:00)");
                        break;
                        case "7":
                            $("#info").html("(Fecha: 2020-10-13 Hora: 12:00)");
                        break;
                        case "8":
                            $("#info").html("(Fecha: 2020-10-13 Hora: 13:00)");
                        break;
                        case "9":
                            $("#info").html("(Fecha: 2020-10-13 Hora: 14:00)");
                        break;
                        case "10":
                            $("#info").html("(Fecha: 2020-10-13 Hora: 15:00)");
                        break;
                        case "11":
                            $("#info").html("(Fecha: 2020-10-14 Hora: 12:00)");
                        break;
                        case "12":
                            $("#info").html("(Fecha: 2020-10-14 Hora: 14:00)");
                        break;
                        default:
                            $("#info").html("(No hay curso)");
                        break;
                    }
                });
            });
        });

    </script>

    </body>
</html>