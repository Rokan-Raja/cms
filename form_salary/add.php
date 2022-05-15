<?php
	include_once('connection.php');
	session_start();
		
	$search="SELECT *FROM work_entry";
	$re=mysqli_query($conn,$search);
	while($row=mysqli_fetch_assoc($re))
	{
		$p_id=$row['project_id'];
		$w_id=$row['worker_id'];
		$id=$row['id'];
		$type=$row['emp_type'];
		$name=$row['emp_name'];
		
		$search2="SELECT *FROM salary WHERE worker_type='$type'";
		$re2=mysqli_query($conn,$search2);
		$row2=mysqli_fetch_assoc($re2);

		$search3="SELECT *FROM account WHERE project_id=$p_id";
		$re3=mysqli_query($conn,$search3);
		$row3=mysqli_fetch_assoc($re3);

		$salary=$row2['salary'];

		$salary_w=$row3['salary_wages'];

		$salary_w+=$salary;

		$add="INSERT INTO `salary_payment`(`worker_type`, `worker_id`,`project_id`, `name`, `salary`) VALUES('$type',$w_id,$p_id,'$name',$salary)";
		if(mysqli_query($conn,$add))
		{
		$change="UPDATE account SET salary_wages=$salary_w WHERE project_id=$p_id";
		if(mysqli_query($conn,$change))
		{
			$_SESSION['success'] = 'Salary Paid Successfully';
			$trunk="TRUNCATE work_entry";
			mysqli_query($conn,$trunk);
		}
		}
		else
		{
			$_SESSION['success'] = 'Salary Payment Failed';
		}
	}

?>