<?php
    session_start();

    if(!$_SESSION['id']){
        header('location:../../login.php');
    }

    date_default_timezone_set('Asia/Colombo'); 
    // echo date("Y-m-d H:i:s"); 
    $date=date('Y-m-d H:i:s', strtotime('-5 minutes'));

    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,'demo');

    $query = "SELECT *  FROM login  where login_time>'$date'  ";
    $rows = mysqli_query($connection,$query);
     
  
 
      foreach ($rows as $row) : 
        $id=$row['user_id'];

        $query = "SELECT * FROM members where id='$id' ";
                 $query_run = mysqli_query($connection, $query);
                 if($result = mysqli_query($connection,$query)){
                    if(mysqli_num_rows($result) > 0){
                      while($row = mysqli_fetch_array($result)){
                       $first_name= $row['first_name'];
                       echo $first_name; 
                      }
                    }
                }
     
    
    
    
     endforeach;


    $query = "SELECT * FROM discussion ";
    $query_r = mysqli_query($connection, $query);

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

    
    if(isset($_POST['submit'])){
         $selected = $_POST['Grade'];
        //  echo 'You have chosen: ' . $selected;
              
    }
       

   

           


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
            <a href="../../iskole/teacher_profile.php"><img src="<?php echo $image_src;  ?>" ></a>
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
                        <span style="margin-left: 0px;">Discussion</span>
                        </h3>
                    </div>
                 
                    <div class="header-actions">
                        <!-- <a href="#" class="hbtn hb-fill-right-rev-bg-br"><span class="las la-tools"></span>Settings</a> -->

                    </div>
                  
                </div>
                
                <div class="container">
                <!-- <select  style="margin-left:-900px;"onchange="la(this.value)">
                                    <option selected>Grade1</option>
                                    <option value="../../../teacher_subjects/mathematics/grade5/subjectindex.php">Grade2</option>
                                    <option value="../../../teacher_subjects/mathematics/grade3/subjectindex.php">Grade3</option>
                                    <option value="../../../teacher_subjects/mathematics/grade1/subjectindex.php">Grade4</option>
                                    <option value="../../../teacher_subjects/mathematics/grade2/subjectindex.php">Grade5</option>

                              </select> -->
                            

                   
              
                    

                    <div class="group2">
                        




                        <div style="background-color:#D2E4FF;" class="rec4">
                             <div class="stu41dis">
                                <a><img id="stu41" src="<?php echo $image_src;  ?>" ></a>
                            </div>
                            
                            <div class="innerrec4">
                            <form method="post" action="action.php">

                            
                            <!-- <input type="submit" name="submit" class="submit"  value="submit"> -->
                                    <input type="text" id="stu45" name="d_comment"  placeholder="Add a discussion...">
                                    <button class="fas fa-paper-plane" id="d_button" name="d_button" >Send</button>
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
                         <a><img style="margin-top: 3px;" id="stu41" src="<?php echo $image_src;  ?>" ></a>
                         <p id="stu2"><b><?php echo ucfirst($_SESSION['first_name']); ?>&nbsp;<?php echo ucfirst($_SESSION['last_name']); ?></b><br><span id="stu3"></span></p>
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

                                                                              
                                                                        
                                                                        <div style="height:200px;" class="rec2">
                                                                        <?php
                                                                                $query = "SELECT * FROM images where member_id=$id";
                                                                                $query_s = mysqli_query($connection, $query);
                                                                              		  if(mysqli_num_rows($query_s) > 0){
                                                                                        while($row = mysqli_fetch_assoc($query_s)){
                                                                                        // echo $row['name']; 
                                                                                        $image1 = $row['name'];
                                                                                        $image_src1 = "../upload/".$image1;
                                                                                        }
                                                                              		  }
                                                                            ?>

                                                                          
                                                                         <a><img style="margin-left: 700px;" id="stu41" src="<?php echo $image_src1;  ?>" ></a>
                                                                           
                                                                               
                                                                                <p style="margin-left: -150px;" id="stu22"><b>
                                                                                <?php
                                                                                $query = "SELECT * FROM members where id=$id";
                                                                                $query_s = mysqli_query($connection, $query);
                                                                              		  if(mysqli_num_rows($query_s) > 0){
                                                                                        while($row = mysqli_fetch_assoc($query_s)){
                                                                                    		 echo $row['first_name']; 
                                                                                        }
                                                                              		  }
                                                                            ?>

                                                                                
                                                                                <!-- </b><br>Grade 1<br><span id="stu23">2 days ago</span></p> -->
                                                                          
                                                                            <div style="margin-left:-600px;margin-top:50px;" class="innerrec">
                                                                                <p><?php echo $comment; ?></p>
                                                                            </div>
                                                                            <div class="icon">
                                                                            <!-- <img src="img/image 2.png">  4 -->
                                                                            </div>
                                                                            <div class="delete">
                                                                            <!-- <img src="img/Group 1.png"> -->
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
                                    <div style="border: 2px solid gray;border-radius: 2px;" class="hr"> <hr></div>
                                          
                            <?php

                            }
                        } 
                         ?>
                                   
                                    

                       
                        
                        </div>
                        
                        

                       
                    </div>  
                    
                    <div class="group1">
                        <div class="online-user">
                            <div class="user">
                                <h3>Online Users</h3>
    
                                <div class="teacher-list">
                                <ol>

                                <?php
                            $query = "SELECT *  FROM login  where login_time>'$date'  ";
                        //  $query_run = mysqli_query($connection, $query);

     
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
                                            <li><span style="margin-left: 0px;" class="las la-user-circle"></span><a href="./teacher_profile_other.php"><?php echo $first_name;?>&nbsp;<?php echo $last_name;?> 
                                            </li>
                                                    
                                           </ol>
                                            <?php
                                            }
                                            
                                            }
                                        }
                            
                            endforeach;
                            ?>
                               
                            
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