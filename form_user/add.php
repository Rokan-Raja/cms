<?php
	session_start();
	include_once('connection.php');
	if(isset($_POST['add'])){
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
		$sql = "INSERT INTO adduser(username,address,workplace,email,phone,squarefeet,floor,butget) VALUES('$name','$ad','$work','$mail',$ph,$sq,$fl,$budget)";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Added Successfully';
			$id=mysqli_insert_id($conn);
			$st="New";
			$query="INSERT INTO project(project_id,customer_name,status) Values($id,'$name','$st')";
			mysqli_query($conn,$query);
		}
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}
	header('location: ../user.php');
?>