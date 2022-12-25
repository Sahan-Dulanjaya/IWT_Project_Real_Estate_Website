<!DOCTYPE html>
<html>
<head>
<title>Read and Delete News</title>
<style>

html, body, {
    position:fixed;
    top:0;
    bottom:0;
    left:0;
    right:0;
}

body 
{
    background-image: url(../images/pagebackground.jpg);
    background-size: cover;
    background-position: center;
}

table {
	margin-left: 2%;
margin-top: 20%;
border-collapse: collapse;
width: 60%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}

th {
background-color: #588c7e;
color: white;
}

tr:nth-child(even) {background-color: #f2f2f2}

form 
{
	margin-top: -35%;
	margin-left: 16%;
    width: 30%;
    position: absolute;
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
    width: 95%;
    padding: 6px;
    box-sizing: border-box;
}

input[type=submit]
{
    width: 12%;
    background-color: #d12550;
    color: white;
    margin-bottom: 13px;
    font-size: 16px;
    padding: 5px 10px;
    margin-left: 20px;
    border: none;
    border-radius: 6px;
}

</style>

</head>

<body>

<table>
<tr>
<th>newsid&nbsp;&nbsp;&nbsp;</th>
<th>title&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
<th>context</th>
</tr>



<?php
$conn = mysqli_connect("localhost", "root", "", "online_property_sales_system");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT newsid, title, context FROM news";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["newsid"]. "</td><td>" . $row["title"] . "</td><td>"
. $row["context"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
?>

</table>

 <form action="" method="GET">
				<br>
                <label for="isbn">&nbsp;Enter the newsid of the news you want to delete<label><br>
				<input type="textbox" id="newsid" name="newsid">
				<br><br>

				<input type="submit" name="submit" value="Delete" id="subbtn">
			</form>

<?php
				if(isset($_GET['submit']))
				{
					$newsid = $_GET['newsid'];

					$sql = "DELETE FROM news WHERE newsid = $newsid";

					if ($conn->query($sql) === TRUE) 
                    {
                        echo '<script language="javascript">';
                        echo 'alert("News deleted Successfully")';
						echo '</script>';	
                    } 
                    else 
                    {
						echo '<script language="javascript">';
                        echo 'alert("Wrong newsid")';
                        echo '</script>'; 
                    }

                    header("refresh:2; url=http://localhost/IWT%20Project/src/php/deletenews.php");

                    $conn->close();  
				}
			?>

</body>
</html>