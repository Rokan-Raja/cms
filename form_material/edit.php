<?php
	session_start();
	include_once('connection.php');

	$name = '';
	$p = '';
	$me= '';
	$mt= '';

	$id=$_POST['id'];
	$name = $_POST['name'];
	$p = $_POST['p'];
	$me= $_POST['measure'];
	$mt= $_POST['type'];

		if(!empty($name))
		{
		$sql = "UPDATE material SET material_name='$name' where id=$id";
		if($conn->query($sql)){
            echo "success";
			$_SESSION['success'] = 'Update Successfully';
		}
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
		}
		else if(!empty($p))
		{
			$sql = "UPDATE material SET price=$p where id=$id";
			if($conn->query($sql)){
				echo "success";
				$_SESSION['success'] = 'Update Successfully';
			}
			else{
				$_SESSION['error'] = 'Something went wrong in updating member';
			}
		}
		else if(!empty($me))
		{
			$sql = "UPDATE material SET measure='$me' where id=$id";
			if($conn->query($sql)){
				echo "success";
				$_SESSION['success'] = 'Update Successfully';
			}
			else{
				$_SESSION['error'] = 'Something went wrong in updating member';
			}
		}
		else if(!empty($mt))
		{
			$sql = "UPDATE material SET type='$mt' where id=$id";
			if($conn->query($sql)){
				echo "success";
				$_SESSION['success'] = 'Update Successfully';
			}
			else{
				$_SESSION['error'] = 'Something went wrong in updating member';
			}
		}

?>