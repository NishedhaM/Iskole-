<?php
    session_start();

    if(!$_SESSION['id']){
        header('location:teacher_login.php');
    }


    include("dp.php");

    if(isset($_POST['upload'])){
   

    $file_name=$_FILES['file']['name'];
    $file_type=$_FILES['file']['type'];
    $temp_name=$_FILES['file']['tmp_name'];
    $file_size=$_FILES['file']['size'];
    $file_destination="upload/" .$file_name;
    $file_destination1="../../child/english/upload/" .$file_name;
    $file_destination2="../../admin/admin_upload/upload" .$file_name;

    
// $path = "E:\work\CM\myppt.ppt";
    $file = new SplFileInfo($file_destination);
    $extension  = $file->getExtension();
   // echo("The extension is: $extension.");  

    
   $date = date('Y-m-d H:i:s');
    $unit=$_POST['unit'];


    if(move_uploaded_file($temp_name,$file_destination)){
        copy($file_destination, $file_destination1);
        copy($file_destination, $file_destination2);
        // if(move_uploaded_file($temp_name,$file_destination1)){
        $q="INSERT INTO video(name,gid,sid,uid,content_type,teacher_id,uploaded_date) VALUES ('$file_name','G1','S1','$unit','$extension','$_SESSION[id]','$date')";

        // $query = " INSERT INTO `material` (`sid`, `gid`, `uid`, `teacher_id`, `uploaded_date`) VALUES ('S1', 'G1', 'U1', $_SESSION[id], '$date');";
        // $query_run = mysqli_query($conn,$query);
        // $q="INSERT INTO 'items'(name,content_type) VALUES ('$file_name','$_POST[content_type]')";
        // $query_run = mysqli_query($conn,$q);


        if(mysqli_query($conn,$q)){
            $success="\n\n\ncontent uploaded successfully";
            echo '<script> alert("Completed")</script>';
        }
        else{
            $failed="Something went wrong";
            echo '<script> alert("Completed")</script>';

        }
    }

    else{
        $msz = "\n\n\n please select a video to upload";
    }
}

if(isset($_POST['G1']))
{
  echo "sfsgngnddfbfb d;bg;bgbg bgbm gb";


}




  




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,minimum-scale=1">
    <title>Upload qualifications</title>
    <link rel="stylesheet" href="upload.css">
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
                <img src="../teacher_images/logo.png" width="50px" alt="">

                <div class="brand-icons">
                    <!-- <span class=""></span> -->
                  <a href="../teacher_upload qualifications/uploadqualification.php">  <span class="las la-bell"></span></a>
                </div>
            </div>
        </div>

        <div class="sidebar-main">
            <div class="sidebar-user">
                <a href="../teacher_profile.php"><img src="../teacher_images/teacher2.jpg"  alt=""></a>
                 <div>
                 <h3><?php echo ucfirst($_SESSION['first_name']); ?>&nbsp;<?php echo ucfirst($_SESSION['last_name']); ?></h3>
                <span><?php echo ($_SESSION['email']); ?></span>
            </div>
         </div>

         <div class="sidebar-menu">
               
               <ul>
                 
                  <li><a href="../teacher_dashboard.php">
                      <span class="las la-tachometer-alt"></span>Dashboard
                  </a></li>

                  <li><a href="../teacher_subjects/sub_grade1.php">
                      <span class="las la-book"></span>Subjects
                  </a></li>

                  <li><a href="../mystudents/mystudents.php"><span class="las la-users"></span>My Students</a></li>

                  <li><a href="../teacher_quiz/sub_grade1.php"><span class="las la-check-circle"></span>Tasks</a>
                  </li>
                   
                   <li><a href="../analytics/progressreport.php"><span class="las la-chart-pie"></span>Analytics</a></li>

                   <li><a href="../teacher_calendar/calendar_0/index.php">
                       <span class="las la-calendar"></span>Calendar
                   </a></li>
                   
                   <li>
                   <a href="../teacher_discussion/discussion.php">
                      <span class="las la-users"></span>Discussion
                  </a></li>

                  <li>
                   <a href="../teacher_exhibition.php">
                      <span class="las la-images"></span>Exhibition
                  </a></li>

              
                  <li><a href="../teacher_chat.php"><span class="las la-comments"></span>Chat</a></li>
                  

                  <li><a href="../teacher_finance/finance.php">
                      <span class="las la-credit-card"></span>Finance
                  </a></li>


                  <li><a href="../../login.php">
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
                    <div class="dpandname">
                       
                  
                    </div>
                 
                    <div class="header-actions">
                        <!-- <a href="#" class="hbtn hb-fill-right-rev-bg-br"><span class="las la-tools"></span>Edit Profile</a> -->

                    </div>
                  
                </div>
                
                <div class="container">
                    <p id="head"><b>Upload Content</b></p>
                    <a href="../teacher_subjects/mathematics/grade1/subjectindex.php">Back</a>
                    <div class="upload">
                    <div class="container mt-3">
                           
                            <div class="col-lg-8 m-auto">
                            <form action="upload.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label><strong>Unit Number</strong></label>
                                  <!-- <p><input type="text" name="uid" placeholder="Unit No"></p> -->

                                  <select id="unit" name="unit">
                                    <option value="" disabled selected>Choose unit</option>
                                    <option value="U1">Unit 1</option>
                                    <option value="U2">Unit 2</option>
                                    <option value="U3">Unit 3</option>
                                    <option value="U4">Unit 4</option>
                                    </select>


                                            
                            
                            
                                <br>
                                <input type="file" name="file" class="form-control">
                                <!-- <input type="radio" name="content_type" value="Pdf"/>PDF
                                <input type="radio" name="content_type" value="Video"/>Video
                                <input type="radio" name="content_type" value="PPT"/>PPT -->

                                
                                

                            </div>

                        <?php if(isset($success)){?>
                        <div class="alert alert-success">
                        <?php echo $success;?>
                        </div>
                        <?php }?>
                        <?php if(isset($failed)) {?>
                        <div class="alert alert-danger">
                                <?php echo $failed;?>
                        </div>
                        <?php }?>
                        

                        <?php if(isset($msz)){
                            ?>
                            <div class="alert alert-danger">
                                <?php echo $msz;?>
                            </div>


                        <?php } ?>
                        <div class="btns2">
                        <input type="submit" id="btn1" name="upload" value="Upload" class="btn btn-success ml-3">
                        <input type="reset" id="btn2" name="cancel" value="cancel" class="btn btn-success ml-3" onclick="return confirm('Are you sure to delete?');">
                        </div>
                        
</form>
</div>
                    </div>
                    
                    <div class="buttons2">
                        <!-- <button id="btn1" type="button">
                            Save
                        </button> -->
                        <!-- <button id="btn2" type="button">
                            Delete
                        </button> -->
                    </div>
     
                    
                </div>
                
            </main>

                
            </div>
        <label for="sidebar-toggle" class="body-label"></label>

        
            
        
</body>
</html>