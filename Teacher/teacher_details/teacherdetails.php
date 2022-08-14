<?php
    session_start();

    if(!$_SESSION['id']){
        header('location:../../login.php');
    }

    $connection = mysqli_connect("localhost","root","","demo");
    $sql= "SELECT name FROM images where  member_id=$_SESSION[id] ";
        $query_run = mysqli_query($connection, $sql);
            if($result = mysqli_query($connection,$sql)){
                     if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_array($result)){
                                $image = $row['name'];
                                $image_src = "../upload/".$image;
                    

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
    <title>Teacher Details</title>
    <link rel="stylesheet" href="teacherdetails.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                <a href="../teacher_profile.php"><img src="../teacher_images/logo.png" width="50px" alt=""></a>

                <div class="brand-icons">
                    <!-- <span class=""></span> -->
                    <a href="../teacher_mailbox/mailbox.php"><span style="margin-left: 150px;" class="las la-bell"></span>
                </div>
            </div>
        </div>

       

         <div class="sidebar-main">
            <div class="sidebar-user">
                <a href="teacher_profile.php"> <img src="<?php echo $image_src;  ?>" ></a>
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

                    <li><a href="../teacher_dashboard.php">
                        <span class="las la-book"></span>Subjects
                    </a></li>

                    <li><a href="../mystudents/mystudents.php"><span class="las la-users"></span>My Students</a></li>

                    <li><a href="../teacher_quiz/quiz.php"><span class="las la-check-circle"></span>Tasks</a>
                    </li>
                     
                     <li><a href="../analytics/progressreport.php"><span class="las la-chart-pie"></span>Analytics</a></li>

                     <li><a href="../teacher_calendar/calendar.php">
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

                
                    <li><a href="../ChatApp/login.php"><span class="las la-comments"></span>Chat</a></li>
                    

                    <li><a href="../teacher_finance/finance.php">
                        <span class="las la-credit-card"></span>Finance
                    </a></li>


                    <li><a href="../skole_welcome_page.html">
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
                    <div>
                        <h3>
                            Teacher Details
                        </h3>
                    </div>
                 
                    <div class="header-actions">
                        <!-- <a href="#" class="hbtn hb-fill-right-rev-bg-br"><span class="las la-tools"></span>Settings</a> -->

                    </div>
                  
                </div>
                
                <div class="container">
                    <table>
                        <tr>
                        <th></th>
                          <th>English</th>
                          <th>Sinhala</th>
                          <th>Mathematics</th>
                          <th>Environmental Science</th>
                        </tr>
                        <tr>
                            <td><b>Grade 1</b></td>
                           
                            <td><?php
                                    $query = "SELECT gid,sid,teacher_id  FROM teacher_grade_subject where gid='G1' AND sid='S2' ";
                                    $rows = mysqli_query($connection,$query);
                                                    
                                                
                                                
                                                foreach ($rows as $row) :
                                                $teacher_id=$row['teacher_id'];
                                              
                                                    ?> <br><?php

                                                    $query = "SELECT first_name,last_name  FROM members where id='$teacher_id' ";
                                                    $rows = mysqli_query($connection,$query);
                                                                    
                                                                
                                                                
                                                                foreach ($rows as $row) :
                                                                $first_name=$row['first_name'];
                                                                $last_name=$row['last_name'];
                                                              
                                                                    echo $first_name;?>&nbsp; <?php echo("$last_name")?><?php
                                                                
                                                                endforeach;
                                                
                                                endforeach;

                            ?></td>
                            <td><?php
                                    $query = "SELECT gid,sid,teacher_id  FROM teacher_grade_subject where gid='G1' AND sid='S3' ";
                                    $rows = mysqli_query($connection,$query);
                                                    
                                                
                                                
                                                foreach ($rows as $row) :
                                                $teacher_id=$row['teacher_id'];
                                              
                                                    ?> <br><?php

                                                    $query = "SELECT first_name,last_name  FROM members where id='$teacher_id' ";
                                                    $rows = mysqli_query($connection,$query);
                                                                    
                                                                
                                                                
                                                                foreach ($rows as $row) :
                                                                $first_name=$row['first_name'];
                                                                $last_name=$row['last_name'];
                                                              
                                                                    echo $first_name;?>&nbsp; <?php echo("$last_name")?><?php
                                                                
                                                                endforeach;
                                                
                                                endforeach;

                            ?></td>
                            <td> <?php
                                    $query = "SELECT gid,sid,teacher_id  FROM teacher_grade_subject where gid='G1' AND sid='S1' ";
                                    $rows = mysqli_query($connection,$query);
                                                    
                                                
                                                
                                                foreach ($rows as $row) :
                                                $teacher_id=$row['teacher_id'];
                                              
                                                    ?> <br><?php

                                                    $query = "SELECT first_name,last_name  FROM members where id='$teacher_id' ";
                                                    $rows = mysqli_query($connection,$query);
                                                                    
                                                                
                                                                
                                                                foreach ($rows as $row) :
                                                                $first_name=$row['first_name'];
                                                                $last_name=$row['last_name'];
                                                              
                                                                    echo $first_name;?>&nbsp; <?php echo("$last_name")?><?php
                                                                
                                                                endforeach;
                                                
                                                endforeach;

                            ?></td>
                            
                             <td><?php
                                    $query = "SELECT gid,sid,teacher_id  FROM teacher_grade_subject where gid='G1' AND sid='S5' ";
                                    $rows = mysqli_query($connection,$query);
                                                    
                                                
                                                
                                                foreach ($rows as $row) :
                                                $teacher_id=$row['teacher_id'];
                                              
                                                    ?> <br><?php

                                                    $query = "SELECT first_name,last_name  FROM members where id='$teacher_id' ";
                                                    $rows = mysqli_query($connection,$query);
                                                                    
                                                                
                                                                
                                                                foreach ($rows as $row) :
                                                                $first_name=$row['first_name'];
                                                                $last_name=$row['last_name'];
                                                              
                                                                    echo $first_name;?>&nbsp; <?php echo("$last_name")?><?php
                                                                
                                                                endforeach;
                                                
                                                endforeach;

                            ?></td>
                            
                        </tr>
                        <tr>
                            <td><b>Grade 2</b></td>
                            <td><?php
                                    $query = "SELECT gid,sid,teacher_id  FROM teacher_grade_subject where gid='G2' AND sid='S2' ";
                                    $rows = mysqli_query($connection,$query);
                                                    
                                                
                                                
                                                foreach ($rows as $row) :
                                                $teacher_id=$row['teacher_id'];
                                              
                                                    ?> <br><?php

                                                    $query = "SELECT first_name,last_name  FROM members where id='$teacher_id' ";
                                                    $rows = mysqli_query($connection,$query);
                                                                    
                                                                
                                                                
                                                                foreach ($rows as $row) :
                                                                $first_name=$row['first_name'];
                                                                $last_name=$row['last_name'];
                                                              
                                                                    echo $first_name;?>&nbsp; <?php echo("$last_name")?><?php
                                                                
                                                                endforeach;
                                                
                                                endforeach;

                            ?></td>
                            <td><?php
                                    $query = "SELECT gid,sid,teacher_id  FROM teacher_grade_subject where gid='G1' AND sid='S3' ";
                                    $rows = mysqli_query($connection,$query);
                                                    
                                                
                                                
                                                foreach ($rows as $row) :
                                                $teacher_id=$row['teacher_id'];
                                              
                                                    ?> <br><?php

                                                    $query = "SELECT first_name,last_name  FROM members where id='$teacher_id' ";
                                                    $rows = mysqli_query($connection,$query);
                                                                    
                                                                
                                                                
                                                                foreach ($rows as $row) :
                                                                $first_name=$row['first_name'];
                                                                $last_name=$row['last_name'];
                                                              
                                                                    echo $first_name;?>&nbsp; <?php echo("$last_name")?><?php
                                                                
                                                                endforeach;
                                                
                                                endforeach;

                            ?></td>
                            <td><?php
                                    $query = "SELECT gid,sid,teacher_id  FROM teacher_grade_subject where gid='G2' AND sid='S1' ";
                                    $rows = mysqli_query($connection,$query);
                                                    
                                                
                                                
                                                foreach ($rows as $row) :
                                                $teacher_id=$row['teacher_id'];
                                              
                                                    ?> <br><?php

                                                    $query = "SELECT first_name,last_name  FROM members where id='$teacher_id' ";
                                                    $rows = mysqli_query($connection,$query);
                                                                    
                                                                
                                                                
                                                                foreach ($rows as $row) :
                                                                $first_name=$row['first_name'];
                                                                $last_name=$row['last_name'];
                                                              
                                                                    echo $first_name;?>&nbsp; <?php echo("$last_name")?><?php
                                                                
                                                                endforeach;
                                                
                                                endforeach;

                            ?></td>
                            

<td><?php
                                    $query = "SELECT gid,sid,teacher_id  FROM teacher_grade_subject where gid='G2' AND sid='S5' ";
                                    $rows = mysqli_query($connection,$query);
                                                    
                                                
                                                
                                                foreach ($rows as $row) :
                                                $teacher_id=$row['teacher_id'];
                                              
                                                    ?> <br><?php

                                                    $query = "SELECT first_name,last_name  FROM members where id='$teacher_id' ";
                                                    $rows = mysqli_query($connection,$query);
                                                                    
                                                                
                                                                
                                                                foreach ($rows as $row) :
                                                                $first_name=$row['first_name'];
                                                                $last_name=$row['last_name'];
                                                              
                                                                    echo $first_name;?>&nbsp; <?php echo("$last_name")?><?php
                                                                
                                                                endforeach;
                                                
                                                endforeach;

                            ?></td>
                        </tr>
                        <tr>
                            <td><b>Grade 3</b></td>
                            <td><?php
                                    $query = "SELECT gid,sid,teacher_id  FROM teacher_grade_subject where gid='G3' AND sid='S2' ";
                                    $rows = mysqli_query($connection,$query);
                                                    
                                                
                                                
                                                foreach ($rows as $row) :
                                                $teacher_id=$row['teacher_id'];
                                              
                                                    ?> <br><?php

                                                    $query = "SELECT first_name,last_name  FROM members where id='$teacher_id' ";
                                                    $rows = mysqli_query($connection,$query);
                                                                    
                                                                
                                                                
                                                                foreach ($rows as $row) :
                                                                $first_name=$row['first_name'];
                                                                $last_name=$row['last_name'];
                                                              
                                                                    echo $first_name;?>&nbsp; <?php echo("$last_name")?><?php
                                                                
                                                                endforeach;
                                                
                                                endforeach;

                            ?></td>
                            <td><?php
                                    $query = "SELECT gid,sid,teacher_id  FROM teacher_grade_subject where gid='G3' AND sid='S3' ";
                                    $rows = mysqli_query($connection,$query);
                                                    
                                                
                                                
                                                foreach ($rows as $row) :
                                                $teacher_id=$row['teacher_id'];
                                              
                                                    ?> <br><?php

                                                    $query = "SELECT first_name,last_name  FROM members where id='$teacher_id' ";
                                                    $rows = mysqli_query($connection,$query);
                                                                    
                                                                
                                                                
                                                                foreach ($rows as $row) :
                                                                $first_name=$row['first_name'];
                                                                $last_name=$row['last_name'];
                                                              
                                                                    echo $first_name;?>&nbsp; <?php echo("$last_name")?><?php
                                                                
                                                                endforeach;
                                                
                                                endforeach;

                            ?></td>
                            <td><?php
                                    $query = "SELECT gid,sid,teacher_id  FROM teacher_grade_subject where gid='G3' AND sid='S1' ";
                                    $rows = mysqli_query($connection,$query);
                                                    
                                                
                                                
                                                foreach ($rows as $row) :
                                                $teacher_id=$row['teacher_id'];
                                              
                                                    ?> <br><?php

                                                    $query = "SELECT first_name,last_name  FROM members where id='$teacher_id' ";
                                                    $rows = mysqli_query($connection,$query);
                                                                    
                                                                
                                                                
                                                                foreach ($rows as $row) :
                                                                $first_name=$row['first_name'];
                                                                $last_name=$row['last_name'];
                                                              
                                                                    echo $first_name;?>&nbsp; <?php echo("$last_name")?><?php
                                                                
                                                                endforeach;
                                                
                                                endforeach;

                            ?></td>
                            
                             <td><?php
                                    $query = "SELECT gid,sid,teacher_id  FROM teacher_grade_subject where gid='G3' AND sid='S5' ";
                                    $rows = mysqli_query($connection,$query);
                                                    
                                                
                                                
                                                foreach ($rows as $row) :
                                                $teacher_id=$row['teacher_id'];
                                              
                                                    ?> <br><?php

                                                    $query = "SELECT first_name,last_name  FROM members where id='$teacher_id' ";
                                                    $rows = mysqli_query($connection,$query);
                                                                    
                                                                
                                                                
                                                                foreach ($rows as $row) :
                                                                $first_name=$row['first_name'];
                                                                $last_name=$row['last_name'];
                                                              
                                                                    echo $first_name;?>&nbsp; <?php echo("$last_name")?><?php
                                                                
                                                                endforeach;
                                                
                                                endforeach;

                            ?></td>
                        </tr>
                        <tr>
                            <td><b>Grade 4</b></td>
                            <td><?php
                                    $query = "SELECT gid,sid,teacher_id  FROM teacher_grade_subject where gid='G4' AND sid='S2' ";
                                    $rows = mysqli_query($connection,$query);
                                                    
                                                
                                                
                                                foreach ($rows as $row) :
                                                $teacher_id=$row['teacher_id'];
                                              
                                                    ?> <br><?php

                                                    $query = "SELECT first_name,last_name  FROM members where id='$teacher_id' ";
                                                    $rows = mysqli_query($connection,$query);
                                                                    
                                                                
                                                                
                                                                foreach ($rows as $row) :
                                                                $first_name=$row['first_name'];
                                                                $last_name=$row['last_name'];
                                                              
                                                                    echo $first_name;?>&nbsp; <?php echo("$last_name")?><?php
                                                                
                                                                endforeach;
                                                
                                                endforeach;

                            ?></td>
                            <td><?php
                                    $query = "SELECT gid,sid,teacher_id  FROM teacher_grade_subject where gid='G4' AND sid='S3' ";
                                    $rows = mysqli_query($connection,$query);
                                                    
                                                
                                                
                                                foreach ($rows as $row) :
                                                $teacher_id=$row['teacher_id'];
                                              
                                                    ?> <br><?php

                                                    $query = "SELECT first_name,last_name  FROM members where id='$teacher_id' ";
                                                    $rows = mysqli_query($connection,$query);
                                                                    
                                                                
                                                                
                                                                foreach ($rows as $row) :
                                                                $first_name=$row['first_name'];
                                                                $last_name=$row['last_name'];
                                                              
                                                                    echo $first_name;?>&nbsp; <?php echo("$last_name")?><?php
                                                                
                                                                endforeach;
                                                
                                                endforeach;

                            ?></td>
                            <td><?php
                                    $query = "SELECT gid,sid,teacher_id  FROM teacher_grade_subject where gid='G4' AND sid='S1' ";
                                    $rows = mysqli_query($connection,$query);
                                                    
                                                
                                                
                                                foreach ($rows as $row) :
                                                $teacher_id=$row['teacher_id'];
                                              
                                                    ?> <br><?php

                                                    $query = "SELECT first_name,last_name  FROM members where id='$teacher_id' ";
                                                    $rows = mysqli_query($connection,$query);
                                                                    
                                                                
                                                                
                                                                foreach ($rows as $row) :
                                                                $first_name=$row['first_name'];
                                                                $last_name=$row['last_name'];
                                                              
                                                                    echo $first_name;?>&nbsp; <?php echo("$last_name")?><?php
                                                                
                                                                endforeach;
                                                
                                                endforeach;

                            ?></td>
                            
                             <td><?php
                                    $query = "SELECT gid,sid,teacher_id  FROM teacher_grade_subject where gid='G4' AND sid='S5' ";
                                    $rows = mysqli_query($connection,$query);
                                                    
                                                
                                                
                                                foreach ($rows as $row) :
                                                $teacher_id=$row['teacher_id'];
                                              
                                                    ?> <br><?php

                                                    $query = "SELECT first_name,last_name  FROM members where id='$teacher_id' ";
                                                    $rows = mysqli_query($connection,$query);
                                                                    
                                                                
                                                                
                                                                foreach ($rows as $row) :
                                                                $first_name=$row['first_name'];
                                                                $last_name=$row['last_name'];
                                                              
                                                                    echo $first_name;?>&nbsp; <?php echo("$last_name")?><?php
                                                                
                                                                endforeach;
                                                
                                                endforeach;

                            ?></td>
                          </tr>
                          <tr>
                            <td><b>Grade 5</b></td>
                            <td><?php
                                    $query = "SELECT gid,sid,teacher_id  FROM teacher_grade_subject where gid='G5' AND sid='S2' ";
                                    $rows = mysqli_query($connection,$query);
                                                    
                                                
                                                
                                                foreach ($rows as $row) :
                                                $teacher_id=$row['teacher_id'];
                                              
                                                    ?> <br><?php

                                                    $query = "SELECT first_name,last_name  FROM members where id='$teacher_id' ";
                                                    $rows = mysqli_query($connection,$query);
                                                                    
                                                                
                                                                
                                                                foreach ($rows as $row) :
                                                                $first_name=$row['first_name'];
                                                                $last_name=$row['last_name'];
                                                              
                                                                    echo $first_name;?>&nbsp; <?php echo("$last_name")?><?php
                                                                
                                                                endforeach;
                                                
                                                endforeach;

                            ?></td>
                            <td><?php
                                    $query = "SELECT gid,sid,teacher_id  FROM teacher_grade_subject where gid='G5' AND sid='S3' ";
                                    $rows = mysqli_query($connection,$query);
                                                    
                                                
                                                
                                                foreach ($rows as $row) :
                                                $teacher_id=$row['teacher_id'];
                                              
                                                    ?> <br><?php

                                                    $query = "SELECT first_name,last_name  FROM members where id='$teacher_id' ";
                                                    $rows = mysqli_query($connection,$query);
                                                                    
                                                                
                                                                
                                                                foreach ($rows as $row) :
                                                                $first_name=$row['first_name'];
                                                                $last_name=$row['last_name'];
                                                              
                                                                    echo $first_name;?>&nbsp; <?php echo("$last_name")?><?php
                                                                
                                                                endforeach;
                                                
                                                endforeach;

                            ?></td>
                            <td><?php
                                    $query = "SELECT gid,sid,teacher_id  FROM teacher_grade_subject where gid='G5' AND sid='S1' ";
                                    $rows = mysqli_query($connection,$query);
                                                    
                                                
                                                
                                                foreach ($rows as $row) :
                                                $teacher_id=$row['teacher_id'];
                                              
                                                    ?> <br><?php

                                                    $query = "SELECT first_name,last_name  FROM members where id='$teacher_id' ";
                                                    $rows = mysqli_query($connection,$query);
                                                                    
                                                                
                                                                
                                                                foreach ($rows as $row) :
                                                                $first_name=$row['first_name'];
                                                                $last_name=$row['last_name'];
                                                              
                                                                    echo $first_name;?>&nbsp; <?php echo("$last_name")?><?php
                                                                
                                                                endforeach;
                                                
                                                endforeach;

                            ?></td>
                            
                             <td><?php
                                    $query = "SELECT gid,sid,teacher_id  FROM teacher_grade_subject where gid='G5' AND sid='S5' ";
                                    $rows = mysqli_query($connection,$query);
                                                    
                                                
                                                
                                                foreach ($rows as $row) :
                                                $teacher_id=$row['teacher_id'];
                                              
                                                    ?> <br><?php

                                                    $query = "SELECT first_name,last_name  FROM members where id='$teacher_id' ";
                                                    $rows = mysqli_query($connection,$query);
                                                                    
                                                                
                                                                
                                                                foreach ($rows as $row) :
                                                                $first_name=$row['first_name'];
                                                                $last_name=$row['last_name'];
                                                              
                                                                    echo $first_name;?>&nbsp; <?php echo("$last_name")?><?php
                                                                
                                                                endforeach;
                                                
                                                endforeach;

                            ?></td>
                        </tr>
                      </table>
                   
                       
                </div>
                    
                
                
            </main>

                
            </div>
        <label for="sidebar-toggle" class="body-label"></label>
        <script type="text/javascript" src="./discussion.js"></script>
        
            
        
</body>
</html>