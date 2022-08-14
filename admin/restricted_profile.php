<?php
session_start();

if(!$_SESSION['id']){
    header('location:teacher_login.php');
}

$connection =mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'demo');

if(isset($_POST['view_btn']))
{
    $id = $_POST['view_id'];

$query="SELECT * FROM teacher where teacher_id=$id";
$query_run = mysqli_query($connection,$query);

if($result = mysqli_query($connection,$query)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){

                $NIC= $row['NIC'] ;
                $mobile   =  $row['mobile'] ;

        }}}

$query="SELECT * FROM teacher_qualification where teacher_id=$id";
$query_run = mysqli_query($connection,$query);

if($result = mysqli_query($connection,$query)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){

                $qualification= $row['qualification'] ;


        }}}

$query="SELECT login_time FROM login where user_id=$id ORDER BY login_time DESC LIMIT 1 ";
$query_run = mysqli_query($connection,$query);

if($result = mysqli_query($connection,$query)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){

                $login_time= $row['login_time'] ;


        }}}

$query="SELECT * FROM members where id=$id";
$query_run = mysqli_query($connection,$query);

if($result = mysqli_query($connection,$query)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){

          $first_name=$row['first_name'] ;
          $last_name=$row['last_name'] ;
          $email=$row['email'] ;
          $created_at=$row['created_at'] ;
          $created_at= $row['created_at'] ;
                // $mobile   =  $row['mobile'] ;

        }}}

