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
					<form method="POST" action="form_team/edit.php">
						<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
						<div class="row form-group">
							<div class="col-sm-4">
								<label class="control-label modal-label">Project ID:</label>
							</div>
							<div class="col-sm-8">
								<select class="form-control" name="project_id">
								<?php
									include('connection.php');
									$sql="SELECT * FROM project";
									$query=mysqli_query($conn,$sql);
								?>
									<option value="0">--SELECT--</option>
									<?php
									while($row=mysqli_fetch_assoc($query))
									{
									?>
									<option value=<?php echo $row['id']; ?>><?php echo $row['id']; ?></option>
									<?php
									}
									?>
								</select>
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
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
				<button type="submit" id="edit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</button>
					</form>
			</div>

		</div>
	</div>
</div