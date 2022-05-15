<!-- Add New -->
<?php
include('connection.php');
$sql = "SELECT * FROM contractor where status='Active'";
$query = mysqli_query($conn, $sql);
?>
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
					<form method="POST" id="frm" action="form_team/add.php">
						<div class="row form-group">
							<div class="col-sm-4">
								<label class="control-label modal-label">Contractor ID:</label>
							</div>
							<div class="col-sm-8">
								<select class="form-control" name="con_id" required>
									<option value="0">--select--</option>
									<?php
									while ($row = mysqli_fetch_assoc($query)) {
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
								<label class="control-label modal-label">Project ID:</label>
							</div>
							<div class="col-sm-8">
								<select class="form-control" name="project_id" required>
									<option value="0">--select--</option>
									<?php
									$sql1 = "SELECT * FROM projects where status='Running'";
									$query1 = mysqli_query($conn, $sql1);
									while ($rows = mysqli_fetch_assoc($query1)) {
									?>
										<option value=<?php echo $rows['project_id']; ?>><?php echo $rows['project_id']; ?></option>
									<?php
									}
									?>
								</select>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
							<button type="submit" id="add" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
						</div>
					</form>
				</div>
			</div>
		</div>

	</div>
</div>
</div>