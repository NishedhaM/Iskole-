<?php
    session_start();

    if(!$_SESSION['id']){
        header('location:../../login.php');
    }



    date_default_timezone_set('Asia/Colombo');
    $date = date('Y-m-d H:i:s');
    $start = date("Y-m-1 00:00:00");
    $end = date("Y-m-d H:i:s");

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
                    <a href="../admin_mailbox/mailbox.php"><span class="las la-bell"></span></a>
                </div>
            </div>
        </div>

        <div class="sidebar-main">
            <div class="sidebar-user">
                <a href=""><img src="<?php echo $image_src;  ?>" ></a>
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

                    <li><a href="../mystudents/mystudents.php"><span class="las la-users"></span> Students</a></li>

                    <li><a href="../admin_quiz/sub_grade1.php"><span class="las la-check-circle"></span>Tasks</a>
                    </li>

                     <li><a href="../analytics/progressreport.php"><span class="las la-chart-pie"></span>Analytics</a></li>

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


                    <li><a href="../ChatApp/login.php"><span class="las la-comments"></span>Chat</a></li>


                    <li><a href="../admin_finance/finance.php">
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
                   Registered Students
                </h3>
            </div>

            <div class="header-actions">
                <!-- <a href="#" class="hbtn hb-fill-right-rev-bg-br"><span class="las la-tools"></span>Settings</a> -->

            </div>

        </div>

        <div class="container">
            <div class="buttons">
              <form action="" method="post">
              <select name="Grade">
              <option value="" disabled selected>Choose option</option>
              <option value="G1">Grade1</option>
              <option value="G2">Grade2</option>
              <option value="G3">Grade3</option>
              <option value="G4">Grade4</option>
              <option value="G5">Grade5</option>
              </select>


              <input type="submit" name="submit" class="submit"  vlaue="Choose options">
              </form>
            </div>

            <?php
              $connection = mysqli_connect("localhost","root","");
              $db = mysqli_select_db($connection,'demo');

              if(isset($_POST['submit'])){
                  if(!empty($_POST['Grade'])) {
                        $grade = $_POST['Grade'];


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


                        $query = "SELECT * FROM `members` WHERE type='student' AND status!='restrict' AND id IN (SELECT student_id FROM `paid_items` WHERE gid='$grade' AND valid_till>='$date')";
                        $query_run = mysqli_query($connection, $query);
                        ?>

                        <h2><?php echo $grade_new?>  </h2>
                        <table>

                            <tr>


                                <td><b>ID</b></td>
                                <td><b>First Name</b></td>
                                <td><b>Last Name</b></td>
                                <td><b>Email</b> </td>
                              

                            </tr>
                            <?php
                            if(mysqli_num_rows($query_run) > 0)
                            {
                                while($row = mysqli_fetch_assoc($query_run))
                                {
                            ?>
                            <tr>
                            <td><?php  echo $row['id']; ?></td>
                            <td><?php  echo $row['first_name']; ?></td>
                            <td><?php  echo $row['last_name']; ?></td>
                            <td><?php  echo $row['email']; ?></td>

                          </tr>
                          <?php
                              }
                          }
                          else {
                              echo "No Record Found";
                          }?>

                        <?php

                    }
                  }
                  else{






              $query = "SELECT * FROM `members` WHERE type='student' AND status!='restrict'";
                $query_run = mysqli_query($connection, $query);

            ?>

            <table>

                <tr>


                    <td><b>ID</b></td>
                    <td><b>First Name</b></td>
                    <td><b>Last Name</b></td>
                    <td><b>Email</b> </td>


                </tr>
                <?php
                if(mysqli_num_rows($query_run) > 0)
                {
                    while($row = mysqli_fetch_assoc($query_run))
                    {
                ?>
                <tr>
                <td><?php  echo $row['id']; ?></td>
                <td><?php  echo $row['first_name']; ?></td>
                <td><?php  echo $row['last_name']; ?></td>
                <td><?php  echo $row['email']; ?></td>

              </tr>
              <?php
                  }
              }
              else {
                  echo "No Record Found";
              }}
              ?>
            </table>


        </div>



    </main>


    </div>
<label for="sidebar-toggle" class="body-label"></label>
<script type="text/javascript" src="./discussion.js"></script>



</body>
</html>
