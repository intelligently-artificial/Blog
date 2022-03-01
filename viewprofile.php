<?php session_start();

if(empty($_SESSION['loggedin']) ){
    header("location:login.php"); 
    exit;}
    include 'mainconnect.php'; 

if($_SERVER["REQUEST_METHOD"] == "POST"){    

   


if(isset($_POST['submit'])){
    

    $fullname = $_POST['fullname'];

    $email = $_POST['email'];

    $number = $_POST['number'];

    $tomatch1=$_SESSION['uid'];


    $sqlo= "UPDATE `register`
    SET fullname = ' $fullname', email = '$email' , number ='$number'
    WHERE uid = '$tomatch1';";
    // echo $sqlo;

if ($con->query($sqlo) === TRUE) {echo"Profile Updated";
} else {
  echo "Error " . $con->error;
}

}}



$tomatch=$_SESSION['uid'];
$sql = " SELECT * FROM `register` WHERE uid = '$tomatch';";
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

    <title> Profile</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body style="background-color : cornflowerblue";>
<?php require 'nav.php'?>

<div class="container">

<form action="viewprofile.php" method="post">
        <h1>Your Profile</h1><hr><br><br>
        Full name<br><input type="text" name="fullname" value="<?php echo $row['fullname']?> " required ><br><br>
        Username<br> <input type="text" name="username" value="<?php echo $row['username']?> " readonly><br><br>
        Email id<br> <input type="email" name="email" value="<?php echo $row['email']?> " required><br><br>
        Phone number<br> <input type="text" name="number" value="<?php echo $row['number']?> " required><br><br>
        
        <input type="submit" name="submit"  value="Update"></form>
</div>


    
    
       
    
    
    
    <script src="index.js"></script>
</body>
</html>



     <?php
       }
    }  









