<?php
	session_start();
	include_once('connection.php');

		$id = $_POST['id'];
	 	$name = $_POST['name'];
		$wd = $_POST['wd'];
		$p = $_POST['p'];

		$sql = "UPDATE project SET customer_name='$name',work_detail='$wd',percentage=$p where id=$id";
		if($conn->query($sql)){
            echo "success";
			$_SESSION['success'] = 'Update Successfully';
		}

		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}

?>