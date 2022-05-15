<?php
session_start();
include("../form_employee/connection.php");
$id=$_SESSION['p_id'];
$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constrution Management</title>
    <link rel="stylesheet" href="..\bootstrap\css\bootstrap.css">
</head>
<style>
.disclaimer
{
    display:none;
}
</style>
<body>';

$html .= '<center><h1 style="color:darkred">Employee Details</h1></center><br>
<center>
    <table border="1" style="border-collapse:collapse;" cellpadding="10px" width="100%">
    <tr>
    <th>Employee Id</th>
    <th>Employee Name</th>
    <th>Employee Type</th>
    <th>Date</th>
    </tr>';

    $check = "select *from t_work_entry where project_id=$id";
    $query = mysqli_query($conn, $check);
    while ($row = mysqli_fetch_assoc($query)) {
        $html .= '
    <tr align="center">
    <td>' . $row['worker_id'] . '</td>
    <td style="text-transform:uppercase">' . $row['emp_name'] . '</td>
    <td>' . $row['emp_type'] . '</td>
    <td>' . $row['date'] . '</td>
    </tr>';
    }
$html .= '</table>
</center>
</div>
</body>
</html>';
?>
 <?php

$pdf ="Project".$id."Employee";

require_once '../dompdf/autoload.inc.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$dompdf->loadHtml($html);

$dompdf->setPaper('A4', 'potrait');

$dompdf->render();

$dompdf->stream($pdf, array("Attachment" => 1));

?> 