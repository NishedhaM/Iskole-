<?php 
  

session_start();
  
if(!$_SESSION['id']){
    header('location:child_login.php');
}

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
//Shows the profile picture
$sql= "SELECT name FROM images where  member_id=$_SESSION[id] ";
        $query_run = mysqli_query($link, $sql);
            if($result = mysqli_query($link,$sql)){
                     if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_array($result)){
                                $image = $row['name'];
                                $image_src = "imgp/".$image;
                    

                                }
                      }
            }

// Attempt select query execution
$sql = "SELECT * FROM members WHERE id = $_SESSION[id]";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
       
        while($row = mysqli_fetch_array($result)){
           
            // $id= $row['id'];
            $first_name= $row['first_name'];
            $last_name= $row['last_name'];
            $email= $row['email'];
              
            // echo $id;
            // echo $email;
            // echo $first_name;
            // echo $last_name;
        }
       
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

$sql = "SELECT * FROM student WHERE student_id = $_SESSION[id]";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
       
        while($row = mysqli_fetch_array($result)){
           
            $g_name= $row['g_name'];
            $g_mobile= $row['g_mobile'];
            $address= $row['address'];
           
              
            // echo $NIC;
            // echo $mobile;
            }
       
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>


    


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="child_view_profile.css">
    <title>Edit Profile</title>
</head>
<body>
<img src="../images/logo.jpg" align="right" height="80px" width="80px">
    <form action="" method="POST">
    <div class="sidebar">
    <a  href="../child_dashboard.php">
      
    </a>
        
       <br>
      
  <a href="../child_dashboard.php">Dashboard</a>
  <a href="../Grades/child_grade.php">My Courses</a>
  <a href="../Quiz/child_quiz1.php">Quiz</a>
  <a href="child_profile.php">Profile</a>
  <a href="../child_Payment.php">Discussion</a>
  <a href="../child_Payment.php">Payment</a>
  <a href="../child_cal.php">Calendar</a>
  <a href="logout.php?logout=true">Logout</a>
  
   
  </div>
       
  
    <div class="main">
          <div class="main-form">

         
          <div class="sidebar-main">
            <div class="sidebar-user">
                <br>   <br>   <br>   <br>   <br>
               
                 <div>
                 <div class="imp">
<a href="./teacher_profile.php"><img src="<?php echo $image_src;  ?>"  alt=""  height="120px" width="120px" margin-left="80px"></div>

                 <h3><?php echo ucfirst($_SESSION['first_name']); ?> <?php echo ucfirst($_SESSION['last_name']); ?></h3>
                <span><?php echo ($_SESSION['email']); ?></span>
            </div>
         </div>
          <div class="form">
            
              <div id="contactform">

                  <p class="contact"><label for="name"></label></p>
                  <input id="name" name="first_name" placeholder="<?php echo ucfirst($first_name); ?>" required="" tabindex="1" type="text" disabled>

                  <p class="contact"><label for="name"></label></p>
                  <input id="name" name="last_name" color="yellow" placeholder="<?php echo ucfirst($last_name); ?>" required="" tabindex="1" type="text" disabled>

                 

                        <br>
                        <p class="contact"><label for="email"></label> Date Of Birth:</p> <br>
                       
                  <input id="dob" name="dob" placeholder=" Set a particular day:" required="" type="date" value="2008-08-26" disabled> 
                       
                       
                        <br>

                  <p class="contact"><label for="email"></label></p> 
                  <input id="email" name="email"  placeholder="<?php echo $email; ?>" required="" type="email" disabled> 
                 
                  <p class="contact"><label for="phone"></label></p> 
                  <input id="phone" name="g_name" placeholder="<?php echo ucfirst ($g_name); ?>" required="" type="text" disabled> <br>

                  <p class="contact"><label for="phone"></label></p> 
                  <input id="phone" name="g_mobile" placeholder="<?php echo ($g_mobile); ?>" required="" type="text" disabled> <br>
                 
                  <p class="contact"><label for="phone"></label></p> 
                  <input id="phone" name="address" placeholder="<?php echo ($address); ?>" required="" type="text" disabled> <br>
                 


                  
                  
              </div>
          </div>
    </div>
</div>
<br><br>
           
<div class="footer-main">

<div class="footer">

<footer>&copy; 2021    ALL RIGHTS RESERVED BY 361°</footer>
</div> 
</div>  
</form>
</body>
</html>

