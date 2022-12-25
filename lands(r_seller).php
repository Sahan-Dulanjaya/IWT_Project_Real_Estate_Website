<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/DH.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/profiles - lands.css">
    <link rel="stylesheet" href="css/horizontal scroll.css">
    <link rel="stylesheet" href="css/drop.css">
	<link rel="stylesheet" href="css/lands.css">
	<link rel="stylesheet" href="css/lands(button).css">
	
    
        
    </script>
    <title>Lands</title>
</head>

<body> 
    
    <script src="java script/fixed.js"></script>
  
    
<header>
<div class=bg>
<div class=head>

   <h1><span class="title">C</span>rystal <span class="title">L</span>ands & <span class="title">H</span>ouses</h1> 
    <div class="container1">
        <div class="log">
            <span>
        <img  src="images/logo8.png" class="love">
            </span>
        </div>
   
    <ul>
        <li><a href="index(r_seller).html">Home</a></li>
        <li><a class = "active1" href="#">Lands</a></li>
        <li><a href="hoa(r_seller).php">Houses & Appartments</a></li>
        <li><a href="Design a house(r_seller).php">Design a House</a></li>
        <li><a href="news.html">News</a></li>
        <li><a href="about.html">About Us</a></li>
    </ul>
      <span>
      <a class="reg" >User_Name</a>
    </span>
    
      <div class="dropdown" style="float:right;">
        <button class="dropbtn"> <span>
            <img class="user" src="images/av.jpeg">
           </span></button>
        <div class="dropdown-content">
          <a href="DB.php">profile</a>
          <a href="#">Notification center</a>
          <a href="consideration-list.php">Consideration list</a>
          <a href="index(unregistered).html">Log Out</a>
        </div>
      </div>

    </div>

</div>

<div class = "heading">
	<h2 class = "title">Lands</h2>
</div>

<div "button_family">
	<p><a href = "addProp.html" ><button class = "buttons">Add New Property</button></a></p>
	<p><a href = "mylands.php"><button class = "buttons">My Properties</button></a></p>
	
</div>




<?php
	require 'config.php';
	$sql= "SELECT * FROM lands_houses_apartments WHERE prType LIKE 'land'";

	if($result=$conn->query($sql))
	{
		if($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{
				
				echo("<div class = 'column'>");
				echo("<div class='card'>");
				
				?> 
				<img src ='<?php echo 'images/'. $row['image']; ?>' width ='250' height = '150'>
				<?php
				//echo ("<img src= /images/".$row['image']. "width: 100% >");
				//echo ("<img src='/w3images/jeans3.jpg'alt='Denim Jeans'style=width:100%'>");
				$id = $row["p_ID"];
				echo ("<h1 style = 'font-size: 22px'>".$row['prName']."</h1>");
				echo ("<p class='price'>Rs ".$row['price']. "</p>");
				echo ("<p style = 'color: white; font-size: 15px'>" . $row['location'] . "</p>");
				echo ("<p><a href='considerationList.php?id=$id'><button>Add to Consideration List</button></a></p>");
				echo ("<p><button>Arrange visit</button></p>");
				echo ("</div>");
				echo ("</div>");
			}	

		}
		
		else{
			echo "no results";
		}
	}

	else
	{
		echo "Error:". $conn->error;
	}
?>

  <div class="footer">
        <hr>
        
        <ul>
            <li><a href="contact.php">Contact |</a></li>
            <li><a href="faq.html">FAQ |</a></li>
            <li><a href="#about">Terms & Conditions |</a></li>
        
        </ul>
            <span class="social-container">
            </li><a href="https://www.facebook.com/" class="social"><i class="fa fa-facebook"></i></a>
            <a href="https://www.google.com/" class="social"><i class="fa fa-google"></i></a>
            <a href="https://lk.linkedin.com/" class="social"><i class="fa fa-linkedin"></i></a>
            
            </span>
        
            <div class="bot">
               Copyrights
             </div>
           
      </div>
</div>
</body> 
</html>