if($query_run){
    // echo '<script type="text/javascript"> alert("Data Updated")</script>';
  }
  else{
    // echo '<script type="text/javascript"> alert("Data not Updated")</script>';
  }


  $sql= "SELECT name FROM images where  member_id=$id ";
        $query_run = mysqli_query($connection, $sql);
            if($result = mysqli_query($connection,$sql)){
                     if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_array($result)){
                                $image = $row['name'];
                                $image_src = "upload/".$image;


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
    <title><?php echo $first_name; ?>&nbsp;<?php echo $last_name; ?> Profile</title>
    <link rel="stylesheet" href="teacherprofile.css">
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
                <img src="teacher_images/logo.png" width="50px" alt="">

                <div class="brand-icons">
                    <span class=""></span>
                    <span class=" las la-bell"></span>
                </div>
            </div>
        </div>

        <div class="sidebar-main">
            <div class="sidebar-user">
            <a href="teacher_profile.php"> <img src="<?php echo $image_src;  ?>" ></a>
                 <div>
                <h3><?php echo ucfirst($_SESSION['first_name']); ?>&nbsp;<?php echo ucfirst($_SESSION['last_name']); ?></h3>
                <span><?php echo ucfirst($_SESSION['email']); ?></span>

            </div>
         </div>

         <div class="sidebar-menu">

            <ul>
                <!-- <li><a href="./skole_welcome_page.html">
                    <span class="las la-home"></span>Home
                </a></li> -->
                <li><a href="./admin_dashboard.php">
                    <span class="las la-tachometer-alt"></span>Dashboard
                </a></li>

                <li><a href="./admin_subjects/mathematics/grade4/subjectindex.php">
                    <span class="las la-book"></span>Subjects
                </a></li>

                <li><a href="./mystudents/mystudents.php"><span class="las la-users"></span>Students</a></li>

                <li><a href="./admin_quiz/quiz.php"><span class="las la-check-circle"></span>Tasks</a>
                </li>

                 <li><a href="./admin_analytics/progressreport.php"><span class="las la-chart-pie"></span>Analytics</a></li>

                 <li><a href="./admin_calendar/calendar.php">
                     <span class="las la-calendar"></span>Calendar
                 </a></li>

                 <li>
                 <a href="./admin_discussion/discussion.php">
                    <span class="las la-users"></span>Discussion
                </a></li>

                <li>
                 <a href="./teacher_exhibition.php">
                    <span class="las la-images"></span>Exhibition
                </a></li>



                <li><a href="./ChatApp/login.php"><span class="las la-comments"></span>Chat</a></li>


                <li><a href="./admin_finance/finance.php">
                    <span class="las la-credit-card"></span>Finance
                </a></li>

                <li><a href="./skole_welcome_page.html">
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
                    <!-- <span class=""></span>
                    <span class="las la-bookmark"></span> -->
                    <!-- <span class="las la-search"></span> -->
                </div>
            </header>

            <main>
                <div class="page-header">
                    <div class="dpandname">


                           <img id="teacherprofile" src="<?php echo $image_src;  ?>">
                           <p id="p1"><?php echo $first_name; ?>&nbsp;<?php echo $last_name; ?></p>
                           <!-- <p id="p2">Teaher in Royal College</p> -->
                          <a href="#"><p id="p3"><?php echo $email; ?></p></a>


                    </div>

                    <div class="header-actions">
                      <form action="accepted.php" method="post">
                                              <input type="hidden" name="accept_id" value="<?php echo $id; ?>">
                                              <button type="submit" name="accept_btn" class="hbtn hb-fill-right-rev-bg-br"> Accept</button>
                      </form>
                      <form action="delete.php" method="post">
                                              <input type="hidden" name="reject_id" value="<?php echo $id; ?>">
                                              <button type="submit" name="reject_btn" class="hbtn hb-fill-right-rev-bg-br"> Reject</button>
                      </form>

                        <!-- <a href="./teacher_editprofile_registered.php" class="hbtn hb-fill-right-rev-bg-br"><span class="las la-tools"></span>Edit Profile</a> -->

                    </div>

                </div>

                <div class="container">
                    <div class="main1">
                        <div class="gr1">
                            <p id="userdetails">User Details</p><br><br>
                            <p id="useremailaddress">User Email Address</p>
                            <p id="email"><?php echo $email; ?></p><br><br>
                            <p id="country1">NIC</p>
                            <p id="country2">  <?php echo $NIC; ?><br><br>
                            <p id="city1">Phone Number</p>
                            <p id="city2"><?php echo $mobile; ?></p><br><br>
                        </div>

                        <div class="gr2">
                            <p id="qualifications">User Qualifications</p><br><br>
                            <hr>
                            <a href="#"><?php echo ucfirst($qualification); ?></a><br>
                            <hr>
                            <a href="#"></a><br>
                            <hr>
                            <a href="#"</a><br>
                            <hr>
                            <a href="#"></a><br>
                            <hr>
                            <a href="#"></a><br>
                            <hr>
                            <a href="#"></a><br>
                            <hr>

                        </div>
                    </div>

                    <div class="main2">
                        <div class="gr3">
                            <p id="coursedetails">Course Details</p><br><br>
                            <!-- <div class="row1">
                                <div class="sinhala">
                                    <a id="sin" href="#">Sinahala</a>
                                    <a id="math" href="#">Mathematics</a>
                                    <p id="psin">5 chapters<span id="pmath">10 chapters</span></p>

                                </div>
                            </div>

                            <div class="row2">
                                <div class="sinhala">
                                    <a id="eng" href="#">English</a>
                                    <a id="aes" href="#">Aesthetic</a>
                                    <p id="peng">5 chapters<span id="paes">10 chapters</span></p>

                                </div>
                            </div> -->
                            <?php
                              $query = "SELECT gid,sid FROM teacher_grade_subject where teacher_id=$id  ";
                              $rows = mysqli_query($connection,$query);


                              foreach ($rows as $row) :

                                $gid= $row['gid'];
                                $sid= $row['sid'];


                                  if($gid=='G1'){
                                    $grade='Grade1';

                                 }
                                 if($gid=='G2'){
                                    $grade='Grade2';

                                 }
                                 if($gid=='G3'){
                                    $grade='Grade3';

                                 }
                                 if($gid=='G4'){
                                    $grade='Grade4';

                                 }
                                 if($gid=='G5'){
                                    $grade='Grade5';

                                 }



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
                                    $subject='ENvironmenntal Studies';

                                 }

                                //  echo $gid;
                                //  echo"-" ;echo $sid;
                                echo $grade;
                                echo " - ";
                                echo $subject;
                                print "<br>";

                              endforeach;

                            ?>
                        </div>

                        <div class="gr4">
                            <p id="loginactivities">Login Activities</p><br><br>
                            <p id="First">First access to the site  :-<?php echo "$created_at" ?></p><br>
                            <p id="Last">Last access to the site:-<?php echo "$login_time" ?></p>

                        </div>
                    </div>


                </div>

            </main>


            </div>
        <label for="sidebar-toggle" class="body-label"></label>




</body>
</html>
