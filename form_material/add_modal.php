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
					<form method="POST" id="frm" action="form_material/add.php">
						<div class="row form-group">
							<div class="col-sm-4">
								<label class="control-label modal-label">Material Name:</label>
							</div>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name" required>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-sm-4">
								<label class="control-label modal-label">Measure:</label>
							</div>
						<div class="col-sm-8">
						  <select class="form-control" required name="measure" id="measure">
							<option value="0">--SELECT--</option>
							<option value="Unit">Unit</option>
							<option value="Pack">Pack</option>
							<option value="Liter">Liter</option>
							<option value="Piece">Piece</option>
							<option value="Feet">Feet</option>
						  </select>
						</div>
						</div>
						<div class="row form-group">
							<div class="col-sm-4">
								<label class="control-label modal-label">Type:</label>
							</div>
							<div class="col-sm-8">
						  <select class="form-control" required name="type" id="type">
							<option value="0">--SELECT--</option>
							<option value="Tools">Tools</option>
							<option value="Raw_Material">Raw Material</option>
						  </select>
						</div>
						</div>
						<div class="row form-group">
							<div class="col-sm-4">
								<label class="control-label modal-label">Price:</label>
							</div>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="p" required>
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