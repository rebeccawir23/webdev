
<?php
session_start();
include_once 'navbar.php';


if(!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == false){
        header("Location: login.php");
}

// if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
//        header("Location: execlogged.php");
//    }


//$connection = mysql_connect('localhost', 'root', ''); //The Blank string is the password
//mysql_select_db('impactmembers');
//
//$query = "SELECT * FROM exec_members"; //You don't need a ; like you do in SQL
//$result = mysql_query($query);
//
//echo "<table>"; // start a table tag in the HTML
//
//while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
//echo "<tr><td>" . $row['first'] . "</td><td>" . $row['last'] . "</td></tr>";  //$row['index'] the index here is a field name
//}
//
//echo "</table>"; //Close the table in HTML
//
//mysql_close(); 


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
<title>Exec Members</title>        
  <tr>
    <th>First</th>
    <th>Last</th>
    <th>email</th>
    <th>Position</th>
    <th>Class Rank</th>
   
  </tr>
  <tr>
    <td>Rebecca</td>
    <td>Wirick</td>
    <td>rebecca.wirick@u.boisestate.edu</td>
    <td>VP of Marketing</td>
    <td>Junior</td>
   
  </tr>
        
<tr>
    <td>Kaleb</td>
    <td>Smith</td>
    <td>...@u.boisestate.edu</td>
    <td>President</td>
    <td>Junior</td>
   
  </tr>
</table>
                    
    </div>
	
</body>
</html>