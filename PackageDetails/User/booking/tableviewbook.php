<?php
include_once('config2.php');

$result=mysqli_query($mysqli,"select* from bookticket order by fname asc")
?>


<!DOCTYPE html>
<html>
<head>
    
    <title> </title>
    <style>
        table{
            border-collapse:collapse;
            background-color:lightgreen;
            width:30%;
            height:50%;
            margin-left:35%;
        }
         table td{
             background-color:wheat;
         }
           
    </style>
    
</head>
 
<body style="background-color:lightpink">
    <h1 style="text-align:center;color:blue"><u>USERS BOOKING DETAILS</u></h1>
   
    <table border="2" width="600" style="margin-left:27%">
        <tr>
        <th style="padding:10px">Fullname</th>
        <th style="padding:10px">Phone Number</th>
        <th style="padding:10px">Email-ID</th>
        <th style="padding:10px">Source</th>
        <th style="padding:10px">Destination</th>
        <th style="padding:10px">Adult Age</th>
        <th style="padding:10px">Children Age</th>
        <th style="padding:10px">Infant Age</th>
        
        
     
         
    </tr>
    <a href="../userloginhomepage.html" style="font-size:20px;border:5px solid brown;padding:10px;color:black;background-color:red;margin-left:30px">&leftarrow; Back</a> 
     
    

    
<?php
 while($res=mysqli_fetch_array($result)){
     echo '<tr>';
     echo '<td>' .$res['fname'].'</td>';
     echo '<td>' .$res['pno'].'</td>';
     echo '<td>' .$res['email'].'</td>';
     echo '<td>' .$res['src'].'</td>';
     echo '<td>' .$res['dest'].'</td>';
     echo '<td>' .$res['adultage'].'</td>';
     echo '<td>' .$res['chage'].'</td>';
     echo '<td>' .$res['iage'].'</td>';
      
     echo '</tr>';
     
    
    }
    

?>
 
 
</table>

 

</body>
</html>