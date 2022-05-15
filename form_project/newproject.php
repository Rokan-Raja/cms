<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="js/alert.css">
    <script src="js/alert.js"></script>
</head>
<body>
<div class="row">
<table id="myTable" class="table table-bordered table-striped">
    <thead>
        <th>Project ID</th>
        <th>Customer name</th>
        <th>Status</th>
        <th>Action</th>
    </thead>
    <tbody>
        <?php
        include_once('connection.php');
        $st=$_POST['status'];
        $sql = "SELECT * FROM projects WHERE status='$st'";
        $query = $conn->query($sql);
        while ($row = $query->fetch_assoc()) {
            echo
            "<tr>
            <td>" . $row['project_id'] . "</td>
            <td>" . $row['customer_name'] . "</td>
            <td>" . $row['status'] . "</td>
            <td>
               <a href='#start_".$row['id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-play'></span> Start</a>
            </td>
        </tr>";
        include('start_c.php');
        }
        ?>
    </tbody>
</table>
</div>
</div>
</div>
</div>

<script src="jquery/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>

<script>
$(document).ready(function() {
$('#myTable').DataTable();
});
</script> 

</body>
</html>