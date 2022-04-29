<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){

		$id = $_POST['id'];
		$project_id=$_POST['project_id'];
		$st = $_POST['st'];


		$sql = "UPDATE team SET project_id=$project_id,status='$st' where id=$id";
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
	header('location: ../team.php');

?>