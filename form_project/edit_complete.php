<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<center>
					<h4 class="modal-title" id="myModalLabel">Edit Work Details</h4>
				</center>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<form id="frm">
						<input type="hidden" class="form-control" id="id" name="id" value="<?php echo $row['id']; ?>">
						<div class="row form-group">
							<div class="col-sm-4">
								<label class="control-label modal-label">Customer Name:</label>
							</div>
							<div class="col-sm-8">
								<input type="text" class="form-control" onchange="changeName(this.value,<?php echo $row['id'];?>)" id="name" name="name" value="<?php echo $row['customer_name']; ?>">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-sm-4">
								<label class="control-label modal-label">Work_detail:</label>
							</div>
							<div class="col-sm-8">
								<input type="text" class="form-control" onchange="changeDetail(this.value,<?php echo $row['id'];?>)" id="wd" name="wd" value="<?php echo $row['work_detail']; ?>">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-sm-4">
								<label class="control-label modal-label">Precentage:</label>
							</div>
							<div class="col-sm-8">
								<input type="text" class="form-control" onchange="changePer(this.value,<?php echo $row['id'];?>)" id="p" name="p" value="<?php echo $row['percentage']; ?>">
							</div>
						</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
				<button type="button" id="edit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
			</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="complete_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<center>
					<h4 class="modal-title" id="myModalLabel">Complete Project</h4>
				</center>
			</div>
			<div class="modal-body">
				<p class="text-center">Are you sure you want to Complete the Project</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
				<a href="form_project/complete.php?id=<?php echo $row['id']; ?>" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Yes</a>
</div>

		</div>
	</div>
</div>
<script>
function changeName(name,id1)
{
	$.ajax({
		type: "post",
		url: "form_project/edit.php",
		data: {c_name:name,id:id1},
		success: function (response) {
			
		}
	});
}

function changePer(p1,id1)
{
	$.ajax({
		type: "post",
		url: "form_project/edit.php",
		data: {p:p1,id:id1},
		success: function (response) {
			
		}
	});
}

function changeDetail(wd1,id1)
{
	$.ajax({
		type: "post",
		url: "form_project/edit.php",
		data: {wd:wd1,id:id1},
		success: function (response) {
			
		}
	});
}
$('#edit').click(function () { 
	window.location.reload(true);
});
</script>