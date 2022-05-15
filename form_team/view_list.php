<div class="modal fade" id="view_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<center>
					<h4 class="modal-title" id="myModalLabel">Team Employee's Details</h4>
				</center>
			</div>
			<div class="modal-body containter">
				<?php
				$id=$row['id'];
				$date=date('m.d.Y');
				$sql1 = "SELECT *FROM work_entry WHERE team_id=$id AND date='$date' AND emp_type!='Contractor'";
				$search = mysqli_query($conn, $sql1);
				while ($rows = mysqli_fetch_assoc($search)) {
				?>
				<div class="card">
					<div class="card-body" style="text-transform: capitalize;">
					<pre>Employee ID   : <?php echo $rows['worker_id'] ?><br>Employee Name : <?php echo $rows['emp_name'] ?>
					</pre>
					</div>
				</div>
				<?php
				}
				?>
			</div>
		</div>
	</div>
</div>