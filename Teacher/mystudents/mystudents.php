<?php
    session_start();

    if(!$_SESSION['id']){
        header('location:../../login.php');
    }

    $host = "localhost"; /* Host name */
    $user = "root"; /* User */
    $password = ""; /* Password */
    $dbname = "demo"; /* Database name */

    $connection = mysqli_connect($host, $user, $password,$dbname);
// Check connection
    if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
    }

    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,'demo');
    $date=date('Y-m-d H:i:s');
    

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
    <title>MyStudents</title>
    <link rel="stylesheet" href="mystudents.css">
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
                <img src="img/logo.png" width="50px" alt="">

                <div class="brand-icons">
                    <span class=""></span>
                    <a href="../teacher_mailbox/mailbox.php"><span class="las la-bell"></span></a>
                </div>
            </div>
        </div>

        <div class="sidebar-main">
            <div class="sidebar-user">
                <a href="../teacher_profile.php"><img src="<?php echo $image_src;  ?>" ></a>
                 <div>
                 <h3><?php echo ucfirst($_SESSION['first_name']); ?>&nbsp;<?php echo ucfirst($_SESSION['last_name']); ?></h3>
                <span><?php echo ($_SESSION['email']); ?></span>
            </div>
         </div>

         <div class="sidebar-menu">
               
                 <ul>
                    <!-- <li><a href="">
                        <span class="las la-home"></span>Home
                    </a></li> -->
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

                    
                    <li><a href="../ChatApp/login.php"><span class="las la-comments"></span>Chat</a></li>
                    

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
                    <div>
                        <h3>
                            Students
                        </h3>
                        <!-- <small>
                            Monitor dfdskfjnsgkjdfkb dfbm 
                        </small> -->
                    </div>
                 
                    <div class="header-actions">
                        <!-- <a href="#" class="hbtn hb-fill-right-rev-bg-br"><span class="las la-tools"></span>Settings</a> -->

                    </div>
                  
                </div>

               <div class="container">
                   <div class="group1">
                        <div class="green">
                            <div class="subject-list"></div>
                                 <div class="btn-group">
                                    <!-- <button style="background-color: #5850ec;" ><p>Mathematics</p></button>
                                    <button><a href="./mystudents_sinhala.php"><p >Sinhala</p></a></button>
                                    <button><p>English</p></button>
                                    <button><p>Aesthetic</p></button> -->
                                 </div>
                        </div>
                    </div>

                   <div style="margin-top:-70px;margin-left:-30px" class="group2">
                    <p><b>Best Students</b></p>
                        <br>
                        <div class="beststu">
                            
                        <?php
                                        $connection = mysqli_connect("localhost","root","","demo");
                                        $query = "SELECT gid  FROM teacher_grade_subject  where teacher_id=$_SESSION[id]  ";
                                        $rows = mysqli_query($connection,$query);
                                            
                                        
                                        
                                        foreach ($rows as $row) : 
                                        $grade=$row['gid'];
                                        //  echo $row['gid'];
                                        //  echo "<br>";


                                               
                                                $query ="SELECT qid  FROM quizz  where teacher_id=$_SESSION[id] AND gid='$grade'ORDER BY uploaded_date DESC LIMIT 1 " ;
                                                $rows = mysqli_query($connection,$query);
                                                    
                                                
                                                
                                                foreach ($rows as $row) : 
                                                $qid_last=$row['qid'];
                                                //  echo $row['qid'];
                                                //  echo "<br>";

                                                        $query ="SELECT student_id,MAX(q_marks),q_marks FROM marks where qid='$qid_last' " ;
                                                        $rows = mysqli_query($connection,$query);
                                                            
                                                        
                                                        
                                                        foreach ($rows as $row) : 
                                                            $student_id=$row['student_id'];
                                                            $q_marks=$row['q_marks'];
                                                            // echo $student_id;
                                                            // echo "<br>";


                                                                    $query = "SELECT * FROM members where id='$student_id' ";
                                                                    $rows = mysqli_query($connection,$query);
                                                                        
                                                                    
                                                                    
                                                                    foreach ($rows as $row) : 
                                                                        $first_name= $row['first_name'];
                                                                        $last_name= $row['last_name'];
                                                                        $id= $row['id'];

                                                                        // echo $row['last_name'];
                                                                        //    echo "<br>";


                                                                           $query = "SELECT * FROM paid_items where student_id='$id' AND valid_till>='$date'  ";
                                                                            $rows = mysqli_query($connection,$query);
                                                                                
                                                                            
                                                                            
                                                                            foreach ($rows as $row) : 
                                                                                $grade= $row['gid'];

                                                                                if($grade='G1'){
                                                                                    $grade='Grade1';
                                                                              
                                                                                 }
                                                                                 if($grade='G2'){
                                                                                    $grade='Grade2';
                                                                              
                                                                                 }
                                                                                 if($grade='G3'){
                                                                                    $grade='Grade2';
                                                                              
                                                                                 }
                                                                                 if($grade='G4'){
                                                                                    $grade='Grade2';
                                                                              
                                                                                 }

                                                                                    $query = "SELECT name FROM images where member_id='$id' ";
                                                                                    $rows = mysqli_query($connection,$query);
                                                                                        
                                                                                    
                                                                                    
                                                                                    foreach ($rows as $row) : 
                                                                                        $image= $row['name'];
                                                                                        $image_src2 = "../upload/".$image;
                                                                                        // echo $image;

                                                                                    endforeach;

                                                                                    
                                        

                                                                                // echo $row['gid'];

                                                                                ?>

                                                                            <div class="stu">
                                                                                <div class="class1">
                                                                                    <!-- <img src="img/image 3.png" class="pen">
                                                                                    <img src="img/image 2.png" class="del"> -->
                                                                                </div>
                                                                                <br>
                                                                                <div class="class2">
                                                                                    <img style="boarder-radius:50px;" src="<?php echo $image_src2?>"  alt="">
                                                                                    <h3><a style="margin-left: -10PX;" href="#"><?php echo "$first_name"?>&nbsp;<?php echo "$last_name"?></a></h3>
                                                                                    <span><?php echo "$grade"?></span>
                                                                                    <?php echo "$q_marks"?>
                                                                                </div>
                                                                            </div>   
                                                                                <?php

                                                                            

                                                                    
                                                                            endforeach;
                                                                
                                                                    endforeach;
    
                                                        endforeach;

                                                    
                                                endforeach;
                                            
                                        endforeach;
                                       
                                        
                                         ?>
                                       
                                        
                                        
                                                                           
                         </div>                                             
                      
                         <div style="margin-top:50px;" class="stuhis">
                            <p><b>Student History</b><span>

                            <form action="" method="post">
                            <select name="Grade">
                            <?php
                            $sql= "SELECT gid FROM teacher_grade_subject where  teacher_id=$_SESSION[id] ";
                            $query_run = mysqli_query($connection, $sql);
                            if($result = mysqli_query($connection,$sql)){
                             if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_array($result)){
                                        $grade = $row['gid'];
                                        if($grade=='G1'){
                                          $grade_new='Grade1';
                                        }
                                        if($grade=='G2'){
                                          $grade_new='Grade2';
                                        }
                                        if($grade=='G3'){
                                          $grade_new='Grade3';
                                        }
                                        if($grade=='G4'){
                                          $grade_new='Grade4';
                                        }
                                        echo "<option value='$grade'>$grade_new</option>";
                                        }
                              }
                    }
              
                
             
                ?>
                            </select>

                            

                            <input type="submit" name="submit" class="submit"  value="Choose options">
                            </form>


                            <table style="margin-left: 0px;margin-top: 30px;" width="1100px" cellspacing="0">
                                                        <thead>

                                                        <th width="200">First Name</th>
                                                        <th width="200">Last Name</th>
                                                        <th width="200">Email</th>
                                                        <th width="200">g_mobile</th>
                                                        <th width="200">g_name</th>
                                                        <th width="200">profile</th>

                                                       
                                                        </thead>
                            
                            <?php
                                if(isset($_POST['submit'])){
                                    if(!empty($_POST['Grade'])) {
                                       
                                            $selected = $_POST['Grade'];
                                          
                                            echo 'You have chosen: ' . $selected;
                                           
                                                 if($selected=='G1'){
                                                   
                                                        $connection = mysqli_connect("localhost","root","","demo");
                                                        ?>
                                                        
                               
                                                         <tbody>

                                                            <?php
                                                            $query = "SELECT *  FROM paid_items  where gid='G1' AND valid_till>='$date'  ";
                                                            $rows = mysqli_query($connection,$query);
                                                            foreach ($rows as $row) : 
                                                            $student_id=$row['student_id'];

                                                            $query = "SELECT *  FROM student where student_id=$student_id ";
                                                            
                                                            $rows = mysqli_query($connection,$query);
                                                            foreach ($rows as $row) : 
                                                            $g_mobile=$row['g_mobile'];
                                                            $g_name=$row['g_name'];
                                                            
                                                        // echo $row['gid'];
                                                                $query ="SELECT *  FROM members  where  id='$student_id' " ;
                                                                $rows = mysqli_query($connection,$query);
                                                                    
                                                                foreach ($rows as $row) : 
                                                                        $first_name=$row['first_name'];
                                                                        $last_name=$row['last_name'];
                                                                        $email=$row['email'];


                                                                // echo $row['qid'];
                                                                ?>
                                                                
                                                                <tr>
                                                                   
                                                                        <td><?php echo $first_name;?></td>
                                                                        <td><?php echo $last_name;?></td>
                                                                        <td><?php echo $email;?></td>
                                                                        <td><?php echo $g_mobile;?></td>
                                                                        <td><?php echo $g_name;?></td>
                                                                        <td>
                                                                        <form action="./student_profile.php" method="post">
                                                                        <input type="hidden" name="view_id" value="<?php echo $student_id; ?>">
                                                                        <button type="submit" name="view_btn1" class="btn btn-danger"> Profile</button>
                                                                        </form>
                                                                        </td>
                                                                        
                                                                    </tr>
                                                                <?php
                                                                 endforeach;
                                                                endforeach;
                                                                endforeach;
                                                            }




                                                            if($selected=='G2'){
                                                   
                                                                $connection = mysqli_connect("localhost","root","","demo");
                                                                ?>
                                                                
                                       
                                                                 <tbody>
        
                                                                    <?php
                                                                    $query = "SELECT *  FROM paid_items  where gid='G2' AND valid_till>='$date'  ";
                                                                    $rows = mysqli_query($connection,$query);
                                                                    foreach ($rows as $row) : 
                                                                    $student_id=$row['student_id'];
                                                                    $g_mobile=$row['g_mobile'];
                                                                    $g_name=$row['g_name'];
                                                                    
                                                                // echo $row['gid'];
                                                                        $query ="SELECT *  FROM members  where  id='$student_id' " ;
                                                                        $rows = mysqli_query($connection,$query);
                                                                            
                                                                        foreach ($rows as $row) : 
                                                                                $first_name=$row['first_name'];
                                                                                $last_name=$row['last_name'];
                                                                                $email=$row['email'];
        
        
                                                                        // echo $row['qid'];
                                                                        ?>
                                                                        
                                                                        <tr>
                                                                           
                                                                        <td><?php echo $first_name;?></td>
                                                                        <td><?php echo $last_name;?></td>
                                                                        <td><?php echo $email;?></td>
                                                                        <td><?php echo $g_mobile;?></td>
                                                                        <td><?php echo $g_name;?></td>
                                                                        <td>
                                                                        <form action="./student_profile.php" method="post">
                                                                        <input type="hidden" name="view_id" value="<?php echo $student_id; ?>">
                                                                        <button type="submit" name="view_btn1" class="btn btn-danger"> Profile</button>
                                                                        </form>
                                                                        </td>
                                                                                
                                                                            </tr>
                                                                        <?php
                                                                         endforeach;
                                                        
                                                                        endforeach;
                                                                    }
                                                                    if($selected=='G3'){
                                                   
                                                                        $connection = mysqli_connect("localhost","root","","demo");
                                                                        ?>
                                                                        
                                               
                                                                         <tbody>
                
                                                                            <?php
                                                                            $query = "SELECT *  FROM paid_items  where gid='G3' AND valid_till>='$date'  ";
                                                                            $rows = mysqli_query($connection,$query);
                                                                            foreach ($rows as $row) : 
                                                                            $student_id=$row['student_id'];
                                                                            $g_mobile=$row['g_mobile'];
                                                                            $g_name=$row['g_name'];
                                                                            
                                                                        // echo $row['gid'];
                                                                                $query ="SELECT *  FROM members  where  id='$student_id' " ;
                                                                                $rows = mysqli_query($connection,$query);
                                                                                    
                                                                                foreach ($rows as $row) : 
                                                                                        $first_name=$row['first_name'];
                                                                                        $last_name=$row['last_name'];
                                                                                        $email=$row['email'];
                
                
                                                                                // echo $row['qid'];
                                                                                ?>
                                                                                
                                                                                <tr>
                                                                                   
                                                                        <td><?php echo $first_name;?></td>
                                                                        <td><?php echo $last_name;?></td>
                                                                        <td><?php echo $email;?></td>
                                                                        <td><?php echo $g_mobile;?></td>
                                                                        <td><?php echo $g_name;?></td>
                                                                        <td>
                                                                        <form action="./student_profile.php" method="post">
                                                                        <input type="hidden" name="view_id" value="<?php echo $row['student_id']; ?>">
                                                                         <button type="submit" name="view_btn1" class="btn btn-danger"> Profile<button>
                                                                        </form>
                                                                        </td>
                                                            
                                                                                        
                                                                                        
                                                                                    </tr>
                                                                                <?php
                                                                                 endforeach;
                                                                
                                                                                endforeach;
                                                                            }
                                                                            if($selected=='G4'){
                                                   
                                                                                $connection = mysqli_connect("localhost","root","","demo");
                                                                                ?>
                                                                                
                                                       
                                                                                 <tbody>
                        
                                                                                    <?php
                                                                                    $query = "SELECT *  FROM paid_items  where gid='G4' AND valid_till>='$date'  ";
                                                                                    $rows = mysqli_query($connection,$query);
                                                                                    foreach ($rows as $row) : 
                                                                                    $student_id=$row['student_id'];
                                                                                    $g_mobile=$row['g_mobile'];
                                                                                    $g_name=$row['g_name'];
                                                                                    
                                                                                // echo $row['gid'];
                                                                                        $query ="SELECT *  FROM members  where  id='$student_id' " ;
                                                                                        $rows = mysqli_query($connection,$query);
                                                                                            
                                                                                        foreach ($rows as $row) : 
                                                                                                $first_name=$row['first_name'];
                                                                                                $last_name=$row['last_name'];
                                                                                                $email=$row['email'];
                        
                        
                                                                                        // echo $row['qid'];
                                                                                        ?>
                                                                                        
                                                                                        <tr>
                                                                                           
                                                                            <td><?php echo $first_name;?></td>
                                                                                <td><?php echo $last_name;?></td>
                                                                                <td><?php echo $email;?></td>
                                                                                <td><?php echo $g_mobile;?></td>
                                                                                <td><?php echo $g_name;?></td>
                                                                                <td>
                                                                                <form action="./student_profile.php" method="post">
                                                                                <input type="hidden" name="view_id" value="<?php echo $student_id; ?>">
                                                                                                        <button type="submit" name="view_btn1" class="btn btn-danger"> Profile</button>
                                                                                                    </form>
                                                                                                </td>
                                                                                                
                                                                                            </tr>
                                                                                        <?php
                                                                                         endforeach;
                                                                        
                                                                                        endforeach;
                                                                                    }
                                                                                    if($selected=='G5'){
                                                   
                                                                                        $connection = mysqli_connect("localhost","root","","demo");
                                                                                        ?>
                                                                                        
                                                               
                                                                                         <tbody>
                                
                                                                                            <?php
                                                                                            $query = "SELECT *  FROM paid_items  where gid='G5' AND valid_till>='$date'   ";
                                                                                            $rows = mysqli_query($connection,$query);
                                                                                            foreach ($rows as $row) : 
                                                                                            $student_id=$row['student_id'];
                                                                                            $g_mobile=$row['g_mobile'];
                                                                                            $g_name=$row['g_name'];
                                                                                            
                                                                                        // echo $row['gid'];
                                                                                                $query ="SELECT *  FROM members  where  id='$student_id' " ;
                                                                                                $rows = mysqli_query($connection,$query);
                                                                                                    
                                                                                                foreach ($rows as $row) : 
                                                                                                        $first_name=$row['first_name'];
                                                                                                        $last_name=$row['last_name'];
                                                                                                        $email=$row['email'];
                                
                                
                                                                                                // echo $row['qid'];
                                                                                                ?>
                                                                                                
                                                                                                <tr>
                                                                                                   
                                                                                        <td><?php echo $first_name;?></td>
                                                                                            <td><?php echo $last_name;?></td>
                                                                                            <td><?php echo $email;?></td>
                                                                                            <td><?php echo $g_mobile;?></td>
                                                                                            <td><?php echo $g_name;?></td>
                                                                                            <td>
                                                                                            <form action="./student_profile.php" method="post">
                                                                                <input type="hidden" name="view_id" value="<?php echo $student_id; ?>">
                                                                                            <button type="submit" name="view_btn1" class="btn btn-danger"> Profile</button>
                                                                                                </form>
                                                                                            </td>
                                                                                            
                                                                                        </tr>
                                                                                                <?php
                                                                                                 endforeach;
                                                                                
                                                                                                endforeach;
                                                                                            }
                                                                                
                                                            }
                                                            }

                                                           
                                                        ?>
                                                        <p>
                                                    
                                </tbody>
                                </table>
                                
                        </div>
                   
                </div>
                </div>

                        
                   </div>
                </div>

            
            </main>

                
        </div>
    <label for="sidebar-toggle" class="body-label"></label>

    
        
    
</body>
</html>