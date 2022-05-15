<?php
session_start();
if (!(isset($_SESSION['admin']) || isset($_SESSION['contractor']))) {
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
	if (isset($_SESSION['contractor'])) {
	?>
		<style>
			.height10 {
				height: 10px;
			}

			.mtop10 {
				margin-top: 10px;
			}

			.modal-label {
				position: relative;
				top: 7px
			}

			th,
			td {
				white-space: nowrap;
			}

			.home {
				display: none;
			}

			.acc {
				display: none;
			}

			.report {
				display: none;
			}

			.user {
				display: none;
			}

			.salary {
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
						<a href="user.php" class="nav_link user"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Users</span> </a>
						<a href="emp.php" class="nav_link emp"> <i class='bx bx-user-circle nav_icon'></i> <span class="nav_name">Employees</span> </a>
						<a href="contract.php" class="nav_link con"> <i class='bx bx-user-voice nav_icon'></i> <span class="nav_name">Contractors</span> </a>
						<a href="acc.php" class="nav_link acc"> <i class='bx bx-wallet nav_icon'></i> <span class="nav_name">Accounts</span> </a>
						<a href="team.php" class="nav_link team"> <i class='bx bx-group nav_icon'></i> <span class="nav_name">Team</span> </a>
						<a href="material.php" class="nav_link material"> <i class='bx bx-briefcase nav_icon'></i> <span class="nav_name">RawMaterial</span></a>
						<a href="salary.php" class="nav_link salary"> <i class='bx bx-credit-card nav_icon'></i> <span class="nav_name">Salary</span> </a>
						<a href="report.php" class="nav_link report active"> <i class='bx bx-file nav_icon'></i> <span class="nav_name">Reports</span> </a>
						<a href="work_entry.php" class="nav_link entry"> <i class='bx bx-receipt nav_icon'></i> <span class="nav_name">Work Entry</span> </a>
					</div>

				</div> <a href="index.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Logout</span> </a>
			</nav>
		</div>
		<div class="container-fluid" style="font-size: 14px;">
			<h1 class="page-header text-center">Reports</h1><br><br>
			<form id="frm">
				<div class="col-md-6 mb-3">
					<label for="" class="form-label">Project ID</label>
					<select class="form-control" name="id" id="id">
						<option value="0">--select--</option>
						<?php
						include('form_project/connection.php');
						$sql1 = "SELECT * FROM projects";
						$query1 = mysqli_query($conn, $sql1);
						while ($rows = mysqli_fetch_assoc($query1)) {
						?>
							<option value=<?php echo $rows['project_id']; ?>><?php echo $rows['project_id']; ?></option>
						<?php
						}
						?>
					</select>
				</div>
				<div class="col-md-6">
					<label for="" class="form-label">Report Categories</label>
					<select class="form-control" name="re" id="re">
						<option value="0">--select--</option>
						<option value="emp">Employee</option>
						<option value="sal">Salary</option>
						<option value="material">Transfer Material</option>
						<option value="team">Team</option>
					</select><br><br>
				</div>
				<button style="margin-left: 45%;" type="button" id="print" class="btn btn-primary"><span class="glyphicon glyphicon-print"> Print</span></button>
			</form>
		</div>
		<script src="jquery/jquery.js"></script>
		<script>
			$('#print').click(function () { 
				var id1=$('#id').val();
				var re2=$('#re').val();
				if(id1!=0 && re2!=0)	
				{
					$.ajax({
						type: "post",
						url: "form_report/report_create.php",
						data: {id:id1,re:re2},
						success: function (data) {
							if(data=='emp')
							{
							window.location.href='form_report/report_emp.php';
							}
							if(data=='material')
							{
							window.location.href='form_report/report_material.php';
							}
							if(data=='salary')
							{
							window.location.href='form_report/report_salary.php';
							}
							if(data=='team')
							{
							window.location.href='form_report/report_team.php';
							}
						}
					});
				}	
				else
				{
					alert('select the two options');
				}		
			});
		</script>
	</body>

</html>