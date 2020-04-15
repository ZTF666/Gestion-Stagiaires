<?php
include('UDAO.php');




    
    $id=$_POST['id'];
    $dao=new UDAO();
   $dao->DeleteSujet($id);

    
  header('location:Liste-sujets-Encadrants.php');


?>