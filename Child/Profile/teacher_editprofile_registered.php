<?php
session_start();
  
    if(!$_SESSION['id']){
        header('location:child_login.php');
    }

    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,'demo');
    

$sql= "SELECT name FROM images where  member_id=$_SESSION[id] ";
        $query_run = mysqli_query($connection, $sql);
            if($result = mysqli_query($connection,$sql)){
                     if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_array($result)){
                                $image = $row['name'];
                                $image_src = "imgp/".$image;
                    

                                }
                      }
            }
                  
          
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,minimum-scale=1">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="child_profile.css">
   
    
</head>
<body>
    
<img src="../images/logo.jpg" align="right" height="80px" width="80px">  

<!-- <button  class="but1" ><a href="child_view_profile.php"> View Profile  </button></a> -->
    

    <div class="sidebar">
   
     <br>
    
      
  <a href="../child_dashboard.php">Dashboard</a>
  <a href="../Grades/child_grade.php">My Courses</a>
  <a href="../Quiz/child_quiz1.php">Quiz</a>
  <a href="child_profile.php">Profile</a>
  <a href="../child_Payment.php">Payment</a>
  <a href="../child_Payment.php">Discussion</a>
  <a href="../child_cal.php">Calendar</a>
  <a href="logout.php?logout=true">Logout</a>
  
   
  </div>
 
  <div class="main">
   
       
        
   <div class="main-form">
       <br><br>
       <div class="heading">
   <h3><?php echo ucfirst($_SESSION['first_name']); ?> <?php echo ucfirst($_SESSION['last_name']); ?></h3>
         <span><?php echo ($_SESSION['email']); ?></span></div>
   <div class="imp">
<a href="./teacher_profile.php"><img src="<?php echo $image_src;  ?>"  alt=""  height="300px" width="300px" margin-left="80px"></div>

        <div class="sidebar-main">
            <div class="image">
                
                <form method="post" action="teacher_editprofile_registered_action.php" enctype='multipart/form-data' class="upbtn">
                    <input style="margin-left: 600px;margin-top:30px;" type='file' name='file' />
                   <input style="margin-left: 600px;margin-top:10px;" type='submit' value='Upload Image' name='but_upload'>
                   </form> 
                <div>
               
            </div>
         </div>

           
<a href="child_view_profile.php"> <button class="btn2" height="80px" width="60px"> View profile </button></a>
                   
</div>

   
   <div class="sidebar-main">
     <div class="sidebar-user">
    
        
         
          <div>
              <br><br><br>
         
     </div>
  </div>

          
  
        
        
         
   
         
<div class="footer-main">

<div class="footer">

<footer>&copy; 2021    ALL RIGHTS RESERVED BY 361°</footer>
</div> 
</div>  
</form>
</body>
</html>
