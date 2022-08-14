<?php
    session_start();

    if(!$_SESSION['id']){
        header('location:teacher_login.php');
    }
    date_default_timezone_set('Asia/Colombo');
    $date = date('Y-m-d H:i:s');

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
    <title>Generated Progress Report</title>
    <link rel="stylesheet" href="./finance.css">
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
                <img src="../teacher_images/logo.png" width="50px" alt="">

                <div class="brand-icons">
                    <span class=""></span>
                   <a href="./teacher_mailbox/mailbox.html"> <span class="las la-bell"></span></a>
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
                            Payment Report
                        </h3>
                    </div>

                    <div class="header-actions">
                        <!-- <a href="#" class="hbtn hb-fill-right-rev-bg-br"><span class="las la-tools"></span>Settings</a> -->

                    </div>

                </div>

                <div class="container">

                <div style="margin-top:50px;" class="stuhis">


<table>
<tr>
<th> Grade </th>
<th> Subject </th>
<th> No of Students </th>
<th> No of Teachers </th>
<th> Payment </th>
</tr>
<?php
$total = 0;
$start = date("Y-m-1 00:00:00");

$end = date("Y-m-d H:i:s");



                  $connection = mysqli_connect("localhost","root","","demo");
                  $query = "SELECT gid  FROM teacher_grade_subject  where teacher_id=$_SESSION[id] GROUP BY gid  ";
                  $rows = mysqli_query($connection,$query);



                  foreach ($rows as $row) :
                  $grade=$row['gid'];
                                          if($grade=='G1'){
                                            $grade_new='Grade 1';
                                          }
                                          if($grade=='G2'){
                                            $grade_new='Grade 2';
                                          }
                                          if($grade=='G3'){
                                            $grade_new='Grade 3';
                                          }
                                          if($grade=='G4'){
                                            $grade_new='Grade 4';
                                          }
                                          if($grade=='G5'){
                                            $grade_new='Grade 5';
                                          }



                  $sql= "SELECT price FROM grade where gid='$grade'";
                      $query_run = mysqli_query($connection, $sql);
                          if($result = mysqli_query($connection,$sql)){
                                   if(mysqli_num_rows($result) > 0){
                                          while($row = mysqli_fetch_array($result)){
                                              $price = $row['price'];

                                              }
                                    }
                          }



                        $query = "SELECT COUNT(student_id) FROM paid_items WHERE gid='$grade' AND valid_from>='$start' AND valid_from<='$end'";
                        $query_run = mysqli_query($connection, $query);


                        if($result = mysqli_query($connection,$query)){
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_array($result)){
                                        $scount=$row['COUNT(student_id)'];


                                }
                              }
                            }





                          $query ="SELECT sid  FROM teacher_grade_subject where teacher_id=$_SESSION[id] AND gid='$grade' " ;
                          $rows = mysqli_query($connection,$query);



                          foreach ($rows as $row) :
                          $sid=$row['sid'];
                          if($sid=='S1'){
                                                $subject_new='Mathematics';
                                              }
                                              if($sid=='S2'){
                                                $subject_new='English';
                                              }
                                              if($sid=='S3'){
                                                $subject_new='Sinhala';
                                              }
                                              if($sid=='S5'){
                                                $subject_new='Environmntal Science';
                                              }

                          $sql= "SELECT teacher_count FROM grade_subject where gid='$grade' AND sid='$sid'";
                              $query_run = mysqli_query($connection, $sql);
                                  if($result = mysqli_query($connection,$sql)){
                                           if(mysqli_num_rows($result) > 0){
                                                  while($row = mysqli_fetch_array($result)){
                                                      $count = $row['teacher_count'];

                                                      }
                                            }
                                  }

                                  $tot = ((($price * 70/100)/4) * $scount)/($count);
                                  $total = $total+ $tot;
                                  // echo '8888888';
                                  // echo $tot;
                                  // $query ="SELECT student_id,MAX(q_marks),q_marks FROM marks where qid='$qid_last' " ;
                                  // $rows = mysqli_query($connection,$query);
                                  //
                                  //
                                  //
                                  // foreach ($rows as $row) :
                                  //     $student_id=$row['student_id'];
                                  //     $q_marks=$row['q_marks'];
                                  //     // echo $student_id;
                                  //
                                  //             $query = "SELECT * FROM members where id='$student_id' ";
                                  //             $rows = mysqli_query($connection,$query);
                                  //
                                  //
                                  //
                                  //             foreach ($rows as $row) :
                                  //                 $first_name= $row['first_name'];
                                  //                 $last_name= $row['last_name'];
                                  //                 $id= $row['id'];
                                  //                 // echo $row['last_name'];
                                  //
                                  //                    $query = "SELECT * FROM student where student_id='$id' ";
                                  //                     $rows = mysqli_query($connection,$query);
                                  //
                                  //
                                  //
                                  //                     foreach ($rows as $row) :
                                  //                         $grade= $row['gid'];
                                  //
                                  //                         if($grade='G1'){
                                  //                             $grade='Grade1';
                                  //
                                  //                          }
                                  //                          if($grade='G2'){
                                  //                             $grade='Grade2';
                                  //
                                  //                          }
                                  //                          if($grade='G3'){
                                  //                             $grade='Grade2';
                                  //
                                  //                          }
                                  //                          if($grade='G4'){
                                  //                             $grade='Grade2';
                                  //
                                  //                          }
                                  //
                                  //
                                  //                         // echo $row['gid'];
                                  //
                                  //                         ?>

                                  <!-- //                     <div class="stu"> -->
                                  <!-- //                         <div class="class1"> -->
                                                              <!-- <img src="img/image 3.png" class="pen">
                                  //                             <img src="img/image 2.png" class="del"> -->
                                  <!-- //                         </div> -->
                                  <!-- //                         <br> -->
                                  <!-- //                         <div class="class2"> -->
                                  <!-- //                             <img src="img/Ellipse 29.png"  alt=""> -->
                                  <!-- //                             <h3><a href="#"></a></h3> -->
                                  <!-- //                             <span></span> -->
                                  <!-- //
                                  //                         </div> -->

<tr>
<td> <?php echo $grade_new ?></td>
<td> <?php echo $subject_new ?></td>
<td> <?php echo $scount ?></td>
<td> <?php echo $count ?></td>
<td> <?php echo $tot ?></td>
</tr>


                                                           <?php
                                  //
                                  //
                                  //
                                  //
                                  //                     endforeach;
                                  //
                                  //             endforeach;
                                  //
                                  // endforeach;


                          endforeach;

                  endforeach;






?>
<tr>
<td colspan="4"> Total </td>
<td><?php echo $total ?></td>
</tr>
</table>
            </main>


            </div>
        <label for="sidebar-toggle" class="body-label"></label>
        <script type="text/javascript" src="./discussion.js"></script>



</body>
</html>
