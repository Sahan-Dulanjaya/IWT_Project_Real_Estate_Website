<!DOCTYPE html>
<html lang="en">
<head>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="contactus.css">
</head>
<body>
<div class="head">

   <h1><span class="title">C</span>rystal<span class="title">L</span>ands & <span class="title">H</span>ouses</h1> 
    <div class="container1">
        <div class="log">
            <span>
        <img  src="images/logo8.png" class="love">
            </span>
        </div>
   
    <ul class="menu">
        <li><a class="active" href="#home">Home</a></li>
        <li><a href="#news">Lands</a></li>
        <li><a href="#contact">Houses & Appartments</a></li>
        <li><a href="Design a house.html">Design a House</a></li>
        <li><a href="#about">News</a></li>
        <li><a href="#about">About Us</a></li>
    </ul>
      <span>
       <a class="reg" href="#">Login/Register</a>
      </span>
      <span>
       <img class="user" src="images/inlo.jpg">
      </span>
   
    </div>
    
</div>
<br></br>
<?php
$con=new mysqli("localhost","root","","online property sales system");
if ($con->connect_error)
{
die("Connection failed: " . $con->connect_error);
}

?><table>
<tr>
<td  class="div">
<div >
<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<p class="p1" style="color : #FF8000;">Contact Us </p>
<input type="text" name="name" placeholder="Name"><BR />
<input type="text" name="email" placeholder="Email"><BR />
<input type="text" rows="4" cols="50" name="comment" placeholder="comment">
<br></br>
<input class="button btn1"type="submit" value="Submit" name="btnSubmit">
<input class="button btn2"type="reset" value="clear">
</form>
</div>
</td>
<td  class="div2">
<br></br>
<i class='fas fa-map-marker-alt' style='font-size:28px;color:white'></i>
<p>Address : NO:62,<br>Maradana,<br>Colombo<p>
<br></br>
<i class='fas fa-phone-square' style='font-size:28px;color:white'></i>
<p>Phone : 0111020304<p>
<br></br>
<i class='fas fa-location-arrow' style='font-size:28px;color:white'></i>
<p>E-mail : crystallands@gmail.com<p>
<br></br>
</td>
</tr>
</table>
<?php
if(isset($_POST["btnSubmit"])){
$name = $_POST["name"];
$email= $_POST["email"];
$comment=$_POST["comment"];
$sql= "INSERT INTO mytable(Name,Email,Comment)VALUES('$name','$email','$comment')";
if($con->query($sql)){
echo "Inserted successfully";
}
else{
echo "Error:". $con->error;
}
}
$con->close();
?>
<br></br>
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

</body>
</html>