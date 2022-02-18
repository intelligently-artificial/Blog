<?php
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

    $cnfpassword = $_POST['cnfpassword'];

    $sql="INSERT INTO `register` ( `username`, `password`, `cnfpassword`) VALUES ('$username', '$password', '$cnfpassword');";

    //echo $sql;
    header("location:http://localhost/proj/index.php");
    if($con->query($sql)==true){echo"inserted";}

 

 
    else{echo"error:". $con->error;}
    $con->close();
}    

 





?>