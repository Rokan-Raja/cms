<!-- Edit -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<center>
					<h4 class="modal-title" id="myModalLabel">Edit Employee</h4>
				</center>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<form id="frm">
						<?php
						$sql1="SELECT *FROM salary";
						$query1=mysqli_query($conn,$sql1);
						while($rows=mysqli_fetch_assoc($query1))
						{
						?>
						<div class="row form-group">
							<div class="col-sm-4">
								<label class="control-label modal-label"><?php echo $rows['worker_type'] ?>:</label>
							</div>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="salary" onchange="changeSalary(this.value,<?php echo $rows['id'];?>)" value="<?php echo $rows['salary']; ?>">
							</div>
						</div>
						<?php
						}
						?>
				</div>
			</div>
			</form>
			</div>
		</div>
	</div>
</div>
<script>
	function changeSalary(salary,id)
	{
		var xhr = new XMLHttpRequest();
		var url='form_salary/edit.php?id='+id+'&salary='+salary+'';
		xhr.open("GET",url,true);
		xhr.onreadystatechange=function(){
			if(this.readyState==4 && this.status==200){
				window.location.href="salary.php";
			}
		}
		xhr.send();
	}
</script>