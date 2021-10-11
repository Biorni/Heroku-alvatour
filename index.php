<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php
session_start();
?>
<head>
  <meta charset="utf-8">
  <title>AlvaTour - Home</title>
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
	
	.red{
		color:red;
        }
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/index.js" charset="utf-8"></script>
  <script>
  
    $(document).ready(function(){
		$(".hide").hide();
		
		$("#welcome").click(function(){
            $(".hide").toggle();
			$("#welcome").toggleClass("red");
		});
	});
	
  </script>
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
  <?php
   if(!isset($_SESSION['username']))
   { ?>
   <form method="POST" action="login.php">
    <button type="submit">Log In</button>
  </form>
  
  <form method="POST" action="signup.php">
    <button type="submit">Sign up</button>
  </form>
  
    <?php 
	}
	else {
	?>
  <form method="POST" action="logout.php">
    <button type="submit">Log Out</button>
  </form>
  <?php 
	} ?>
  <main>
    <div class="intro">
      <h1 id="welcome">Welcome to Albania</h1>
      <p class="hide">Your number one tour guide to visit Albania. From the beautiful cities, to the great food and nature we offer a full package for you to explore the country alongside us.</p>
      <p class="hide">There are plenty of choices to fit your desire with plenty of destinations to visit.</p>
      <p class="hide">For more information, visit the oficial page of the municipality of Tirana. To navigate there, <a href="https://www.tirana.al/" target="_blank" style="color: black">click here.</a> </p>
      <p class="hide"> <a href="reservation.html" class="reservespot" style="color:blue"> Reserve</a> your spot now!</p>
    </div>
    <div class="slider" id="main-slider">
      <div class="slider-wrapper">
        <img src="images/index/vlore.jpg" alt="First" class="slide">
        <img src="images/index/shkodra.jpg" alt="Second" class="slide">
        <img src="images/index/tirana.jpg" alt="Third" class="slide">
      </div>
    </div>
    <aside style="background-image: url('images/index/hours.jpg'); background-size:400px; background-repeat: no-repeat; border-radius: 20px;">
      <h1>Working hours</h1>
      <p><span class="day">Monday:</span> 8am to 8pm</p>
      <p><span class="day">Tuesday:</span> 8am to 8pm</p>
      <p><span class="day">Wednesday:</span> 8am to 8pm</p>
      <p><span class="day">Thursday:</span> 8am to 8pm</p>
      <p><span class="day">Friday:</span> 8am to 8pm</p>
      <p><span class="day">Saturday:</span> 8am to 6pm</p>
      <p><span class="day">Sunday:</span> Closed</p>
    </aside>
  </main>
  <section>
    <div class="specials">
      <h1 style="text-align: center;">SPECIAL EVENTS</h1>
    </div>
    <section class="main">
      <div class="container">
        <div class="child">
          <img src="images/index/cobo.jpg" />
          <h2>Wine Tasting Tour at Çobo Winery in Berat.</h2>
          <p>A day tour in one of the well known wineries of Berat.</p>
        </div>
        <div class="child">
          <img src="images/index/saranda.jpg" />
          <h2>Saranda Fast Track</h2>
          <p style="margin-top:70px;">Visit the beautiful Saranda by the sea side. </p>
        </div>
        <div class="child">
          <img src="images/index/pogradec.jpg">
          <h2>2 Days Trip - Pogradec and Korce</h2>
          <p>Pogradec and it's main landmarks and a short walking on Korca's famous boulevard.</p>
        </div>
      </div>
    </section>
   
    <footer>
      <p>AlvaTour - Korce - Albania</p>
      <div class="copyright">
        Copyright &copy; 2018 Copyright Holder All Rights Reserved.
      </div>
    </footer>
</body>

</html>