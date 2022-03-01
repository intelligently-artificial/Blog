<?php 
    session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Registration page</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body style="background-color : cornflowerblue";>
<?php require 'nav.php'?>

<div class="container">
<h2>Welcome to PHP Blog</h2><hr>
<form action="connect.php" method="post">
        <h1>Registration</h1>
        Enter your full name<br><input type="text" name="fullname" required><br><br>
        Create Username<br> <input type="text" name="username" required><br><br>
        Enter your email id<br> <input type="email" name="email" required><br><br>
        Enter your phone number<br> <input type="text" name="number" required><br><br>
        Create Password<br><input type="password" name="password" required ><br><br>
        
        <input type="submit" value="Register"></form>
</div>


    
    
       
    
    
    
    <script src="index.js"></script>
</body>
</html>







