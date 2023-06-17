 <?php
$connect = mysqli_connect("localhost","root","","registration");
if(isset($_POST['register'])){
    
    $pname = $_POST['pname'];
    $ppass = $_POST['ppass'];
    $email = $_POST['email'];
    $phoneno = $_POST['phoneno'];
    
    $gender = $_POST['gender'];
   

    $query = "INSERT INTO users(pname,ppass,email,phoneno,gender) VALUES('$pname','$ppass','$email','$phoneno','$gender')";

    $result = mysqli_query($connect,$query);

    if($result){
        echo '<br> REGISTRATION SUCCESSFUL';
        echo '<br> <a href="userloginform.html">NOW YOU CAN LOGIN</a>';

    }else{
        echo "Already registered";
    }
 
}
?> 