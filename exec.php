
<?php
    
    include_once 'navbar.php';

session_start();
if(!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == false){
        header("Location: login.php?login=error");
}




?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<html>

<body>
	
<div class = "members" >
    <table border="1">
  <tr>
    <th>First</th>
    <th>Last</th>
    <th>email</th>
    <th>Position</th>
    <th>Class RAnk</th>
   
  </tr>
  <tr>
    <td>Rebecca</td>
    <td>Wirick</td>
    <td>rebecca.wirick@u.boisestate.edu</td>
    <td>VP of Marketing</td>
   
  </tr>
</table>
                    
    </div>
	
</body>
</html>