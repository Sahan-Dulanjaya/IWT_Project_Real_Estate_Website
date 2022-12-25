<!DOCTYPE html>
<html>	
	<?php
	require 'config.php';
	
	$no = "SELECT pName FROM cosiderationlist";
	$result1 = $conn -> query($no);
		
	if($result1->num_rows > 0)
	{
		$count = $result1 -> num_rows;
	}
	else
	{
		$count = 0;
	}

	$clID = "cl".$count + 1;
	
	$id = $_GET['id'];
	$sql= "SELECT * FROM lands_houses_apartments WHERE p_ID = '$id'";
	
	$file = fopen("myFile.txt","r");
	$mID = fread($file,filesize("myFile.txt"));
	fclose($file);

	$result=$conn->query($sql);
	
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
				
				$type = $row['prType'];
				$name = $row['prName'];
				$photo = $row['image'];
				$location = $row['location'];
				$price = $row['price'];
				
				$sql = "INSERT INTO cosiderationlist(cl_ID, p_ID, m_ID, pType, pName, photo, location, price) VALUES ('$clID', '$id', '$mID', '$type', '$name', '$photo','$location','$price')";
		
		if(mysqli_query($conn, $sql)){
			echo "<script> alert ('Records added successfully!!!')</script>";
		}
		else{
			echo "<script> alert ('ERROR')</script>";
		}
		}
	}
	else{
		echo "no results";
	}
	
	?>
</html>


