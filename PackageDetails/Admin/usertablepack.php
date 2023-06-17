<?php

include_once('config.php');
$result=mysqli_query($mysqli,"select* from pack order by sno asc");

?>


<!DOCTYPE html>
<html>
<head>
    
    <title> </title>
    <style>
        table{
            border-collapse:collapse;
            background-color:crimson;
            width:30%;
            height:50%;
            margin-left:35%;
        }
         table td{
             background-color:burlywood;
         }
           
    </style>
    
</head>
 
<body style="background-color:lightpink">
    <h1 style="text-align:center;color:blue"><u>PACKAGE DETAILS</u></h1>
   
    <table border="2" width="400">
        <tr>
        <th style="padding:5px">Sno</th>
        <th style="padding:5px">PlaceName</th>
        <th style="padding:5px">City</th>
        <th style="padding:5px">State</th>
        <th style="padding:5px">Pincode</th>
        <th style="padding:5px">Opening-Hours</th>
        <th style="padding:5px">Price</th>
        <th style="padding:5px" >PAY NOW</th>
     
     
         
    </tr>
     
     

    
<?php
 while($res=mysqli_fetch_array($result)){
     echo '<tr>';
     echo '<td>' .$res['sno'].'</td>';
     echo '<td>' .$res['placename'].'</td>';
     echo '<td>' .$res['city'].'</td>';
     echo '<td>' .$res['state'].'</td>';
     echo '<td>' .$res['pincode'].'</td>';
     echo '<td>' .$res['open'].'</td>';
     echo '<td>' .$res['price'].'</td>';
     
     
     echo "<td> <a href=\"BookingForm.html\"><input type='submit' value='PAY'></a>";
    

     echo '</tr>';
    
    }
    

?>
 
 
</table>

</body>
</html>