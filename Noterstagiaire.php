<?php
include('UDAO.php');

$ID=$_SESSION['IDstag'];
$note=$_POST['note'];
$remarque=$_POST['remarque'];




//echo $ID."  ".$note."  ".$remarque;

$dao=new UDAO();

$dao-> Noter($ID,$note,$remarque);
header('location:Liste-stage-conclus-encadrants.php');






?>