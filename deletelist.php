<?php
	require 'config.php';
	
	$id = $_GET['id'];
	
	$sql = "DELETE FROM cosiderationlist WHERE cl_ID='$id'";
	
	if(mysqli_query($conn, $sql)){
		echo "<script> alert ('Records Delete successfully!!!')</script>";
	}
	else{
		echo "<script> alert ('ERROR')</script>";
	}
		
?>