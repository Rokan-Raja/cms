<?php
include_once('connection.php');
session_start();
if(isset($_GET['start'])){
	$id=$_GET['id'];
	$date=date('m.d.Y');
	$search="SELECT *FROM work_entry WHERE team_id=$id AND date='$date'";
	$query=mysqli_query($conn,$search);
	if(mysqli_num_rows($query)!=0)
	{
		$_SESSION['error'] = 'Already Working';
		header('location:../team.php');
		exit;
	}
	else
	{
	$search="SELECT *FROM team WHERE id=$id";
	$query=mysqli_query($conn,$search);
	$rows=mysqli_fetch_assoc($query);

	$t_id=$rows['id'];
	$p_id=$rows['project_id'];
	$con_id=$rows['con_id'];
	$name=$rows['con_name'];
	
    $search="SELECT *FROM employee WHERE team_id=$id AND status='Active'";
	$query=mysqli_query($conn,$search);
	if(mysqli_num_rows($query)!=0)
	{
	$sql="INSERT INTO work_entry(worker_id,team_id,project_id,emp_name,emp_type,date) VALUES($con_id,$t_id,$p_id,'$name','Contractor','$date')";
	mysqli_query($conn,$sql);
	while($row=mysqli_fetch_assoc($query))
	{
		$name=$row['emp_name'];
		$et=$row['emp_type'];
		$w_id=$row['id'];

		$sql="INSERT INTO work_entry(worker_id,team_id,project_id,emp_name,emp_type,date) VALUES($w_id,$t_id,$p_id,'$name','$et','$date')";
		mysqli_query($conn,$sql);

		$sql="INSERT INTO t_work_entry(worker_id,team_id,project_id,emp_name,emp_type,date,con_id) VALUES($w_id,$t_id,$p_id,'$name','$et','$date',$con_id)";
		mysqli_query($conn,$sql);
	}
	$sql="UPDATE team SET status='Active' WHERE id=$id";
	mysqli_query($conn,$sql);

	$_SESSION['success'] = 'Work Started Successfully';
	}
	else
	{
		$_SESSION['error'] = 'No Employee not Active';	
	}
	header('location:../team.php');
	}
	}

?>