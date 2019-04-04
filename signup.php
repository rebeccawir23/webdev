<?php
    session_start();
        
?>
<link rel="stylesheet" href="style.css">
<section class="main-container">
    <div class="main-wrapper">
        <h2>Sign Up</h2>
        <form class="signup-form" action="signup.inc.php" method="POST">
            <input type="text" name="first" placeholder="First Name">
            <input type="text" name="last" placeholder="Last Name">
            <input type="text" name="email" placeholder="E-Mail">
            <input type="text" name="uid" placeholder="Username">
            <input type="text" name="pwd" placeholder="Password">
            <button type="submit" name="submit">Sign Up</button>

        
     
      
        </form>
    </div>
</section>