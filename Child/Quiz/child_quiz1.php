<?php 
include 'db.php';
    session_start();
  
    if(!$_SESSION['id']){
      
        header('location:../login.php');
    }

    date_default_timezone_set('Asia/Colombo');
    $date = date('Y-m-d H:i:s');
    $start = date("Y-m-1 00:00:00");
    $end = date("Y-m-d H:i:s");
    $subs= date('Y-m-d H:i:s', strtotime($date. ' - 7 days')); 
?>

<?php 



$sql="SELECT created_at FROM `members` WHERE id=$_SESSION[id]";
$query_run = mysqli_query($conn, $sql);
if($result = mysqli_query($conn,$sql)){
if(mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_array($result)){
  $c_date=$row['created_at'];
  }}}
 
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grades</title>
    <link rel="stylesheet" href="child_quiz1.css"/>
</head>
<body>


    <div class="main">


    <div class="nav-container">
      <a href="../child_dashboard.php">
        <button class="btn1"><img src="../images/back.png" height="80px" width="60px"></button>
      
      </a>
      <img src="../images/logo.jpg" align="right" height="80px" width="80px">
      <nav>


      <div class="icon-bar">
      <a class="active" href="../child_dashboard.php"><img src="../images/home.png" height="30px" width="30px"/></a> 
      <a href="../child_profile.php"><img src="../images/profile1.png" height="30px" width="30px"/></a> 
      <a href="../child>discussion.php"><img src="../images/notifications.png" height="30px" width="30px"/></a> 

      </div>
    </nav>


      <h1 class="title" align="center">Quiz</h1>
      <nav>



      </nav>
    </div>
      <br><br><br>

      <?php
       if($c_date>=$subs){?>
          <div class="gr1">
        <form action="../Quiz/qsub.php" method="post">
        <input type="hidden" name="view_id" value="G1">
              <button type="submit" name="view_btn" class="button1"> <img src="images/q.png" align="left"  height="100px" width="100px">
              <br><br><h6>Grade 1</h6>
        </button></form></div> <?php
       }else{
                $sql="SELECT student_id FROM `paid_items` WHERE student_id=$_SESSION[id] AND gid='G1' AND valid_till>='$date'";
                ;
                $query_run = mysqli_query($conn, $sql);
                if($result = mysqli_query($conn,$sql)){
                     if(mysqli_num_rows($result) > 0){
                     
                       ?>
      <div class="gr1">
        <form action="../Quiz/qsub.php" method="post">
        <input type="hidden" name="view_id" value="G1">
              <button type="submit" name="view_btn" class="button1"> <img src="images/q.png" align="left"  height="100px" width="100px">
              <br><br><h6>Grade 1</h6>
        </button></form></div> <?php }else{?>
          <div class="gr1">
        <form action="../Quiz/qsub.php" method="post">
        <input type="hidden" name="view_id" value="G1">
              <button type="submit" name="view_btn" class="button1" disabled> <img src="images/q.png" align="left"  height="100px" width="100px">
              <br><br> <h6>Grade 1</h6><br><br> <img src="unlock.png" height="70px" width="70px">
        </button></form></div> <?php


}}}?>

