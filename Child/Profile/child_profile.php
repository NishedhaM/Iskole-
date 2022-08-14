<?php 
    session_start();
  
    if(!$_SESSION['id']){
        header('location:../../login.php');
    }

    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,'demo');
    if(isset($_POST['submit'])){
        $date = date('Y-m-d H:i:s');
        $query = "UPDATE student SET g_name='$_POST[g_name]', g_mobile='$_POST[g_mobile]', dob='$_POST[dob]',updated_at='$date',address='$_POST[address]' where student_id = '$_SESSION[id]'";
        // $query = "UPDATE members SET first_name='$_POST[first_name]', last_name='$_POST[last_name]' where email='$_POST[email]'";
        
        $query_run = mysqli_query($connection,$query);

        if( $query_run){
            echo '<script> alert("Your Profile Updated")</script>';

        }else{
            echo '<script> alert("Profile Not Updated")</script>';

        }
    }

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="child_profile.css">
    <title>Edit Profile</title>
</head>
<body>
<img src="../images/logo.jpg" align="right" height="60px" width="60px">
    <form action="" method="POST">
    <div class="sidebar">
    <a href="../child_dashboard.php"> <button class="btn1"><img src="../images/back.png" 
    height="80px" width="60px">  </button></a>
        
       <br><br><br><br><br><br>
      
  <a href="../child_dashboard.php">Dashboard</a>
  <a href="../Grades/child_grade.php">My Courses</a>
  <a href="../Quiz/child_quiz1.php">Quiz</a>
  <a href="teacher_editprofile_registered.php">Profile</a>
  <a href="../child_Payment.php">Payment</a>
  <a href="../child_cal.php">Calendar</a>
  <a href="logout.php?logout=true">Logout</a>
  
   
  </div>
       
 
    <div class="main">
   
    
        
          <div class="main-form">

         
          <div class="sidebar-main">
            <div class="sidebar-user">
                <br>  
              
                
                 <div>
                 <h3><?php echo ucfirst($_SESSION['first_name']); ?> <?php echo ucfirst($_SESSION['last_name']); ?></h3>
                <span><?php echo ($_SESSION['email']); ?></span>
            </div>
         </div>
          <div class="form">
            
              <div id="contactform">

                  <p class="contact"><label for="name"></label></p>
                  <input id="name" name="first_name" placeholder="<?php echo ucfirst($_SESSION['first_name']); ?>" ="" tabindex="1" type="text" disabled>

                  <p class="contact"><label for="name"></label></p>
                  <input id="name" name="last_name" color="yellow" placeholder="<?php echo ucfirst($_SESSION['last_name']); ?>" ="" tabindex="1" type="text" disabled>

                 

                        <br>
                        <p class="contact"><label for="email"></label> Date Of Birth:</p> <br>
                       
                  <input id="dob" name="dob" placeholder=" Set a particular day:" ="" type="date" value="2008-08-26"> 
                       
                       
                        <br>

                  <p class="contact"><label for="email"></label></p> 
                  <input id="email" name="email"  placeholder="<?php echo ($_SESSION['email']); ?>" ="" type="email" disabled> 
                 
                 
                  <p class="contact"><label for="phone"></label></p> 
                  <input id="phone" name="g_name" placeholder="Enter Your Guardian's Name" ="" type="text" > <br>

                  <p class="contact"><label for="phone"></label></p> 
                  <input id="phone" name="g_mobile" placeholder="Enter Your Guardian's Mobile Number" ="" type="text"> <br>

                  <p class="contact"><label for="phone"></label></p> 
                  <input id="phone" name="address" placeholder="Enter Your Address" ="" type="text"> <br>


                  <input class="buttom" name="submit" id="submit" tabindex="5" value="Save Changes" type="submit"> 
                  
                  
              </div>
          </div>
    </div>
</div>
<br><br>

<br><br><br><br>
<hr style="color: blue; ">           
<div class="footer-main">

<div class="footer">

<footer>&copy; 2021    ALL RIGHTS RESERVED BY 361°</footer>
</div> 
</div>  
</form>
</body>
</html>

