<html>
<?php
session_start();

?>
<head>
  <meta charset="utf-8">
  <title>AlvaTour - Nature</title>
  <link rel="stylesheet" href="css/nature.css">
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
  <h1>Visit the most breath taking landscapes:</h1>
  <main>
    <div class="row">
      <div class="column">
        <h4>Apollonia:</h4>
        <img src="images/nature/apolonia.jpg" height="200px" width="300px">
        <h4>Butrint:</h4>
        <img src="images/nature/butrint.jpg" height="200px" width="300px">
        <h4>Osum:</h4>
        <img src="images/nature/canyon.jpg" height="200px" width="300px">
      </div>
      <div class="column">
        <h4>Dardh:</h4>
        <img src="images/nature/dardh.jpg" height="200px" width="300px">
        <h4>Dhermi:</h4>
        <img src="images/nature/dhermi.jpg" height="200px" width="300px">
        <h4>Diber:</h4>
        <img src="images/nature/diber.jpg" height="200px" width="300px">
      </div>
      <div class="column">
        <h4>Kruje:</h4>
        <img src="images/nature/kruje.jpg" height="200px" width="300px">
        <h4>Ksamil:</h4>
        <img src="images/nature/ksamil.jpg" height="200px" width="300px">
        <h4>Caves:</h4>
        <img src="images/nature/shpellatjugut.jpg" height="200px" width="300px">
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
