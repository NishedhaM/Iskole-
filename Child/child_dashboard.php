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
    <link rel="stylesheet" href="child_dashboard.css"/>
    <title>Dashboard</title>
</head>


<body>

<div class="grid-container">
  <div class="sidebar">
  <img src="images/logo.jpg" align="left" height="80px" width="80px">
        
        <br><br><br><br><br><br>
  <a href="child_dashboard.php">Dashboard</a>
  <a href="./Grades/child_grade.php">My Courses</a>
  <a href="./Quiz/child_quiz1.php">Quiz</a>
  <a href="./Discussion/child_discussion.php">Discussion</a>
  <a href="./Profile/child_profile.php">Profile</a>
  <a href="child_cal.php">Calendar</a>
  <a href="./Exhibition/child_exhi.php">Exhibition</a>
  <a href="child_Payment.php">Payment</a>
  <!-- <a href="logout.php?logout=true">Logout</a> -->
   
  </div>
  <div class="main-content">
  <div class="welcome-bar">
  <p>Welcome <?php echo ucfirst($_SESSION['first_name']); ?> to the <small>e-ස්කෝලේ</small>     Learning Course<br> </p>
  </div>
  <a href="../logout.php?logout=true"><button class="logout">
  <img src="images/logout.png"  height="30px" width="30px">
  <p >logout</p>
  </button></a>
  <?php

  if($c_date>=$subs){?>
    <div class="nav-container3"> 
  <img src="images/exhit.png" height="108px" width="110px" align="right"/>
  <p>Creations </p>
  <a href="./Exhibition/child_exhi1.php"> <button class="block">Upload Drawings</button></a>
  </div><?php
  }else{
    $sql="SELECT student_id FROM `paid_items` WHERE student_id=$_SESSION[id] AND valid_from>='$start' AND valid_from<='$end'";
    $query_run = mysqli_query($conn, $sql);
    if($result = mysqli_query($conn,$sql)){
    if(mysqli_num_rows($result) > 0){?>
    <div class="nav-container3"> 
    <img src="images/exhit.png" height="108px" width="110px" align="right"/>
    <p>Creations </p>
    <a href="./Exhibition/child_exhi1.php"> <button class="block">Upload Drawings</button></a>
    </div>
    <?php }else{?>
    <div class="nav-container3"> 
    <img src="images/exhit.png" height="108px" width="110px" align="right"/>
    <p>Creations </p>
    <a href="./Exhibition/child_exhi1.php"> <button class="block" disabled><img src="unlock.png" height="30px" width="30px"></button ></a>
    </div>
    <?php
    }}
  }?>
  
  <br><br>
  <?php
   if($c_date>=$subs){?>
    <div class="nav-container3"> 
  <img src="images/exhit.png" height="108px" width="110px" align="right"/>
  <p>Talents </p>
  <a href="./Exhibition/child_exhi2.php"> <button class="block6">Upload Videos</button></a>
  </div><?php
  }else{
  $sql="SELECT student_id FROM `paid_items` WHERE student_id=$_SESSION[id] AND valid_from>='$start' AND valid_from<='$end'";
  $query_run = mysqli_query($conn, $sql);
  if($result = mysqli_query($conn,$sql)){
  if(mysqli_num_rows($result) > 0){?>
  <div class="nav-container3"> 
  <img src="images/exhit.png" height="108px" width="110px" align="right"/>
  <p>Talents </p>
  <a href="./Exhibition/child_exhi2.php"> <button class="block6">Upload Videos</button></a>
  </div>
  <?php }else{?>
  <div class="nav-container3"> 
  <img src="images/exhit.png" height="108px" width="110px" align="right"/>
  <p>Talents </p>
  <a href="./Exhibition/child_exhi2.php"> <button class="block6" disabled><img src="unlock.png" height="30px" width="30px"></button></a>
  </div>
  <?php
  }}}?>
  <div class="jobs">
  <img src="images/book.png" align="left" height="100px" width="100px">
  <img src="images/book.png" align="right" height="100px" width="100px">
  <h3 class="quote1" align="center"><small>You can <br> </small>
    <font color="#FF2626">L</font>
    <font color="#cfc815">E</font>
    <font color="#00ff11">A</font>
    <font color="#00d5ff">R</font>
    <font color="#ff00f7">N</font>
    <br>
    <small>Something new </small><br>
    <font color="#12e6e2">E</font>
    <font color="#ff9305">V</font>
    <font color="#1428de">E</font>
    <font color="#ff17f0">R</font>
    <font color="#87cf15">Y</font>
    <font color="#d505ff">D</font>
    <font color="#cf7215">A</font>
    <font color="#ff0593">Y</font>
                        
                     
                        <br> 
                        <small>If you</small> <br> 
                        <font color="#c4b02f">L</font>
                        <font color="#eb1add">I</font>
                        <font color="#0fabbd">S</font>
                        <font color="#f01f1f">T</font>
                        <font color="#c344e3">E</font>
                        <font color="#3ea612">N</font>
                        
                    </h3>
                    
                 
                </div>
                
  </div>
  <div class="calendarandupdates">
                    <div class="calendar" align="center">
                    “Education <br>is the most powerful weapon <br> which you can use<br> to change the world.” <br><br><small><i>– Nelson Mandela - </small></i>
                    <?php

