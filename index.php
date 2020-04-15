<?php
ini_set('display_errors','off');
include('UDAO.php');



$user=unserialize($_SESSION['user']);
if(isset($_SESSION['user'])) {}
else{
	header('location:login.php');
	}
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gestion Stagiaires</title>
    <meta name="description" content="Gestion Stagiaires">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

     <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> 

</head>
<body>


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="index.php"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Gérer</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Gestion Stagiaires</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="AjouterStag.php">Ajouter</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="Liste-stagiaires.php">Liste</a></li>
                            
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Gestion Encadrants</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="AjouterEnc.php">Ajouter</a></li>
                            <li><i class="fa fa-table"></i><a href="">Liste</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Sujets</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="AjouterSujet.php">Ajouter</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="">Liste</a></li>
                        </ul>
                    </li>

<!--
                    <h3 class="menu-title">Demandes</h3> /.menu-title 

                    <li>
                        <a href=""> <i class="menu-icon ti-email"></i>En attentes </a>
                    </li>
                     <li>
                        <a href=""> <i class="menu-icon ti-email"></i>Refusées </a>
                    </li>
                     <li>
                        <a href=""> <i class="menu-icon ti-email"></i>Accptées </a>
                    </li>
-->
                    <h3 class="menu-title">Stages</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="Liste-stage-encours.php">Stages en cours</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="Liste-stage-conclus.php">Stages conclus</a></li>
<!--                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="">Statistiques</a></li>-->
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
         <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="dc.php" class="dropdown-toggle"  aria-haspopup="false" aria-expanded="false">
                            
                            <img class="user-avatar rounded-circle" src='imagesAdmin/<?php echo $user->photo ?>'style="height:60px;width:60px" title='Disconnect' alt="User Avatar">
                          
                        </a>

                    
                    </div>


                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-success">Bienvenue</span> <?php echo $user->log;   ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>

<!--/twishia dyal statistics-->
           <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                       
                        <h4 class="mb-0">
                            <span class="count">
<!--                                -->
                               <?php  
                                $con = mysql_connect("localhost", "root", "");  
                                $selectdb = mysql_select_db("Gestionstagiaires",$con);  
                                $result = mysql_query("select * from stagiaires S,sujet SJ,Encadrants E,Stage SG where S.cin=SG.idstagiaire and SJ.idSuj=SG.idsujet and E.cinEnc=SG.idencadrant and E.cinEnc=SJ.auteur and SG.etat=0");  
                                $number_of_rows = mysql_num_rows($result);  
                                echo $number_of_rows;  
                                ?> 
<!--                              -->
                            </span>
                        </h4>
                        <p class="text-light">Stagiaires Actifs</p>

                        <!-- <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart1"></canvas>
                        </div> -->

                    </div>

                </div>
            </div>
            <!--/.col-->
<!--/twishia dyal statistics-->
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-2">
                    <div class="card-body pb-0">
                        <h4 class="mb-0">
                            <span class="count">
<!--                                -->
                                <?php  
                                $con = mysql_connect("localhost", "root", "");  
                                $selectdb = mysql_select_db("Gestionstagiaires",$con);  
                                $result = mysql_query("select * from encadrants ");  
                                $number_of_rows = mysql_num_rows($result);  
                                echo $number_of_rows;  
                                ?> 
<!--                            -->
                            </span>
                        </h4>
                        <p class="text-light">Encadrants Actifs</p>

                        <!-- <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart2"></canvas>
                        </div> -->

                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-3">
                    <div class="card-body pb-0">
                        <h4 class="mb-0">
                            <span class="count">
                                <?php  
                                $con = mysql_connect("localhost", "root", "");  
                                $selectdb = mysql_select_db("Gestionstagiaires",$con);  
                                $result = mysql_query("select * from sujet ");  
                                $number_of_rows = mysql_num_rows($result);  
                                echo $number_of_rows;  
                                ?> 
                            </span>
                        </h4>
                        <p class="text-light">Sujets de stages</p>

                    </div>

                        <!-- <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart3"></canvas>
                        </div> -->
                </div>
            </div>
            <!--/.col-->

<!--
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-4">
                    <div class="card-body pb-0">
                        <h4 class="mb-0">
                            <span class="count">10468</span>
                        </h4>
                        <p class="text-light">Demandes en attente</p>

                        <div class="chart-wrapper px-3" style="height:70px;" height="70">
                            <canvas id="widgetChart4"></canvas>
                        </div>

                    </div>
                </div>
            </div>
-->
            <!--/.col-->




<!--
           <div class="col-xl-3 col-lg-6">
                <section class="card">
                    <div class="twt-feed blue-bg">
                        <div class="corner-ribon black-ribon">
                            <i class="fa fa-twitter"></i>
                        </div>
                        <div class="fa fa-twitter wtt-mark"></div>

                        <div class="media">
                            <a href="#">
                                <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="images/admin.jpg">
                            </a>
                            <div class="media-body">
                                <h2 class="text-white display-6">Jim Doe</h2>
                                <p class="text-light">Project Manager</p>
                            </div>
                        </div>
                    </div>
                    <div class="weather-category twt-category">
                        <ul>
                            <li class="active">
                                <h5>750</h5>
                                Stagiaires
                            </li>
                            <li>
                                <h5>.</h5>
                                .
                            </li>
                             <li>
                                <h5>865</h5>
                                Sujets
                            </li>
                           
                        </ul>
                    </div>
                    
                </section>
            </div>
-->


           


<!--
            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Mes stagiaires</div>
                                <div class="stat-digit">961</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Mes Projets</div>
                                <div class="stat-digit">770</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
-->

            


        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <!-- <script src="assets/js/lib/chart-js/Chart.bundle.js"></script> -->
    <!-- <script src="assets/js/dashboard.js"></script> -->
    <!-- <script src="assets/js/widgets.js"></script> -->
    <!-- <script src="assets/js/lib/vector-map/jquery.vmap.js"></script> -->
    <!-- <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script> -->
    <!-- <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script> -->
    <!-- <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script> -->
    <!-- <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script> -->

</body>
</html>
