<?php
	session_start();
	include_once('connection.php');
	if(isset($_POST['add'])){
		$name = $_POST['name'];
		$mail = $_POST['mail'];
		$ph = $_POST['ph'];
		$ad = $_POST['ad'];
		$ex= $_POST['ex'];
		$sql = "INSERT INTO contractor(con_name,con_address,email,phone,experience,status) VALUES('$name','$ad','$mail',$ph,$ex,'Active')";
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

	header('location: ../contract.php');
?>