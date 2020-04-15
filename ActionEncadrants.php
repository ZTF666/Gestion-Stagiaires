<?php
include ('UDAO.php');

if(isset($_POST['Effacer'])){
    
    $_SESSION['ID']=$_POST['id'];
    $dao=new UDAO();
    $dao->DeleteEncadrant($_SESSION['ID']);
    
   header('location:Liste-encadrants.php');
}

else if(isset($_POST['Modifier'])){
    

$_SESSION['ID']=$_POST['id'];
    
    header('location:EditEncadrant.php');
}

?>