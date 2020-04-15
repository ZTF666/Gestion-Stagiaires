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
    <title>Gestion stagiaires</title>
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
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">

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

<!--
                    <h3 class="menu-title">Demandes</h3> /.menu-title 

                    <li>
                        <a href="widgets.html"> <i class="menu-icon ti-email"></i>En attentes </a>
                    </li>
                     <li>
                        <a href="widgets.html"> <i class="menu-icon ti-email"></i>Refusées </a>
                    </li>
                     <li>
                        <a href="widgets.html"> <i class="menu-icon ti-email"></i>Accptées </a>
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src='imagesAdmin/<?php echo $user->photo ?>'style="height:60px;width:60px" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                               

                                <a class="nav-link" href="dc.php"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
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
            
        </div>
        
<!--mn hna-->
        
        
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Table</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                          <th>ID</th>
                        <th>Sujet</th>
                        <th>Description</th>
                        <th>Auteur</th>
                        <th>Durée</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php   
                  $dao=new UDAO();
                  
           
                  $sujet=$dao->loadSujets();
                 
                  foreach($sujet as $X)
                  {
                  ?>
                      <tr>
                          <td><?php echo $X->id ?></td>
                        <td><?php echo $X->designation ?></td>
                        <td><?php echo $X->description?></td>
                        <td><?php echo $X->auteur?></td>
                        <td><?php echo $X->duree?></td>
                          <form method="post" action="ActionSujet.php">
                              <input type="hidden" value="<?php echo $X->id ?>" name="id">  <!--ID sujet-->
                              <input type="hidden" value="<?php echo $X->auteur ?>" name="auteur">
                              <input type="hidden" value="<?php echo $X->designation ?>" name="designation">
                              <input type="hidden" value="<?php echo $X->description ?>" name="description">
                              <input type="hidden" value="<?php echo $X->duree ?>" name="duree">
                              <td>
                                  <button type="submit" class="btn btn-success" name="affecter">Affecter</button>
                                  <button type="submit" class="btn btn-danger" onclick="return confirm('Voulez-vous supprimer ce sujet ?')" name="Delete">Delete</button>
                                  <button type="submit" class="btn btn-info" name="Edit">Edit</button>
                              </td>
                          </form>
                      </tr>
                      <?php }?>
                    </tbody>
                  </table>
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


    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/lib/data-table/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>


</body>
</html>
