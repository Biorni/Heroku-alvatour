<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php
session_start();
if(!isset($_SESSION['username']))
{
  header('Location: login.php');
}
?>
<head>
  <meta charset="utf-8">
  <title>AlvaTour - Packages</title>
  <link rel="stylesheet" href="css/packages.css">
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
  <h1>
    Packages:
  </h1>
  <table width="100%" border="1">
    <tr>
      <td>Package</td>
      <td>Korce</td>
      <td>Pogradec</td>
      <td>Theth</td>
      <td>Shkoder</td>
      <td>Berat</td>
      <td>Tirane</td>
      <td>Sarande</td>
      <td>Vlore</td>
      <td>Diber</td>
      <td>Prices</td>
    </tr>
    <tr>
      <td>Basic</td>
      <td align="center" style="text-align:center; font-size:150%; font-weight:bold; color:green;">&#x2714;</td>
      <td align="center" style="text-align:center; font-size:150%; font-weight:bold; color:green;">&#x2714;</td>
      <td></td>
      <td></td>
      <td align="center" style="text-align:center; font-size:150%; font-weight:bold; color:green;">&#x2714;</td>
      <td align="center" style="text-align:center; font-size:150%; font-weight:bold; color:green;">&#x2714;</td>
      <td></td>
      <td></td>
      <td></td>
      <td>$30</td>
    </tr>
    <tr>
      <td>City</td>
      <td align="center" style="text-align:center; font-size:150%; font-weight:bold; color:green;">&#x2714;</td>
      <td></td>
      <td></td>
      <td align="center" style="text-align:center; font-size:150%; font-weight:bold; color:green;">&#x2714;</td>
      <td></td>
      <td align="center" style="text-align:center; font-size:150%; font-weight:bold; color:green;">&#x2714;</td>
      <td></td>
      <td align="center" style="text-align:center; font-size:150%; font-weight:bold; color:green;">&#x2714;</td>
      <td></td>
      <td>$40</td>
    </tr>
    <tr>
      <td>Mountain</td>
      <td></td>
      <td></td>
      <td align="center" style="text-align:center; font-size:150%; font-weight:bold; color:green;">&#x2714;</td>
      <td align="center" style="text-align:center; font-size:150%; font-weight:bold; color:green;">&#x2714;</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td align="center" style="text-align:center; font-size:150%; font-weight:bold; color:green;">&#x2714;</td>
      <td>$60</td>
    </tr>
    <tr>
      <td>Beach</td>
      <td></td>
      <td align="center" style="text-align:center; font-size:150%; font-weight:bold; color:green;">&#x2714;</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td align="center" style="text-align:center; font-size:150%; font-weight:bold; color:green;">&#x2714;</td>
      <td align="center" style="text-align:center; font-size:150%; font-weight:bold; color:green;">&#x2714;</td>
      <td></td>
      <td>$70</td>
    </tr>
    <tr>
      <td>Forest</td>
      <td align="center" style="text-align:center; font-size:150%; font-weight:bold; color:green;">&#x2714;</td>
      <td></td>
      <td align="center" style="text-align:center; font-size:150%; font-weight:bold; color:green;">&#x2714;</td>
      <td align="center" style="text-align:center; font-size:150%; font-weight:bold; color:green;">&#x2714;</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td align="center" style="text-align:center; font-size:150%; font-weight:bold; color:green;">&#x2714;</td>
      <td>$80</td>
    </tr>
    <tr>
      <td>All inclusive</td>
      <td align="center" style="text-align:center; font-size:150%; font-weight:bold; color:green;">&#x2714;</td>
      <td align="center" style="text-align:center; font-size:150%; font-weight:bold; color:green;">&#x2714;</td>
      <td align="center" style="text-align:center; font-size:150%; font-weight:bold; color:green;">&#x2714;</td>
      <td align="center" style="text-align:center; font-size:150%; font-weight:bold; color:green;">&#x2714;</td>
      <td align="center" style="text-align:center; font-size:150%; font-weight:bold; color:green;">&#x2714;</td>
      <td align="center" style="text-align:center; font-size:150%; font-weight:bold; color:green;">&#x2714;</td>
      <td align="center" style="text-align:center; font-size:150%; font-weight:bold; color:green;">&#x2714;</td>
      <td align="center" style="text-align:center; font-size:150%; font-weight:bold; color:green;">&#x2714;</td>
      <td align="center" style="text-align:center; font-size:150%; font-weight:bold; color:green;">&#x2714;</td>
      <td>$150</td>
    </tr>
  </table>
  <br>
   <?php    
    // if form not submitted
    // generate new form
    if (!isset($_POST['submit'])) {
    ?>
  
   <form method="post" action="packages.php">
     Enter your full name:<br>
	 <input type="text" id="name" name="name" placeholder="John Cena">
	 <br> <br>
      Select your desired travel package: <br />
      <select name="package">
        <option value="Basic">Basic</option>
        <option value="City">City</option>
        <option value="Mountain">Mountain</option>
        <option value="Beach">Beach</option>
        <option value="Forest">Forest</option>
		<option value="All inclusive">All inclusive</option>
      </select>
      <input type="submit" name="submit" value="Submit" />      
    </form>
	<form method="POST" action="cancel.php">
		<input type="submit" name="submit" value="Cancel Ordered Package" />
		</form>
	
	<?php
    } else {
      // if form submitted
      // attempt database connection
	  
	  
	  $mysqli = new mysqli("localhost", "root", "root", "app");
     
	 
	 
      // check and sanitize input
      $username = !empty($_SESSION['username']) ? $mysqli->real_escape_string($_SESSION['username']) : die('ERROR: Username is required');
      $name = !empty($_POST['name']) ? $mysqli->real_escape_string($_POST['name']) : die('ERROR: Full name is required');
      $package = !empty($_POST['package']) ? $mysqli->real_escape_string($_POST['package']) : die('ERROR: Package is required');


      $sql = "SELECT COUNT(*) FROM packages WHERE username = '$username'";
      if ($result = $mysqli->query($sql)){
        $row = $result->fetch_array();
        
        if ($row[0] == 1){
			$sql = "UPDATE packages SET name = '$name', package = '$package'
                    WHERE username = '$username'";
      if ($mysqli->query($sql) === true) {
        echo "<h2>Your order has been updated.</h2> 
		<form method='POST' action='cancel.php'>
		<input type='submit' name='submit' value='Cancel Ordered Package' />
		</form>";
      } else {
        echo "ERROR: Could not execute $sql. " . $mysqli->error;
		}
	  echo '</div>';
               
      // close connection
      $mysqli->close();  
			
			
		}

      else {

	  $sql = "SELECT COUNT(*) FROM reservation WHERE username = '$username'";
      if ($result = $mysqli->query($sql)){
        $row = $result->fetch_array();
        
        if ($row[0] == 1){
	  
	  
      // attempt query execution
      // add a new record

      $sql = "INSERT INTO packages (username,name,package) 
	        VALUES ('$username', '$name', '$package')";
	  echo '<div id="message">';
      if ($mysqli->query($sql) === true) {
        echo "<h2>Your order has been added.</h2> 
		<form method='POST' action='cancel.php'>
		<input type='submit' name='submit' value='Cancel Ordered Package' />
		</form>";
      } else {
        echo "ERROR: Could not execute $sql. " . $mysqli->error;
		}
	  echo '</div>';
               
      // close connection
      $mysqli->close();  
	} 
	}
	else{
		echo "<h2>Please firstly add the information in the <a href='reservation.php' style='color:blue'>reservation</a> page than return here and select a package!<h2>";
		}
	} 
	}
	}
    ?>
	
	
	
  <aside class="image">
    <img src="images/deal.png" alt="">
  </aside>
  <div class="disclaimer">
    <h2>Some notes...</h2>
    <p>Prices may differ from package to package. From the price, the tax is excluded and it will be calculated once the reservation is in process</p>
    <p>After the reservation is completed, there is a possibility of full refund during the first 24 hours, 50% during the first 48 hours and there <b>won't be</b> a refund if the reservation is canceled 2 days before the trip. </p>
  </div>
  <footer>
    <p>AlvaTour - Korce - Albania</p>
    <div class="copyright">
      Copyright &copy; 2018 Copyright Holder All Rights Reserved.
    </div>
  </footer>
</body>

</html>
