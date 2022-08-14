<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="child_m2.css">
    <title>Maths-Video</title>


    
</head>
<body>
<div class="nav-container">
        <div class="logo">
          <img src="../images/logo.jpg" align="right" height="80px" width="80px" >
      </div> 
    <nav>
  
           
    <div class="icon-bar">
    <a class="active" href="child_dashboard.php"><img src="../images/home.png" height="30px" width="30px"/></a> 
    <a href="child_profile.php"><img src="../images/profile1.png" height="30px" width="30px"/></a> 
    <a href="child>discussion.php"><img src="../images/notifications.png" height="30px" width="30px"/></a> 
                 
    </div>  
    </nav>
        
          
          
      
       
          <br>  <br>  <br>  <br>
    <div class="container">

        <!-- <a href="upload.php" class="btn">Upload a new video</a>
         -->
        <div class="row">
        <?php 
       if(isset($_POST['view_btn']))
       {
           $id = $_POST['view_id'];
        //    echo $id;

           
       
           ?>
           <div class="backbtn">
           <form action="child_aes.php" method="post">
            <input type="hidden" name="view_id" value="<?php echo $id?>">
            <button type="submit" name="view_btn" class="btn1"> <img src="../images/back.png" height="80px" width="60px"> 
            </button>  </form> 
        </div>
        <h1 class="title" align="center"> Karoake Party</h1>
            <?php
            include("db.php");
            $q="SELECT * FROM video WHERE gid='$id' AND sid='S4' AND uid='U1' AND content_type='mp4'";
            $query=mysqli_query($conn,$q);

            while($row=mysqli_fetch_array($query)){
                $name = $row['name'];
                ?>
               
          
                
                <video id="myVideo" width="30%" controls>
                    <source src="<?php echo 'upload/'.$name;?>">
                </video>
                
           <?php  }
       }
       
           ?>
            <br> <br> <br>
        </div>
       <br>
    </div>
          
   
</body>
</html>