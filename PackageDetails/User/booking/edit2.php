<?php
include_once("config2.php");
$id=$_GET['pno'];
$result=mysqli_query($mysqli,"select* from bookticket order by pno=$id");
while($res=mysqli_fetch_array($result))
{
    $fname=$res['fname'];
    $pno=$res['pno'];
    $email=$res['email'];
    $src=$res['src'];
    $dest=$res['dest'];
    $adultage=$res['adultage'];
    $chage=$res['chage'];
    $iage=$res['iage'];
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
    height: 75vh;
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
                <b><p style="font-size:20px; color:black;text-shadow: 4px 4px 4px 4px white;">Full Name:<input type="text" name="fname" id="fname" style="width:50%;height:20px;margin-left:60px;margin-bottom:-50px" placeholder="fullname" value="<?php echo $fname;?>"autocomplete="off"> 
                    </p></b>

                <b> <p style="font-size:20px; color:black;
    text-shadow: 4px 4px 4px 4px white;">Phone Number:  <input type="number" name="pno" id="pno" style="width:50%;height:20px; margin-left:15px"placeholder="phone number" value="<?php echo $pno;?>" autocomplete="off"></p>
                </b>

                <b><p style="font-size:20px; color:black;
    text-shadow: 4px 4px 4px 4px white;">Email-ID: <input type="text" name="email" id="email" style="width:50%;height:20px; margin-left:15%"placeholder="email" value="<?php echo $email;?>"autocomplete="off"></p>

                <b> <p style="font-size:20px; color:black;
    text-shadow: 4px 4px 4px 4px white;">From: <input type="text" name="src" id="src"style="width:50%;height:20px; margin-left:95px" placeholder="source" value="<?php echo $src;?>"autocomplete="off"></p></b>
                
                <b><p style="font-size:20px; color:black;
    text-shadow: 4px 4px 4px 4px white;">To: <input type="text" name="dest" id="dest" style="width:50%;height:20px; margin-left:122px"id="destination" placeholder="destination" value="<?php echo $dest;?>"autocomplete="off"></p></b>
                
                <b><p style="font-size:20px; color:black;
    text-shadow: 4px 4px 4px 4px white;">Adult Age: <input type="number" name="adultage" style="width:50%;height:20px; margin-left:58px"id="adultage" placeholder="Adult age" value="<?php echo $adultage;?>"autocomplete="off"></p></b>
                
                <b><p style="font-size:20px; color:black;
    text-shadow: 4px 4px 4px 4px white;">Children Age: <input type="number" name="chage" style="width:50%;height:20px; margin-left :28px"id="chage" placeholder="Children Age" value="<?php echo $chage;?>"autocomplete="off"></p> </b>
                
                <b><p style="font-size:20px; color:black;
    text-shadow: 4px 4px 4px 4px white;">Infant Age: <input type="number" name="iage" style="width:50%;height:20px; margin-left:51px"id="iage" placeholder="Infant Age" value="<?php echo $iage;?>"autocomplete="off"></p> </b>
                <br>
             <input type="hidden" name="id" value=<?php echo $_GET['pno'];?>>
            </b>
                <input type="submit" name="submit" value="Update" style="border:5px solid red;border-style=outset;padding:10px;background-color:red;color:white;margin-left:120px;width:40%">
            </fieldset><br>
            <br>
        </form>
</div>
<?php
 if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $pno=$_POST['pno'];
    $email=$_POST['email'];
    $src=$_POST['src'];
    $dest=$_POST['dest'];
    $adultage=$_POST['adultage'];
    $chage=$_POST['chage'];
    $iage=$_POST['iage'];
    
  $result=mysqli_query($mysqli,"update bookticket set pno='$pno',fname='$fname',email='$email',src='$src',dest='$dest',adultage='$adultage',chage='$chage',iage='$iage' where pno=$id");
  
  
  
  if($result){
      header("location:table3.php");
  }
  else{
      echo "Failed";
  }
}


?>
</body>
</html>
