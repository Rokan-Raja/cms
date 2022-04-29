<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){

		$id = $_POST['id'];
	 	$name = $_POST['name'];
		$mail = $_POST['mail'];
		$ph = $_POST['ph'];
		$ad = $_POST['ad'];
		$work= $_POST['work'];
		$sq = $_POST['sq'];
		$fl = $_POST['fl'];
		$budget = $sq * 1500;
		if(!empty($fl))
		{
			$budget =$budget + ($sq-($sq*(3/100))) * 1500;
		}

		$sql = "UPDATE adduser SET username='$name',address='$ad',workplace='$work',email='$mail',phone=$ph,squarefeet=$sq,butget=$budget,floor=$fl where id=$id";
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
	header('location: ../user.php');

?>