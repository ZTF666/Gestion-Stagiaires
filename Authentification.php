<?php


include('UDAO.php');


$dao=new UDAO();
        $log=$_POST['log'];
        $pwd=$_POST['pwd'];

        $u=$dao->Authentification($log,$pwd);
//    var_dump($u);
if($u != null)
                {
                $_SESSION['user']= serialize($u);
                header('location:index.php');
  
                }

else
                {
                echo"<script language=\"javascript\">";
    echo "alert('Login or password inccorect!!')";
    echo"</script>";
    
    header('location:login.php');
                }

?>