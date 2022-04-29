<div class="modal fade" id="start_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<center>
					<h4 class="modal-title" id="myModalLabel">Start Project</h4>
				</center>
			</div>
			<div class="modal-body">
				<p class="text-center">Are you sure you want to Start the Project</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
				<a href="form_project/start.php?id=<?php echo $row['id']; ?>" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Yes</a>
			</div>

		</div>
	</div>
</div>