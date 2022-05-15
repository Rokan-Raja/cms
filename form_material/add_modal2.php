<!-- Add New -->
<div class="modal fade" id="addnew2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
					<form method="POST" id="frm" action="form_material/add2.php">
					<div class="row form-group">
							<div class="col-sm-4">
								<label class="control-label modal-label">Project ID:</label>
							</div>
							<div class="col-sm-8">
							<select class="form-control" name="pd" id="pd">
									<option value="0">--SELECT--</option>
									<?php
									include('connection.php');
									$sql2 = "SELECT * FROM projects WHERE status='Running'";
									$query1 = $conn->query($sql2);
									while ($rows = $query1->fetch_assoc()) {
									?>
									<option value="<?php echo $rows['project_id'] ?>"><?php echo $rows['project_id'] ?></option>
									<?php
									}
									?>
								  </select>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-sm-4">
								<label class="control-label modal-label">Material Name:</label>
							</div>
							<div class="col-sm-8">
							<select class="form-control" name="name" id="name">
									<option value="0">--SELECT--</option>
									<?php
									$sql2 = "SELECT * FROM material";
									$query1 = $conn->query($sql2);
									while ($rows = $query1->fetch_assoc()) {
									?>
									<option value="<?php echo $rows['material_name'] ?>"><?php echo $rows['material_name'] ?></option>
									<?php
									}
									?>
								  </select>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-sm-4">
								<label class="control-label modal-label">Quantity:</label>
							</div>
							<div class="col-sm-8">
								<input type="number" class="form-control" name="q" required>
							</div>
						</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
				<button type="submit" id="add" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Transfer</a>
			</form>
			</div>
		</div>
	</div>
</div>