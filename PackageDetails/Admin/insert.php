<?php
include_once('config.php');
include "table1.php";
?>


<!DOCTYPE html>
<html>
<head>
<title> </title>
</head>
<body>
 

<?php
if(isset($_POST['register'])){
      $sno=$_POST['sno'];
      $placename=$_POST['placename'];
      $city=$_POST['city'];
      $state=$_POST['state'];
      $pincode=$_POST['pincode'];
      $open=$_POST['open'];
      $price=$_POST['price'];
    
     
     echo "<br>";
    $result=mysqli_query($mysqli,"Insert into pack(sno,placename,city,state,pincode,open,price) VALUES('$sno','$placename','$city','$state','$pincode','$open','$price')");
     
}

?>
</body>
<script>
    window.onerror = function() {
        location.reload();
    }
</script>
</html>