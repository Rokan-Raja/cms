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
		$floor = $_POST['fl'];
		$budget = $sq * 1500;
		if(!empty($floor))
		{
			$budget=$budget+($floor*$sq)*1495;
		}

		$sql = "UPDATE adduser SET username='$name',address='$ad',workplace='$work',email='$mail',phone=$ph,squarefeet=$sq,butget=$budget,floor=$floor where id=$id";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Update Successfully';
			$sql="UPDATE projects SET customer_name='$name' WHERE project_id=$id";
			mysqli_query($conn,$sql);

			$sql="UPDATE account SET total_budget=$budget WHERE project_id=$id";
			mysqli_query($conn,$sql);
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