<?php
include_once('config2.php');
$id=$_GET['pno'];
$result=mysqli_query($mysqli,"Delete from bookticket where pno=$id");

if($result)
{
    header("Location:tabledelete.php");
}
else{
    echo "failed";
}
?>