<?php
session_start();
include('connection.php');
$id=$_GET['id'];
$date=date('Y-m-d H:i:s');
$sql="UPDATE projects SET status='Running',st_date='$date' WHERE id=$id"; 
if(mysqli_query($conn,$sql))
{
    $_SESSION['success'] = 'Running Successfully';
}
else
{
    $_SESSION['error'] = 'Something Went Wrong !!!';
}
header('location:../home.php');
?>