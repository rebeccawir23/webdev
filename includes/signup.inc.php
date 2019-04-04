<?php

if (isset($_POST['submit'])){
    
    include_once 'dbh.php';
    
    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
                                     
    //Error Handlers
    //Check for empty feild 
    if (empty($first)||empty($last)||empty($email)||empty($uid)||empty($pwd)){
        
        header("Location: ../signup.php?signup=empty"); //takes back to signup page
        exit(); //closes script from running 
        
    } else{
        //check input chars valid
        if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)){
              header("Location: ../signup.php?signup=invalid");
                exit(); //closes script from running
        }else{
            //check email valid
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                header("Location: ../signup.php?signup=invalid email");
                exit(); //closes script from running
            }else{
                //check if username has been used 
                $sql = "SELECT * FROM users WHERE user_uid='$uid'";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                
                if($resultCheck > 0){
                    header("Location: ../signup.php?signup=usertaken");
                    exit(); //closes script from running
                }else{
                    //hash password 
                    $hasedPwd = password_hash($pwd, PASSWORD_DEFALUT);
                    //insert user into database 
                    $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$uid', '$hashedPwd');";
                    $result = mysqli_query($conn, $sql);
                    header("Location: ../signup.php?signup=Sucess");
                    exit(); //closes script from running
                }
            }
        }
    }
    
    
}else{
    header("Location: ../signup.php"); //takes back to signup page
    exit(); //closes script from running 
}