<?php include "connection.php"; 
session_start();

if(!$_SESSION['id']){
    header('location:../../login.php');
}?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="child_exhi.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <title>1st Lesson</title>
</head>
<body>
    
    <div class="nav-container">
        <div class="logo">
          <img src="../images/logo.jpg" align="right" height="80px" width="80px" >
      </div> 
      <a href="../child_dashboard.php"> <button class="btn1"><img src="../images/back.png" height="80px" width="60px">  </button></a>
       
             
         <br>  
         <br>  
         <br>  
        
          
          <h1 class="title" align="center"> Our Creations
          </h1>
      
       
          <br>  <br>  <br>  <br>
         <div class="msg">
           <p class="one"> Welcome all to the e-ස්කෝලේ exhibition.  These exhibitions encourage and
               challenge children to be engaged and stimulated by art, and are supported
                by a range of interactive activities. Entry to the Childrens Gallery is free.
            For the viewers convinience all the creations are catogarized according to their grades from 1 to 5. </p>
                <p class="two">
                    For the encouragement of e-ස්කෝලේ fellows, you can cheer up for their creations as you wish.
                </p>
         </div>
         </div>
         <br>  <br> 
        
         <?php
      $i = 1;
      $rows = mysqli_query($conn, "SELECT * FROM tb_upload ORDER BY like_count DESC")
      ?>
   <br>
   
  
      <?php foreach ($rows as $row) : 
   
      $ID=$row['id'];
      $rows = mysqli_query($conn, "SELECT * FROM `tb_upload` ORDER BY like_count DESC");
      $count=$row['like_count'];?>
     <div class="view">
       
    
      <img src="uploads/<?php echo $row["image"]; ?> "  width = 350 height =  280 title="
      <?php echo $row['image']; ?>"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <?php $id= $row['uploader_id']; ?>
     
     <div class="Name">
     
     <?php
      // echo $row["name"]; 
      ?><p>--</p><br></div>
     </div>
    
    <div class="caption">  
<?php


							$sql = "SELECT * FROM members WHERE id=$id";
							$res = mysqli_query($conn,  $sql);
							if (mysqli_num_rows($res) > 0) {
									while ($row = mysqli_fetch_assoc($res)) {?>
									<?php  echo $row['first_name']; ?>
											<td><?php  echo $row['last_name']; ?>
									
										<?php
												}
										}
										else {
												echo "No Record Found";
										}

							?><br>
           
      
                
                  <?php 
               $sql="SELECT * FROM `cheer` WHERE img_id=$ID AND id=$_SESSION[id] ";
               $query_run = mysqli_query($conn, $sql);
                if($result = mysqli_query($conn,$sql)){
                     if(mysqli_num_rows($result) > 0){?>

                     
                   <button onclick="like(<?php echo $ID?>)" class="l" disabled>Like</button>
                   <div id="likeCount" class="lik">Likes : <?php echo $count?></div> 
                  <br> <br> <br> <br> <br> <br>
                  <br> <br> <br><br> <br>
                  <br> <br> <br><br> <br>
                 </div>
                 <?php
                     }else{?>

                      <button onclick="like(<?php echo $ID?>)" class="l">like</button>
                   <div id="likeCount" class="lik">Likes : <?php echo $count?></div> 
                  <br> <br> <br> <br> <br> <br>
                  <br> <br> <br><br> <br>
                  <br> <br> <br><br> <br>
                 </div>
                 
             
                 
                    <?php }}?>
              
              
  
                  
    
      <?php endforeach; ?>
     
    <br>   <br>   <br> <br>   <br>   <br>
   
 
         
  
   
<hr style="color: blue; ">           
<div class="footer-main">

<div class="footer">

<footer>&copy; 2021    ALL RIGHTS RESERVED BY 361°</footer>
</div> 
</div> 
<script>
    $(document).ready(function(){
      $('.content').click(function(){
        $('.content').toggleClass("heart-active")
        $('.text').toggleClass("heart-active")
        $('.numb').toggleClass("heart-active")
        $('.heart').toggleClass("heart-active")
      });
    });
  </script>
  <script src="child_exhi1.js"></script>
</body>
</html>