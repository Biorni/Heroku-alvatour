<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php
session_start();

?>
<head>
  <meta charset="utf-8">
  <title>AlvaTour - Cities</title>
  <link rel="stylesheet" href="css/cities.css">
  <style media="screen">
    header {
      background-image: url("images/index/cover.jpg");
      height: 360px;
      background-repeat: no-repeat;
      -webkit-background-size: cover;
    }

    main {
      background-color: rgba(225, 249, 243, 0.30);
      height: 700px;
    }
  </style>
  <script src="js/index.js" charset="utf-8"></script>
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
  <h1>Visit the most breath taking places in Albania</h1>
  <h2> Cities: </h2>
  <main>
    <div class="row">
      <div class="column">
        <h4>Berat:</h4>
        <img src="images/cities/berati.jpg" height="200px" width="300px">
        <h4>Sarande:</h4>
        <img src="images/cities/sarande.jpg" height="200px" width="300px">
      </div>
      <div class="column">
        <h4>Korce:</h4>
        <img src="images/cities/korce.jpg" height="200px" width="300px">
        <h4>Tirane:</h4>
        <img src="images/cities/shskenderbej.jpg" height="200px" width="300px">
      </div>
      <div class="column">
        <h4>Pogradec:</h4>
        <img src="images/cities/pogradec.jpg" height="200px" width="300px">
        <h4>Vlore:</h4>
        <img src="images/cities/vlore.jpg" height="200px" width="300px">
      </div>
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
