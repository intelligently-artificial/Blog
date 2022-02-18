<?php
$username="root";
$server="localhost";
$pass="";
$con=mysqli_connect($server,$username,$pass);
if(!$con)
{
    die("database connection failed".mqsqli_connect_error());
}
//echo"successful";



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP BLOG</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color : beige";>
    
    <div class="container">
        <h2>Welcome to PHP Blog</h2><hr>
        <form action="index.php" method="post"></form>
        <h1>Login</h1> 
        Username       <br><input type="email" name="email" id="email" placeholder="Enter your mail id"><br><br>
        Password<br> <input type="text" name="pass" id="pass" placeholder="Enter your password"><br><br>
        <input type="submit" value="login">
    
      
    </div>

    
    <script src="index.js"></script>

</body>
</html>
