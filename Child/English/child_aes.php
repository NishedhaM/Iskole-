<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="child_aes.css"/>
    <link href="http://fonts.cdnfonts.com/css/cute" rel="stylesheet">
                
    <title>Maths</title>
</head>
<body>
  <div class="main-bg">
    <img src="images/logo.jpg" align="right" height="80px" width="80px">
    <div class="row">
        <?php 
       if(isset($_POST['view_btn']))
       {
           $id = $_POST['view_id'];
        //    echo $id;

           
       
           ?>
           <div class="backbtn">
           <form action="../Subject/child_subject.php" method="post">
            <input type="hidden" name="view_id" value="<?php echo $id?>">
            <button type="submit" name="view_btn" class="btn1"> <img src="../images/back.png" height="80px" width="60px"> 
            </button>  </form> 
        </div>
  <div class="icon-bar">
  <a class="active" href="../child_dashboard.php"><img src="images/home.png" height="30px" width="30px"/></a> 
      <a href="../child_profile.php"><img src="images/profile1.png" height="30px" width="30px"/></a> 
      <a href="child>discussion.php"><img src="images/notifications.png" height="30px" width="30px"/></a> 
    </div>  

    <div class="sidebar1">
        
        </div>
        <h1 class="title" align="center">Let's Have a Fun</h1>
        <div class="topnav">
         
         <!-- <p class="paragraph"  align="center"><i>The only way to learn Mathematics   <br> is to do Mathematics.</i>

          <br> -Franck Smith-</p> -->
         
       </div>
   

  <div class="grid-container">
  <div class="sidebar">   
  <!-- <a href="../Grades/child_grade.php">Grades</a>
  <a href="../Subject/child_subject.php">Subject</a>
  <a href="../Quiz/child_quiz1.php">Quiz</a>
  <a href="../Discussion/child_discussion.php">Discussion</a> -->
  </div>
   
  <div class="imgbox"> 
     </div> 
     <div class="container1">
   
  

       <?php 
       if(isset($_POST['view_btn']))
       {
           $id = $_POST['view_id'];
          //  echo $id;
       
           ?>
       
      
        <div class="subnav1">
        <form action="child_a2.php" method="post">
          <p class="theme">Karoake Party</p>
          <!-- <p><small><i>"Use memory work and <br><br> recitation."</i></small></p> -->
        <input type="hidden" name="view_id" value="<?php echo $id?>">
        <img src="images/k.png" height="200px" width="200px">
        <button type="submit" name="view_btn" class="btn2">
         Sing With Me
        </button>  </form> 
       </div>
       <div class="subnav2">
        <form action="child_a1.php" method="post">
          <p class="theme">Handicrafts</p> 
          <!-- <p><small><i>"Be wise with your <br><br> homework."</i></small></p> -->
        <input type="hidden" name="view_id" value="<?php echo $id?>">
        <img src="images/c.png" height="180px" width="180px"> <br><br>
        <button type="submit" name="view_btn" class="btn2">
         Start
        </button>  </form> 
       </div>
     </div>

<br>

<?php
       }
      }
       ?>
     
   </div>

<!-- <div class="meet"><a href="teacher_profile.php">  
  <button class="teacher_button">Meet Your Teacher</button></a><br><br><br><br><br><br>
 </div> -->


<br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br>
   
         
<div class="footer-main">

<div class="footer">

<footer>&copy; 2021    ALL RIGHTS RESERVED BY 361°</footer>
</div> 
</div>           

     
         </div>

    
</body>
</html>