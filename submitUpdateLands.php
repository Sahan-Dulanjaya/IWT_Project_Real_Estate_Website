<?php
	require 'config.php';
	
	$id = $_GET['id'];
	$type = $_POST["propertyType"];
	$name = $_POST["propertyName"];
	$address = $_POST["address"];
	$price = $_POST["price"];
	
	$sql = "UPDATE lands_houses_apartments SET prType='$type',prName='$name',location='$address',price='$price' WHERE p_ID = '$id'";
	
	if(mysqli_query($conn, $sql)){
		echo "<script> alert ('Records update successfully!!!')</script>";
	}
	else{
		echo "<script> alert ('ERROR')</script>";
	}
		
?>