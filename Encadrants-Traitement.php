<?php
include('UDAO.php');

$dao= new UDAO();

$cin=$_POST['cin'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$daten=$_POST['daten'];
$log=$_POST['log'];
$pwd=$_POST['pwd'];
$dept=$_POST['dept'];
$qs=$_POST['secret'];

$rep ='imgEncadrants/';
        $photo =$_FILES['photo']['name'];
        $uploadf =$rep.basename($_FILES['photo']['name']);
        move_uploaded_file($_FILES['photo']['tmp_name'],$uploadf);





$X=$dao->AjouterEncadrant($cin,$nom,$prenom,$photo,$email,$tel,$daten,$log,$pwd,$dept,$qs);

header('location:Liste-encadrants.php');





?>