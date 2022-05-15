<?php
session_start();
$id=$_POST['id'];
$type=$_POST['re'];

if($type=='emp')
{
    $_SESSION['p_id']=$id;
    echo "emp";
    exit;
}

if($type=='sal')
{
    $_SESSION['p_id']=$id;
    echo "salary";
    exit;
}

if($type=='team')
{
    $_SESSION['p_id']=$id;
    echo "team";
    exit;
}

if($type=='material')
{
    $_SESSION['p_id']=$id;
    echo "material";
    exit;
}
?>