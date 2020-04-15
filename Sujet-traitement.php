<?php

include('UDAO.php');

$dao=new UDAO();

$auteur=$_POST['auteur'];
$desgn=addslashes($_POST['designation']);
$descr=addslashes($_POST['description']);//au cas ça contient un mot clé reservé a sql 
$duree=$_POST['duree'];

//echo $auteur;
//echo "<br>";
//echo $desgn;
//echo "<br>";
//echo $descr;
//echo "<br>";
//echo $duree;

$query=$dao->AjouterSujet($auteur,$desgn,$descr,$duree);
 
header('location:Liste-sujets.php');
?>