<?php
	session_start();
	include_once('connection.php');

	if(isset($_GET['id'])){
		$emp="DELETE FROM employee WHERE con_id='".$_GET['id']."'";
		mysqli_query($conn,$emp);

		$team="DELETE FROM team WHERE con_id='".$_GET['id']."'";
		mysqli_query($conn,$team);

		$sql = "DELETE FROM contractor WHERE id = '".$_GET['id']."'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Delete Successfully';
		}
		else{
			$_SESSION['error'] = 'Something went wrong in deleting member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to delete first';
	}

	header('location: ../contract.php');
?>