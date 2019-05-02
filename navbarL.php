<?php
     if(!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == false){
        header("Location: navbar.php");
        
    }
    ?>


<link rel = "stylesheet"
   type = "text/css"
   href = "stylesheet.css" />
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


	<a href="#events">LOGGED IN</a>

	

