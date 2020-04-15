<?php
include ('UDAO.php');


$idsujet=$_POST['idsujet'];
$auteur=$_POST['auteur'];
$designation=addslashes($_POST['designation']);
$fin=$_POST['fin'];
$debut=$_POST['debut'];
$idstage=$_POST['idstage'];


//echo $idsujet." ".$auteur." ".$designation." ".$idstage." ".$fin." ".$debut;

 $dao=new UDAO();
    $dao->Archiver($idsujet,$auteur,$designation,$fin,$debut,$idstage);


header('location:Liste-stage-conclus.php.php');


?>