<?php
 if($c_date>=$subs){?>
   <div class="gr2">
        <form action="../Quiz/qsub.php" method="post">
        <input type="hidden" name="view_id" value="G2">
        <button type="submit" name="view_btn" class="button1"> <img src="images/q.png" align="left"  height="100px" width="100px">
              <br><br><h6>Grade 2</h6>
        </button></form>  </div> <?php
 }else{
                $sql="SELECT student_id FROM `paid_items` WHERE student_id=$_SESSION[id] AND gid='G2' AND valid_till>='$date'";
                ;
                $query_run = mysqli_query($conn, $sql);
                if($result = mysqli_query($conn,$sql)){
                     if(mysqli_num_rows($result) > 0){
                     
                       ?>
      <div class="gr2">
        <form action="../Quiz/qsub.php" method="post">
        <input type="hidden" name="view_id" value="G2">
        <button type="submit" name="view_btn" class="button1"> <img src="images/q.png" align="left"  height="100px" width="100px">
              <br><br><h6>Grade 2</h6>
        </button></form>  </div><?php }else{?>
          <div class="gr2">
        <form action="../Quiz/qsub.php" method="post">
        <input type="hidden" name="view_id" value="G2">
        <button type="submit" name="view_btn" class="button1" disabled> <img src="images/q.png" align="left"  height="100px" width="100px">
        <br><br> <h6>Grade 2</h6><br><br> <img src="unlock.png" height="70px" width="70px">
        </button></form>  </div>
          <?php


}}}?>
        <?php
         if($c_date>=$subs){?>
          <div class="gr3">
        <form action="../Quiz/qsub.php" method="post">
        <input type="hidden" name="view_id" value="G3">
        <button type="submit" name="view_btn" class="button1"> <img src="images/q.png" align="left"  height="100px" width="100px">
              <br><br><h6>Grade 3</h6>
        </button></form></div><?php
         }else{
                $sql="SELECT student_id FROM `paid_items` WHERE student_id=$_SESSION[id] AND gid='G3' AND valid_till>='$date'";
                ;
                $query_run = mysqli_query($conn, $sql);
                if($result = mysqli_query($conn,$sql)){
                     if(mysqli_num_rows($result) > 0){
                     
                       ?>
               
       <div class="gr3">
        <form action="../Quiz/qsub.php" method="post">
        <input type="hidden" name="view_id" value="G3">
        <button type="submit" name="view_btn" class="button1"> <img src="images/q.png" align="left"  height="100px" width="100px">
              <br><br><h6>Grade 3</h6>
        </button></form></div><?php }else{?>
          <div class="gr3">
        <form action="../Quiz/qsub.php" method="post">
        <input type="hidden" name="view_id" value="G3">
        <button type="submit" name="view_btn" class="button1" disabled> <img src="images/q.png" align="left"  height="100px" width="100px">
        <br><br> <h6>Grade 3</h6><br><br> <img src="unlock.png" height="70px" width="70px">
        </button></form></div>
          <?php


}}}?>
        <?php
         if($c_date>=$subs){?>
          <div class="gr4">
        <form action="../Quiz/qsub.php" method="post">
        <input type="hidden" name="view_id" value="G4">
        <button type="submit" name="view_btn" class="button1"> <img src="images/q.png" align="left"  height="100px" width="100px">
              <br><br><h6>Grade 4</h6>
        </button></form></div> <?php
         }else{
                $sql="SELECT student_id FROM `paid_items` WHERE student_id=$_SESSION[id] AND gid='G4' AND valid_till>='$date'";
                ;
                $query_run = mysqli_query($conn, $sql);
                if($result = mysqli_query($conn,$sql)){
                     if(mysqli_num_rows($result) > 0){
                     
                       ?>
     <div class="gr4">
        <form action="../Quiz/qsub.php" method="post">
        <input type="hidden" name="view_id" value="G4">
        <button type="submit" name="view_btn" class="button1"> <img src="images/q.png" align="left"  height="100px" width="100px">
              <br><br><h6>Grade 4</h6>
        </button></form></div><?php }else{?>
          <div class="gr4">
        <form action="../Quiz/qsub.php" method="post">
        <input type="hidden" name="view_id" value="G4">
        <button type="submit" name="view_btn" class="button1" disabled> <img src="images/q.png" align="left"  height="100px" width="100px">
        <br><br> <h6>Grade 4</h6><br><br> <img src="unlock.png" height="70px" width="70px">
        </button></form></div>
                
        <?php


}}}?>
        <?php
         if($c_date>=$subs){?>
         <div class="gr5">
        <form action="../Quiz/qsub.php" method="post">
        <input type="hidden" name="view_id" value="G5">
        <button type="submit" name="view_btn" class="button1"> <img src="images/q.png" align="left"  height="100px" width="100px">
              <br><br><h6>Grade 5</h6>
        </button></form></div><?php
         }else{
                $sql="SELECT student_id FROM `paid_items` WHERE student_id=$_SESSION[id] AND gid='G5' AND valid_till>='$date'";
                ;
                $query_run = mysqli_query($conn, $sql);
                if($result = mysqli_query($conn,$sql)){
                     if(mysqli_num_rows($result) > 0){
                     
                       ?>
<div class="gr5">
        <form action="../Quiz/qsub.php" method="post">
        <input type="hidden" name="view_id" value="G5">
        <button type="submit" name="view_btn" class="button1"> <img src="images/q.png" align="left"  height="100px" width="100px">
              <br><br><h6>Grade 5</h6>
        </button></form></div><?php }else{?>
          <div class="gr5">
        <form action="../Quiz/qsub.php" method="post">
        <input type="hidden" name="view_id" value="G5">
        <button type="submit" name="view_btn" class="button1" disabled> <img src="images/q.png" align="left"  height="100px" width="100px">
        <br><br> <h6>Grade 5</h6><br><br> <img src="unlock.png" height="70px" width="70px">
        </button></form></div>
        <?php


}}}?>
    
        <br>  <br>  <br> <br>

<hr style="color: blue; ">           
<div class="footer-main">

<div class="footer">

<footer>&copy; 2021    ALL RIGHTS RESERVED BY 361°</footer>
</div> 
</div> 
  </div>
  
  
</body>
</html>
