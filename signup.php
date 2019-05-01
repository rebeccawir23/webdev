<?php
    session_start();
    include_once 'navbar.php';
        
?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<link rel="stylesheet" href="style.css">
<section class="main-container">
    <div class="main-wrapper">
        <h2>Sign Up</h2>
        <form class="signup-form" action="signup.inc.php" method="POST">
            <input type="text" name="first" placeholder="First Name">
            <input type="text" name="last" placeholder="Last Name">
            <input type="text" name="email" placeholder="E-Mail">
            <input type="text" name="position" placeholder="Position">
            <input type="text" name="classYear" placeholder="Class Year">
            <button type="submit" name="submit">Sign Up</button>

        
     
        </form>
    </div>
</section>