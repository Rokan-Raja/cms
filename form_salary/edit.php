<?php
	include_once('connection.php');
	session_start();
		$id = $_GET['id'];
		$salary=$_GET['salary'];

		$sql = "UPDATE salary SET salary=$salary where id=$id";
		if($conn->query($sql)){
			echo "success";
			$_SESSION['success'] = 'Update Successfully';
		}

		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}

?>