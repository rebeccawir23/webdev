<?php
session_start();
include_once 'navbar.php';

if (isset($_POST['submit'])){
    
    //include_once 'dbh.php';
    
    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $position = mysqli_real_escape_string($conn, $_POST['position']);
    $classYear = mysqli_real_escape_string($conn, $_POST['class rank']);
                                     
    //Error Handlers
    //Check for empty feild 
    if (empty($first)||empty($last)||empty($email)||empty($position)||empty($classYear)){
        
        header("Location: signup.php?signup=empty"); //takes back to signup page
        exit(); //closes script from running 
        
    } else{
        //check input chars valid
        if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)){
              header("Location: signup.php?signup=invalid");
                exit(); //closes script from running
        }else{
            //check email valid
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                header("Location: signup.php?signup=invalid email");
                exit(); //closes script from running
            }else{
                //check if username has been used 
                $sql = "SELECT * FROM users WHERE user_uid='$position'";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                
                if($resultCheck > 0){
                    header("Location: signup.php?signup=usertaken");
                    exit(); //closes script from running
                }
            }
        }
    }
    
    if (!empty($first)||!empty($last)||!empty($email)||!empty($position)||!empty($classYear)){
        
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "impactmembers"
        
        $conn = new mysqli($dbhost, $dbUsername, $dbPassword, $dbName);

    
    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connecterrno().')'.mysqli_connect_error());
    }else{
        $SELECT = "SELECT email From impactmembers Where email = ? Limit 1";
        $INSERT = "INSERT Into impactmembers (first, last, email, position, classYear) values (?, ?,?,?,?)";
        
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;
    
        
        if($rnum ==0){
            $stmt->close();
            
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("haha", $first, $last, $email, $position, $classRank);
            $stmt->execute();
            echo"New Record inserted";
        }
    }else{
        header("Location: signup.php?signup=invalid email");
    }
    $stmt->close();
    $conn->close();

    }
    
}else{
    header("Location: signup.php?error"); //takes back to signup page
    exit(); //closes script from running 
}