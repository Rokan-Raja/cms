<?php
include('connection.php');

$id=$_POST['id'];
$pw=$_POST['pw'];

if(strlen($pw)==10)
{
$search="SELECT *FROM login WHERE id='$id' AND type='admin'";
$re=mysqli_query($conn,$search);
if(mysqli_num_rows($re)==1)
{
$log_change="UPDATE `login` SET `password`=$pw WHERE id=$id";
$re=mysqli_query($conn,$log_change);

if(mysqli_affected_rows($conn))
{
echo "success";
exit;
}
else
{
echo "failed";
}
}
else
{
$log_change="UPDATE `contractor` SET `phone`=$pw WHERE id=$id";
$re=mysqli_query($conn,$log_change);

if(mysqli_affected_rows($conn))
{
echo "success";
exit;
}
else
{
echo "failed";
}
}
}
?>