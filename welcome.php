<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<link rel="shortcut icon" type="image/x-icon" href="img.png" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/boardgame-io/0.49.5/boardgameio.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/matter-js/0.17.1/matter.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/phaser/3.55.2/phaser.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.5.1/cdn.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/turbolinks/5.2.0/turbolinks.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dynatable/0.3.1/jquery.dynatable.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/plyr/3.6.9/plyr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js">
</script>
<style>
.button {
  background-color: #ffffff; /* Green */
  border: none;
  color: #4CAF50;
  padding: 8px 16px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: #f3f3f3;
  color: black; 
  border: 2px solid #ffffff;
}

.button1:hover {
  background-color: #d4d4d4;
  color: white;
</style>

<head>
  <meta name="google-site-verification" content="VaydnY8ik-DsMVO5FNoFB1Ybc5vGQSbm4fWQJN27fN4" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js">
	</script>
  <link href="style.css" rel="stylesheet">
</head>
<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>Shady Alley Website!</h1>
  <p>By the Shady Alley Team</p>
  <h2><a href="welcome.php" class="button button1">Login</a></h2>
 </div>
<div class="logo">
<nav>
<ul>
  <li hight="50"><img src="Logo.png" width="100px" height="50px"></li>
  <li><a href="/">Home</a></li>
  <li><a href="#">Shady Alley</a></li>
  <li><a href="#">Shady Valley</a></li>
  <li><a href="#">SCA</a></li>
  <li><a href="#">Other</a></li>
  <li><a href="merch.html">Merch and Ranks</a></li>
  <li><a href="p.html">Ytdwnld</a></li>
  <li><a href="Login.html">Admin Login</li>
</ul>
</nav>


        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>

</body>
</html>