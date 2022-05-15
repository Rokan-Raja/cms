<?php
session_start();
include('connection.php');

$id=$_POST['id'];
$pw=$_POST['pw'];

$log_admin="SELECT *FROM login WHERE id='$id' AND password=$pw AND type='admin'";
$query=mysqli_query($conn,$log_admin);

if(mysqli_num_rows($query)==1)
{
$_SESSION['admin']="Admin";
echo "admin";
exit;
}

$log_con="SELECT *FROM contractor WHERE id=$id AND phone=$pw";
$query=mysqli_query($conn,$log_con);

if(mysqli_num_rows($query)==1)
{
$_SESSION['id']=$id;
$_SESSION['contractor']="Contractor";
echo "contractor";
exit;
}

?>