<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Inicio</title>

        <!--<link rel="icon" href="img/favicon.ico" type="image/x-icon">-->
        <link href="css/plugins/bootstrap.css" rel="stylesheet">
        <link href="css/plugins/metisMenu.css" rel="stylesheet">
        <link href="css/plugins/style.css" rel="stylesheet">
        <link href="css/plugins/sb-admin-2.css" rel="stylesheet">
        <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">
    </head>

    <body>

        <div id="wrapper">
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <?php include 'menu_superior.php';?>
                <?php include 'menu_lateral.php';?>
            </nav>
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1> SISTEMA PARA ADMINISTRACIÓN DEL <b>CPT</b></h1>
                        <div class="page-header" ></div>
                    </div>
                </div>
                <div class="col-lg-12" style="text-align: center;">
                    <h1 >Bienvenido a <b>CPT</b> </h1><br>
                    <h2><b>C</b>ursos <b>P</b>ara <b>T</b>odos</h2>
                </div>
            </div>
        </div>

        <script src="js/plugins/jquery.js"></script>
        <script src="js/plugins/bootstrap.js"></script>
        <script src="js/plugins/metisMenu.js"></script>
        <script src="js/plugins/sb-admin-2.js"></script>
        <script src="js/plugins/toastr/toastr.min.js"></script>

        <script>
            $(document).ready(function() {
                setTimeout(function() {
                    toastr.options = {
                        closeButton: true,
                        progressBar: true,
                        showMethod: 'slideDown',
                        timeOut: 10000
                    };
                    toastr.success('Desarrollado por:<br>• John Alexander Llarave Herrán<br>• Juan Camilo Arias Moque', 'Sistema para administración del CPT');
                }, 100);
            });
        </script>
    </body>
</html>