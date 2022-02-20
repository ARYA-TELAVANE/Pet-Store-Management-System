<?php
	$conn = new mysqli("localhost","root",);
	mysqli_select_db($conn,'cart_system_pet1');
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>