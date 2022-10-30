<?php
	$conn=mysqli_connect("localhost", "root", "", "course material archive");
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>