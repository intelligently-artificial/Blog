
<?php
session_start();
 if(empty($_SESSION['loggedin']) ){
    header("location:login.php"); 
    exit;}
    include('mainconnect.php');

 require('nav.php');
 


 $sql = " Select * from blog;";
 $result = mysqli_query($con,$sql);
 $num=mysqli_num_rows($result);

 if($num>0){
     while($row=mysqli_fetch_assoc($result)){
         //echo var_dump($row);
        
       ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>AddBlog</title>


</head>
<body style="background-color : cornflowerblue";>
<a href="showblog.php?id=<?=$row['id']?>" style="text-decoration:none;color:black" > 

        <div class="row g-0">
        </div>

        <div class=" col-md-7">
          <div class="card-body">
          <h5 class="card title"><?=$row['blogtitle']?></h5>
       <p class="card-text text-truncate"><?=$row['blog']?></p>
        <p class="card-text"><small class="text-muted"></small></p><br><br>
       
        </div>
        </div>
     </a>
        </body>
</html>       


       
       <?php
       }
       


        

       
        
    
    
}
    
         