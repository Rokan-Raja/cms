<div class="modal fade" id="start_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<center>
					<h4 class="modal-title" id="myModalLabel">Start the Work</h4>
				</center>
			</div>
			<form method="GET" action="form_team/start.php">
			<div class="modal-body">
				<p class="text-center">Are you sure you want to Start the Work</p>
				<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
				<button type="submit" name="start" value="start" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Yes</a>
			</div>
			</form>
		</div>
	</div>
</div>