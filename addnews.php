<!DOCTYPE html>
<html>
<head>
<title>Add News</title>
<meta charset="UTF-8">

<style>

html, body, {
    position:fixed;
    top:0;
    bottom:0;
    left:0;
    right:0;
}

form 
{
    width: 80%;
    margin: auto;
    font-family: Arial, Helvetica, sans-serif;
    border: 3px solid #f1f1f1;
    border-radius: 8px;
    background-color: rgba(255, 255, 255, 0.8);
}

label
{
    margin-left: 13px;
}

input
{
    margin-left: 20px;
    margin-right: 13px;
    width: 97%;
    padding: 6px;
    box-sizing: border-box;
}

input[type=submit]
{
    width: 10%;
    background-color: #4CAF50;
    color: white;
    margin-bottom: 13px;
    font-size: 16px;
    padding: 5px 10px;
    margin-left: 20px;
    border: none;
    border-radius: 6px;
}


textarea
{
    width: 30%;
    margin-left: 20px;
}

body 
{
    background-image: url(../images/pagebackground.jpg);
    background-size: cover;
    background-position: center;
}

</style>		


</head>

<body>

    <div style="margin-top: 200px; margin-bottom: 100px; ">
		<h1 align="center" class="h1" style="color:white; font-size: 50px;">Add News</h1>

         <br><br>

         <form action="" method="POST" enctype="multipart/form-data">
			<br>
			<label for="title">title:</label><br>
            <input type="textbox" id="title" name="title" placeholder="Heading of the News" required><br><br>

            <label for="context">Context:</label><br>
            <input type="textbox" id="context" name="context" placeholder="News content" required><br><br>

            <label for="content">Content:</label><br>
            <input type="textbox" id="content" name="content" placeholder="News content" required><br><br>
                
            <label for="image">News thumbnail:</label><br>
            <input type="file" id="image" name="image" required><br><br>

			<br><br>

			<input type="submit" name="submit" value="Add" id="subbtn">
		</form>

<?php

  if(isset($_POST['submit'])){
  $con = mysqli_connect('localhost','root','');

  if(!$con)
  {
    echo 'Not Connected to the server';
  }

  if(!mysqli_select_db($con,'newsdatabase'))
  {
    echo 'Database Not Selected';
  }

  		    $title    = $_POST['title'];
            $context    = $_POST['context'];
  		    $content    = $_POST['content'];
  		    $image      = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
  	

  		$sql = "INSERT INTO news (title, context, content, image) VALUES 
      ('$title', '$context', '$content', '$image')";

  		if(!mysqli_query($con, $sql))
      {
      	echo '<script language="javascript">';
        echo 'alert("something Went Wrong")';
        echo '</script>';
      }
       else
      {
        echo '<script language="javascript">';
        echo 'alert("News Added Successfully")';
        echo '</script>';
      }

      header("refresh:2; url=http://localhost/News%20Page/php/addnews.php");
  }
?>

	</body>

</html>
			