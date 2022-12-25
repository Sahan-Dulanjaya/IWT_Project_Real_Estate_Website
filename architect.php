<?php
	$msg = "";
	require 'config.php';

	if (isset($_POST['upload'])) {
		
		$fname = $_POST["firstname"];
		$lname = $_POST["lastname"];
		$email = $_POST["email"];
		$pw = $_POST["password"];
		$address = $_POST["address"];
		$district = $_POST["district"];
		$province = $_POST["province"];
		$tpno = $_POST["number"];
		$dob = $_POST["birthday"];
		$nic = $_POST["nic"];

		
		
		// image
		$filename = $_FILES["file"]["name"];
		$tempname = $_FILES["file"]["tmp_name"];	
		$folder = "images/".$filename;
		
		
		$no = "SELECT firstname FROM buyer";
		$result = $conn -> query($no);
		
		if($result->num_rows > 0)
		{
			$count = $result -> num_rows;
		}
		else
		{
			$count = 0;
		}

		$mID = "m".$count + 1;
	
		$sql = "INSERT INTO buyer(m_ID, type, firstname, lastname, email, pw, address, district, province, tpNo, dob, cv, NIC) VALUES ('$mID','architect','$fname','$lname','$email','$pw','$address','$district','$province','$tpno','$dob','$filename','$nic')";
		
		if(mysqli_query($conn, $sql)){
			
			if (move_uploaded_file($tempname, $folder)) {
				$msg = "Image uploaded successfully";
			}else{
				$msg = "Failed to upload image";
			}
			echo "<script> alert ('Records added successfully!!!')</script>";
			header("location:login.html");
		}
		else{
			echo "<script> alert ('ERROR')</script>";
			header("location:selection.html");
		}
	
		mysqli_close($conn);
	}
?>