<?php
include('Udao.php');

$dao=new Udao();

 $log=$_POST['log'];
 $pwd=$_POST['secret'];

$x=$dao->RecMypwd($log,$pwd);


foreach($x as $F){
    
  
//   echo '<script type="text/javascript">alert("' . $F['pwd'] . '")</script>';
    
    
    echo '<script>
alert("Votre mot de passe est :  '.$F['pwd'].'");
window.location.href="login-encadrants.php";
</script>';

}




//  header("Location:login.php");

?>