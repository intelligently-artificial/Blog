<?php 
session_start();
include 'mainconnect.php';
require 'nav.php';
$sql = "SELECT username,status FROM `register`";
$result = mysqli_query($con,$sql);
$num=mysqli_num_rows($result);

 if($num>0){
     while($row=mysqli_fetch_assoc($result)){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>ActiveUsers</title>
</head>

<style>
table, th, td {
  border:1px solid black;
}
</style>
<body style="background-color : cornflowerblue";>



<table style="width:100%">
  <tr>
    <th><?=$row['username']?></th>
    <th><?=$row['status']?></th>
    
  </tr>
 
</table>






</body>
</html>
<?php
       }
       


        

       
        
    
    }   