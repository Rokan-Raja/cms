<?php
session_start();
if(!(isset($_SESSION['admin']) || isset($_SESSION['contractor'])))
{
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Construction Management</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link href='boxicons/css/boxicons.min.css' rel='stylesheet'>
	<link href='boxicons/customs/design.css' rel='stylesheet'>
	<script type='text/javascript' src='./boxicons/customs/nav.js'></script>
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
	<?php
	if(isset($_SESSION['contractor']))
	{
	?>
		<style>
		.height10{
			height:10px;
		}
		.mtop10{
			margin-top:10px;
		}
		.modal-label{
			position:relative;
			top:7px
		}
		th,td
		{
			white-space: nowrap;
		}
		.home{
			display: none;
		}
		.acc{
			display: none;
		}
		.report{
            display: none;
        }
        .user{
            display: none;
        }
		.salary{
			display: none;
		}
	</style>
 <?php
}
?>
</head>
<body oncontextmenu='return false' class='snippet-body'>
	<body id="body-pd">
		<header class="header" id="header">
			<div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
			<div class="header_img"> <img src="administrator.bmp" alt="user"> </div>
		</header>
		<div class="l-navbar" id="nav-bar">
			<nav class="nav">
				<div> <a href="#" class="nav_logo"> <i class='bx bx-building-house nav_logo-icon'></i> <span style="font-size: 14px;" class="nav_logo-name">AR Builders</span> </a>
				<div class="nav_list">
						<a href="home.php" class="nav_link home"> <i class='bx bx-archive nav_icon'></i> <span class="nav_name">Project</span> </a>
						<a href="user.php" class="nav_link user active"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Users</span> </a>
						<a href="emp.php" class="nav_link emp"> <i class='bx bx-user-circle nav_icon'></i> <span class="nav_name">Employees</span> </a>
						<a href="contract.php" class="nav_link con"> <i class='bx bx-user-voice nav_icon'></i> <span class="nav_name">Contractors</span> </a>
						<a href="acc.php" class="nav_link acc"> <i class='bx bx-wallet nav_icon'></i> <span class="nav_name">Accounts</span> </a>
						<a href="team.php" class="nav_link team"> <i class='bx bx-group nav_icon'></i> <span class="nav_name">Team</span> </a>
						<a href="material.php" class="nav_link material"> <i class='bx bx-briefcase nav_icon'></i> <span class="nav_name">RawMaterial</span></a>
						<a href="salary.php" class="nav_link salary"> <i class='bx bx-credit-card nav_icon'></i> <span class="nav_name">Salary</span> </a>
						<a href="report.php" class="nav_link report"> <i class='bx bx-file nav_icon'></i> <span class="nav_name">Reports</span> </a>
						<a href="work_entry.php" class="nav_link entry"> <i class='bx bx-receipt nav_icon'></i> <span class="nav_name">Work Entry</span> </a>
					</div>
					
				</div> <a href="index.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Logout</span> </a>
			</nav>
		</div>
<div class="container-fluid" style="font-size: 14px;">
	<h1 class="page-header text-center">User Details:</h1><br><br>
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<div class="row">
			<?php
				if(isset($_SESSION['error'])){
					echo
					"
					<div class='alert alert-danger text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['error']."
					</div>
					";
					unset($_SESSION['error']);
				}
				if(isset($_SESSION['success'])){
					echo
					"
					<div class='alert alert-success text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['success']."
					</div>
					";
					unset($_SESSION['success']);
				}
			?>
			</div>
			<div class="row">
				<a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add User</a>
			</div>
			<div class="height10">
			</div>
			<br>
			<div class="row">
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<th>ID</th>
						<th>Username</th>
						<th>Email</th>
						<th>Work Location</th>
						<th>Phone</th>
						<th>Action</th>
					</thead>
					<tbody>
						<?php
							include_once('form_user/connection.php');
							$sql = "SELECT * FROM adduser";
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
								echo 
								"<tr>
									<td>".$row['id']."</td>
									<td>".$row['username']."</td>
									<td>".$row['email']."</td>
									<td>".$row['workplace']."</td>
									<td>".$row['phone']."</td>
									<td>
										<a href='#edit_".$row['id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>
										<a href='#delete_".$row['id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a>
									</td>
								</tr>";
								include('form_user/edit_delete_modal.php');
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php include('form_user/add_modal.php') ?>
<script src="jquery/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>

<script>
	
$(document).ready(function(){
    $('#myTable').DataTable({
		scrollY:250
	})
});

</script>
</body>
</html>