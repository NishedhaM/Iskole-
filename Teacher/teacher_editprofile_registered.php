<?php
session_start();
  
if(!$_SESSION['id']){
    header('location:teacher_login.php');
}


$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'demo');


if(isset($_POST['update'])){
    $date = date('Y-m-d H:i:s');
    $query = "UPDATE teacher SET  mobile='$_POST[mobile]' where teacher_id = '$_SESSION[id]'";
    // $query = "UPDATE members SET first_name='$_POST[first_name]', last_name='$_POST[last_name]' where email='$_POST[email]'";
    
    $query_run = mysqli_query($connection,$query);

    // if( $query_run){
    //     echo '<script> alert("Your Profile Updated")</script>';

    // }else{
    //     echo '<script> alert("Profile Not Updated")</script>';

    // }
}


if(isset($_POST['update'])){
  $date = date('Y-m-d H:i:s');
  $query = "UPDATE teacher_qualification SET qualification='$_POST[qualification]' where teacher_id = '$_SESSION[id]'";
  // $query = "UPDATE members SET first_name='$_POST[first_name]', last_name='$_POST[last_name]' where email='$_POST[email]'";
  
  $query_run = mysqli_query($connection,$query);

  if( $query_run){
      echo '<script> alert("Your Profile is Updated")</script>';

  }else{
      echo '<script> alert("Your Profile is not Updated ")</script>';

  }
}

