<?php
include ('UDAO.php');

if(isset($_POST['Effacer'])){
    
    $_SESSION['IDSS']=$_POST['id'];
    $dao=new UDAO();
    $dao->DeleteStagiaire($_SESSION['IDSS']);
    
   header('location:Liste-stagiaires.php');
}

else if(isset($_POST['Modifier'])){
    

$_SESSION['IDSS']=$_POST['id'];
    
    header('location:EditStagiaire.php');
}
else{
    $_SESSION['IDSS']=$_POST['id'];
    
    header('location:#');
    
}

?>