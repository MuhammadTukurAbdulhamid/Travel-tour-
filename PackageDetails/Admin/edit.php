<?php
include_once("config.php");
$id=$_GET['sno'];
$result=mysqli_query($mysqli,"select* from pack order by sno=$id");
while($res=mysqli_fetch_array($result))
{
    $sno=$res['sno'];
    $placename=$res['placename'];
    $city=$res['city'];
    $state=$res['state'];
    $pincode=$res['pincode'];
    $open=$res['open'];
    $price=$res['price'];
}

?>

 <!DOCTYPE html>
<html>
<head>
    
    <title> </title>
    <style>
        .login {
    padding: 20px;
    background-color:skyblue;
    border-radius: 20px;
    height: 70vh;
    width: 30%;    
    box-shadow: 5px 5px 5px 5px grey;
    
    margin-top:-30px;
    margin-left:35%;
    
}
    </style>
    
</head>
 
<body>
<a href="addpackage.html" style="border:5px solid black;text-decoration:none;background-color:green;font-size:30px;color:white;padding:5px;margin-top:40px">&leftarrow; Home</a>
<div class="login">
<form action="" method="POST">
            <fieldset style="padding: 10px;">

                <legend style="font-size:20px;color:white">LOGIN DETAILS</legend>
                <br>
                <b><p style="font-size:20px; color:black;
    text-shadow: 4px 4px 4px 4px white;">SNo: <input type="number" name="sno" id="sno" style="width:50%;height:20px;margin-left:110px" placeholder="sno" value="<?php echo $sno;?>"autocomplete="off"></p>
                    </b>

                <b> <p style="font-size:20px; color:black;
    text-shadow: 4px 4px 4px 4px white;">PlaceName: <input type="text" name="placename" id="placename" style="width:50%;height:20px; margin-left:50px"placeholder="placename" value="<?php echo $placename;?>" autocomplete="off"></p>
                </b>

                <b><p style="font-size:20px; color:black;
    text-shadow: 4px 4px 4px 4px white;">City: <input type="text" name="city" id="city" style="width:50%;height:20px; margin-left:25%"placeholder="city" value="<?php echo $city;?>"autocomplete="off"></p>

                <b> <p style="font-size:20px; color:black;
    text-shadow: 4px 4px 4px 4px white;">State: <input type="text" name="state" id="state"style="width:50%;height:20px; margin-left:102px" placeholder="state" value="<?php echo $state;?>"autocomplete="off"></p></b>
                
                <b><p style="font-size:20px; color:black;
    text-shadow: 4px 4px 4px 4px white;">Pincode: <input type="number" name="pincode" style="width:50%;height:20px; margin-left:77px"id="pincode" placeholder="pincode" value="<?php echo $pincode;?>"autocomplete="off"></p></b>
                
                <b><p style="font-size:20px; color:black;
    text-shadow: 4px 4px 4px 4px white;">Opening Hours: <input type="text" name="open" style="width:50%;height:20px; margin-left:13px"id="open" placeholder="open" value="<?php echo $open;?>"autocomplete="off"></p></b>
                
                <b><p style="font-size:20px; color:black;
    text-shadow: 4px 4px 4px 4px white;">Price: <input type="number" name="price" style="width:50%;height:20px; margin-left:99px"id="price" placeholder="price" value="<?php echo $price;?>"autocomplete="off"></p> </b>
                <br>
             <input type="hidden" name="id" value=<?php echo $_GET['sno'];?>>
            </b>
                <input type="submit" name="submit" value="Update" style="border:5px solid red;border-style=outset;padding:10px;background-color:red;color:white;margin-left:120px;width:40%">
            </fieldset><br>

            <br>
        </form>
</div>
<?php
 if(isset($_POST['submit'])){
    $sno=$_POST['sno'];
    $placename=$_POST['placename'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $pincode=$_POST['pincode'];
    $open=$_POST['open'];
    $price=$_POST['price'];
    
  $result=mysqli_query($mysqli,"update pack set sno='$sno',placename='$placename',city='$city',state='$state',pincode='$pincode',open='$open',price='$price' where sno=$id");
  
  
  
  if($result){
      header("location:table1.php");
  }
  else{
      echo "Failed";
  }
}


?>
</body>
</html>
