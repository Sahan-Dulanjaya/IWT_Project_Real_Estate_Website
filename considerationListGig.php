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
	$sql= "SELECT * FROM add_a_gig WHERE gID = '$id'";
	$result=$conn->query($sql);
	
	$file = fopen("myFile.txt","r");
	$mID = fread($file,filesize("myFile.txt"));
	fclose($file);
	
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
				
				$type = $row['gtype'];
				$name = $row['gname'];
				$photo = $row['image'];
				$location = $row['gdescription'];
				$price = $row['StartingPrice'];

				
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
