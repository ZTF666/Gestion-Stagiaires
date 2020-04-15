<?php
include ('UDAO.php');

$dao=new UDAO();
     $_SESSION['IDS'];
     $_SESSION['auteur'];
     $_SESSION['Stag']=$_POST['stagiaire'];
     $mois=$_POST['mois'];








$dateDebut = new DateTime();
 $Dd=$dateDebut->format('d-m-Y');
//echo $Dd;

$dateDebut->add(new DateInterval('P'.$mois.'D'));
 $dateFin=$dateDebut->format('d-m-Y');
//echo $dateFin;


$X=$dao->AffecterSujet($_SESSION['IDS'], $_SESSION['auteur'],$_SESSION['Stag'],$Dd,$dateFin);



   header('location:Liste-stage-encours.php');
?>