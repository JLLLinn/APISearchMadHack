<?php
	$servername = "23.229.176.164";
	$username = "jl";
	$password = "123qweasd";
	$dbname = "APISearch";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
?>