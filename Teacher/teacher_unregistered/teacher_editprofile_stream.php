<?php
session_start();
  
if(!$_SESSION['id']){
    header('location:../../login.php');
}

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'demo');


              
include("dp.php");

    if(isset($_POST['upload'])){
    // $name=$_FILES['file'];
    // echo "<pre>";
    // print_r($name);
    // exit();

    $file_name=$_FILES['file']['name'];
    $file_type=$_FILES['file']['type'];
    $temp_name=$_FILES['file']['tmp_name'];
    $file_size=$_FILES['file']['size'];
    $file_destination="upload/" .$file_name;
    $file_destination1="../../admin/admin_unregistered/upload/" .$file_name;

    
// $path = "E:\work\CM\myppt.ppt";
    $file = new SplFileInfo($file_destination);
    $extension  = $file->getExtension();
   // echo("The extension is: $extension.");  

    
   $date = date('Y-m-d H:i:s');
    // $unit=$_POST['unit_selection'];


    if(move_uploaded_file($temp_name,$file_destination)){
        copy($file_destination, $file_destination1);
        $q="INSERT INTO teacher_qualification_pdf(proof_name,teacher_id) VALUES ('$file_name','$_SESSION[id]')";

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
                <img src="../teacher_images/logo.png" width="50px" alt="">

                <div class="brand-icons">
                    <!-- <span class="las la-bell"></span> -->
                    <a href="./teacher_editprofile.php"><span class="las la-bell"></span></a>
                </div>
            </div>
        </div>

        <div class="sidebar-main">
            <div class="sidebar-user">
                <a href="./teacher_editprofile.php"><img src="../teacher_images/unreg_teacher-removebg-preview.png"  alt="">
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
            <li><a href="../teacher_terms.html">
                <span class="las la-tachometer-alt"></span>Rules and Regulations
            </a></li>

            <li><a href="../teacher_unregistered/teacher_syllabus _notregistered.php">
                <span class="las la-book"></span>Syallabus 
            </a></li>

            <li><a href="../teacher_unregistered/teacher_profile_unregistered.php"><span class="las la-users"></span>Profile</a></li>

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

                 

                    <div style="margin-left: 100px;" class="dpandname">

                           <h1 style="margin-top: 40px;margin-left:360px;font-size:40px;" id="p1" id="p1"><?php echo ucfirst($_SESSION['first_name']); ?>&nbsp;<?php echo ucfirst($_SESSION['last_name']); ?></h1>
                           <h2 style="margin-top: 0px;margin-left:390px;"> <?php echo ucfirst($_SESSION['email']); ?> </h2>
                        
                        
                    </div>
                 
                   
                </div>
                
                <div  style="background-color: #f2f2f2;margin-left:0px;height:auto " class="container ">
                   <div style="height:auto;margin-left:70px" class="formdiv">
                    <form action="" method="POST">
                    
                        
                        <div  class="row  ">
                          <div class="col-25">
                            <label for="subject">Stream 1</label>
                          </div>
                          <div class="col-75">
                          <table style="border: 2px solid grey; width:675px;">
                          
                          <form action="" method="post">
                            <select name="Grade">
                            <option value="" disabled selected>Choose option</option>
                            <option value="G1">Grade1</option>
                            <option value="G2">Grade2</option>
                            <option value="G3">Grade3</option>
                            <option value="G4">Grade4</option>
                            <option value="G5">Grade5</option>
                            </select>

                            <select name="Subject">
                            <option value="" disabled selected>Choose option</option>
                            <option value="S1">Mathematics</option>
                            <option value="S2">English</option>
                            <option value="S3">Sinhala</option>
                            <!-- <option value="S4">Aesthetic</option> -->
                            <option value="S5">Environmental Science</option>
                            </select>

                            <input style="margin-left:450px" type="submit" name="submit" class="choose"  value="Check">
                            </form>
                            <?php
                            $date = date('Y-m-d H:i:s');
                            if(isset($_POST['submit'])){
                                    if(!empty($_POST['Grade'])) {
                                        if(!empty($_POST['Subject'])) {
                                            $selected = $_POST['Grade'];
                                            $selected2 = $_POST['Subject'];
                                            
                                            if($selected=='G1'){
                                                $grade_new='Grade1';
                                              }
                                              if($selected=='G2'){
                                                $grade_new='Grade2';
                                              }
                                              if($selected=='G3'){
                                                $grade_new='Grade3';
                                              }
                                              if($selected=='G4'){
                                                $grade_new='Grade4';
                                              }
                                              if($selected=='G5'){
                                                  $grade_new='Grade5';
                                                }
  
                                                if($selected2=='S1'){
                                                  $grade_new2='Maths';
                                                }
                                                if($selected2=='S2'){
                                                  $grade_new2='English';
                                                }
                                                if($selected2=='S3'){
                                                  $grade_new2='Sinhala';
                                                }
                                                if($selected2=='S4'){
                                                  $grade_new2='Aesthetic';
                                                }
                                                if($selected2=='S5'){
                                                    $grade_new2='Environmental Studies';
                                                  }
  
                                              echo 'You have chosen: ' . $grade_new;
                                              echo 'You have chosen: ' . $grade_new2;
                                                
                                                   
                                                        $connection = mysqli_connect("localhost","root","","demo");
                                                        $query = "SELECT count(teacher_id) AS teacher_count  FROM teacher_grade_subject  where gid='$selected' AND sid='$selected2'  ";
                                                        if($result = mysqli_query($connection,$query)){
                                                          if(mysqli_num_rows($result) > 0){
                                                                 while($row = mysqli_fetch_array($result)){
                                                                     $count = $row['teacher_count'];

                                                         
                                     
                                                                     }
                                                           }
                                                       }  
                                                       if($count<=4){
                                                        $query = " INSERT INTO `teacher_grade_subject` ( `teacher_id`,`gid`,`sid`, `updated_date`) VALUES ($_SESSION[id],'$selected','$selected2', '$date');";
                                                        $query_run = mysqli_query($connection,$query);
                                                       }
                                                       else{
                                                         echo "No available vacancies for your choice";
                                                       }
                                                           
                                                            
                                                          
                                                            }
                                                          }}
                                                            ?>
                          </table>
                          </div>
                        </div> 
                        <br> 

                        <div  class="row  ">
                          <div class="col-25">
                            <label for="subject">Stream 2</label>
                          </div>
                          <div class="col-75">
                          <table style="border: 2px solid grey; width:675px;">
                          
                          <form action="" method="post">
                            <select name="Grade">
                            <option value="" disabled selected>Choose option</option>
                            <option value="G1">Grade1</option>
                            <option value="G2">Grade2</option>
                            <option value="G3">Grade3</option>
                            <option value="G4">Grade4</option>
                            <option value="G5">Grade5</option>
                            </select>

                            <select name="Subject">
                            <option value="" disabled selected>Choose option</option>
                            <option value="S1">Mathematics</option>
                            <option value="S2">English</option>
                            <option value="S3">Sinhala</option>
                            <!-- <option value="S4">Aesthetic</option> -->
                            <option value="S5">Environmental Science</option>
                            </select>

                            <input style="margin-left:450px" type="submit" name="submit2" class="choose"  value="Check">
                            </form>
                            <?php
                            $date = date('Y-m-d H:i:s');
                            if(isset($_POST['submit2'])){
                                    if(!empty($_POST['Grade'])) {
                                        if(!empty($_POST['Subject'])) {
                                            $selected = $_POST['Grade'];
                                            $selected2 = $_POST['Subject'];
                                            


                                            if($selected=='G1'){
                                              $grade_new='Grade1';
                                            }
                                            if($selected=='G2'){
                                              $grade_new='Grade2';
                                            }
                                            if($selected=='G3'){
                                              $grade_new='Grade3';
                                            }
                                            if($selected=='G4'){
                                              $grade_new='Grade4';
                                            }
                                            if($selected=='G5'){
                                                $grade_new='Grade5';
                                              }

                                              if($selected2=='S1'){
                                                $grade_new2='Maths';
                                              }
                                              if($selected2=='S2'){
                                                $grade_new2='English';
                                              }
                                              if($selected2=='S3'){
                                                $grade_new2='Sinhala';
                                              }
                                              if($selected2=='S4'){
                                                $grade_new2='Aesthetic';
                                              }
                                              if($selected2=='S5'){
                                                  $grade_new2='Environmental Studies';
                                                }

                                            echo 'You have chosen: ' . $grade_new;
                                            echo 'You have chosen: ' . $grade_new2;
                                                
                                                   
                                                        $connection = mysqli_connect("localhost","root","","demo");
                                                        $query = "SELECT count(teacher_id) AS teacher_count  FROM teacher_grade_subject  where gid='$selected' AND sid='$selected2'  ";
                                                        if($result = mysqli_query($connection,$query)){
                                                          if(mysqli_num_rows($result) > 0){
                                                                 while($row = mysqli_fetch_array($result)){
                                                                     $count = $row['teacher_count'];

                                                         
                                     
                                                                     }
                                                           }
                                                       }  
                                                       if($count<=4){
                                                        $query = " INSERT INTO `teacher_grade_subject` ( `teacher_id`,`gid`,`sid`, `updated_date`) VALUES ($_SESSION[id],'$selected','$selected2', '$date');";
                                                        $query_run = mysqli_query($connection,$query);
                                                       }
                                                       else{
                                                         echo "No available vacancies for your choice";
                                                       }
                                                           
                                                            
                                                          
                                                            }
                                                          }}
                                                            ?>
                          </table>
                          </div>
                        </div> 

                      </form>
                   </div>
                    
                </div>

                <div style="padding-left:100px" class="container">
                    <p id="head"><b>Qualification Upload</b></p>

                    <div class="upload">
                    <div class="container mt-3">
                           
                            <div class="col-lg-8 m-auto">
                            <form action="teacher_editprofile_stream.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                
                                <br>
                                <input type="file" name="file" class="form-control">
                            
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
                        <div style="margin-left: 296px;" class="btns2">
                        <input type="submit" id="btn1" name="upload" value="Upload" class="btn btn-success ml-3">
                        <!-- <input type="submit" id="btn2" name="cancel" value="cancel" class="btn btn-success ml-3">
                        </div> -->
                        <br>
                       
                        </form>
                        </div>
                        </div>
                        <a href="../teacher_unregistered/teacher_editprofile.php">Back</a>
                
            </main>

                
            </div>
        <label for="sidebar-toggle" class="body-label"></label>

        
            
        
</body>
</html>