if($c_date>=$subs){?>
   <div class="nav-container4">  
                    
                    <img src="images/art1.png" height="120px" width="120px" align="left"/>
                   <p>My Drawing Board</p>
                   <a href = "child_draw.php">
                   <button class="block3">Start</button></a>
                  </div><?php
}else{
                $sql="SELECT student_id FROM `paid_items` WHERE student_id=$_SESSION[id] AND valid_from>='$start' AND valid_from<='$end'";
                
                $query_run = mysqli_query($conn, $sql);
                if($result = mysqli_query($conn,$sql)){
                     if(mysqli_num_rows($result) > 0){
                     
                       ?> 
                   
                
                       <div class="nav-container4">  
                    
                    <img src="images/art1.png" height="120px" width="120px" align="left"/>
                   <p>My Drawing Board</p>
                   <a href = "child_draw.php">
                   <button class="block3">Start</button></a>
                  </div> <?php }else{?>
                    <div class="nav-container4">  
                    
                    <img src="images/art1.png" height="120px" width="120px" align="left"/>
                   <p>My Drawing Board</p>
                   <a href = "child_draw.php">
                   <button class="block3" disabled><img src="unlock.png" height="30px" width="30px"></button></a>
                  </div><?php


}}}?>
                      
                  <div class="nav-container1"> 
                    
                        <div class="rate">
                        <p>Make Yourself Proud</p>
                            <input type="radio" id="star8" name="rate" value="8" />
                            <label for="star8" title="text">8 stars</label>
                            <input type="radio" id="star7" name="rate" value="7" />
                            <label for="star7" title="text">7 stars</label>
                            <input type="radio" id="star6" name="rate" value="6" />
                            <label for="star6" title="text">6 star</label>
                            <input type="radio" id="star5" name="rate" value="5" />
                            <label for="star5" title="text">5 stars</label>
                            <input type="radio" id="star4" name="rate" value="4" />
                            <label for="star4" title="text">4 stars</label>
                            <input type="radio" id="star3" name="rate" value="3" />
                            <label for="star3" title="text">3 stars</label>
                            <input type="radio" id="star2" name="rate" value="2" />
                            <label for="star2" title="text">2 stars</label>
                            <input type="radio" id="star1" name="rate" value="1" />
                            <label for="star1" title="text">1 star</label>
                            
                          </div>
                         
                      </div>
                      <?php
                      if($c_date>=$subs){?>
                        
                        <div class="nav-container2"> 
                        <p>A chat area for children <br>
                            <small>now with parental control.</small> </p>
                       <a href="./ChatApp/login.php">
                          <button class="block2">Join</button></a>
                      </div><?php
                     }else{
                               
                $sql="SELECT student_id FROM `paid_items` WHERE student_id=$_SESSION[id] AND valid_from>='$start' AND valid_from<='$end'";
                
                $query_run = mysqli_query($conn, $sql);
                if($result = mysqli_query($conn,$sql)){
                     if(mysqli_num_rows($result) > 0){
                     
                       ?>
                      <div class="nav-container2"> 
                        <p>A chat area for children <br>
                            <small>now with parental control.</small> </p>
                       <a href="./ChatApp/login.php">
                          <button class="block2">Join</button></a>
                      </div>
                      <?php }else{?>
                        <div class="nav-container2"> 
                        <p>A chat area for children <br>
                            <small>now with parental control.</small> </p>
                       <a href="./ChatApp/login.php">
                          <button class="block2" disabled><img src="unlock.png" height="30px" width="30px"></button></a>
                      </div><?php


}}}?>

<?php
if($c_date>=$subs){?>
          <p class="msg">Your trial will expire within 7 days from <?php echo $date?></p> 
                                     
  <?php
}else{
$sql="SELECT student_id FROM `paid_items` WHERE student_id=$_SESSION[id] AND valid_from>='$start' AND valid_from<='$end'";
                
                $query_run = mysqli_query($conn, $sql);
                if($result = mysqli_query($conn,$sql)){
                     if(mysqli_num_rows($result) > 0){
                     
                       ?>
                       <?php }else{?>

              <p class="msg">You have not subscribed to any grade. Subscribe to unlock the <br>e-ස්කෝලේ website. </p> 
                      <?php }
                      
                      
                      
                      }}?>

                        
<div class="footer-main">

<div class="footer">
  
<footer>&copy; 2021    ALL RIGHTS RESERVED BY 361°</footer>
</div> 
</div> 





</div>

</body>
</html> 
