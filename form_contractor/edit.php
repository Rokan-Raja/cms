<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){

		$id = $_POST['id'];
	 	$name = $_POST['name'];
		$mail = $_POST['mail'];
		$ph = $_POST['ph'];
		$ad = $_POST['ad'];
		$ex = $_POST['ex'];
		$st = $_POST['st'];

		$sql = "UPDATE contractor SET con_name='$name',con_address='$ad',email='$mail',phone=$ph,experience=$ex,status='$st' where id=$id";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Update Successfully';
		}

		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to edit first';
	}
	header('location: ../contract.php');

?>