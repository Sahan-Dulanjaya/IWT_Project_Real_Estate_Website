<!DOCTYPE html>
<html>
<head>
<style>

* {
  box-sizing: border-box;
}


.card {
	padding: 62px;
	text-align: center;
	font-family: arial;
	font-size: 25px;
	background-color: rgba(0,0,0,0.5);

}

.column{
	float: left;
	width: 25%
	padding: 0 10px;
}

@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}
.price {
  color: grey;
  font-size: 18px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
  border-radius: 20px;
}

.card button:hover {
  opacity: 0.7;
}

.heading{
	text-align: center;
	font-size: 30px;
}
</style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/DH.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/profiles.css">
    <link rel="stylesheet" href="css/horizontal scroll.css">
	<link rel="stylesheet" href="css/drop.css">
    
        
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
        <li><a href="Home.html">Home</a></li>
        <li><a class = "active1" href="land.php">Lands</a></li>
        <li><a href="Land.php">Houses & Appartments</a></li>
        <li><a href="Design a house.php">Design a House</a></li>
        <li><a href="#about">News</a></li>
        <li><a href="#about">About Us</a></li>
    </ul>
      <span>
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
          <a href="#">Consideration list</a>
          <a href="#">Log Out</a>
        </div>
      </div>
    </div>

</div>

<div class = "heading">
	<h2 class = "title">Lands</h2>
</div>

</body>
</html>


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
				//echo ("<p class='id'>".$row['p_ID']. "</p>");
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

 