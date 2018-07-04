<?php
$menu = array(
array("peliculas","peliculas"),
array("series","series"),
array("animacion","animacion"),
array("documental","documental"),
array("index","drop")
);
?>
    <!doctype html>
    <html class="no-js" lang="ES">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <!-- CSS RESETEO -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- FONTS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Oxygen:300,400,700" rel="stylesheet">
        <!-- CSS AYUDA 
        <link rel="stylesheet" href="css/main.css">-->
        <!-- NUESTRO CSS-->
        <link rel="stylesheet" href="css/style.css">
        <!-- NORMALIZE -->
        <link rel="stylesheet" href="css/normalize.css">
        <!-- CSS FLEXSLIDER -->
        <link rel="stylesheet" href="css/flexslider.css">
        <!-- CROSS BROWSER -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <!-- FONTS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> </head>

    <body>
        <!-- CONDICIONAL PARA IE8 E INFERIORES -->
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Menú móvil -->
        <div class="topbar movil">
            <header class="container">
                <div class="logo">
                    <a href="index.php"><img src="images/logo.png"></a>
                </div>
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar top-bar"></span> <span class="icon-bar middle-bar"></span> <span class="icon-bar bottom-bar"></span> </button>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <?php foreach ($menu as $elemento) :?>
                                <li<?php if ($active==$elemento[0]):?> class="active"
                                    <?php endif;?>>
                                        <a href="
                                     <?php echo $elemento[0]?>.php">
                                            <?php echo $elemento[1]?>
                                        </a>
                                        </li>
                                        <?php endforeach;?>
                                            <div class="redes">
                                                <ul class="menu-redes">
                                                    <li><a href="contacto.php"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                        </ul>
                    </div>
                </nav>
                <!-- /.row -->
            </header>
        </div>
        <!-- Menú ordenador-->
        <div class="topbar escritorio hidden-xs">
            <header class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-sm-3 col-md-3 redes">
                                <ul class="menu-redes">
                                    <li><a href="contacto.php"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3 col-md-3"> </div>
                            <div class="col-sm-3 col-md-3"> </div>
                            <div class="col-sm-3 col-md-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Buscar..."> <span class="input-group-btn">
        <button class="btn btn-default" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
      </span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="logo">
                            <a href="index.php"><img src="images/logo.png"></a>
                        </div>
                        <nav class="navbar navbar-default">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar top-bar"></span> <span class="icon-bar middle-bar"></span> <span class="icon-bar bottom-bar"></span> </button>
                            </div>
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <?php foreach ($menu as $elemento) :?>
                                        <li<?php if ($active==$elemento[0]):?> class="active"
                                            <?php endif;?>>
                                                <a href="
                                     <?php echo $elemento[0]?>.php">
                                                    <?php echo $elemento[1]?>
                                                </a>
                                                </li>
                                                <?php endforeach;?>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <!-- /.col-lg-6 -->
                    <!-- /.row -->
                </div>
            </header>
        </div>
        <!-- AQUÍ COMIENZA SLIDE -->
        <div class="flexslider">
            <ul class="slides">
                <li> <img src="images/1.jpg" />
                    <div class="flex-caption">
                        <p><i class="fa fa-quote-left" aria-hidden="true"></i> Nadie ha dicho que esto iba a ser fácil, solo que si no lo intentamos moriremos. <i class="fa fa-quote-right" aria-hidden="true"></i> </p>
                        <h2>Los 100</h2>
                    </div>
                </li>
                <li> <img src="images/2.jpg" />
                    <div class="flex-caption">
                        <p><i class="fa fa-quote-left" aria-hidden="true"></i> Tu verdad, mi verdad y la verdad. <i class="fa fa-quote-right" aria-hidden="true"></i> </p>  <h2>Affair</h2>
                    </div> 
                </li>
                <li> <img src="images/3.jpg" />
                     <div class="flex-caption">
                        <p><i class="fa fa-quote-left" aria-hidden="true"></i> La aceptación de los errores como aprendizaje de vida. <i class="fa fa-quote-right" aria-hidden="true"></i> </p>  <h2>Wild</h2>
                    </div>
                </li>
            </ul>
        </div>
        <div class="container">