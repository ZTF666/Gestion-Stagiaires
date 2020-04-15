<?php

include('UDAO.php');

$dao=new UDAO();

$auteur=$_POST['auteur'];
$desgn=$_POST['designation'];
$descr=addslashes($_POST['description']);//au cas ça contient un mot clé reservé a sql 
$duree=$_POST['duree'];



$query=$dao->UpdateSujet($_SESSION['IDS'],$auteur,$desgn,$descr,$duree);
 
header('location:Liste-sujets.php');
?>