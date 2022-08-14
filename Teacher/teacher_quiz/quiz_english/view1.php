<?php
session_start();

if(!$_SESSION['id']){
    header('location:../../../login.php');
}



$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'demo');

$sql= "SELECT name FROM images where  member_id=$_SESSION[id] ";
$query_run = mysqli_query($connection, $sql);
    if($result = mysqli_query($connection,$sql)){
             if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
                        $image = $row['name'];
                        $image_src = "../../upload/".$image;
                        echo $image;

                        }
              }
}


if(isset($_POST['view_btn']))
{
    $id = $_POST['view_id'];

   // echo $id;
    $query = "SELECT * FROM question WHERE qid='$id' and qqid=1  ";
  //  $query = "DELETE FROM register WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);


if($result = mysqli_query($connection,$query)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
                $q_desc=$row['q_desc'];
                $op1=$row['op1'];
                $op2=$row['op2'];
                $op3=$row['op3'];
                $op4=$row['op4'];
                $ans=$row['ans'];

        }
      }
    }

    $query = "SELECT * FROM question WHERE qid='$id' and qqid=2  ";
    //  $query = "DELETE FROM register WHERE id='$id' ";
      $query_run = mysqli_query($connection, $query);
  
  
  if($result = mysqli_query($connection,$query)){
      if(mysqli_num_rows($result) > 0){
          while($row = mysqli_fetch_array($result)){
                  $q_desc2=$row['q_desc'];
                  $op21=$row['op1'];
                  $op22=$row['op2'];
                  $op23=$row['op3'];
                  $op24=$row['op4'];
                  $ans2=$row['ans'];
  
          }
        }
      }

      $query = "SELECT * FROM question WHERE qid='$id' and qqid=3  ";
      //  $query = "DELETE FROM register WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);
    
    
    if($result = mysqli_query($connection,$query)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                    $q_desc3=$row['q_desc'];
                    $op31=$row['op1'];
                    $op32=$row['op2'];
                    $op33=$row['op3'];
                    $op34=$row['op4'];
                    $ans3=$row['ans'];
    
            }
          }
        }


        $query = "SELECT * FROM question WHERE qid='$id' and qqid=4  ";
        //  $query = "DELETE FROM register WHERE id='$id' ";
          $query_run = mysqli_query($connection, $query);
      
      
      if($result = mysqli_query($connection,$query)){
          if(mysqli_num_rows($result) > 0){
              while($row = mysqli_fetch_array($result)){
                      $q_desc4=$row['q_desc'];
                      $op41=$row['op1'];
                      $op42=$row['op2'];
                      $op43=$row['op3'];
                      $op44=$row['op4'];
                      $ans4=$row['ans'];
      
              }
            }
          }


        $query = "SELECT * FROM question WHERE qid='$id' and qqid=5  ";
        //  $query = "DELETE FROM register WHERE id='$id' ";
          $query_run = mysqli_query($connection, $query);
      
      
      if($result = mysqli_query($connection,$query)){
          if(mysqli_num_rows($result) > 0){
              while($row = mysqli_fetch_array($result)){
                      $q_desc5=$row['q_desc'];
                      $op51=$row['op1'];
                      $op52=$row['op2'];
                      $op53=$row['op3'];
                      $op54=$row['op4'];
                      $ans5=$row['ans'];
      
              }
            }
          }

          $query = "SELECT * FROM quizz WHERE qid='$id' ";
    //  $query = "DELETE FROM register WHERE id='$id' ";
      $query_run = mysqli_query($connection, $query);
  
  
  if($result = mysqli_query($connection,$query)){
      if(mysqli_num_rows($result) > 0){
          while($row = mysqli_fetch_array($result)){
                  $q_title=$row['q_title'];
                  $u_id=$row['uid'];
                    echo $u_id;
                  if($u_id=='U1'){
                      $unit='Grammar';

                  }
                  if($u_id=='U2'){
                    $unit='Spelling';
                      
                }
                if($u_id=='U3'){
                    $unit='Essay';
                      
                }
                if($u_id=='U4'){
                    $unit='Text Book';
                      
                }
                
  
          }
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
    <title>Quiz_View</title>
     <link rel="stylesheet" href="view1.css">
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
                <img src="../../teacher_images/logo.png" width="50px" alt="">

                <div class="brand-icons">
                    <!-- <span class=""></span> -->
                    <span class="las la-bell"></span>
                </div>
            </div>
        </div>

        <div class="sidebar-main">
            <div class="sidebar-user">
            <a href="../../teacher_profile.php"> <img src="<?php echo $image_src;  ?>" ></a>
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
                    <li><a href="../../teacher_dashboard.php">
                        <span class="las la-tachometer-alt"></span>Dashboard
                    </a></li>

                    <li><a href="../../teacher_subjects/sub_grade1.php">
                        <span class="las la-book"></span>Subjects
                    </a></li>

                    <li><a href="../mystudents/mystudents.php"><span class="las la-users"></span>My Students</a></li>

                    <li><a href="../../teacher_quiz/sub_grade1.php"><span class="las la-check-circle"></span>Tasks</a>
                    </li>
                     
                     <li><a href="../../analytics/progressreport.php"><span class="las la-chart-pie"></span>Analytics</a></li>

                     <li><a href="../../teacher_calendar/calendar_0/index.php">
                         <span class="las la-calendar"></span>Calendar
                     </a></li>
                     
                     <li>
                     <a href="../../teacher_discussion/discussion.php">
                        <span class="las la-users"></span>Discussion
                    </a></li>

                    <li>
                     <a href="../../teacher_exhibition.php">
                        <span class="las la-images"></span>Exhibition
                    </a></li>

                    
                    <li><a href="../ChatApp/login.php"><span class="las la-comments"></span>Chat</a></li>
                    

                    <li><a href="../teacher_finance/finance.php">
                        <span class="las la-credit-card"></span>Finance
                    </a></li>

                    <li><a href="../../../login.php">
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


                <!-- <div class="header-icons">
                    <span class="las la-search"></span>
                    <span class="las la-bookmark"></span>
                    <span class="las la-sms"></span>
                </div> -->
            </header>

            <main>
                <div class="page-header">
                    <div>
                        <h3 style="margin-left: 500px;">
                            Quiz View
                        </h3>

                    </div>

                    <div class="header-actions">
                        <a href="../../teacher_subjects/mathematics/grade1/subjectindex.php" class="hbtn hb-fill-right-rev-bg-br"><span class="las la-tools"></span>Back</a>

                    </div>

                </div>

                <div class="container">

                    <div class="group2">
                        <form action="" method="post">
                        <div class="rec1">

                        <!-- <button id="submit" name="submit">Send</button> -->
                                <input type="text1" placeholder="<?php echo $q_title; ?>" name="q_title" id="q_title"   >

                                <input style="margin-left: -880px;" type="text2" placeholder="<?php echo $id; ?>" name="qid" id="qid"   >
<input style="margin-left: 20px; width: 100px; height: 20px;margin-top: 70px;" type="text2" placeholder="<?php echo $unit;?>" name="unit" id="unit"   >

                      </div>
                        <div class="rec2">

                                <input type="text11" placeholder="1)  <?php echo $q_desc; ?>" name="Q1" id="Q1"   >
                                <div class="imgandrecord">
                                    <a href="#"><img style="width:30px;height:30px;margin-left: -180px;margin-right: 10px;" src="../teacher_images/edit.png"></a>
                                    <!-- <a href="#"><img style="width:30px;height:30px;margin-left: 10px;margin-right: 10px;" src="../teacher_images/trash.png"></a>
                                    -->
                                </div>
                                <div class="in">
                                <input type="text12" placeholder="1)  <?php echo $op1; ?>" name="op1" id="op1"   >
                                <input type="text13" placeholder="2)  <?php echo $op2; ?>" name="op2" id="op2"   >
                                <input type="text14" placeholder="3)  <?php echo $op3; ?>" name="op3" id="op3"   >
                                <input type="text14" placeholder="4)  <?php echo $op4; ?>" name="op4" id="op4"   >
                                <input type="text15" placeholder="<?php echo $ans; ?>" name="ans" id="ans"   >
                                </div>
                            <div class="delete">
                                <!-- <a href="#"><img src="img/Rectangle 34.png"></a> -->

                            </div>
                            
                        </div>
                        <div class="rec3">

                                <input type="text11" placeholder="2)  <?php echo $q_desc2; ?>" name="Q2" id="Q2"   >
                                <div class="imgandrecord">
                                    <a href="#"><img style="width:30px;height:30px;margin-left: -180px;margin-right: 10px;" src="../teacher_images/edit.png"></a>
                                    <!-- <a href="#"><img style="width:30px;height:30px;margin-left: 10px;margin-right: 10px;" src="../teacher_images/trash.png"></a> -->
                                </div>
                                <input type="text12" placeholder="1)  <?php echo $op21; ?>" name="op21" id="op21"   >
                                <input type="text13" placeholder="2)  <?php echo $op22; ?>" name="op22" id="op22"   >
                                <input type="text14" placeholder="3)  <?php echo $op23; ?>" name="op23" id="op23"   >
                                <input type="text14" placeholder="4)  <?php echo $op24; ?>" name="op24" id="op24"   >
                                <input type="text15" placeholder="<?php echo $ans2; ?>" name="ans2" id="ans2"   >

                            <div class="delete">
                                <!-- <a href="#"><img src="img/Rectangle 34.png"></a> -->

                            </div>
                        </div>
                        <div class="rec4">

                                <input type="text11" placeholder="3)  <?php echo $q_desc3; ?>" name="Q3" id="Q3"   >
                                <div class="imgandrecord">
                                    <a href="#"><img style="width:30px;height:30px;margin-left: -180px;margin-right: 10px;" src="../teacher_images/edit.png"></a>
                                    <!-- <a href="#"><img style="width:30px;height:30px;margin-left: 10px;margin-right: 10px;" src="../teacher_images/trash.png"></a> -->
                                </div>
                                <input type="text12" placeholder="1)  <?php echo $op31; ?>" name="op31" id="op31"   >
                                <input type="text13" placeholder="2)  <?php echo $op32; ?>" name="op32" id="op32"   >
                                <input type="text14" placeholder="3)  <?php echo $op33; ?>" name="op33" id="op33"   >
                                <input type="text14" placeholder="4)  <?php echo $op34; ?>" name="op34" id="op34"   >
                                <input type="text15" placeholder="<?php echo $ans3; ?>" name="ans3" id="ans3"   >

                            <div class="delete">
                                <!-- <a href="#"><img src="img/Rectangle 34.png"></a> -->

                            </div>
                        </div>
                        <div class="rec5">

                                <input type="text11" placeholder="4)  <?php echo $q_desc4; ?>" name="Q4" id="Q4"   >
                                <div class="imgandrecord">
                                    <a href="#"><img style="width:30px;height:30px;margin-left:-180px;margin-right: 10px;" src="../teacher_images/edit.png"></a>
                                    <!-- <a href="#"><img style="width:30px;height:30px;margin-left: 10px;margin-right: 10px;" src="../teacher_images/trash.png"></a> -->
                                </div>
                                <input type="text12" placeholder="1)  <?php echo $op41; ?>" name="op41" id="op41"   >
                                <input type="text13" placeholder="2)  <?php echo $op42; ?>" name="op42" id="op42"   >
                                <input type="text14" placeholder="3)  <?php echo $op43; ?>" name="op43" id="op43"   >
                                <input type="text14" placeholder="4)  <?php echo $op44; ?>" name="op44" id="op44"   >
                                <input type="text15" placeholder="<?php echo $ans4; ?>" name="ans4" id="ans4"   >

                            <div class="delete">
                                <!-- <a href="#"><img src="img/Rectangle 34.png"></a> -->

                            </div>
                        </div>
                        <div class="rec6">

                                <input type="text11" placeholder="5)  <?php echo $q_desc5; ?>" name="Q5" id="Q5"   >
                                <div class="imgandrecord">
                                    <a href="#"><img style="width:30px;height:30px;margin-left: -180px;margin-right: 10px;" src="../teacher_images/edit.png"></a>
                                    <!-- <a href="#"><img style="width:30px;height:30px;margin-left: 10px;margin-right: 10px;" src="../teacher_images/trash.png"></a> -->
                                </div>
                                <input type="text12" placeholder="1)  <?php echo $op51; ?>" name="op51" id="op51"   >
                                <input type="text13" placeholder="2)  <?php echo $op52; ?>" name="op52" id="op52"   >
                                <input type="text14" placeholder="3)  <?php echo $op53; ?>" name="op53" id="op53"   >
                                <input type="text14" placeholder="4)  <?php echo $op54; ?>" name="op54" id="op54"   >
                                <input type="text15" placeholder="<?php echo $ans5; ?>" name="ans5" id="ans5"   >
                            </div>
                            </form>
                            <div class="delete">
                                <!-- <a href="#"><img src="img/Rectangle 34.png"></a> -->


                        </div>



                    </div>

                  
                      <!-- <form action="view1.php" method="post">
                                                              <input type="hidden" name="view_id" value="<?php echo $qid; ?>">
                                                              <button type="submit" name="view_btn" class="btn btn-danger"> VIEW</button>
                                                          </form> -->
                      <!-- <div class="green"><div class="subject-list">Search Quizes</div>
                        <div class="btn-group">
                            <form>
                                <p id="formin">Enter Quiz id</p>
                                <input id="forminp" type="text12" placeholder="Quiz id"  >
                                <button id="formbtn">Search</button>
                            </form>
                        </div>
                    </div> -->

                    <div style="margin-left:1590px" class="group1">

                            <div class="green"><div class="subject-list">Subject List</div>
                            <div class="btn-group">
                                <button style="background-color: #5850ec;" ><p>Mathematics</p></button>
                                <button><p>Sinhala</p></button>
                                <button><p>English</p></button>
                                <button><p>Aesthetic</p></button>
                            </div>
                            <br>
                            <div class="green"><div class="subject-list">Grade List</div>
                            <div class="btn-group">
                                <button style="background-color: #5850ec;"><p>Grade 1</p></button>
                                <button><p>Grade 2</p></button>
                                <button><p>Grade 3</p></button>
                                <button><p>Grade 4</p></button>
                                <button><p>Grade 3</p></button>
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
