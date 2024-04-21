<?php
	$conn = new mysqli("localhost:3307","root","","burgerdb");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>