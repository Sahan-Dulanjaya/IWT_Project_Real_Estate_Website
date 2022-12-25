<?php
	$msg = "";
	require 'config.php';

	if (isset($_POST['upload'])) {
		
	
		$type = $_POST["gigType"];
		$name = $_POST["gigName"];
		$description = $_POST["gigDes"];
		$price = $_POST["startingprice"];
		
		// image
		$filename = $_FILES["uploadfile"]["name"];
		$tempname = $_FILES["uploadfile"]["tmp_name"];	
		$folder = "images/".$filename;
		
		$file = fopen("myFile.txt","r");
		$mID = fread($file,filesize("myFile.txt"));
		fclose($file);

		
		$no = "SELECT gname FROM add_a_gig";
		$result = $conn -> query($no);
		
		if($result->num_rows > 0)
		{
			$count = $result -> num_rows;
		}
		else
		{
			$count = 0;
		}

		$gID = "G".$count + 1;
	
		$sql = "INSERT INTO add_a_gig(gID, gtype, gname, mID, gdescription, startingPrice, image) VALUES ('$gID','$type','$name','$mID','$description','$price','$filename')";
		

		if(mysqli_query($conn, $sql)){
			
			if (move_uploaded_file($tempname, $folder)) {
				$msg = "Image uploaded successfully";
			}else{
				$msg = "Failed to upload image";
			}
			echo "<script> alert ('Records added successfully!!!')</script>";
		}
		else{
			echo "<script> alert ('ERROR')</script>";
		}
	
		mysqli_close($conn);
	}
?>