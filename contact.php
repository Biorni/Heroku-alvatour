<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php
session_start();

?>
<head>
  <meta charset="utf-8">
  <title>AlvaTour - Contact</title>
  <link rel="stylesheet" href="css/contact.css">
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
    <img src="images/index/logo1.png" style="  height: 150px; margin-left: 420px; margin-top: 100px;">
    <h2 style="color:white; margin-left: 430px;">YOUR FAVORITE TOUR GUIDE</h2>
  </header>
  <hr style="margin-top: 30px;">
  <aside class="map">
    <h1>You can find us here:</h1>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d757.1629586210768!2d20.777345629237164!3d40.615504716735124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x135a0a4161eaaf6b%3A0xb8c46758e945a5a8!2zQnVsZXZhcmRpIEZhbiBOb2xpLCBLb3LDp8OrLCDOkc67zrLOsc69zq_OsQ!5e0!3m2!1sel!2sgr!4v1553882162951!5m2!1sel!2sgr"
      width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </aside>
  <main>
    <div class="contactinfo">
      <h1>Contact us</h1>
      <p>For any questions do not hesitate to contact us via this form or give us a call at: <a href="callto:00355686722222"></a>+355 68 67 22222</p>
    </div>
    <div class="container">
	 <?php    
    // if form not submitted
    // generate new form
    if (!isset($_POST['submit'])) {
    ?>
	
      <form method="post" action="contact.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>

        <label for="email">E-Mail</label>
        <input type="email" id="mail" name="email" placeholder="Your email..." required>

        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

        <input type="submit" name="submit" value="Submit">
      </form>
	 <?php
    } else {
      // if form submitted
      // attempt database connection
	  
	  
	  $mysqli = new mysqli("localhost", "root", "root", "app");
     
      // check and sanitize input
  
      $firstname = !empty($_POST['firstname']) ? $mysqli->real_escape_string($_POST['firstname']) : die('ERROR: First name is required');
	  $lastname = !empty($_POST['lastname']) ? $mysqli->real_escape_string($_POST['lastname']) : die('ERROR: Last name is required');
      $email = !empty($_POST['email']) ? $mysqli->real_escape_string($_POST['email']) : die('ERROR: Email is required');
	  $subject = !empty($_POST['subject']) ? $mysqli->real_escape_string($_POST['subject']) : die('ERROR: Subject is required');
	
	  
      // attempt query execution
      // add a new record

      $sql = "INSERT INTO contact (firstname,lastname,email,subject) 
	        VALUES ('$firstname', '$lastname', '$email', '$subject')";
	  echo '<div id="message">';
      if ($mysqli->query($sql) === true) {
        echo "<h2>Your request has been submitted.</h2>";
      } else {
        echo "ERROR: Could not execute $sql. " . $mysqli->error;
      }
	  echo '</div>';
               
      // close connection
      $mysqli->close();  
	} 
    ?>     
	  
    </div>
  </main>
  <footer>
    <p>AlvaTour - Korce - Albania</p>
    <div class="copyright">
      Copyright &copy; 2018 Copyright Holder All Rights Reserved.
    </div>
  </footer>
</body>

</html>
