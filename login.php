<?php
   include("config.php");
   session_start();
      
   if (isset($_POST['upload'])) { 
      // username and password sent from form 
      
     $myemail = $_POST['email'];
     $mypassword = $_POST['password']; 
      
      $sql = "SELECT * FROM buyer WHERE email = '$myemail' and pw = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("$myemail");
         $_SESSION['login_user'] = $myemail;
		 
		 $FH = fopen("myFile.txt", "w") or die("Error");
		 fwrite($FH , $row['m_ID']);
		 fclose($FH);
		 
	
		 
		if($row['type'] === "seller")
		{
			 header("location: index(r_seller).html");
		} 
		elseif($row['type'] === "buyer")
		{
			 header("location: index(r_buyer).html");
		}
		elseif($row['type'] === "contractor")
		{
			 header("location: index(r_worker).html");
		}
		elseif($row['type'] === "architect")
		{
			 header("location: index(r_worker).html");
		}
		
		
	  }
	   else {
         $error = "Your Login Email or Password is invalid";
		 echo $error;
      }
   }
?>