<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
   "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

  <head>
    <title>Alvatour - Log In</title>
	<link rel="stylesheet" href="css/index.css">
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
    <img src="images/index/logo1.png" alt="" style="height: 150px; margin-left: 420px; margin-top: 100px;">
    <h2 style="color:white; margin-left: 430px;">YOUR FAVORITE TOUR GUIDE</h2>
  </header>
  <hr style="margin-top: 30px;">
    <h2>Please log in to your user account!</h2>
<?php
    // if form not yet submitted
    // display form
    if (!isset($_POST['submit'])) {
?>
    <form method="post" action="login.php">
      Username: <br />
      <input type="text" name="username" />
      <p>
      Password: <br />
      <input type="password" name="password" />
      <p>
      <input type="submit" name="submit" value="Log In" />      
    </form>
 <p> Not a registered user?No problem! <a href="signup.php" style="color:blue"> Click here. </a> </p>
<?php      
    // if form submitted
    // check supplied login credentials 
    // against database
    } else {
      $username = $_POST['username'];
      $password = $_POST['password'];
      
      // check input
      if (empty($username)) {
        die('ERROR: Please enter your username');  
      }
      if (empty($password)) {
        die('ERROR: Please enter your password');  
      }
      
      // attempt database connection
      $mysqli = new mysqli("localhost", "root", "root", "app");

      // escape special characters in input
      $username = $mysqli->escape_string($username);
      
      // check if usernames exists      
      $sql = "SELECT COUNT(*) FROM users WHERE username = '$username'";
      if ($result = $mysqli->query($sql)) {
        $row = $result->fetch_array();
        // if yes, fetch the encrypted password
        if ($row[0] == 1) {
          $sql = "SELECT password FROM users WHERE username = '$username'";        
          // encrypt the password entered into the form
          // test it against the encrypted password stored in the database
          // if the two match, the password is correct
          if ($result = $mysqli->query($sql)) {
            $row = $result->fetch_array();          
            $salt = $row[0]; 
            if (crypt($password, $salt) == $salt) {              
              
			  session_start();
			  $_SESSION['username'] = $username;
			  echo '<h2>Your login credentials were successfully verified.</h2>';  
			  
            } else {
              echo 'You entered an incorrect password.';            
            }
          } else {
            echo "ERROR: Could not execute $sql. " . print_r($mysqli->error);
          }          
        } else {
          echo '<h2>You entered an incorrect username.</h2>';            
        }
      } else {
        echo "ERROR: Could not execute $sql. " . print_r($mysqli->error);
      }
      
      // close connection
      $mysqli-> close();     
    }
?>    
 <footer>
      <p>AlvaTour - Korce - Albania</p>
      <div class="copyright">
        Copyright &copy; 2018 Copyright Holder All Rights Reserved.
      </div>
    </footer>
  </body>
</html>