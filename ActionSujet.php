<?php
include ('UDAO.php');

if(isset($_POST['Delete'])){
    
    $_SESSION['IDS']=$_POST['id'];
    $dao=new UDAO();
    $dao->DeleteSujet($_SESSION['IDS']);
    
   header('location:Liste-sujets.php');
}





else if(isset($_POST['Edit'])){
    

$_SESSION['IDS']=$_POST['id'];
    
    header('location:EditSujet.php');
}
else if(isset($_POST['affecter'])){
    $_SESSION['IDS']=$_POST['id'];
    $_SESSION['auteur']=$_POST['auteur'];
    $_SESSION['designation']=$_POST['designation'];
    $_SESSION['description']=$_POST['description'];
    $_SESSION['duree']=$_POST['duree'];
    
    
     header('location:AffectationSujet.php');
    

}

?>