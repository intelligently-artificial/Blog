<?php
// session_start();
$username="root";
$server="localhost";
$pass="";
$con=mysqli_connect($server,$username,$pass,"rtds");
// mysqli_select_db($con,"rtds");
if(!$con){

    die("database connection failed".mqsqli_connect_error());
}
//else{echo"jhv";}
 