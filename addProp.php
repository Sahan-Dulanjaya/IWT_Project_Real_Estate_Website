<?php
	$msg = "";
	require 'config.php';

	if (isset($_POST['upload'])) {
		
	echo "test";
		$type = $_POST["propertyType"];
		$name = $_POST["propertyName"];
		$address = $_POST["address"];
		$price = $_POST["price"];
		
		// image
		$filename = $_FILES["uploadfile"]["name"];
		$tempname = $_FILES["uploadfile"]["tmp_name"];	
		$folder = "images/".$filename;
		
		$file = fopen("myFile.txt","r");
		$mID = fread($file,filesize("myFile.txt"));
		fclose($file);

		
		$no = "SELECT prName FROM lands_houses_apartments";
		$result = $conn -> query($no);
		
		if($result->num_rows > 0)
		{
			$count = $result -> num_rows;
		}
		else
		{
			$count = 0;
		}

		$pID = "P".$count + 1;
	
		$sql = "INSERT INTO lands_houses_apartments(p_ID, prType, prName, location, price, m_ID, listedDate, image) VALUES ('$pID','$type','$name','$address','$price','$mID','','$filename')";
		

		if(mysqli_query($conn, $sql)){
			
			if (move_uploaded_file($tempname, $folder)) {
				$msg = "Image uploaded successfully";
			}else{
				$msg = "Failed to upload image";
			}
			echo "<script> alert ('Records added successfully!!!')</script>";
			Header("location:lands(r_seller).php");
		}
		else{
			echo "<script> alert ('ERROR')</script>";
			Header("location:addProp.html");
			
		}
	
		mysqli_close($conn);
	}
?>