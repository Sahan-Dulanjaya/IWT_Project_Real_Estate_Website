<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/style - payment.css">

  <title>Payment Page</title>
</head>

<body>


<div class="checkout"><img src="images/logo.png" class="logo"><p class=ckout>Checkout</p><p class="cart1"><a href = "consideration-list.php">Return to cart</a></p></div>

<br><br><br><br>
<h2 class="one">Getting your order</h2>
<hr class="hr1">

<br>

<div class="fullpage">
  <div class="part1">
    <div class="container">
      <form action="connect.php" method="POST">
      
        <div class="fullpage">
          <div class="Part2">
            <h2 class="billing">Billing Information</h2>

            <label for="fname">Full Name</label>
            <input type="text" id="fname" name="fname" placeholder="John M. Doe" maxlength="100" required>

            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="name@example.com" maxlength="120" required>

            <label for="adr">Address</label>
            <input type="text" id="adr" name="adr" placeholder="117 Golden Knowes Road" maxlength="250" required>

            <label for="city">City</label>
            <input type="text" id="city" name="city" placeholder="Colombo" maxlength="25" required>

            <div class="fullpage">
              <div class="Part2">

                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="Western" maxlength="20" required>

              </div>
              <div class="Part2">

                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="15120" maxlength="20" required>

              </div>
            </div>
          </div>

          <div class="Part2">
            <h2 class="billing">Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="paymentmethod">
              <img class="cards" src="images/availablecards.png">
            </div>

            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cname" placeholder="John More Doe" maxlength="100" required>

            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="ccnum" placeholder="1111-2222-3333-4444" maxlength="16" required>

            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="08" maxlength="2" required>

            <div class="fullpage">
              <div class="Part2">

                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2022" maxlength="4" required>

              </div>
              <div class="Part2">

                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="245" maxlength="3" required>

              </div>
            </div>
          </div>
          
        </div>
        <label>

          <input type="checkbox" checked="checked" name="sameadr" required> Check this if you want to save the payment details for the next time you make a payments within the website.
        </label>

        <input type="submit" name="submit" value="Continue to checkout" class="btn">

      </form>
    </div>
  </div>
  
  <?php
	require 'config.php';
	$id = $_GET['id'];
	$sql= "SELECT * FROM cosiderationList WHERE cl_ID = '$id'";
	$result=$conn->query($sql);
	
	if($result=$conn->query($sql))
	{
		if($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{
				echo("<div class='Part3'>");
				echo("<div class='container'>");
				echo ("<h4>Cart <span class='price' style='color:black'><i class='fa fa-shopping-cart'></i> <b></b></span></h4>");
				echo ("<p><a href='#'>".$row['pName']."</a> <span class='price'>".$row['price']."</span></p>");
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

</div>

</body>

</html>
