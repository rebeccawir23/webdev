<?php
    session_start();
?>

<link rel = "stylesheet"
   type = "text/css"
   href = "style.css" />
<body>
  <header>
    <nav>
      <div class = "main-wrapper">
        <ul> 
            <li><a href="index.php">Login</a></li>
          </ul>
            <div class="nav-login">
                <form action="login.inc.php" method = "POST">
                    <input type="text" name="uid" placeholder="username/email">
                    <input type="password" name="pwd" placeholder="password">
                    <button type="submit" name="submit">Login</button>
                </form>
                <a href="signup.php">Sign Up</a>
          </div>
        </div>
      </nav>
    
    
    </header>

</body> 