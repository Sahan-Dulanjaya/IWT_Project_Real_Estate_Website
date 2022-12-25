<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/add.css">

</head>
<body>

<h2> Update a Property </h2>
	
	
	<?php
	require 'config.php';
	$id = $_GET['id'];
	$sql= "SELECT * FROM lands_houses_apartments WHERE p_ID = '$id'";
	$result=$conn->query($sql);
	
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
				
			$type = $row['prType'];
			$name = $row['prName'];
			$photo = $row['image'];
			$location = $row['location'];
			$price = $row['price'];
		}
	}
	?>
	<div class="container">
		<form method="POST" action="submitUpdateLands.php?id=<?php echo $id;?>">
			<div class="row">
				<div class="col-25">
					<label for="propertyType">Property Type</label>	
				</div>
				<div class="col-75">
					<select id="propertyType" name="propertyType">
						<option value="dis">Select Property Type</option>
						<option value="land" <?php if($type=="land") echo 'selected="selected"'; ?>>Land</option>
						<option value="house"<?php if($type=="house") echo 'selected="selected"'; ?>>House</option>
						<option value="apartment" <?php if($type=="apartment") echo 'selected="selected"'; ?>>Apartment</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="pname">Property Name</label>
				</div>
				<div class="col-75">
					<input type="text" id="pname" name="propertyName" value="<?php echo $name;?>">							
				</div>
			</div>
					
			<div class="row">
				<div class="col-25">
					<label for="address">Address</label>
				</div>
				<div class="col-75">
					<textarea id="address" name="address" style="height:100px"><?php echo htmlspecialchars($location); ?></textarea>
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="price">Price</label>
				</div>
				<div class="col-75">
					<input type="number" id="price" name="price"value="<?php echo $price;?>">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="image">Select Images:</label>
				</div>
				<div class="col-75">
					<input type="file" id="image" name="uploadfile" value="<?php echo $photo;?>"/>
				</div>
			</div>
			<div class="row">
				<button  class = "button" type="submit" name="upload"> UPDATE </button>
			</div>
		</form>
    </div>
				
				
			
	

</body>
</html>
