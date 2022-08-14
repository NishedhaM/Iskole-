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
    <title><?php echo $first_name; ?>&nbsp;<?php echo $last_name; ?> &nbsp; Login History </title>
    <link rel="stylesheet" href="./progressreport.css">
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
                            <?php echo $first_name; ?>&nbsp;<?php echo $last_name; ?> &nbsp; Login History
                            <form action="../admin_subjects/list.php" method="post">
                                                    <input type="hidden" name="view_id" value="<?php echo $id; ?>">
                                                    <button type="submit" name="view_btn" style="margin-left:1100px;"> Back</button>
                            </form>
                        </h3>
                    </div>

                    <div class="header-actions">
                        <!-- <a href="#" class="hbtn hb-fill-right-rev-bg-br"><span class="las la-tools"></span>Settings</a> -->

                    </div>

                </div>

                <div class="container">
                    <div class="buttons">
                    </div>

                    <?php
                      $connection = mysqli_connect("localhost","root","");
                      $db = mysqli_select_db($connection,'demo');
                      $query = "SELECT * FROM `login` WHERE user_id=$id";
                      $query_run = mysqli_query($connection, $query);

                    ?>

                    <table>

                        <tr>


                            <td><b></b></td>
                            <td><b>Login time</b></td>

                        </tr>
                        <?php
                        if(mysqli_num_rows($query_run) > 0)
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {


                        ?>
                        <tr>
                        <td>Login</td>
                        <td><?php  echo $row['login_time']; ?></td>


                      </tr>
                      <?php
                          }
                      }
                      else {
                          echo "No Record Found";
                      }
                      ?>
                    </table>


                </div>



            </main>


            </div>
        <label for="sidebar-toggle" class="body-label"></label>
        <script type="text/javascript" src="./discussion.js"></script>



</body>
</html>
