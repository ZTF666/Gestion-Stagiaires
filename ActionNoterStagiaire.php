<?php
include ('UDAO.php');


    
    $_SESSION['IDstag']=$_POST['id'];
    $_SESSION['IDenc']=$_POST['ide'];

//echo  $_SESSION['IDstag']."     ".$_SESSION['IDenc'];
   header('location:Noter-Stagiaire-encadrants.php');
    

?>