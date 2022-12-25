<?php
	require 'config.php';
	$sql= "SELECT * FROM add_a_gig";

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
				echo ("<h1 style = 'font-size: 22px'>".$row['gname']."</h1>");
				echo ("<p class='price'>Rs ".$row['gtype']. "</p>");
				echo ("<p style = 'color: white; font-size: 15px'>" . $row['gdescription'] . "</p>");
				echo ("<p><button>Add to consideration list</button></p>");
				echo ("<p><button>Contact Me</button></p>");
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