<?php
session_start();
if(empty($_SESSION['loggedin'])){
  header("location:login.php"); 
  exit;}
  include('mainconnect.php');


if($_SERVER["REQUEST_METHOD"] == "POST"){
  
  
   

    $comment = $_POST['comment'];
    
    $uid= (int) $_SESSION['uid'];

    $username= $_SESSION['username'];

    $blogid =   $_SESSION['blogid'];           
    

    $sql = "INSERT INTO `comments` (comment,username, uid, blogid) VALUES ('$comment', '$username', '$uid','$blogid');";
    
    if ($con->query($sql) === TRUE) {echo"your comment uploaded!";
    } else {
      echo "Error " . $con->error;
    }

}
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>alert</title>


</head>
<body style="background-color : cornflowerblue";>
<?php require 'nav.php'?>

   
    
</body>
</html>