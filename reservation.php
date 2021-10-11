<html>
<?php
session_start();
if(!isset($_SESSION['username']))
{
  header('Location: login.php');
}
?>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <meta charset="utf-8">
  <title>AlvaTour - Reservation</title>
  <link rel="stylesheet" href="css/reservation.css">
  <style media="screen">
    header {
      background-image: url("images/index/cover.jpg");
      height: 360px;
      background-repeat: no-repeat;
      -webkit-background-size: cover;
    }

    main {
      background-color: rgba(225, 249, 243, 0.30);
      height: 720px;
    }
  </style>
 
</head>


<body>
  <nav id="navbar">
    <ul id="menu">
      <li><a href="index.php">Home</a></li>
      <li> <a href="about.php">About Us</a></li>
      <li> <a href="cities.php">Cities</a></li>
      <li> <a href="food.php">Food</a></li>
      <li> <a href="tourguides.php">Tour Guides</a></li>
      <li> <a href="nature.php">Nature</a></li>
      <li> <a href="reservation.php">Reservation</a></li>
      <li> <a href="packages.php">Packages</a></li>
      <li> <a href="contact.php">Contact</a></li>
    </ul>
  </nav>
  <header>
    <img src="images/index/logo1.png" alt="" style="  height: 150px; margin-left: 420px; margin-top: 100px;">
    <h2 style="color:white; margin-left: 430px;">YOUR FAVORITE TOUR GUIDE</h2>
  </header>
  <hr style="margin-top: 30px;">
  <h2 id="click">Reservation</h2>
  <div class="row">
    <div class="col-75">
      <div class="container">
	  
	   <?php    
    // if form not submitted
    // generate new form
    if (!isset($_POST['submit'])) {
    ?>
	    <form method="POST" action="remove.php">
		<input type="submit" name="submit" value="Delete Existing Info" />
		</form>
        <form method="POST" action="reservation.php">
          <div class="row">
            <div class="col-50">
              <h3>Billing Address</h3>
              <label for="fname"><i class="fa fa-user"></i> Full Name</label>
              <input type="text" id="fname" name="firstname" placeholder="Name...">
              <label for="email"><i class="fa fa-envelope"></i> Email</label>
              <input type="text" id="email" name="email" placeholder="john@example.com...">
              <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
              <input type="text" id="adr" name="address" placeholder="542 W. 15th Street...">
              <label for="city"><i class="fa fa-institution"></i> City</label>
              <input type="text" id="city" name="city" placeholder="City...">
            </div>

            <div class="col-50">
              <h3>Payment</h3>
              <label for="cname">Name on Card</label>
              <input type="text" id="cname" name="cardname" placeholder="John More Doe">
              <label for="ccnum">Credit card number</label>
              <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
              <label for="expmonth">Exp Month</label>
              <input type="text" id="expmonth" name="expmonth" placeholder="September">
              <div class="row">
                <div class="col-50">
                  <label for="expyear">Exp Year</label>
                  <input type="text" id="expyear" name="expyear" placeholder="2018">
                </div>
                <div class="col-50">
                  <label for="cvv">CVV</label>
                  <input type="text" id="cvv" name="cvv" placeholder="352">
                </div>
              </div>
            </div>

          </div>
          <input type="submit" name="submit" value="Continue to checkout" class="btn">
        </form>
      </div>
    </div>
    <div class="col-25">
    </div>
  </div>
<?php
    } else {
      // if form submitted
      // attempt database connection
	  
	  
	  $mysqli = new mysqli("localhost", "root", "root", "app");
     
      // check and sanitize input
      $username = !empty($_SESSION['username']) ? $mysqli->real_escape_string($_SESSION['username']) : die('ERROR: Username is required');
      $firstname = !empty($_POST['firstname']) ? $mysqli->real_escape_string($_POST['firstname']) : die('ERROR: Full name is required');
      $email = !empty($_POST['email']) ? $mysqli->real_escape_string($_POST['email']) : die('ERROR: Email is required');
	  $address = !empty($_POST['address']) ? $mysqli->real_escape_string($_POST['address']) : die('ERROR: Address is required');
	  $city = !empty($_POST['city']) ? $mysqli->real_escape_string($_POST['city']) : die('ERROR: City is required');
	  
	  $cardname = !empty($_POST['cardname']) ? $mysqli->real_escape_string($_POST['cardname']) : die('ERROR: Card Name is required');
	  $cardnumber = !empty($_POST['cardnumber']) ? $mysqli->real_escape_string($_POST['cardnumber']) : die('ERROR: Card Number is required');
	  $expmonth = !empty($_POST['expmonth']) ? $mysqli->real_escape_string($_POST['expmonth']) : die('ERROR: Expire month is required');
	  $expyear = !empty($_POST['expyear']) ? $mysqli->real_escape_string($_POST['expyear']) : die('ERROR: Expire year is required');
	  $cvv = !empty($_POST['cvv']) ? $mysqli->real_escape_string($_POST['cvv']) : die('ERROR: CVV is required');
	  
      // attempt query execution
      // add a new record

      $sql = "INSERT INTO reservation (username,firstname,email,address,city,cardname,cardnumber,expmonth,expyear,cvv) 
	        VALUES ('$username', '$firstname', '$email', '$address', '$city', '$cardname', '$cardnumber', '$expmonth', '$expyear', '$cvv')";
	  echo '<div id="message">';
      if ($mysqli->query($sql) === true) {
        echo "<h2>Your information have been added.</h2>
		<form method='POST' action='remove.php'>
		<input type='submit' name='submit' value='Cancel Ordered Package' />
		</form>";
      } else {
        echo "ERROR: Could not execute $sql. " . $mysqli->error;
      }
	  echo '</div>';
               
      // close connection
      $mysqli->close();  
	} 
    ?>    
	
<p>
  <footer>
    <p>AlvaTour - Korce - Albania</p>
    <div class="copyright">
      Copyright &copy; 2018 Copyright Holder All Rights Reserved.
    </div>
  </footer>
</body>

</html>
