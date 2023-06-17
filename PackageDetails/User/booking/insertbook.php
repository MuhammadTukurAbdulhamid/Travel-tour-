<?php
include_once('config2.php');
include "table3.php";
?>


<!DOCTYPE html>
<html>
<head>
<title> </title>
</head>
<body>
 

<?php
if(isset($_POST['register'])){
      $fname=$_POST['fname'];
      $pno=$_POST['pno'];
      $email=$_POST['email'];
      $src=$_POST['src'];
      $dest=$_POST['dest'];
      $adultage=$_POST['adultage'];
      $chage=$_POST['chage'];
      $iage=$_POST['iage'];
    
     
     echo "<br>";
    $result=mysqli_query($mysqli,"Insert into bookticket(fname,pno,email,src,dest,adultage,chage,iage) VALUES('$fname','$pno','$email','$src','$dest','$adultage','$chage','$iage')");
     
}

?>
</body>
</html>