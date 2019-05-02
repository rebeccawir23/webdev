<?php
    session_start();
    include_once 'navbar.php';


  $messages[] = "You must log in to access this page";
  $valid = false;


if (!$valid) {
    $_SESSION['messages'] = $messages;
}

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

<style>
    body{
    margin: 0;
    padding: 0;
    background: url(IMPACT/image16.jpg);
    background-size: cover;
    background-position: center;
}
</style>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<div class="enter">
    <link rel = "stylesheet" type ="text/css" href = "stylesheet.css">
<body>
        
     <div class = "loginbox">
            <div class="nav-login">
         <div class= "forminput">
          <form action="login.php" method = "POST">
                    <h1>Login</h1>
                    <p>*You must be logged in </p>
                    <input type="text" name="uid" placeholder="username/email">
                    <input type="password" name="pwd" placeholder="password">
                    <button type="submit" name="submit">Login</button>
                </form></div>
         
    </div>
    </div>
    </body>
</head>

 
    
    







