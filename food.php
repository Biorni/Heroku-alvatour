<html>
<?php
session_start();


?>
<head>
  <meta charset="utf-8">
  <title>AlvaTour - Food</title>
  <link rel="stylesheet" href="css/food.css">
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
  <h1>Taste traditional foods:</h1>

  <div class="row">
    <div class="column">
      <h4>Byrek:</h4>
      <img src="images/food/byrek.jpg" height="200px" width="300px">
      <h4>Bakllava:</h4>
      <img src="images/food/bakllava.jpg" height="200px" width="300px">
      <h4>Kackavall:</h4>
      <img src="images/food/friedkackavall.jpg" height="200px" width="300px">
    </div>
    <div class="column">
      <h4>Meat:</h4>
      <img src="images/food/grilledmeat.jpg" height="200px" width="300px">
      <h4>Grilled Vegies:</h4>
      <img src="images/food/perime.jpg" height="200px" width="300px">
      <h4>Fish:</h4>
      <img src="images/food/peshk.jpg" height="200px" width="300px">
    </div>
    <div class="column">
      <h4>Qofte:</h4>
      <img src="images/food/qofte.jpg" height="200px" width="300px">
      <h4>Yogurt dish:</h4>
      <img src="images/food/tavekosi.jpg" height="200px" width="300px">
    </div>
  </div>
  <div class="description" style="text-align:center;">
    <h1>Albanian Cuisine</h1>
    <p style="font-size: 20px;">Recipies brought to you from around the world touched by the Albanian taste and culinary skill. </p>
  </div>
  <footer>
    <p>AlvaTour - Korce - Albania</p>
    <div class="copyright">
      Copyright &copy; 2018 Copyright Holder All Rights Reserved.
    </div>
  </footer>
</body>

</html>
