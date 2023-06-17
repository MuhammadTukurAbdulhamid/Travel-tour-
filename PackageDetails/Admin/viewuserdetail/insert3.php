<?php
include_once('config3.php');
include "table4.php";
?>


<!DOCTYPE html>
<html>
<head>
<title> </title>
</head>
<body>
 

<?php
if(isset($_POST['register'])){
   
      $pname=$_POST['pname'];
      $ppass=$_POST['ppass'];
      $email=$_POST['email'];
      $phoneno=$_POST['phoneno'];
     
      $gender=$_POST['gender'];
    
     
     echo "<br>";
    $result=mysqli_query($mysqli,"Insert into users(pname,ppass,email,phoneno,gender) VALUES('$pname','$_ppass','$email','$phoneno','$gender')");
     
}

?>
</body>
</html>