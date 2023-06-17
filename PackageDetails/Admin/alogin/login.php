 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body{
            background:linear-gradient(#40E0D0,#FF8C00,#FF0080);
            background-size:cover;
            background-position:center;
            background-repeat:no-repeat;
            height:67vh;
        }

        .container{
            color:red;
            font-size:60px;
            text-align:center;
            font-weight:bolder;
            margin-top:15%;
            margin-bottom:30%;
             
        }
        .button{
            font-size:30px;
            border-radius:4px;
            background-color:blue;
           text-decoration:none;
            
             padding:10px;
             color:white;
             font-family:cambria;
        }
    </style>

   
</head>

<body>
    <div class="container">
<?php
 $usr="adima";
 $pwd="1513";

if(isset($_POST['uname']) && !empty($_POST['uname']) && isset($_POST['pass']) && !empty($_POST['pass']) ){

$uname=$_POST['uname'];
$pass=$_POST['pass'];
$ap= "select pass from adlog where uname=uname";
 
			if(($uname==$usr) && ($pass==$pwd) ){
                echo '<br> LOGIN SUCCESSFUL';
                echo '<br> <a href="../AdminLogin.html" class="button">Please Click Here</a>';
                                
                             

				}else{

							echo '<br> LOGIN UNSUCCESSFUL';
							}
	}else{
			echo '<br>Cannot be left empty!';
			}
            echo "<br>"
            
?>
</div>
 
</body>

</html>