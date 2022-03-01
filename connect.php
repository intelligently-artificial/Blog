<?php
session_start();
// if(empty($_SESSION['loggedin']) ){
//     header("location:login.php"); 
//     exit;}
$showerror=false;
$showalert=false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
 $username="root";
 $server="localhost";
 $pass="";
 $con=mysqli_connect($server,$username,$pass,"rtds");
 if(!$con){

    die("database connection failed".mqsqli_connect_error());
 }

 if(isset($_POST['username'])){
    $username = $_POST['username'];

    $password = $_POST['password'];

    
    $fullname = $_POST['fullname'];

    $email = $_POST['email'];

    $number = $_POST['number'];

    
    $existsql="SELECT * FROM `register` WHERE `username`= '$username'";
    $result=mysqli_query($con,$existsql);
    $numexistrows=mysqli_num_rows($result);

    if($numexistrows>0)
    { 
        echo"username already exists";
    }
    else{
        
          $sql="INSERT INTO `register` (`fullname`, `username`, `email`, `number`, `password`,`date`) VALUES ('$fullname', '$username', '$email', '$number', '$password' , current_timestamp());";
          $result=mysqli_query($con,$sql);
          header("location:http://localhost/proj/login.php");
          if($result==true)
          {
              $showalert=true;
          }
    
    
    
}


    

    

    

    //echo $sql;
   
    //if($con->query($sql)==true){echo"inserted";}

 

 
   // else{echo"error:". $con->error;}
    $con->close();
} 
}   ?>
