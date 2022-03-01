<?php
session_start();
if(empty($_SESSION['loggedin']) ){
  header("location:login.php"); 
  exit;}
  include('mainconnect.php');


if($_SERVER["REQUEST_METHOD"] == "POST"){

  $yes=false;
//   $no=false;
  $uid=$_SESSION['uid'];
  $blogid=$_GET['id'];
  $sql="SELECT uid FROM blog WHERE id ='$blogid';";
  $result = mysqli_query($con,$sql);


   $row=mysqli_fetch_assoc($result);
    if($uid==$row['uid']){
    
       
        $sqlo = "DELETE FROM `blog` WHERE id='$blogid' ;";  //AND uid = '$uid'
        if ($con->query($sqlo) === TRUE) {$yes=true;
        } else {
           
          echo "Error " . $con->error;
        }}
    }
        ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Document</title>
</head>
<body style="background-color : cornflowerblue";>
<?php require 'nav.php';
echo"<br><br><br><br>";
     if ($yes==true){echo"<h3>blog successfully deleted</h3>";}
     else{echo"<h3>Sorry! cannot delete this blog as it is not yours</h3>";}
     ?>
    
</body>
</html>


         
    

    
    
