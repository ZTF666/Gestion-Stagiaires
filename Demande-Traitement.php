<?php

include('UDAO.php');

$dao=new UDAO();



$rep ='imgStagiaires/';
        $fichier =$_FILES['fichier']['name'];
        $uploadf =$rep.basename($_FILES['fichier']['name']);
        move_uploaded_file($_FILES['fichier']['tmp_name'],$uploadf);





//header('location:Liste-sujets.php');
?>

