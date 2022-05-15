<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<center>
					<h4 class="modal-title" id="myModalLabel">Edit Employee</h4>
				</center>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<form method="POST" action="form_employee/edit.php">
						<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
						<input type="hidden" class="form-control" name="con1_id" value="<?php echo $row['con_id']; ?>">
						<div class="row form-group">
							<div class="col-sm-4">
								<label class="control-label modal-label">Contractor ID:</label>
							</div>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="con_id" value="<?php echo $row['con_id']; ?>">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-sm-4">
								<label class="control-label modal-label">Team ID:</label>
							</div>
							<div class="col-sm-8">
								<select class="form-control" name="team_id" required>
									<option value="0">--select--</option>
									<?php
									$sql1="SELECT * FROM team WHERE con_id=".$row['con_id']." AND status!='Disabled'";
									$query1=mysqli_query($conn,$sql1);
									while($rows=mysqli_fetch_assoc($query1))
									{
									?>
									<option value=<?php echo $rows['id']; ?>><?php echo $rows['id']; ?></option>
									<?php
									}
									?>
								</select>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-sm-4">
								<label class="control-label modal-label">Employee Name:</label>
							</div>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name" value="<?php echo $row['emp_name']; ?>">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-sm-4">
								<label class="control-label modal-label">Phone:</label>
							</div>
							<div class="col-sm-8">
								<input type="text" class="form-control" pattern="[6789][0-9]{9}" minlength="10" maxlength="10" name="ph" value="<?php echo $row['emp_phone']; ?>">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-sm-4">
								<label class="control-label modal-label">Address:</label>
							</div>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="ad" value="<?php echo $row['emp_address']; ?>">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-sm-4">
								<label class="control-label modal-label">Status:</label>
							</div>
							<div class="col-sm-8">
								  <select class="form-control" name="st">
									<option value="Active">Active</option>
									<option value="Inactive">Inactive</option>
								  </select>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-sm-4">
								<label class="control-label modal-label">Experience:</label>
							</div>
							<div class="col-sm-8">
								<input type="text" class="form-control" maxlength="2"  name="ex" value="<?php echo $row['experience']; ?>">
							</div>
						</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
				<button type="submit" id="edit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</button>
					</form>
			</div>

		</div>
	</div>
</div>

<div class="modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<center>
					<h4 class="modal-title" id="myModalLabel">Delete Employee</h4>
				</center>
			</div>
			<form method="GET" action="form_employee/delete.php">
			<input type="hidden" class="form-control" name="con_id" value="<?php echo $row['con_id']; ?>">
			<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
			<div class="modal-body">
				<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['emp_name']; ?></h2>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
				<button type="submit" name="delete" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
			</div>
			</form>
		</div>
	</div>
</div>