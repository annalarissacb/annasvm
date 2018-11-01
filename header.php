<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="pt-br"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="pt-br"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="pt-br"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="pt-br"> <!--<![endif]-->
<head>
    <title>SVM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="style.css" rel="stylesheet" media="screen">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- FAVICONS -->
    <link rel="shortcut icon" href="ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="ico/apple-touch-icon-57-precomposed.png">
    <!-- FAVICONS -->

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">

</head>

<div id="myNav" class="overlay">

    <div class="logomenu">
        <img src="https://via.placeholder.com/40" alt="Logotipo do site">
    </div>

    <!-- BUSCA -->
    <div class="buscamenu">
        <input type="text" name="firstname"><br>
    </div>
    <!-- BUSCA -->

    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    
    <div class="overlay-content">
        <a href="index.php">Home</a>
        <a href="#">Fashion</a>
        <a href="#">Lifestyle</a>
        <a href="#">Travel</a>
        <a href="#">Food</a>
    </div>
</div>

<body>
    <!--[if lt IE 7]>
    <p class="chromeframe">Você está usando um navegador <strong>desatualizado</strong>. Por favor <a href="http://browsehappy.com/">atualize seu navegador</a> ou <a href="http://www.google.com/chromeframe/?redirect=true">instale o Google Chrome Frame</a> para melhorar sua experiência.</p>
    <![endif]-->

<header>
    
    <!-- TOPO -->
    <div class="container topo">

        <div class="row">
            <!-- LOGO -->
            <div class="col-xs-3 logo">
                <a href="#">
                    <img src="https://via.placeholder.com/40" alt="Logotipo do site">
                </a>
            </div>
            <!-- LOGO -->

            <!-- BUSCA -->
            <div class="col-xs-6 busca">
                <input type="text" name="firstname"><br>
            </div>
            <!-- BUSCA -->

            <!-- REDES SOCIAIS -->
            <div class="col-xs-3 redessociais">
                <ul>
                    <a class="hidden-xs" href="#"><li class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></li></a>
                    <a class="hidden-xs" href="#" type="button" data-toggle="collapse" data-target=".bs-example-js-navbar-collapse"><li class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></li></a>

                    <li class="hidden-sm hidden-md hidden-lg"><span class="btnmenuxs" onclick="openNav()">&#9776;</span></li>
                </ul>
            </div>
            <!-- REDES SOCIAIS -->
        </div>

        <div class="row">
            <!-- MENU -->
            <div class="col-xs-12 menutopo hidden-xs">
                <nav class="navbar navbar-static" id="navbar-example">
                   <div class="container-fluid">

                      <div class="collapse navbar-collapse bs-example-js-navbar-collapse">
                         <ul class="nav navbar-nav">
                            <li class="dropdown">
                               <a href="index.php" class="dropdown-toggle">Home</a> 
                            </li>
                            <li class="dropdown">
                               <a href="#" class="dropdown-toggle">Fashion</a> 
                            </li>
                            <li class="dropdown">
                               <a href="#" class="dropdown-toggle">Lifestyle</a> 
                            </li>
                            <li class="dropdown">
                               <a href="#" class="dropdown-toggle">Travel</a> 
                            </li>
                            <li class="dropdown">
                               <a href="#" class="dropdown-toggle">Food</a> 
                            </li>
                         </ul>
                      </div>
                   </div>
                </nav>
            </div>
            <!-- MENU -->
        </div>
    </div>
    <!-- TOPO -->

</header>