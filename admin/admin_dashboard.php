<?php
    session_start();

    if(!$_SESSION['id']){
        header('location:../login.php');
    }



date_default_timezone_set('Asia/Colombo');
$date=date('Y-m-d H:i:s', strtotime('-60 minutes'));

$connection = mysqli_connect("localhost","root","","demo");
$query = "SELECT *  FROM login  where login_time>'$date'  ";

     $i = 1;
     $rows = mysqli_query($connection,$query);
     foreach ($rows as $row) :
        $id=$row['user_id'];

        $query = "SELECT * FROM members where id='$id' ";
                 $query_run = mysqli_query($connection, $query);
                 if($result = mysqli_query($connection,$query)){
                    if(mysqli_num_rows($result) > 0){
                      while($row = mysqli_fetch_array($result)){
                       $first_name= $row['first_name'];
                       //echo $first_name;
                      }
                    }
                }
     endforeach;


     $query = "SELECT COUNT(id) FROM members WHERE status='accepted' AND type = 'teacher' ";
     $query_run = mysqli_query($connection, $query);


     if($result = mysqli_query($connection,$query)){
       if(mysqli_num_rows($result) > 0){
           while($row = mysqli_fetch_array($result)){
                   $regcount=$row['COUNT(id)'];


           }
         }
       }


      $query = "SELECT COUNT(id) FROM members WHERE type='student' AND status!='restrict'";
      $query_run = mysqli_query($connection, $query);


      if($result = mysqli_query($connection,$query)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                  $stcount=$row['COUNT(id)'];


                    }
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

          $query = "SELECT COUNT(id) FROM members WHERE status='pending ' AND type='teacher'";
          $query_run = mysqli_query($connection, $query);


          if($result = mysqli_query($connection,$query)){
              if(mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_array($result)){
                          $wcount=$row['COUNT(id)'];


                  }
                }
              }


              $query = "SELECT COUNT(id) FROM members WHERE status='restrict ' AND type='teacher'";
              $query_run = mysqli_query($connection, $query);


              if($result = mysqli_query($connection,$query)){
                  if(mysqli_num_rows($result) > 0){
                      while($row = mysqli_fetch_array($result)){
                              $rcount=$row['COUNT(id)'];


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
    <title>Admin dashboard</title>
    <link rel="stylesheet" href="admin_dashboard.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>


</head>
<body>
    <input type="checkbox" name="" id="sidebar-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <div class="brand-flex">
                <img src="admin_images/logo.png" width="50px" alt="">

                <div class="brand-icons">
                    <span class=""></span>
                   <a href="./teacher_mailbox/mailbox.php"> <span class="las la-bell"></span></a>
                </div>
            </div>
        </div>

        <div class="sidebar-main">
            <div class="sidebar-user">

                <a href=""> <img src="<?php echo $image_src;  ?>" ></a>
                 <div>
                <h3><?php echo ucfirst($_SESSION['first_name']); ?>&nbsp;<?php echo ucfirst($_SESSION['last_name']); ?></h3>
                <span><?php echo ($_SESSION['email']); ?></span>
            </div>
         </div>

         <div class="sidebar-menu">

                 <ul>

                    <li><a href="">
                        <span class="las la-tachometer-alt"></span>Dashboard
                    </a></li>

                    <li><a href="./admin_subjects/sub_grade1.php">
                        <span class="las la-book"></span>Subjects
                    </a></li>

                    <li><a href="./mystudents/mystudents.php"><span class="las la-users"></span>Students</a></li>

                    <li><a href="./admin_quiz/sub_grade1.php"><span class="las la-check-circle"></span>Tasks</a>
                    </li>

                     <li><a href="./admin_analytics/progressreport.php"><span class="las la-chart-pie"></span>Analytics</a></li>

                     <li><a href="./admin_calendar/calendar_0/index.php">
                         <span class="las la-calendar"></span>Calendar
                     </a></li>

                     <li>
                     <a href="./admin_discussion/discussion.php">
                        <span class="las la-users"></span>Discussion
                    </a></li>

                    <li>
                     <a href="./admin_exhibition.php">
                        <span class="las la-images"></span>Exhibition
                    </a></li>


                    <li><a href="../ChatApp/users.php"><span class="las la-comments"></span>Chat</a></li>


                    <li><a href="./admin_finance/finance.php">
                        <span class="las la-credit-card"></span>Finance
                    </a></li>


                    <li><a href="../login.php">
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

            </header>

            <main>
                <div class="page-header">
                    <div>
                        <h3>
                          Admin Dashboard
                        </h3>
                    </div>

                </div>

                <div class="cards">
                    <button><span>
                    <div class="card-single">
                        <div class="card-flex">
                            <div class="card-info">



                                <div class="card-head">
                                    <a href="./admin_analytics/student_list.php"><span>Students</span></a>

                                </div>

                                        <h2><?php echo $stcount; ?></h2>




                            </div>
                            <div class="cart-chart"><a href=""><span class="las la-angle-double-right" width="3000px"></span></a>
                            </div>
                        </div>
                    </div>
                </span>
                </button>

                    <button><span>
                    <div class="card-single">
                        <div class="card-flex">
                            <div class="card-info">


                                <div class="card-head">
                                <a href="./admin_analytics/registered_list.php">
                                    <span style="margin-left:5px;">Registered Teachers</span></a>

                                </div>


                            <h2><?php echo $regcount; ?></h2>

                            </div>
                        <div class="cart-chart"><a href=""><span class="las la-angle-double-right"></span></a>
                        </div>
                        </div>
                    </div>
                </span>
                </button>

                    <button><span>
                    <div class="card-single">
                        <div class="card-flex">
                            <div class="card-info">


                                <div class="card-head">
                                <a href="./admin_analytics/pending_list.php">
                                    <span>Waiting list</span></a>

                                </div>

                            <h2><?php echo $wcount; ?></h2>

                            </div>
                        <div class="cart-chart"><a href=""><span class="las la-angle-double-right"></span></a>
                        </div>
                        </div>
                    </div>
                    </span>
                    </button>

                    <button><span>
                    <div class="card-single">
                        <div class="card-flex">
                            <div class="card-info">


                                <div class="card-head">
                                <a href="./admin_analytics/restrict_list.php">
                                    <span style="margin-left:1px;">Restricted Teachers</span></a>

                                </div>

                                <h2><?php echo $rcount; ?></h2>

                            </div>
                        <div class="cart-chart"><a href=""><span class="las la-angle-double-right"></span></a>
                        </div>
                        </div>
                    </div>
                    </span>
                    </button>
                </div>

                <div class="jobs-grid">
                    <div class="analytics-card">
                        <div class="analytics-head">
                                <h2>Completed Details</h2>
                                <span class="las la-ellipsis"></span>
                        </div>

                        <div class="analytics-chart">
                            <div class="chartandbox">
                                <div class="chartsubject">
                                    <select class="box3-subject">
                                        <option value="mathematics">English</option>
                                        <option value="mathematics">Sinhala</option>
                                        <option value="mathematics">Mathematics</option>
                                        <option value="mathematics">Aesthetic</option>
                                    </select>
                                </div>




                                <div class="chart-circle">
                                    <h1>74%</h1>
                                </div>


                                <div class="gradesubject">
                                    <select class="box3-grade">
                                        <option value="grade1">Grade1</option>
                                        <option value="grade2">Grade2</option>
                                        <option value="grade3">Grade3</option>
                                        <option value="grade4">Grade4</option>
                                    </select>

                                </div>


                            </div>
                        </div>

                        <div class="analytics-btn"><button  id="btnlast"><a href="./teacher_generated_report.php">Generate report</a></button></div>
                    </div>

                    <div class="jobs">
                    <h3>Uploads<small> Recently Updates </small></h3> 
    
                        <div class="table-responsive">
                        <table>
                            <tbody>

                                <!-- <td><div style="padding-left: 15px;"><span class="indicator even"></span></div> -->
                                </td>

                                <?php
                                $con = mysqli_connect("localhost","root","","demo");
                                
                                $query ="SELECT * FROM video  LIMIT 4";
                                $query_run=mysqli_query($con,$query);
                                
                                if(mysqli_num_rows($query_run)>0){
                                    foreach($query_run as $row){
                                        ?>
                                        <?php

                                         $sid=$row['sid'];
                                         $gid=$row['gid'];
                                         $uid=$row['uid'];

                                         if($sid=='S1'){
                                                $subject='Mathematics';
                                          
                                             }
                                         if($sid=='S2'){
                                                $subject='English';
                                          
                                             }
                                         if($sid=='S3'){
                                            $subject='Sinhala';
                                        
                                            }

                                         if($sid=='S4'){
                                                $subject='Aesthetic';
                                            
                                                }
                                         if($sid=='S5'){
                                            $subject='Enviromnetal Stu';
                                            
                                            }

                                         if($gid=='G1'){
                                            $grade='Grade1';
                                            
                                            }

                                         if($gid=='G2'){
                                             $grade='Grade2';
                                          
                                             }
                                         if($sid=='G3'){
                                            $grade='Grade3';
                                          
                                             }
                                         if($sid=='G4'){
                                            $grade='Grade4';
                                        
                                            }
                                         if($sid=='G5'){
                                            $grade='Grade5';
                                            
                                            }
                                        
                                       
                                        if($uid=='U1'){
                                            $unit='Unit1';
                                            
                                            }

                                        if($uid=='U2'){
                                                $unit='Unit2';
                                            
                                                }
                                        if($uid=='U3'){
                                            $unit='Unit3';
                                            
                                                }
                                        if($uid=='U4'){
                                            $unit='Unit4';
                                        
                                            }
                                        if($uid=='U5'){
                                            $unit='Unit5';
                                            
                                            }
                                     
                                         ?>
                                   
                                        <tr>
                                        <td><div class="style1" style="padding-left: 15px;"><span class="indicator even"></span></div></td>
                                        <td><div  name="op41" style="padding-left: -20px;"><?php echo $subject; ?></div></td>
                                         <td><div style="padding-left: 20px;"><?php echo $grade; ?></div></td>
                                         <td><div style="padding-left: 20px;"><?php echo $unit; ?></div></td>
                                       
                                        <td><div style="padding-left: 10px;">
                                        <button id="btnlast">
                                        <?php
                                         if($grade=='Grade1' && $subject=='Mathematics'){
                                        ?>
                                         <a style="color:white;" href="./teacher_subjects/mathematics/grade1/subjectindex.php">view</a>
                                         <?php
                                         }
                                         ?>

                                        <?php
                                         if($grade=='Grade1' && $subject=='Sinhala'){
                                        ?>
                                         <a style="color:white;" href="./teacher_subjects/sinhala/grade1/subjectindex.php">view</a>
                                         <?php
                                         }
                                         ?>

                                        <?php
                                         if($grade=='Grade1' && $subject=='English'){
                                        ?>
                                         <a style="color:white;" href="./teacher_subjects/english/grade1/subjectindex.php">view</a>
                                         <?php
                                         }
                                         ?>

                                        <?php
                                         if($grade=='Grade1' && $subject=='Aesthetic'){
                                        ?>
                                         <a style="color:white;" href="./teacher_subjects/aesthetic/grade1/subjectindex.php">view</a>
                                         <?php
                                         }
                                         ?>

                                        <?php
                                         if($grade=='Grade1' && $subject=='Enviromnetal Stu'){
                                        ?>
                                         <a style="color:white;" href="./teacher_subjects/environmental science/grade1/subjectindex.php">view</a>
                                         <?php
                                         }
                                         ?>



                                        <?php
                                         if($grade=='Grade2' && $subject=='Mathematics'){
                                        ?>
                                         <a style="color:white;" href="./teacher_subjects/mathematics/grade2/subjectindex.php">view</a>
                                         <?php
                                         }
                                         ?>

                                        <?php
                                         if($grade=='Grade2' && $subject=='Sinhala'){
                                        ?>
                                         <a style="color:white;" href="./teacher_subjects/sinhala/grade2/subjectindex.php">view</a>
                                         <?php
                                         }
                                         ?>

                                        <?php
                                         if($grade=='Grade2' && $subject=='English'){
                                        ?>
                                         <a style="color:white;" href="./teacher_subjects/english/grade2/subjectindex.php">view</a>
                                         <?php
                                         }
                                         ?>

                                        <?php
                                         if($grade=='Grade2' && $subject=='Aesthetic'){
                                        ?>
                                         <a style="color:white;" href="./teacher_subjects/aesthetic/grade2/subjectindex.php">view</a>
                                         <?php
                                         }
                                         ?>

                                        <?php
                                         if($grade=='Grade2' && $subject=='Enviromnetal Stu'){
                                        ?>
                                         <a style="color:white;" href="./teacher_subjects/environmental science/grade2/subjectindex.php">view</a>
                                         <?php
                                         }
                                         ?>

                                        <?php
                                         if($grade=='Grade3' && $subject=='Mathematics'){
                                        ?>
                                         <a style="color:white;" href="./teacher_subjects/mathematics/grade3/subjectindex.php">view</a>
                                         <?php
                                         }
                                         ?>

                                        <?php
                                         if($grade=='Grade3' && $subject=='Sinhala'){
                                        ?>
                                         <a style="color:white;" href="./teacher_subjects/sinhala/grade3/subjectindex.php">view</a>
                                         <?php
                                         }
                                         ?>

                                        <?php
                                         if($grade=='Grade3' && $subject=='English'){
                                        ?>
                                         <a style="color:white;" href="./teacher_subjects/english/grade3/subjectindex.php">view</a>
                                         <?php
                                         }
                                         ?>

                                        <?php
                                         if($grade=='Grade3' && $subject=='Aesthetic'){
                                        ?>
                                         <a style="color:white;" href="./teacher_subjects/aesthetic/grade3/subjectindex.php">view</a>
                                         <?php
                                         }
                                         ?>

                                        <?php
                                         if($grade=='Grade3' && $subject=='Enviromnetal Stu'){
                                        ?>
                                         <a style="color:white;" href="./teacher_subjects/environmental science/grade3/subjectindex.php">view</a>
                                         <?php
                                         }
                                         ?>

                                        <?php
                                         if($grade=='Grade4' && $subject=='Mathematics'){
                                        ?>
                                         <a style="color:white;" href="./teacher_subjects/mathematics/grade4/subjectindex.php">view</a>
                                         <?php
                                         }
                                         ?>

                                        <?php
                                         if($grade=='Grade4' && $subject=='Sinhala'){
                                        ?>
                                         <a style="color:white;" href="./teacher_subjects/sinhala/grade4/subjectindex.php">view</a>
                                         <?php
                                         }
                                         ?>

                                        <?php
                                         if($grade=='Grade4' && $subject=='English'){
                                        ?>
                                         <a style="color:white;" href="./teacher_subjects/english/grade4/subjectindex.php">view</a>
                                         <?php
                                         }
                                         ?>

                                        <?php
                                         if($grade=='Grade4' && $subject=='Aesthetic'){
                                        ?>
                                         <a style="color:white;" href="./teacher_subjects/aesthetic/grade4/subjectindex.php">view</a>
                                         <?php
                                         }
                                         ?>

                                        <?php
                                         if($grade=='Grade4' && $subject=='Enviromnetal Stu'){
                                        ?>
                                         <a style="color:white;" href="./teacher_subjects/environmental science/grade4/subjectindex.php">view</a>
                                         <?php
                                         }
                                         ?>

                                        <?php
                                         if($grade=='Grade5' && $subject=='Mathematics'){
                                        ?>
                                         <a style="color:white;" href="./teacher_subjects/mathematics/grade5/subjectindex.php">view</a>
                                         <?php
                                         }
                                         ?>

                                        <?php
                                         if($grade=='Grade5' && $subject=='Sinhala'){
                                        ?>
                                         <a style="color:white;" href="./teacher_subjects/sinhala/grade5/subjectindex.php">view</a>
                                         <?php
                                         }
                                         ?>

                                        <?php
                                         if($grade=='Grade5' && $subject=='English'){
                                        ?>
                                         <a style="color:white;" href="./teacher_subjects/english/grade5/subjectindex.php">view</a>
                                         <?php
                                         }
                                         ?>

                                        <?php
                                         if($grade=='Grade5' && $subject=='Aesthetic'){
                                        ?>
                                         <a style="color:white;" href="./teacher_subjects/aesthetic/grade5/subjectindex.php">view</a>
                                         <?php
                                         }
                                         ?>

                                        <?php
                                         if($grade=='Grade5' && $subject=='Enviromnetal Stu'){
                                        ?>
                                         <a style="color:white;" href="./teacher_subjects/environmental science/grade5/subjectindex.php">view</a>
                                         <?php
                                         }
                                         ?>

                                         
                                         
                                        </button ></div></td>
                                       
                                        </tr>
                                        <?php
                                           

                                    }

                                }

                                else{
                                    ?>
                                    <p>No Record Found</p>
                                    <?php
                                }
                                
                                
                                ?>
                                
                            
                        </tbody>
                        </table>
                    </div>
                    <div style="margin-top:-340px" class="online-user">
                        <div style="margin-top: 10px;" class="user">
                            <h3 style="margin-left: 60px;">Online Users</h3>

                            <div class="teacher-list">
                            <ol>

                            <?php
                            $query = "SELECT *  FROM login  where login_time>'$date'  ";


                            $i = 1;
                            $rows = mysqli_query($connection,$query);



                            foreach ($rows as $row) :
                                $id=$row['user_id'];

                                $query = "SELECT * FROM members where id='$id' ";
                                        $query_run = mysqli_query($connection, $query);
                                        if($result = mysqli_query($connection,$query)){
                                            if(mysqli_num_rows($result) > 0){
                                            while($row = mysqli_fetch_array($result)){
                                            // echo $row['first_name'];
                                            $first_name= $row['first_name'];
                                            $last_name= $row['last_name'];

                                            ?>
                                            <ol>
                                            <li><span style="margin-left: 0px;" class="las la-user-circle"></span><a href="./teacher_profile_other.php"><?php echo $first_name;?>&nbsp;<?php echo $last_name;?>  </a>
                                            </li>

                                           </ol>
                                            <?php
                                            }

                                          }
                                        }

                            endforeach;
                            ?>



                            <i class="fas fa-comment-lines"></i>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>



                <div class="calendarandupdates">
                    <div class="calendar">
                    <div class="month">
                    <i class="fas fa-angle-left prev"></i>
                    <div class="date">
                        <h1></h1>
                        <p></p>
                    </div>
                    <i class="fas fa-angle-right next"></i>
                    </div>
                    <div class="weekdays">
                    <div>Sun</div>
                    <div>Mon</div>
                    <div>Tue</div>
                    <div>Wed</div>
                    <div>Thu</div>
                    <div>Fri</div>
                    <div>Sat</div>
                    </div>
                    <div class="days"></div>
                    </div>

                    <div class="jobs">
                    <h3>Upcomming Events<small> Recently Updates </small></h3>
                    <?php
                    $query = "SELECT * FROM tbl_events ORDER BY start DESC LIMIT 4 ";
                    $query_run = mysqli_query($connection, $query);
                    if($result = mysqli_query($connection,$query)){
                        if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_array($result)){
                        // echo $row['first_name'];
                        $id= $row['id'];
                        $title= $row['title'];
                        $start= $row['start'];
                        ?>
                        <div class="table-responsive">
                        <table width="100">
                            <tr>
                                <td>
                                    <div style="padding-left: 15px;"><span class="indicator even"></span></div>
                                </td>



                                <td><div style="padding-left: 15px;"><?php echo $id;  ?></div></td>
                                <td ><div style="padding-left: -20px;"><?php echo $title;  ?></div></td>
                                <td><div style="padding-left: 20px;">          </</div></td>
                                <td><div style="padding-left: 20px;"><button id="btnlast">
                                  <a style="color:white;" href="./admin_calendar/calendar_0/index.php" >View</a>
                                </button ></div></td>
                            </tr>
                        </table>
                        </div>
                        <?php
                        }}}

                    ?>




                    </div>
                </div>

                </main>


            </div>
        <label for="sidebar-toggle" class="body-label"></label>



        <script src="./teacher_dashboard.js"></script>
</body>
</html>
