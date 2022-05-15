<?php
$mat=$_POST['material'];
if ($mat=='mat')
{
?>
    	<div class="row" style="margin: 10px;">
				<a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add Material</a>
		</div>
    <table id="myTable" class="table table-striped table-bordered" style="word-wrap: none;">
                            <thead>
                                <th>Material ID</th>
                                <th>Material</th>
                                <th>Type</th>
                                <th>Measure</th>
                                <th>Price</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php
                                include_once('connection.php');
                                $sql = "SELECT * FROM material";
                                $query = $conn->query($sql);
                                while ($row = $query->fetch_assoc()) {
                                    echo
                                    "<tr>
									<td>" . $row['id'] . "</td>
									<td>" . $row['material_name'] . "</td>
									<td>" . $row['type'] . "</td>
									<td>" . $row['measure'] . "</td>
                                    <td>" . $row['price'] . "</td>
									<td>
										<a href='#edit_" . $row['id'] . "' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>
										<a href='#delete_" . $row['id'] . "' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a>
									</td>
								</tr>";      
                                include('edit_delete_modal.php');  
                            }
                                ?>
                            </tbody>
                        </table>
        <script src="jquery/jquery.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="datatable/jquery.dataTables.min.js"></script>
        <script src="datatable/dataTable.bootstrap.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#myTable').DataTable({
                    "scrollY": 230
                })
            });
        </script>
<?php
}
if($mat=='t_mat')
{
?>
<div class="row" style="margin: 10px;">
		<a href="#addnew2" data-toggle="modal" class="btn btn-success"><span class="glyphicon glyphicon-arrow-up"></span> Transfer Material</a>
</div>
    <table id="myTable" class="table table-striped table-bordered" style="word-wrap: none;">
                            <thead>
                                <th>Transfer ID</th>
                                <th>Project Id</th>
                                <th>Material Name</th>
                                <th>Measure</th>
                                <th>Quantity</th>
                                <th>Price</th>
                            </thead>
                            <tbody>
                                <?php
                                include_once('connection.php');
                                $sql = "SELECT * FROM t_material";
                                $query = $conn->query($sql);
                                while ($row = $query->fetch_assoc()) {
                                    echo
                                    "<tr>
									<td>" . $row['id'] . "</td>
                                    <td>" . $row['project_id'] . "</td>
									<td>" . $row['material_name'] ."</td>
									<td>" . $row['type'] . "</td>
									<td>" . $row['quantity'] . "</td>
                                    <td>" . $row['price'] . "</td>
                                    </tr>";
                            }
                                ?>
                            </tbody>
                        </table>
        <script src="jquery/jquery.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="datatable/jquery.dataTables.min.js"></script>
        <script src="datatable/dataTable.bootstrap.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#myTable').DataTable({
                    "scrollY": 230
                })
            });
        </script>

<?php
}
?>