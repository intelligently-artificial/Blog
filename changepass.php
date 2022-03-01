<?php 
session_start();
if(empty($_SESSION['loggedin']) ){
    header("location:login.php"); 
    exit;}
    include 'mainconnect.php';
    ?>
     
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>change password</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color : cornflowerblue";>
<?php require 'nav.php'?>
    
    <div class="container">
        <h2></h2><hr>
        <form action="changepass.php" method="post">
        <h1>Change password</h1> <hr>
        Enter username <br><input type="text" name="username" placeholder="Enter your username"><br><br>
        Old password       <br><input type="password" name="opassword" placeholder="Enter your old password"><br><br>
        New Password<br> <input type="password" name="npassword" placeholder="Enter your new password"><br><br>
        Repeat New Password<br> <input type="password" name="rpassword" placeholder="Enter your new password again"><br><br>
        <input type="submit" value="Change"><br><br></form>
    
      
    </div>

    
    <script src="index.js"></script>

</body>
</html>
<div class="container">
<?php
 $flag=0;
 $yes=false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  
  if(isset($_POST['npassword'])){
   

    $username = $_POST['username'];
    $npassword = $_POST['npassword'];
    $opassword = $_POST['opassword'];
    $rpassword = $_POST['rpassword'];

    if($npassword==$rpassword){
       $sql = " UPDATE `register` SET `password` = '$npassword' WHERE `register`.`username` = '$username' AND `register`.`password` = '$opassword' ; ";
       $yes=true;
       
    }
    if($yes==true){
     if ($con->query($sql) === TRUE) {$flag=1;
     } 
       
       
    }
    if($yes==false)
    { echo"Either password do not match or username incorrect";}

    if($flag==1){
        echo"password changed successfully";
    }
    

    
 }
}  ?></div>

