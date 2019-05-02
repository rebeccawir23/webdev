<?php
    session_start();
    include_once 'navbar.php';


if(isset($_POST['submit'])){
   
    $uid = "user";
    $pwd = "password";
    
    
 
     if(isset($_POST['uid']) && isset($_POST['pwd'])){
        if ($_POST['uid'] == $uid && $_POST['pwd'] == $pwd){
            
            $_SESSION['loggedin'] = true;
            header("Location: welcome.php");
        }
    }
    
      if(isset($_POST['uid']) && isset($_POST['pwd'])){
        if ($_POST['uid'] != $uid && $_POST['pwd'] != $pwd){
            
            $_SESSION['loggedin'] = false;
            header("Location: login.php?login=error");
        }
    }
    
    if(!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == false){
        header("Location: login.php?login=error");
        
    }
    
       if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
        header("Location: welcome.php"); 
    }
    
   
}


?>


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<head>
    <h1>Login</h1>
    <link rel = "stylesheet" type ="text/css" href = "style.css">
<body>
        
     <div class = "loginbox">
            <div class="nav-login">
         <div class= "forminput">
          <form action="login.php" method = "POST">
                    <div>Login</div>
                    <input type="text" name="uid" placeholder="username/email">
                    <input type="password" name="pwd" placeholder="password">
                    <button type="submit" name="submit">Login</button>
                </form></div>
         
    </div>
    </div>
    </body>
</head>

 
    
    







