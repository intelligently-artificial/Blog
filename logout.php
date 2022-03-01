<?php
 session_start();

 include('mainconnect.php');
 $username=$_SESSION['username'];

 $sql="UPDATE `register` SET status = 'offline' WHERE username='$username'";
 $result = mysqli_query($con,$sql);
 
 if($result)
 {
     echo"updated";
 }
     if ($con->query($sql) === TRUE) {echo"";
 } else {
   echo "Error " . $con->error;
 }
session_unset();
 session_destroy();
 header("location:login.php");

 exit;
 ?>   