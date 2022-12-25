<?php
  $servername = "localhost";
	$username = "root";
	$password = "";
	$db = "online_property_sales_system";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $db);
	// Check connection
	/*if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully";*/



  		    $fname    = $_POST['fname'];
  		    $email    = $_POST['email'];
  		    $adr      = $_POST['adr'];
  		    $city     = $_POST['city'];
  		    $state    = $_POST['state'];
  		    $zip      = $_POST['zip'];
  		    $cname    = $_POST['cname'];
  		    $ccnum    = $_POST['ccnum'];
  		    $expmonth = $_POST['expmonth'];
  		    $expyear  = $_POST['expyear'];

  		$sql = "INSERT INTO paymentinfonew (fname, email, adr, city, state, zip, cname, ccnum, expmonth, expyear) VALUES 
      ('$fname', '$email', '$adr', '$city', '$state', '$zip', '$cname', '$ccnum', '$expmonth', '$expyear')";

  		if(!mysqli_query($conn, $sql))
      {
        echo "<script> alert ('Payment unsuccessfull!!!')</script>";
      }
      else
      {
        echo "<script> alert ('Payment successfull!!!')</script>";
      }

      header("refresh: 2, url=http://localhost/IWT%20Project/src/Payment.php");
?>