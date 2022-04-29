<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<center>
					<h4 class="modal-title" id="myModalLabel">Add New</h4>
				</center>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<form method="POST" id="frm" action="form_user/add.php">
						<div class="row form-group">
							<div class="col-sm-4">
								<label class="control-label modal-label">Username:</label>
							</div>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name" required>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-sm-4">
								<label class="control-label modal-label">Email:</label>
							</div>
							<div class="col-sm-8">
								<input type="email" class="form-control" name="mail" required>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-sm-4">
								<label class="control-label modal-label">Phone:</label>
							</div>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="ph" required>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-sm-4">
								<label class="control-label modal-label">Address:</label>
							</div>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="ad" required>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-sm-4">
								<label class="control-label modal-label">Work Location:</label>
							</div>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="work" required>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-sm-4">
								<label class="control-label modal-label">Square Feet:</label>
							</div>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="sq" required>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-sm-4">
								<label class="control-label modal-label">No of Floors</label>
							</div>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="fl" required>
							</div>
						</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
				<button type="submit" id="add" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
					</form>
			</div>

		</div>
	</div>
</div>