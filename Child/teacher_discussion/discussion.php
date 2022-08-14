<?php
    session_start();

    if(!$_SESSION['id']){
        header('location:teacher_login.php');
    }



    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,'demo');

    // if(isset($_POST['d_button'])){
    //     $date = date('Y-m-d');
    //     $question=trim($_POST['d_comment']);
    //     $q1 = " INSERT INTO `discussion` ( `question`, `time`,`teacher_id`,`gid`) VALUES ('$question','$date',$_SESSION[id],'G1');";
    //      $query_run1 = mysqli_query($connection,$q1);   
         
    // }

    // if(isset($_POST['s_button'])){
    //     $date = date('Y-m-d');
    //     $comment=trim($_POST['t_comment']);
    //     $d_id=trim($_POST['s_button']);

    //    $q = " INSERT INTO `comments` ( `d_id`, `teacher_id`, `gid`, `comment`, `date`, `commenter_id`) VALUES ('$d_id', $_SESSION[id], 'G1', '$comment', '$date',  $_SESSION[id]);";
    //      $query_run = mysqli_query($connection,$q);   
    // }


    $query = "SELECT * FROM discussion ";
    $query_r = mysqli_query($connection, $query);


        



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,minimum-scale=1">
    <title>Discusion</title>
    <link rel="stylesheet" href="discussion.css">
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
                    <!-- <span class="las la-bell"></span> -->
                    <a href="../teacher_mailbox/mailbox.php"><span class="las la-bell"></span></a>
                </div>
            </div>
        </div>

        <div class="sidebar-main">
            <div class="sidebar-user">
                <img src="img/teacher2.jpg"  alt="">
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

                  <li><a href="../teacher_subjects/mathematics/grade4/subjectindex.php">
                      <span class="las la-book"></span>Subjects
                  </a></li>

                  <li><a href="../mystudents/mystudents.php"><span class="las la-users"></span>My Students</a></li>

                  <li><a href="../teacher_quiz/quiz.php"><span class="las la-check-circle"></span>Tasks</a>
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
                            10 answes<span style="margin-left: 400px;">Discussion</span>
                        </h3>
                    </div>
                 
                    <div class="header-actions">
                        <!-- <a href="#" class="hbtn hb-fill-right-rev-bg-br"><span class="las la-tools"></span>Settings</a> -->

                    </div>
                  
                </div>
                
                <div class="container">

                    <div class="group2">
                        




                        <div class="rec4">
                             <div class="stu41dis">
                                <a><img id="stu41" src="img/teacher2.jpg"></a>
                            </div>
                            
                            <div class="innerrec4">
                            <form method="post" action="action.php">
                                    <input type="text" id="stu45" name="d_comment"  placeholder="Add a discussion...">
                                    <button id="d_button" name="d_button" >Send</button>
                                    <i style="margin-left:1050px"class="fas fa-paper-plane"></i>
                            </form>      
                            </div>
                        </div>
                        
                         
                    
                <?php if(mysqli_num_rows($query_r) > 0)
                 {
                    while($row = mysqli_fetch_assoc($query_r))
                        {
                                    
                         echo "<br>";?>
                         <?php $question= $row['question']; ?>
                                                       
                         <div class="rec1">
                         <a><img id="stu1" src="img/Ellipse 30.png"></a>
                         <p id="stu2"><b>Ashi Perera</b><br>Grade 4<br><span id="stu3">3 days ago</span></p>
                         <p id="stu4"><?php echo $question; $d_id=$row['d_id'] ?>"</p>
                        </div>
                                                                        
                                                    <?php $query = "SELECT * FROM comments where d_id=$d_id   ";
                                                    //  $query = "DELETE FROM register WHERE id='$id' ";
                                                        $query_run = mysqli_query($connection, $query);
                                                    ?>
                                                        <?php if(mysqli_num_rows($query_run) > 0){
                                                                while($row = mysqli_fetch_assoc($query_run)){
                                                                    
                                                                            echo "<br>"; ?>
                                                                            <?php $comment= $row['comment']; ?>
                                                                            <?php $id= $row['commenter_id']; ?>
                                                                        
                                                                            <div class="rec2">

                                                                            <?php
                                                                                $query = "SELECT * FROM members where id=$id";
                                                                                $query_s = mysqli_query($connection, $query);
                                                                              		  if(mysqli_num_rows($query_s) > 0){
                                                                                        while($row = mysqli_fetch_assoc($query_s)){
                                                                                    		 echo $row['first_name']; 
                                                                                        }
                                                                              		  }
                                                                            ?>
                                                                                  

                                                                       
                                                                            <a><img id="stu21" src="img/Ellipse 33.png"></a>
                                                                               
                                                                                <p id="stu22"><b>
                                                                             

                                                                                
                                                                                </b><br>Grade 4<br><span id="stu23">2 days ago</span></p>
                                                                          
                                                                            <div class="innerrec">
                                                                                <p><?php echo $comment; ?></p>
                                                                            </div>
                                                                            <div class="icon">
                                                                            <img src="img/image 2.png">  4
                                                                            </div>
                                                                            <div class="delete">
                                                                            <img src="img/Group 1.png">
                                                                            </div>
                                                                        </div>
                                                                        <?php 
                                                                    }
                                                            }
                                                        ?>


                                    <div class="rec4">
                                    <div class="stu41dis">
                                        <a><img id="stu41" src="img/teacher2.jpg"></a>
                                    </div>
                                    <div class="innerrec4">
                                    <form method="post" action="action.php">
                                            <input type="text" id="stu45" name="t_comment"  placeholder="Add a comment...">
                                            <button id="s_button" name="s_button" value="<?php echo $d_id; ?>">Send</button>
                                            <i style="margin-left:1050px"class="fas fa-paper-plane"></i>
                                    </form>      
                                    </div>
                                    </div> 
                                    <br>
                               <hr>             
                            <?php

                            }
                        } 
                         ?>
                                   
                                    

                        <!-- <div class="rec3">
                            <div class="innerrec2">
                            <p id="stu35">Yeah I also think they are correct.Yeah I also think they are correct.Yeah I also think they are correct.Yeah I also think they are correct.</p>
                            </div>
                            <div class="stu31dis">
                            <a><img style="margin-left:-400px;" id="stu31" src="img/Ellipse 30.png"></a>
                            </div>
                        </div>
                        <div class="rec4">
                            <div class="stu41dis">
                                <a><img id="stu41" src="img/teacher2.jpg"></a>
                            </div>
                            <div class="innerrec4">
                            <form action="" method="post">
                                    <input type="text" id="stu45" name="t_comment"  placeholder="Add a comment...">
                                    <button id="s_button" name="s_button">Send</button>
                                    <i style="margin-left:1050px"class="fas fa-paper-plane"></i>
                            </form>      
                            </div>
                        </div> -->
                        <!-- <div class="rec5">
                            <a><img id="stu51" src="img/Ellipse 14.png"></a>
                            <p id="stu52"><b>Abdul Dash</b><br>Grade 4<br><span id="stu53">2 days ago</span></p>
                            <div class="innerrec5">
                                <p>There are many similar words the sun. When i amd searching i could found some which are god, earth.There are many similar words the sun. When i amd searching i could found some which are god, earth.There are many similar words the sun. When i amd searching i could found some which are god, earth.</p>
                            </div>
                            <div class="icon5">
                               <img src="img/image 2.png">  5
                            </div>
                            <div class="delete5">
                              <img src="img/Group 1.png">
                            </div>
                        </div>
                        <div class="rec6">
                            <div class="stu41dis">
                                <a><img id="stu41" src="img/teacher2.jpg"></a>
                            </div>
                            <div class="innerrec4">
                              
                                    <input type="text" id="stu45"  placeholder="Add a comment..."><i style="margin-left:1050px"class="fas fa-paper-plane"></i>
                                  
                            </div>
                        </div>
                         -->
                        
                        </div>
                        
                        

                       
                    </div>  
                    
                    <div class="group1">
                        <div class="online-user">
                            <div class="user">
                                <h3>Online Teachers</h3>
    
                                <div class="teacher-list">
                                <ol>
                                    <li><span class="las la-user-circle"></span><a href="../teacher_profile_other.php">J.A.Perera</a>
                                    </li>
                                    <li><span class="las la-user-circle"></span><a href=" ">K.A.Kumar</a>
                                    </li>
                                    <li><span class="las la-user-circle"></span><a href=" ">K.A.Kumarvit</a>
                                    <li><span class="las la-user-circle"></span><a href=" ">W.A.Kumar</a>
                                    </li>
                                    <li><span class="las la-user-circle"></span><a href=" ">K.A.Sanyary</a>
                                    </li>
                                    
                                </ol>
                                <i class="fas fa-comment-lines"></i>                   </div>
    
                                <h3>Online Students</h3>
                                <div class="student-list">
                                    <ol>
                                        <li><span class="las la-user-circle"></span><a href=" "><a href="../t_student_profile.php">K.A.Janul</a>
                                        </li>
                                        <li><span class="las la-user-circle"></span><a href=" ">K.A.Kumar</a>
                                        </li>
                                        <li><span class="las la-user-circle"></span><a href=" ">K.A.Kumarvit</a>
                                        </li>
                                        <li><span class="las la-user-circle"></span><a href=" ">W.A.Kumar</a>
                                        </li>
                                        <li><span class="las la-user-circle"></span><a href=" ">K.A.Sanyary</a>
                                        </li>
                                        <li><span class="las la-user-circle"></span><a href=" ">K.A.Janul</a>
                                        </li>
                                        <li><span class="las la-user-circle"></span><a href=" ">K.A.Kumar</a>
                                        </li>
                                        <li><span class="las la-user-circle"></span><a href=" ">K.A.Kumarvit</a>
                                        </li>
                                        <li><span class="las la-user-circle"></span><a href=" ">W.A.Kumar</a>
                                        </li>
                                        
                                        
                                    </ol>
                                    </div>
                                
                            </div>
                        </div>
                </div>
                    
                
                
            </main>

                
            </div>
        <label for="sidebar-toggle" class="body-label"></label>
        <script type="text/javascript" src="./discussion.js"></script>
        
            
        
</body>
</html>