<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php
session_start();

?>
<head>
  <meta charset="utf-8">
  <title>AlvaTour - Guides</title>
  <link rel="stylesheet" href="css/tour.css">
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
  <script src="index.js" charset="utf-8"></script>
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
  <h2>Tour guide schedules:</h2>
  <main>
    <p class="description">Jump head first into new cultures & eclectic experiences you won’t find anywhere else - take a historical tour in Albania, or delve into the markets. Sail the Albanian Islands or hit the slopes in the Alps. Let’s make one
      thing clear; a holiday in Albania will send you home with absolutely no regrets.</p>
    <div class="list1">
      Korce:
      <div class="dates">
        <ul id="tourguides">
          <li>18/05/2019</li>
          <li>29/05/2019</li>
        </ul>
      </div>

      Pogradec:
      <div class="dates">
        <ul id="tourguides">
          <li>25/06/2019</li>
          <li>17/08/2019</li>
        </ul>
      </div>

      Theth:
      <div class="dates">
        <ul id="tourguides">
          <li>04/10/2019</li>
          <li>22/10/2019</li>
        </ul>
      </div>

      Shkoder:
      <div class="dates">
        <ul id="tourguides">
          <li>27/12/2019</li>
          <li>20/08/20191</li>
        </ul>
      </div>

    </div>
    <div class="list2">
      Berat:
      <div class="dates">
        <ul id="tourguides">
          <li>01/05/2019</li>
          <li>19/07/2019</li>
        </ul>
      </div>

      Tirane:
      <div class="dates">
        <ul id="tourguides">
          <li>07/05/2019</li>
          <li>22/05/2019</li>
        </ul>
      </div>

      Sarande:
      <div class="dates">
        <ul id="tourguides">
          <li>01/07/2019</li>
          <li>07/10/2019</li>
        </ul>
      </div>

      Vlore:
      <div class="dates">
        <ul id="tourguides">
          <li>25/09/2019</li>
          <li>28/11/2019</li>
        </ul>
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
