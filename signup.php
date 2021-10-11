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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
function showHint(str) {
  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "hint.php?q=" + str, true);
    xmlhttp.send();
  }
}
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
    <h2>Avlavel Registration</h2>    
    <h3>Sign up:</h3>    
    
    <?php    
    // if form not submitted
    // generate new form
    if (!isset($_POST['submit'])) {
    ?>
    
    <form method="post" action="signup.php">
	
      Username: <br>
      <input type="text" name="username"  onkeyup="showHint(this.value)"/>
      <p>
	  <p>Suggestions: <span id="txtHint"></span></p>
	  <p>
      Password: <br>
      <input type="password" name="password" />
      <p>
     
      
      <input type="submit" name="submit" value="Add" />      
    </form>    
    
    <?php
    } else {
      // if form submitted
      // attempt database connection
	  $mysqli = new mysqli("localhost", "root", "root", "app");
     
      // check and sanitize input
	  $salt='$1$';
      $username = !empty($_POST['username']) ? $mysqli->real_escape_string($_POST['username']) : die('ERROR: Username is required');
      $password = !empty($_POST['password']) ? $mysqli->real_escape_string(crypt($_POST['password'],$salt)) : die('ERROR: Password is required');
      
	  $sql = "SELECT COUNT(*) FROM users WHERE username = '$username'";
      if ($result = $mysqli->query($sql)) {
        $row = $result->fetch_array();
        // if yes, fetch the encrypted password
        if ($row[0] == 1){
			echo "This username is already taken please choose another username! <a href='signup.php' style='color:blue'> Return </a>";
		}
	else{
      // attempt query execution
      // add a new record

      $sql = "INSERT INTO users (username, password) 
	        VALUES ('$username', '$password')";
	  echo '<div id="message">';
      if ($mysqli->query($sql) === true) {
        echo "<h2>You have been successfully registered.</h2>";
      } else {
        echo "ERROR: Could not execute $sql. " . $mysqli->error;
      }
	  echo '</div>';
               
      // close connection
      $mysqli->close();  
    }
	} 
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