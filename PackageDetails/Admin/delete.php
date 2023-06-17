<?php
include_once('config.php');
$id=$_GET['sno'];
$result=mysqli_query($mysqli,"Delete from pack where sno=$id");

if($result)
{
    header("Location:table1.php");
}
else{
    echo "failed";
}
?>