<?php
	session_start();
	include_once('connection.php');
	if(isset($_POST['add'])){
		
		$name = $_POST['name'];
		$q= $_POST['q'];
        $p_id = $_POST['pd'];

        $sql2 = "SELECT * FROM material WHERE material_name='$name'";
        $query1 = $conn->query($sql2);
        while ($rows = $query1->fetch_assoc()) {
           $type=$rows['measure'];
           $price=$rows['price'];
        }
        $sql2 = "SELECT * FROM account WHERE project_id=$p_id";
        $query1 = $conn->query($sql2);
        while ($rows = $query1->fetch_assoc()) {
           $tb=$rows['material_wages'];
        }
        $date=date('m.d.Y');
        $tp=$price*$q;
        $tb=$tb+$tp;
        $change="UPDATE account SET material_wages=$tb WHERE project_id=$p_id";
        mysqli_query($conn,$change);

		$sql = "INSERT INTO `t_material`(`project_id`, `material_name`, `type`, `quantity`, `price`,`date`) VALUES($p_id,'$name','$type',$q,$tp,'$date')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Added Successfully';
		}
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}
    header('location: ../material.php');
?>