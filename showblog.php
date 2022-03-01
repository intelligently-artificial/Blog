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
    $blogid1=$_GET['id'];
    $sql1="SELECT uid FROM blog WHERE id ='$blogid1';";
    $result1 = mysqli_query($con,$sql1);
  
  
     $row1=mysqli_fetch_assoc($result1);
      if($uid==$row1['uid']){
  
          $blogtitle= $_POST['blogtitle'];
          $blog= $_POST['blog'];
  
      
         
          $sqlo = " UPDATE `blog` SET blogtitle = '$blogtitle', blog = '$blog' WHERE id='$blogid1' ;"; // AND uid = '$uid'  UPDATE Customers
          
         
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

    <title>singleblogview</title>
</head>
<body style="background-color : cornflowerblue";>
<?php require 'nav.php'?>
<div>
<div class="container m auto mt-3 row">
    <div class="col-8">
        <?php
        $blogid=$_GET['id'];
        $sql="SELECT * FROM blog WHERE id=$blogid";
        $result = mysqli_query($con,$sql);
        $row=mysqli_fetch_assoc($result);
        $_SESSION['blogid']=$blogid;
        ?>



<div class="card mb-3">


          <div class="card-body">
          <h5 class="card title"><?=$row['blogtitle']?></h5>
       <p class="card-text"><?=$row['blog']?></p><br><br>
        <p class="card-text"><small class="text-muted"></small></p><br><br>
       
       
        </div>
        </div>
<div class="border-bottom mt-3"></div>
<br>

<?php



$yes=false;
//   $no=false;
  $uid1=$_SESSION['uid'];
  $blogid1=$_GET['id'];
  $sql1="SELECT uid FROM blog WHERE id ='$blogid1';";
  $result1 = mysqli_query($con,$sql1);


   $row1=mysqli_fetch_assoc($result1);
    if($uid1==$row1['uid']){

       echo "<a href=\"editblog.php?id=".$row['id']."\" style=\"text-decoration:none;color:black\" ><strong> Click to Edit</strong></a><br><br>";

     echo "<form action=\"delete.php?id=".$row['id']."\" method=\"post\"> <input type=\"submit\" value=\"delete\">    </form><br><br>";
  
    
       
    }
    
    ?>


 <!-- <form action="editblog.php" method="post"> -->
            
        <!-- <input type="submit" value="edit"> -->
        <!-- <input type="submit" value="delete"><br><br> -->
    
    <!-- </form>
    <form action="editblog.php" method="post">
            
        
        <input type="submit" value="delete"><br><br>
    
    </form> -->
    <form action="comment.php" method="post">
            
    
        Add Comment:   <textarea name="comment" cols="25" rows="1"></textarea><br><br>

        <input type="submit" value="Post comment"><br><br><br>
    
    </form>

    <h5>Comments:<h5>
        

    
</body>
</html>
<?php $sql = "SELECT username, comment FROM comments WHERE blogid='$blogid';";
 $result = mysqli_query($con,$sql);
 $num=mysqli_num_rows($result);

 if($num>0){
     while($row=mysqli_fetch_assoc($result)){

        

        foreach($row as $x => $val) {
           
        echo "$x:$val<br>";}
    echo"<br>";}
        }?>