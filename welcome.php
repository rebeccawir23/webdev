<?php

    session_start();
    include_once 'navbar.php';

  if(!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == false){
        header("Location: login.php?login=error");
      

        
    }
    
?>

<h2>You have logged in!</h2>

