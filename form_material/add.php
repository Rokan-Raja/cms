<?php
	session_start();
	include_once('connection.php');
	if(isset($_POST['add'])){
		
		$name = $_POST['name'];
		$p = $_POST['p'];
		$me= $_POST['measure'];
		$mt= $_POST['type'];

		$sql = "INSERT INTO `material`(`material_name`, `measure`, `type`, `price`) VALUES('$name','$me','$mt',$p)";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Added Successfully';
		}
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: ../material.php');
?>