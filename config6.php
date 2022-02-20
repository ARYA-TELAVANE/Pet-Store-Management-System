<?php
	$conn = new mysqli("localhost","root",);
	mysqli_select_db($conn,'form');
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>