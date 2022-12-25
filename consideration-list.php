<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/DH.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/profiles.css">
    <link rel="stylesheet" href="css/horizontal scroll.css">
    <link rel="stylesheet" href="css/drop.css">
	<link rel="stylesheet" href="css/lands.css">
	<link rel="stylesheet" href="css/landsButtons.css">
	
    
        
    </script>
    <title>Consideration List</title>
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
   
    </div>

</div>

<div class = "heading">
	<h2 class = "title">Consideration List</h2>
</div>


</body>
</html>


<?php
	require 'config.php';
	
	$file = fopen("myFile.txt","r");
	$mID = fread($file,filesize("myFile.txt"));
	fclose($file);
	
	$sql= "SELECT * FROM cosiderationlist WHERE m_ID= '$mID'";

	if($result=$conn->query($sql))
	{
		if($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{
				
				echo("<div class = 'column'>");
				echo("<div class='card'>");
				
				?> 
				<img src ='<?php echo 'images/'. $row['photo']; ?>' width ='250' height = '150'>
				<?php
				//echo ("<img src= /images/".$row['image']. "width: 100% >");
				//echo ("<img src='/w3images/jeans3.jpg'alt='Denim Jeans'style=width:100%'>");
				$id = $row["cl_ID"];
				echo ("<h1 style = 'font-size: 22px'>".$row['pName']."</h1>");
				echo ("<p class='price'>Type:  ".$row['pType']. "</p>");
				echo ("<p style = 'color: white; font-size: 15px'>" . $row['location'] . "</p>");
				echo ("<p><a href='Payment.php?id=$id'><button>Purchase</button></a></p>");
				echo ("<p><a href='deletelist.php?id=$id'><button>Delete</button></a></p>");
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
            <li><a href="#about">Contact |</a></li>
            <li><a href="#about">FAQ |</a></li>
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