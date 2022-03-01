<?php
 session_start();
if(empty($_SESSION['loggedin']) || $_SESSION['loggedin']!=true ){
    header("location:login.php"); 
    exit;}
    

 ?>   





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Homepage</title>


</head>
<body style="background-color : cornflowerblue";>
<?php require 'nav.php'?>
<div class="container"><br><br><br><br>
    <h1>Welcome to<h1>
    <h1>PHP Blog.</h1><br>
        



        
        
       
      
    </div>

 
   
    
</body>
</html>