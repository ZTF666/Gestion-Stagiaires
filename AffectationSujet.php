<?php
include('UDAO.php');
include_once('class-admin.php');


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

                    <h3 class="menu-title">Demandes</h3><!-- /.menu-title -->

                    <li>
                        <a href="widgets.html"> <i class="menu-icon ti-email"></i>En attentes </a>
                    </li>
                     <li>
                        <a href="widgets.html"> <i class="menu-icon ti-email"></i>Refusées </a>
                    </li>
                     <li>
                        <a href="widgets.html"> <i class="menu-icon ti-email"></i>Accptées </a>
                    </li>
                   <h3 class="menu-title">Stages</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="Liste-stage-encours.php">Stages en cours</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="Liste-stage-conclus.php">Stages conclus</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="">Statistiques</a></li>
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <img class="user-avatar rounded-circle" src='imagesAdmin/<?php echo $user->photo ?>'style="height:60px;width:60px" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                                <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                                <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
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
                        <form action="Sujet-Affectationtraitement.php" method="post" enctype="multipart/form-data" class="form-horizontal">
    
                            <?php 
                              
                            $_SESSION['IDS'];
                            $_SESSION['auteur'];
                            $_SESSION['designation'];
                            $_SESSION['description'];
                            $_SESSION['duree'];
    
                            ?>
                            
                            
                            
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Sujet</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="designation" value="<?php echo $_SESSION['designation'] ?>" class="form-control"></div>
                          </div>
                            
                             <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Description</label></div>
                            <div class="col-12 col-md-9"><textarea name="description" id="textarea-input" rows="9" class="form-control"><?php echo $_SESSION['description'] ?></textarea></div>
                          </div>
                            
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Duré&eacute; definie</label></div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="duree" value="<?php echo $_SESSION['duree'] ?>" class="form-control"></div>
                        </div>
                            
                             <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Duré&eacute; a choisir</label></div>
                            <div class="col-12 col-md-9">
                               
                                 
                                  <div class="form-check-inline form-check">
                                <label for="inline-radio1" class="form-check-label ">
                                  <input type="radio" id="inline-radio1" name="mois" value="30" class="form-check-input">| 1mois | 
                                </label>
                                <label for="inline-radio2" class="form-check-label ">
                                  <input type="radio" id="inline-radio2" name="mois" value="60" class="form-check-input">2 mois | 
                                </label>
                                <label for="inline-radio3" class="form-check-label ">
                                  <input type="radio" id="inline-radio3" name="mois" value="90" class="form-check-input">3 mois |
                                </label>
                              </div>
                                 
                                 
                                 </div>
                        </div>
                            
                            
                            <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Propos&eacute; par </label></div>
                            <div class="col-12 col-md-9">
                                 <?php 
                            $ao=new UDAO();
                              $Q=$_SESSION['auteur'];             
                                $f=$ao->EditEncadrant($Q);
                                foreach($f as $aut){
                                ?>
                                <input type="text" id="text-input" name="Auteur" value="<?php echo $aut->nom." ".$aut->prenom ?>" class="form-control"><?php  }?>
                                </div> 
                            </div>
     
                            <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Affecter à </label></div>
                            <div class="col-12 col-md-9">
                              <select name="stagiaire" id="select" class="form-control" class="drop-down">
                                  <?php 
                            $dao=new UDAO();

                            $X=$dao->loadStagiaires();
                            foreach($X as $Enc){
                                    ?>
                                    <option value="<?php echo $Enc->cin ?>" ><?php echo $Enc->nom." ".$Enc->prenom ?>  </option>
                                
                                  <?php }?>
                              </select>
                            </div>
                          </div>
                            
                       <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Affecter
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                      </div>
                            
                            
                            
                            
                            
                            
                            
                            
                            
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
