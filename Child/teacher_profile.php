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
 
// Attempt select query execution
$sql = "SELECT * FROM members WHERE id = 47";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
       
        while($row = mysqli_fetch_array($result)){
           
            $id= $row['id'];
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

$sql = "SELECT * FROM teacher WHERE teacher_id = 47";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
       
        while($row = mysqli_fetch_array($result)){
           
            $NIC= $row['NIC'];
            $mobile= $row['mobile'];
           
              
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
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,minimum-scale=1">
    <title>TeacherProfile</title>
    <link rel="stylesheet" href="teacherprofile.css">
   
</head>
<body>
    <input type="checkbox" name="" id="sidebar-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <div class="brand-flex">
                <img src="teacher_images/logo.png" width="50px" alt="">

                <div class="brand-icons">
                  
                </div>
            </div>
        </div>

        <div class="sidebar-main">
        <div class="sidebar-user">
                <img src="../images/logo.jpg"  align ="center"alt="" height="60px" width="60px">
                 <div>
               
            </div>

         </div>

         <div class="sidebar-menu">
               
                        


 
 <a href="../child_dashboard.php">Dashboard</a>

  <a href="../Maths/child_maths.php">Mathematics</a>
  <a href="../Sinhala/child_sinhala.php">Sinhala</a>
  <a href="../English/child_eng.php">English</a>
  <a href="../Aesthetic/child_aes.php">Aesthetic</a>
 
  <a href="../Quiz/child_quiz1.php">Quiz</a>
  <a href="../Profile/child_profile.php">Profile</a>
  
  <a href="logout.php?logout=true">Logout</a>



        </div>
    </div>

</div>


        <div class="main-content">
            <header>
                <div class="menu-toggle">
                    <label for="sidebar-toggle">
                        <span class="las la-bars"></span>
                    </label>
                </div>
                

                <div class="header-icons">
                    <span class="las la-search"></span>
                    <span class="las la-bookmark"></span>
                    <span class="las la-sms"></span>
                </div>
            </header>

            <main>
            <!-- <div class="circle">
                    <img src="images/baby.png" class="img-corner" alt="" height="70px" width="55px" >
                </div>
                
                 <div>
                 <h3><?php echo ucfirst($_SESSION['first_name']); ?> <?php echo ucfirst($_SESSION['last_name']); ?></h3>
                <span><?php echo ($_SESSION['email']); ?></span>
            </div> -->
                <div class="page-header">
                    
                    <div class="dpandname">
                       
                           <img id="teacherprofile" src="../images/teacher2.jpeg">
                           <p id="p1"><?php echo $first_name; ?>&nbsp;<?php echo $last_name; ?></p> 
                           <p id="p2"><small>Teacher in Visakha College, Colombo 04</small></p> 
                           
                          
                          <a href="#"><p id="p3"><?php echo $email; ?></p></a> 
                        

                        
                    </div>
                 
                    <!-- <a href="#"><p class="techer" align="right">Teacher in Visakha College, Colombo 04</p></a>  -->
                </div>
                
                <div class="container">
                    <div class="main1">
                        <div class="gr1">
                            <p id="userdetails">User Details</p><br><br>
                            <p id="useremailaddress">User Email Address</p>
                            <a href="#"><p id="email"><?php echo $email;?></p></a><br><br>
                            <p id="country1">NIC</p>
                            <a href="#"><p id="country2">  <?php echo $NIC ?></a><br><br>
                            <p id="city1">Phone Number</p>
                            <a href="#"><p id="city2"><?php   echo $mobile; ?></a></p><br><br>
                        </div>

                           

                        <div class="gr2">
                            <p id="qualifications">User Qualifications</p><br><br>
                            <hr>
                            <a href="#">Diploma in Primary Education </a><br>
                            <hr>
                            <a href="#">Bachelor of science early childhood development</a><br>
                            <hr>
                            <a href="#">Master of Online MS in Education</a><br>
                            <hr>
                            <a href="#">Master of Administrative side in Education</a><br>
                            <hr>
                            <a href="#">Bachelor of Arts in Education</a><br>
                            <hr>
                            <a href="#">Bachelor of Science Collaborative</a><br>
                            <hr>
                            
                        </div>
                    </div>

                    <div class="main2">
                        <div class="gr3">
                            <p id="coursedetails">Course Details</p><br><br>
                            <div class="row1">
                                <div class="sinhala">
                                    <a id="sin" href="#">Sinahala</a>
                                    <a id="math" href="#">Mathematics</a>
                                   
                                    
                                </div>
                            </div>

                            <div class="row2">
                                <div class="sinhala">
                                    <a id="eng" href="#">English</a>
                                    <a id="aes" href="#">Aesthetic</a>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="gr4">
                            <p id="loginactivities">Login Activities</p><br><br>
                            <p id="First">First access to the site  :- 09/17/2021</p><br>
                            <p id="Last">Last access to the site  :- 09/21/2021</p>
                        </div>
                    </div>

                    
                </div>
                
            </main>

                
            </div>
        <label for="sidebar-toggle" class="body-label"></label>

        
            
        
</body>
</html>