<?php
session_start();
include('connection.php');
$id=$_GET['id'];

$sql="UPDATE team SET status='Disabled' WHERE project_id=$id"; 
mysqli_query($conn,$sql);

$date=date('Y-m-d H:i:s');
$sql="UPDATE projects SET status='Completed',com_date='$date' WHERE id=$id"; 
if(mysqli_query($conn,$sql))
{
    $_SESSION['success'] = 'Complete Successfully';
}
else
{
    $_SESSION['error'] = 'Something Went Wrong !!!';
}
header('location:../home.php');
?>