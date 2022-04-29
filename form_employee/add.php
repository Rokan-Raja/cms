<?php
	session_start();
	include_once('connection.php');
	if(isset($_POST['add'])){
		$name = $_POST['name'];
		$con_id = $_POST['con_id'];
		$ph = $_POST['ph'];
		$ad = $_POST['ad'];
		$et= $_POST['et'];
		$ex= $_POST['ex'];
		$sql = "INSERT INTO employee(con_id,emp_name,emp_address,emp_phone,emp_type,experience,status) VALUES($con_id,'$name','$ad',$ph,'$et',$ex,'Active')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Added Successfully';

			$search="SELECT COUNT(con_id) AS total FROM `employee` WHERE con_id=$con_id";
			$query=mysqli_query($conn,$search);
			$data=mysqli_fetch_assoc($query);
			$change="UPDATE contractor SET tot_employee=".$data['total']." WHERE id=$con_id";
			$query2=mysqli_query($conn,$change);

		}
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: ../emp.php');
?>