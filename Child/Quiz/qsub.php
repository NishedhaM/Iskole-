<?php
include_once 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="child_quiz2.css"/>
    <title>Quiz2</title>
</head>

<body>
    <div class="nav-container">
        <div class="logo">
          <img src="images/logo.jpg" align="right" height="80px" width="80px" >
      </div> 
      <a href="child_quiz1.php">
    <button class="btn1"><img src="images/back.png" height="80px" width="60px">  </button></a>
       
             
           <nav>
  
           
                <div class="icon-bar">
                <a class="active" href="child_dashboard.php"><img src="images/home.png" height="30px" width="30px"/></a> 
      <a href="child_profile.php"><img src="images/profile1.png" height="30px" width="30px"/></a> 
      <a href="child>discussion.php"><img src="images/notifications.png" height="30px" width="30px"/></a> 
                 
                </div>  
              </nav>
        
          
          <h1 class="title" align="center"> "Don't stress, do your best, forget the 
            rest, and all the best."
          </h1>
      
       
      
        
        <?php


if(isset($_POST['view_btn']))
{
    $id = $_POST['view_id'];
    // echo $id;

    ?>
        <div class="chapterNames">
        <form action="child_quiz2.php" method="post">
        <input type="hidden" name="view_id" value="G1">
        <button type="submit" name="view_btn" class="button M ">English
        </button>  </form>
        </div>
        <div class="chapterNames">
        <form action="child_quiz2.php" method="post">
        <input type="hidden" name="view_id" value="G1">
        <button type="submit" name="view_btn" class="button E  ">  Maths
        </button>  </form>
        </div>
        <div class="chapterNames">
        <form action="child_quiz2.php" method="post">
        <input type="hidden" name="view_id" value="G1">
        <button type="submit" name="view_btn" class="button S "> Environmental Studies
        </button>  </form>
        </div>
        <div class="chapterNames">
        <form action="child_quiz2.php" method="post">
        <input type="hidden" name="view_id" value="G1">
        <button type="submit" name="view_btn" class="button A "> Sinhala
        </button>  </form>
        </div>
      
      </div>
      

    <!-- <table width="80%" border="1">
    <tr>
    <thead>
   
   

    </tr>
  </thead> -->
  <?php 
       if(isset($_POST['view_btn']))
       {
           $id = $_POST['view_id'];
          //  echo $id;
       
           ?>
    <?php
 $sql="SELECT * FROM quizz WHERE gid='G1' AND sid='S1'";
 $result_set=mysqli_query($conn,$sql);
 while($row=mysqli_fetch_array($result_set))
 {
  ?>

        <?php
 }
}
}

 ?>
     <!-- <hr style="color: blue; ">            -->
<div class="footer-main">

<div class="footer">

<footer>&copy; 2021    ALL RIGHTS RESERVED BY 361°</footer>
</div> 
</div>  
</body>
</html>