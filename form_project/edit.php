<?php
	session_start();
	include_once('connection.php');

		$wd='';
		$name='';
		$p='';
		$id = $_POST['id'];
	 	$name = $_POST['c_name'];
		$wd = $_POST['wd'];
		$p = $_POST['p'];
		if(!empty($name))
		{
		$sql = "UPDATE projects SET customer_name='$name' where id=$id";
		if($conn->query($sql)){
            echo "success";
			$_SESSION['success'] = 'Update Successfully';
		}
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
		}
		else if(!empty($wd))
		{
			$sql = "UPDATE projects SET work_detail='$wd' where id=$id";
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
			$sql = "UPDATE projects SET percentage=$p where id=$id";
			if($conn->query($sql)){
				echo "success";
				$_SESSION['success'] = 'Update Successfully';
			}
			else{
				$_SESSION['error'] = 'Something went wrong in updating member';
			}
		}

?>