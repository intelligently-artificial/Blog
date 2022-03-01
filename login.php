<?php

if(empty($_SESSION)){

}else{

header('location:welcome.php');
}
 
 
include 'mainconnect.php';
 $login=false;
 $showerror=false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
  
  
   
    $username = $_POST ['username'];

    $password = $_POST['password'];

    $sql = " Select * from register where username = '$username'  AND password = '$password'";
    $result = mysqli_query($con,$sql);
    $num=mysqli_num_rows($result);
   
    if($num==1){
        while($row=mysqli_fetch_assoc($result)){
      
                $login=true;
                session_start();
                $_SESSION['loggedin']=true;
                $_SESSION['username']=$username;
                $_SESSION['uid'] = $row['uid'];
                $sql1="UPDATE `register` SET status = 'online' WHERE username='$username';";
                $result = mysqli_query($con,$sql1);

                
        }

                header("location: http://localhost/proj/welcome.php");
            }
            else{echo "invalid credentials";}
        }
        
    
    
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
<body style="background-color : cornflowerblue";>
    
    <div class="container">
        <h2>Welcome to PHP Blog</h2><hr>
        <form action="login.php" method="post">
        <h1>Login</h1> 
        Username       <br><input type="text" name="username" placeholder="Enter your username" required><br><br>
        Password<br> <input type="password" name="password" placeholder="Enter your password" required><br><br>
        <input type="submit" value="login"></form>
    
      
    </div>

    
    <script src="index.js"></script>

</body>
</html>


