<?php
session_start();
if(empty($_SESSION['loggedin']) ){
    header("location:login.php"); 
    exit;}
    include('mainconnect.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){
  
  
   $flag=0;

    $blog = $_POST['blog'];
    $blogtitle = $_POST['blogtitle'];
    $uid= (int) $_SESSION['uid'];
    

    $sql = "INSERT INTO `blog` (blog, blogtitle, uid) VALUES ('$blog', '$blogtitle', '$uid');";
    
    if ($con->query($sql) === TRUE) { $flag=1;echo"your blog created!";
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

    <title>WriteBlog</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
    
</head>
<body style="background-color : cornflowerblue";>
<?php require 'nav.php'?>

<div class="container">
<h2>Write your Blog</h2><hr>
<form action="blog.php" method="post">
    Blog title      <br><input type="text" name="blogtitle" required ><br><br>
    <textarea name="blog" cols="100" rows="10" required></textarea><br><br>
    
    <input type="submit"><br><br>
</form>





<!-- <div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  echo"<strong>Danger!</strong> Indicates a dangerous or potentially negative action.";
</div>
</div> -->

     <script src="index.js"></script>
</body>
</html>




