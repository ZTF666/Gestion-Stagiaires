<?php
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
      <script src="ListeImage.js"></script>
    <link href="ListeImage.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="indexEncadrant.php"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="indexEncadrant.php"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">

                    <li class="active">
                        <a href="indexEncadrant.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
<!--
                    <h3 class="menu-title">Gérer</h3> /.menu-title 
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
                            <li><i class="fa fa-table"></i><a href="Liste-encadrants.php">Liste</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Sujets</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="AjouterSujet.php">Ajouter </a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="Liste-sujets.php">Liste</a></li>
                        </ul>
                    </li>
-->

                   <h3 class="menu-title">Gestions des stagiaires</h3><!-- /.menu-title -->

                   
                    <li>
                        <a href="Liste-stagiaires-Encadrants.php"> <i class="menu-icon ti-user"></i>Stagiaires actifs</a>
                    </li>
                     <li>
                        <a href="Liste-sujets-Encadrants.php"> <i class="menu-icon ti-agenda">  </i>Mes Sujets </a>
                    </li>
                     <li>
                        <a href="Liste-stage-conclus-encadrants.php"> <i class="menu-icon ti-save-alt"></i>Stages terminés </a>
                    </li>
<!--
                    <h3 class="menu-title">Stages</h3> /.menu-title 
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="Liste-stage-encours.php">Stages en cours</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="Liste-stage-conclus.php">Stages conclus</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="">Statistiques</a></li>
                        </ul>
                    </li>
-->
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <img class="user-avatar rounded-circle" src='imagesAdmin/<?php echo $user->photo ?>'style="height:60px;width:60px" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                             

                                <a class="nav-link" href="dcenc.php"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>


                </div>
            </div>

        </header><!-- /header -->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
<!--
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Forms</a></li>
                            <li class="active">Basic</li>
                        </ol>
                    </div>
                </div>
            </div>
-->
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">

                <div class="row">
        
                  <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header">
                        <strong>Affecter</strong> Sujet
                      </div>
                      <div class="card-body card-block">
                            
                            
                        <form action="NoterStagiaire.php" method="post" enctype="multipart/form-data" class="form-horizontal">
    
                          <?php 
                              
                            
                                 $ID=$_SESSION['IDstag'];
                                    $IDE=$_SESSION['IDenc'];
                            $dao=new UDAO();
                            
                            $x=$dao->LoadStageNote($IDE,$ID);
                                
                            foreach($x as $inf){
                                
                            
                            ?>
                            
                            
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Sujet</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="designation" disabled value="<?php echo $inf->Desg ?>" class="form-control"></div>
                          </div>
                            
                            
                             
                            <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"> Duré&eacute;</label></div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="duree" disabled value="<?php echo $inf->Duree?>" class="form-control"></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"> R&eacute;alis&eacute; par</label></div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="duree" disabled value="<?php echo $inf->nomStag." ".$inf->prenomStag ?>" class="form-control"></div>
                        </div>
                            <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Note</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="note"  class="form-control"></div>
                          </div>
                               <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Remarque</label></div>
                            <div class="col-12 col-md-9"><textarea name="remarque" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea></div>
                          </div>
                           
     
                            
                            
                       <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Save
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                      </div>
                            
                            
                            
                            
                            <?php }?>
                            
                            
                            
                            
                        </form>
                      </div>
                      
                    </div>
                   
                  </div>
    


                </div>


            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>
