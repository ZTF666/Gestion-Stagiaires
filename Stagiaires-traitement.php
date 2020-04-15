<?php
include('UDAO.php');


$dao=new UDAO();

$cin=$_POST['cin'];  
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$sexe=$_POST['sexe'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$daten=$_POST['daten'];
$niveau=$_POST['niveau'];
$filiere=$_POST['filiere'];
$ecole=$_POST['ecole'];



$rep ='imgStagiaires/';
        $photo =$_FILES['photo']['name'];
        $uploadf =$rep.basename($_FILES['photo']['name']);
        move_uploaded_file($_FILES['photo']['tmp_name'],$uploadf);

$query=$dao->AjouterStagiaire($cin,$nom,$prenom,$sexe,$photo,$email,$tel,$daten,$niveau,$filiere,$ecole);

header('location:Liste-stagiaires.php');






?>