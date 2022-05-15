<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<center>
					<h4 class="modal-title" id="myModalLabel">Edit Material</h4>
				</center>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<form id="frm1">
						<input type="hidden" class="form-control" name="id" id="id" value="<?php echo $row['id']; ?>">
						<div class="row form-group">
							<div class="col-sm-4">
								<label class="control-label modal-label">Material Name:</label>
							</div>
							<div class="col-sm-8">
								<input type="text" class="form-control" onchange="changeName(this.value,<?php echo $row['id'];?>)" id="name" name="name" value="<?php echo $row['material_name']; ?>">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-sm-4">
								<label class="control-label modal-label">Measure:</label>
							</div>
						<div class="col-sm-8">
						  <select class="form-control" onchange="changeMeasure(this.value,<?php echo $row['id'];?>)" required name="measure" id="measure">
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
						  <select class="form-control" onchange="changeType(this.value,<?php echo $row['id'];?>)" required name="type" id="type">
							<option value="0">--SELECT--</option>
							<option value="Tools">Tools</option>
							<option value="Raw_Material">Raw Material</option>
						  </select>
						</div>
						</div>
						<div class="row form-group">
							<div class="col-sm-4">
								<label class="control-label modal-label">Price</label>
							</div>
							<div class="col-sm-8">
								<input type="text" class="form-control" onchange="changePrice(this.value,<?php echo $row['id'];?>)" id="p" name="p" value="<?php echo $row['price']; ?>">
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

<div class="modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<center>
					<h4 class="modal-title" id="myModalLabel">Delete Material</h4>
				</center>
			</div>
			<div class="modal-body">
				<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['material_name']; ?></h2>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
				<a href="form_material/delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
			</div>

		</div>
	</div>
</div>
<script>
function changeName(c_name,id1)
{
	$.ajax({
		type: "post",
		url: "form_material/edit.php",
		data: {name:c_name,id:id1},
		success: function (response) {
			
		}
	});
}

function changePrice(p1,id1)
{
	$.ajax({
		type: "post",
		url: "form_material/edit.php",
		data: {p:p1,id:id1},
		success: function (response) {
		
		}
	});
}

function changeType(type1,id1)
{
	$.ajax({
		type: "post",
		url: "form_material/edit.php",
		data: {type:type1,id:id1},
		success: function (response) {
			
		}
	});
}

function changeMeasure(m1,id1)
{
	$.ajax({
		type: "post",
		url: "form_material/edit.php",
		data: {measure:m1,id:id1},
		success: function (response) {

		}
	});
}
$('#edit').click(function () { 
	window.location.reload(true);
});
        </script>