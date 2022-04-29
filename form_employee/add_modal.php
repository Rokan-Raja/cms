<!-- Add New -->
<?php
include('connection.php');
$sql="SELECT * FROM contractor";
$query=mysqli_query($conn,$sql);
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
					<form method="POST" id="frm" action="form_employee/add.php">
					<div class="row form-group">
							<div class="col-sm-4">
								<label class="control-label modal-label">Contractor ID:</label>
							</div>
							<div class="col-sm-8">
								<select class="form-control" name="con_id" required>
									<option value="0">--select--</option>
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
								<label class="control-label modal-label">Employee Name:</label>
							</div>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name" required>
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
								<label class="control-label modal-label">Employee Type:</label>
							</div>
							<div class="col-sm-8">
								<select class="form-control" name="et" required>
									<option value="Mason">Mason</option>
									<option value="Labour">Labour</option>
									<option value="Barbender">Barbender</option>
									<option value="Painter">Painter</option>
									<option value="Plumber">Plumber</option>
									<option value="Electrician">Electrician</option>
									<option value="Welder">Welder</option>
									<option value="Carpender">Carpender</option>
								</select>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-sm-4">
								<label class="control-label modal-label">Experience:</label>
							</div>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="ex" required>
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