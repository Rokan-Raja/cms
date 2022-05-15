<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<center>
					<h4 class="modal-title" id="myModalLabel">Edit Contractor</h4>
				</center>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<form method="POST" action="form_contractor/edit.php">
						<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
						<div class="row form-group">
							<div class="col-sm-4">
								<label class="control-label modal-label">Contractor Name:</label>
							</div>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name" value="<?php echo $row['con_name']; ?>">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-sm-4">
								<label class="control-label modal-label">Phone:</label>
							</div>
							<div class="col-sm-8">
								<input type="text" class="form-control" pattern="[6789][0-9]{9}" minlength="10" maxlength="10" name="ph" value="<?php echo $row['phone']; ?>">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-sm-4">
								<label class="control-label modal-label">email:</label>
							</div>
							<div class="col-sm-8">
								<input type="email" class="form-control" name="mail" value="<?php echo $row['email']; ?>">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-sm-4">
								<label class="control-label modal-label">Address:</label>
							</div>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="ad" value="<?php echo $row['con_address']; ?>">
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
								<input type="text" class="form-control" maxlength="2" name="ex" value="<?php echo $row['experience']; ?>">
							</div>
						</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
				<button type="submit" id="edit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
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
					<h4 class="modal-title" id="myModalLabel">Delete Contractor</h4>
				</center>
			</div>
			<div class="modal-body">
				<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['con_name']; ?></h2>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
				<a href="form_contractor/delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
			</div>

		</div>
	</div>
</div>