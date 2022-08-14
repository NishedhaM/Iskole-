<?php
    session_start();
    $cdate=date('Y-m-d H:i:s');


    if(!$_SESSION['id']){
        header('location:../../login.php');
    }
    $connection = mysqli_connect("localhost","root","","demo");
    if(isset($_POST['view_btn']))
    {
        $id = $_POST['view_id'];


    $query="SELECT * FROM members where id=$id";
    $query_run = mysqli_query($connection,$query);

    if($result = mysqli_query($connection,$query)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){

              $first_name=$row['first_name'] ;
              $last_name=$row['last_name'] ;


            }}}
    }
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
    <title>Finance </title>
    <link rel="stylesheet" href="./progressreport1.css">
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
                <img src="../admin_images/logo.png" width="50px" alt="">

                <div class="brand-icons">
                    <span class=""></span>
                   <a href=""> <span class="las la-bell"></span></a>
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
              <!-- <li><a href="">
                  <span class="las la-home"></span>Home
              </a></li> -->
              <li><a href="../admin_dashboard.php">
                  <span class="las la-tachometer-alt"></span>Dashboard
              </a></li>

              <li><a href="../admin_subjects/sub_grade1.php">
                  <span class="las la-book"></span>Subjects
              </a></li>

              <li><a href="../mystudents/mystudents.php"><span class="las la-users"></span>Students</a></li>

              <li><a href="../admin_quiz/sub_grade1.php"><span class="las la-check-circle"></span>Tasks</a>
              </li>

               <li><a href="../admin_analytics/progressreport.php"><span class="las la-chart-pie"></span>Analytics</a></li>

               <li><a href="../admin_calendar/calendar_0/index.php">
                   <span class="las la-calendar"></span>Calendar
               </a></li>

               <li>
               <a href="../admin_discussion/discussion.php">
                  <span class="las la-users"></span>Discussion
              </a></li>

              <li>
               <a href="../admin_exhibition.php">
                  <span class="las la-images"></span>Exhibition
              </a></li>


              <li><a href="../ChatApp/users.php"><span class="las la-comments"></span>Chat</a></li>


              <li><a href="../admin_finance/finance.php.php">
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
                            Finance

                        </h3>
                    </div>

                    <div class="header-actions">
                        <!-- <a href="#" class="hbtn hb-fill-right-rev-bg-br"><span class="las la-tools"></span>Settings</a> -->

                    </div>

                </div>

                <div class="container">
                    <div class="buttons">
                    </div>
                    <table>
                    <tr>
                    <td><b> Grade </b></td>
                    <td> <b>Total Earnings</b> </td>
                    <td> <b>System Earnings</b> </td>
                    <td> <b>Subject</b> </td>
                    <td> <b>No of Students </b></td>
                    <td> <b>No of Teachers </b></td>
                    <td><b> Payment of a teacher </b></td>
                    </tr>
                    <?php
                    $total = 0;
                    $totstcount = 0;
                    $tottcount = 0;
                    $totgtot = 0;
                    $totgsys = 0;
                    $start = date("Y-m-1 00:00:00");

                    $end = date("Y-m-d H:i:s");



                                      $connection = mysqli_connect("localhost","root","","demo");
                                      $query = "SELECT *  FROM grade ";
                                      $rows = mysqli_query($connection,$query);



                                      foreach ($rows as $row) :
                                      $price = $row['price'];
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






                                            $query = "SELECT COUNT(student_id) FROM paid_items WHERE gid='$grade'AND valid_from>='$start' AND valid_from<='$end'";
                                            $query_run = mysqli_query($connection, $query);


                                            if($result = mysqli_query($connection,$query)){
                                                if(mysqli_num_rows($result) > 0){
                                                    while($row = mysqli_fetch_array($result)){
                                                            $scount=$row['COUNT(student_id)'];
                                                            $gtot=$price*$scount;
                                                            $gsys=$gtot*30/100;
                                                            $totstcount=$totstcount+$scount;
                                                            $totgtot=$totgtot+$gtot;
                                                            $totgsys=$totgsys+$gsys;
                                                    }
                                                  }
                                                }





                                              $query ="SELECT *  FROM subject WHERE sid!='S4'" ;
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
                                                                    $subject_new='Environmental studies';
                                                                  }

                                                  $sql= "SELECT COUNT(teacher_id) FROM `teacher_grade_subject` WHERE gid='$grade' AND sid='$sid' AND status='accepted'";
                                                  $query_run = mysqli_query($connection, $sql);
                                                      if($result = mysqli_query($connection,$sql)){
                                                               if(mysqli_num_rows($result) > 0){
                                                                      while($row = mysqli_fetch_array($result)){
                                                                          $count=$row['COUNT(teacher_id)'];
                                                                          $tottcount=$tottcount+$count;
                                                                          }
                                                                }
                                                      }
                                                      if($count==0){
                                                        $tot=0;
                                                      }
                                                      else{
                                                          $tot = ((($price * 70/100)/4) * $scount)/($count);
                                                      }

                                                      $total = $total+ $tot;
                                                               ?>


                    <tr>
                    <td> <?php echo $grade_new ?></td>
                    <td> <?php echo $gtot ?></td>
                    <td> <?php echo $gsys ?></td>
                    <td> <?php echo $subject_new ?></td>
                    <td> <?php echo $scount ?></td>
                    <td> <?php echo $count ?></td>
                    <td> <?php echo $tot ?></td>
                    </tr>


                                                                               <?php



                                              endforeach;

                                      endforeach;






                    ?>
                    <tr>
                    <td><b> Total </b></td>
                    <td><?php echo $totgtot ?></td>
                    <td><?php echo $totgsys ?></td>
                    <td>5</td>
                    <td><?php echo $totstcount ?></td>
                    <td><?php echo $tottcount ?></td>
                    <td><?php echo $tot ?></td>
                    </tr>
                    </table>



                </div>



            </main>


            </div>
        <label for="sidebar-toggle" class="body-label"></label>
        <script type="text/javascript" src="./discussion.js"></script>



</body>
</html>
