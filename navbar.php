<?php
    

session_start();
   if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
        include_once 'navbarL.php'; 
    }

?>
<link rel = "stylesheet"
   type = "text/css"
   href = "stylesheet.css" />
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<div class="topnav">
  	<a class="active" href="index.html">Home</a>
    <a href="login.php">Login</a>
    <a href="signup.php">Sign Up</a>
  	<a href="exec.php">Exec Board</a>
	<a href="aboutUs.php">About Us</a>
  	<a href="#cal">Calander</a>
  	<a href="#member">Members</a>
	

	</div> 

  <center>  
  <h1>Boise State Student IMPACT Board</h1>
  
</center>
