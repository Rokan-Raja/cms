<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){

		$id = $_POST['id'];
		$con_id=$_POST['con_id'];
		$con1_id=$_POST['con1_id'];
	 	$name = $_POST['name'];
		$mail = $_POST['mail'];
		$ph = $_POST['ph'];
		$ad = $_POST['ad'];
		$ex = $_POST['ex'];
		$st = $_POST['st'];


		$sql = "UPDATE employee SET con_id=$con_id,emp_name='$name',emp_address='$ad',emp_phone=$ph,experience=$ex,status='$st' where id=$id";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Update Successfully';

			$search="SELECT COUNT(con_id) AS total FROM `employee` WHERE con_id=$con1_id";
			$query=mysqli_query($conn,$search);
			$data=mysqli_fetch_assoc($query);
			$change="UPDATE contractor SET tot_employee=".$data['total']." WHERE id=$con1_id";
			$query2=mysqli_query($conn,$change);

			$search="SELECT COUNT(con_id) AS total FROM `employee` WHERE con_id=$con_id";
			$query=mysqli_query($conn,$search);
			$data=mysqli_fetch_assoc($query);
			$change="UPDATE contractor SET tot_employee=".$data['total']." WHERE id=$con_id";
			$query2=mysqli_query($conn,$change);
		}

		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to edit first';
	}
	header('location: ../emp.php');

?>