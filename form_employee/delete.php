<?php
	session_start();
	include_once('connection.php');

	if(isset($_GET['delete'])){
		$con_id=$_GET['con_id'];
		$sql = "DELETE FROM employee WHERE id = '".$_GET['id']."'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Delete Successfully';

			$search="SELECT COUNT(con_id) AS total FROM `employee` WHERE con_id=$con_id";
			$query=mysqli_query($conn,$search);
			$data=mysqli_fetch_assoc($query);
			$change="UPDATE contractor SET tot_employee=".$data['total']." WHERE id=$con_id";
			$query2=mysqli_query($conn,$change);
		}
		else{
			$_SESSION['error'] = 'Something went wrong in deleting member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to delete first';
	}

	header('location: ../emp.php');
?>