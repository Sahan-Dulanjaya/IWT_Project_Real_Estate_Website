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
	
		$sql = "INSERT INTO buyer(m_ID, type, firstname, lastname, email, pw, address, district, province, tpNo, dob) VALUES ('$mID','buyer','$fname','$lname','$email','$pw','$address','$district','$province','$tpno','$dob')";
		
		if(mysqli_query($conn, $sql)){
			
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