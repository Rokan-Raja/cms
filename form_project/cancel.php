<?php
session_start();
include('connection.php');
$id=$_GET['id'];
$sql="UPDATE project SET status='Cancelled' WHERE id=$id"; 
if(mysqli_query($conn,$sql))
{
    $_SESSION['success'] = 'Cancelled Successfully';
}
else
{
    $_SESSION['error'] = 'Something Went Wrong !!!';
}
header('location:../home.php');
?>