$sql= "SELECT name FROM images where  member_id=$_SESSION[id] ";
        $query_run = mysqli_query($connection, $sql);
            if($result = mysqli_query($connection,$sql)){
                     if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_array($result)){
                                $image = $row['name'];
                                $image_src = "upload/".$image;
                    

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
    <link rel="stylesheet" href="teacher_editprofile.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />
    
</head>
<body>
    <input type="checkbox" name="" id="sidebar-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <div class="brand-flex">
                <img src="teacher_images/logo.png" width="50px" alt="">

                <div class="brand-icons">
                    <!-- <span class="las la-bell"></span> -->
                    <a href="./teacher_mailbox/mailbox.php"><span class="las la-bell"></span></a>
                </div>
            </div>
        </div>

        <div class="sidebar-main">
            <div class="sidebar-user">
                <a href="./teacher_profile.php"><img src="<?php echo $image_src;  ?>"  alt="">
                 <div>
                <h3><?php echo ucfirst($_SESSION['first_name']); ?>&nbsp;<?php echo ucfirst($_SESSION['last_name']); ?></h3>
                <span><?php echo ucfirst($_SESSION['email']); ?></span>
            </div>
         </div>

         <div class="sidebar-menu">
               
          <ul>
            <!-- <li><a href="">
                <span class="las la-home"></span>Home
            </a></li> -->
            <li><a href="./teacher_dashboard.php">
                <span class="las la-tachometer-alt"></span>Dashboard
            </a></li>

            <li><a href="./teacher_subjects/mathematics/grade4/subjectindex.php">
                <span class="las la-book"></span>Subjects
            </a></li>

            <li><a href="./mystudents/mystudents.php"><span class="las la-users"></span>My Students</a></li>

            <li><a href="./teacher_quiz/quiz.php"><span class="las la-check-circle"></span>Tasks</a>
            </li>
             
             <li><a href="./analytics/progressreport.php"><span class="las la-chart-pie"></span>Analytics</a></li>

             <li><a href="./teacher_calendar/calendar.php">
                 <span class="las la-calendar"></span>Calendar
             </a></li>
             
             <li>
             <a href="./teacher_discussion/discussion.php">
                <span class="las la-users"></span>Discussion
            </a></li>

            <li><a href="./teacher_exhibition.php">
                <span class="las la-images"></span>Exhibition
            </a></li>

            
            <li><a href="./ChatApp/login.php"><span class="las la-comments"></span>Chat</a></li>
            

            <li><a href="./teacher_finance/finance.php">
                <span class="las la-credit-card"></span>Finance
            </a></li>

            <li><a href="./skole_welcome_page.php">
                    <span class="fas fa-sign-out-alt"></span>Logout
                    </a></li>

         </ul>



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
                    <!-- <span class="las la-search"></span>
                    <span class="las la-bookmark"></span>
                    <span class="las la-sms"></span> -->
                </div>
            </header>

            <main>
                <div class="page-header">


                <form method="post" action="teacher_editprofile_registered_action.php" enctype='multipart/form-data'>
                    <input style="margin-left: 600px;margin-top:30px;" type='file' name='file' />
                   <input style="margin-left: 600px;margin-top:10px;" type='submit' value='Upload Image' name='but_upload'>
                   </form>

                   <?php

                    // $sql = "select name from images where id='$_SESSION[id]'";
                    $sql="SELECT name FROM images where member_id='$_SESSION[id]'";
                    $result = mysqli_query($connection,$sql);
                    //$row = mysqli_fetch_array($result);

                     
                    if(mysqli_num_rows($result) > 0){
                      while($row = mysqli_fetch_assoc($result)){

                    $image = $row['name'];
                    $image_src = "upload/".$image;


                    ?>
                   
                    
                    

                    <?php
                      }}
                      else{

                      }

                    ?>
                    <div style="margin-left: 800px;" class="dpandname">
                       
                           <img style="margin-left: -1180px;" id="teacherprofile" src="<?php echo $image_src;  ?>">
                           <h1 style="margin-left: -1050px;margin-top:-130px;" id="p1"><?php echo ucfirst($_SESSION['first_name']); ?>&nbsp;<?php echo ucfirst($_SESSION['last_name']); ?></h1><br><br><br><br><br>
                           <!-- <a  style="margin-left:30px;"  href="#"><h4 id="p1"><?php echo ucfirst($_SESSION['email']); ?></h4></a> -->

                        
                        
                    </div>
                 
                    <!-- <div class="header-actions">
                        <a href="#" class="hbtn hb-fill-right-rev-bg-br"><span class="las la-tools"></span>Edit Profile</a>

                    </div>
                   -->
                </div>
                
                <div  style="background-color: #f2f2f2;height:auto " class="container ">
                   <div style="height: 800px;margin-left:80px" class="formdiv">
                    <form action="" method="POST">
                    
                        <div class="row">
                          <div class="col-25">
                            <label for="fname">First Name :</label>
                          </div>
                          <div class="col-75">
                            <input type="text" id="first_name" name="first_name" placeholder="<?php echo ucfirst($_SESSION['first_name']); ?>" disabled>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-25">
                            <label for="lname">Last Name:</label>
                          </div>
                          <div class="col-75">
                            <input type="text" id="last_name" name="last_name" placeholder="<?php echo ucfirst($_SESSION['last_name']); ?>" disabled>
                          </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label for="lname">Email Address:</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="email" name="email"placeholder="<?php echo ucfirst($_SESSION['email']); ?>" disabled>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-25">
                              <label for="lname">NIC:</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="NIC" name="NIC" placeholder="986745678v" disabled>
                            </div>
                          </div>

                          <!-- <div class="row">
                          <div class="col-25">
                            <label for="lname">Status</label>
                          </div>
                          <div class="col-75">
                            <input type="status" id="status" name="status" placeholder="Your status">
                          </div>
                        </div> -->

                          


                        <!-- <div class="row">
                          <div class="col-25">
                            <label for="dob">Date of Birth</label>
                          </div>
                          <div class="col-75">
                            <input type="date" id="DOB" name="DOB"  value="2018-07-22"
                            min="2021-01-01" max="2022-12-31">
                          </div>
                        </div> -->

                        <div class="row">
                          <div class="col-25">
                            <label for="lname">Phone Number:</label>
                          </div>
                          <div class="col-75">
                            <input type="text" id="mobile" name="mobile" 
                            pattern="[0-9]{10}">

                          </div>
                        </div>
                        
                        
                        
                        
                        <div  class="row  ">
                          <!-- <div class="col-25">
                            <label for="subject">Stream</label>
                          </div> -->
                          <div class="col-75">
                          <!-- <table style="border: 2px solid grey; width:675px;">
                          <tr>
                            <td>
                              <input type="checkbox" id="S1" name="S1" value="mathematics">
                              <label for="mathematics"> Mathematics</label></td>
                            <td>
                              <input type="checkbox" id="G1" name="G1" value="g1">
                              <label for="g1"> Grade 1</label><br>
                              <input type="checkbox" id="G2" name="G2" value="g2">
                              <label for="g2"> Grade 2</label><br>
                              <input type="checkbox" id="G3" name="G3" value="g3">
                              <label for="g3"> Grade 3</label><br>
                              <input type="checkbox" id="G4" name="G4" value="g4">
                              <label for="g4"> Grade 4</label><br>
                              <input type="checkbox" id="G5" name="G5" value="g4">
                              <label for="g4"> Grade 5</label><br>

                            </td>
                            <td style="padding-left:100px; " > 
                              <input type="checkbox" id="S2" name="S2" value="sinhala">
                              <label for="sinhala">Sinhala</label></td>
                            <td >
                            <input type="checkbox" id="G1" name="G1" value="g1">
                              <label for="g1"> Grade 1</label><br>
                              <input type="checkbox" id="G2" name="G2" value="g2">
                              <label for="g2"> Grade 2</label><br>
                              <input type="checkbox" id="G3" name="G3" value="g3">
                              <label for="g3"> Grade 3</label><br>
                              <input type="checkbox" id="G4" name="G4" value="g4">
                              <label for="g4"> Grade 4</label><br>
                              <input type="checkbox" id="G5" name="G5" value="g4">
                              <label for="g4"> Grade 5</label><br>


                            </td>
                          </tr>
                          <tr  style="padding-top:50px; ">
                            <td>
                              <input type="checkbox" id="S3" name="S3" value="english">
                              <label for="english"> English</label></td>
                            <td style="padding-top:50px;">
                            <input type="checkbox" id="G1" name="G1" value="g1">
                              <label for="g1"> Grade 1</label><br>
                              <input type="checkbox" id="G2" name="G2" value="g2">
                              <label for="g2"> Grade 2</label><br>
                              <input type="checkbox" id="G3" name="G3" value="g3">
                              <label for="g3"> Grade 3</label><br>
                              <input type="checkbox" id="G4" name="G4" value="g4">
                              <label for="g4"> Grade 4</label><br>
                              <input type="checkbox" id="G5" name="G5" value="g4">
                              <label for="g4"> Grade 5</label><br>


                            </td>
                         
                            <td style="padding-left:100px;padding-top:50px;">
                              <input type="checkbox" id="S3" name="S4" value="aesthetic">
                              <label for="aesthetic">Aesthetic</label></td>
                            <td style="padding-top:50px;">
                            <input type="checkbox" id="G1" name="G1" value="g1">
                              <label for="g1"> Grade 1</label><br>
                              <input type="checkbox" id="G2" name="G2" value="g2">
                              <label for="g2"> Grade 2</label><br>
                              <input type="checkbox" id="G3" name="G3" value="g3">
                              <label for="g3"> Grade 3</label><br>
                              <input type="checkbox" id="G4" name="G4" value="g4">
                              <label for="g4"> Grade 4</label><br>
                              <input type="checkbox" id="G5" name="G5" value="g4">
                              <label for="g4"> Grade 5</label><br>


                            </td>
                          </tr>
                          </table> -->
                          </div>
                        </div> 
                        <br> 
                        <div class="row">
                            <div class="col-25">
                              <label style="margin-top: -5px;" for="subject">Qualifications:</label>
                            </div>
                            <div class="col-75">
                              <textarea id="qualification" name="qualification" placeholder="Qualifications.." style="height:400px;margin-top
                              :-10px;"></textarea>
                              <!-- <a href="./teacher_upload qualifications/uploadqualification.php" id="upload" >Upload qualifications</a> -->
                            </div>
                          </div> 
                        <div class="buttons2">
                          <input type="submit" name="update" value="update Profile">
                          <input type="submit1" value="Cancel">
                        </div>
                      </form>
                   </div>
                    
                </div>
                
            </main>

                
            </div>
        <label for="sidebar-toggle" class="body-label"></label>

        
            
        
</body>
</html>