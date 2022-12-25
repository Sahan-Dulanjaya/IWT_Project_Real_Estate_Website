<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','connect');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into cont03contact(name, email, subject) values(?, ?, ?)");
		$stmt->bind_param("sss", $name, $email, $subject);
		$execval = $stmt->execute();
		echo $execval;
		echo "Successfully send...";
		$stmt->close();
		$conn->close();
	}
?>