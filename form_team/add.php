<?php
	session_start();
	include_once('connection.php');
	if(isset($_POST['add'])){
		$con_id = $_POST['con_id'];
		$p_id = $_POST['project_id'];
		$sql="SELECT *FROM team WHERE con_id=$con_id AND project_id=$p_id";
		$query=mysqli_query($conn,$sql);
		if(mysqli_num_rows($query)>0)
		{
			$_SESSION['error'] = 'Already Exists';
			header('location: ../team.php');
			exit;
		}
		else
		{
		$sql="SELECT *FROM contractor WHERE id=$con_id";
		$query=mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($query);
		$name=$row['con_name'];
		$sql = "INSERT INTO team(con_id,project_id,con_name,status) VALUES($con_id,$p_id,'$name','Inactive')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Added Successfully';
		}
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: ../team.php');
?>