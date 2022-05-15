<?php
	$conn = new mysqli('localhost', 'root', '', 'cms');
	if($conn->connect_error){
	   die("Connection failed: " . $conn->connect_error);
	}
?>