<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
   "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Sing Up Alvatour  </title>
	<link rel="stylesheet" href="css/index.css">
    <style type="text/css">
    #message {
      text-align:center; 
      margin-left:auto; 
      margin-right:auto; 
      width:40%; 
      border: solid 2px green      
    }
    </style>
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
    <h2>Avlavel Reservation Info</h2>

<?php
 session_start();
 $username = $_SESSION['username'];
 
 $mysqli = new mysqli("localhost", "root", "root", "app");
 $sql = "DELETE FROM packages WHERE username= '$username'";
 if ($mysqli->query($sql) === true) {
        echo "<h2>Your package of choice has been canceled!.</h2>";
      } else {
        echo "ERROR: Could not execute $sql. " . $mysqli->error;
      }
	  echo '</div>';
               
      // close connection
      $mysqli->close();
?>
<footer>
      <p>AlvaTour - Korce - Albania</p>
      <div class="copyright">
        Copyright &copy; 2018 Copyright Holder All Rights Reserved.
      </div>
    </footer>
  </body>
</html>