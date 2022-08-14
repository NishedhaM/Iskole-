<?php
session_start();
  
if(!$_SESSION['id']){
    header('location:../../login.php');
}

$connection =mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'demo');

if(isset($_POST['view_id'])){


    $stu_id = $_POST['view_id'];
    echo $stu_id;

    $query="SELECT * FROM student where student_id=$stu_id";
    $query_run = mysqli_query($connection,$query);

    if($result = mysqli_query($connection,$query)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
          
                $dob= $row['dob'] ;
                $mobile   =  $row['g_mobile'] ;
                $gname=$row['g_name'];

                    $query="SELECT * FROM members where id=$stu_id";
                    $query_run = mysqli_query($connection,$query);
                    if($result = mysqli_query($connection,$query)){
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_array($result)){
                              
                                    $email= $row['email'] ;
                                    $created_at= $row['created_at'] ;
                                    $first_name=$row['first_name'];
                                    $last_name=$row['last_name'];
                        

                            $query="SELECT login_time FROM login where user_id=$stu_id ORDER BY login_time DESC LIMIT 1 ";
                            $query_run = mysqli_query($connection,$query);

                            if($result = mysqli_query($connection,$query)){
                              if(mysqli_num_rows($result) > 0){
                                 while($row = mysqli_fetch_array($result)){
            
                                     $login_time= $row['login_time'] ;

                                     
                                    
         
                                     
                                 }}}
                // $mobile   =  $row['mobile'] ;
                
        }}}


            
               
        }}} }

  $sql= "SELECT name FROM images where  member_id=$stu_id ";
        $query_run = mysqli_query($connection, $sql);
            if($result = mysqli_query($connection,$sql)){
                     if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_array($result)){
                                $image = $row['name'];
                                $image_src_stu = "../upload/".$image;
                                }
                      }
            }


            $query = "SELECT gid FROM student where student_id=$stu_id  ";
            $rows = mysqli_query($connection,$query);

            
            foreach ($rows as $row) : 
              
              $gid= $row['gid'];
              

   
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

               
            endforeach; 
            
            
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
    <title>Student Profile</title>
    <link rel="stylesheet" href="./student_profile.css">
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
                <img src="../admin_images/logo.png" width="50px" alt="">

                <div class="brand-icons">
                    <span class=""></span>
                    <span class=" las la-bell"></span>
                </div>
            </div>
        </div>

        <div class="sidebar-main">
            <div class="sidebar-user">
            <a href="admin_profile.php"> <img src="<?php echo $image_src;  ?>" ></a>
                 <div>
                 <h3><?php echo ucfirst($_SESSION['first_name']); ?>&nbsp;<?php echo ucfirst($_SESSION['last_name']); ?></h3>
                <span><?php echo ($_SESSION['email']); ?></span>
              
            </div>
         </div>

         <div class="sidebar-menu">
               
            <ul>
                <!-- <li><a href="./skole_welcome_page.html">
                    <span class="las la-home"></span>Home
                </a></li> -->
                <li><a href="../admin_dashboard.php">
                    <span class="las la-tachometer-alt"></span>Dashboard
                </a></li>

                <li><a href="../admin_subjects/sub_grade1.php">
                    <span class="las la-book"></span>Subjects
                </a></li>

                <li><a href="../mystudents/mystudents.php"><span class="las la-users"></span>My Students</a></li>

                <li><a href="../admin_quiz/sub_grade1.php"><span class="las la-check-circle"></span>Tasks</a>
                </li>
                 
                 <li><a href="../analytics/progressreport.php"><span class="las la-chart-pie"></span>Analytics</a></li>

                 <li><a href="../admin_calendar/calendar.php">
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
                    <!-- <span class=""></span>
                    <span class="las la-bookmark"></span> -->
                    <!-- <span class="las la-search"></span> -->
                </div>
            </header>

            <main>
                <div class="page-header">
                    <div class="dpandname">
                    
                       
                           <img id="teacherprofile" src="<?php echo $image_src_stu;  ?>">
                           <h1 style="margin-left:120px;margin-top:-100px;"><?php echo $first_name; ?>&nbsp;<?php echo $last_name; ?></h1>
                           <!-- <p id="p2">Teaher in Royal College</p> -->
                          <a href="#"><p id="p3"><?php echo $email; ?></p></a> 
                          <a style="margin-right:300px;" href="../mystudents/mystudents.php" class="hbtn hb-fill-right-rev-bg-br"><span class="las la-tools"></span>Back</a>
                        
                    </div>
                 
                   
                  
                </div>
                
                <div class="container">
                    <div class="main1">
                        <div class="gr1">
                            <p id="userdetails">Student Details</p><br><br>
                            <p id="useremailaddress">Email Address</p>
                            <a href="#"><p id="email"><?php echo $email; ?></p></a><br><br>
                            <p id="country1">Guardian Name</p>
                            <p id="country2">  <?php echo $gname; ?><br><br>
                            <p id="city1">Guardian Mobile</p>
                            <p id="city2"><?php echo $mobile; ?></p><br><br>
                        </div>

                        <div class="gr2">
                            <p id="qualifications">Student Marks</p><br><br>
                            <hr>

                            <?php
                            // echo $stu_id;
                            $query="SELECT q_marks,access_dt,qid FROM marks where student_id=$stu_id ORDER BY access_dt DESC LIMIT 5 ";
                            $rows = mysqli_query($connection,$query);
                            foreach ($rows as $row) :
             
                               $q_marks= $row['q_marks'] ;
                               $qid= $row['qid'] ;
                               $access_date=$row['access_dt'];?>
                               <p><?php echo $qid; ?>
                                <span> - <?php echo $q_marks; ?> ---- access date - 
                                <?php echo $access_date; ?></span></p>
                                <br>
                                <?php
                            endforeach
                            


                           ?>
                            <br>
                         
                            
                        </div>
                    </div>

                    <div class="main2">
                        <div class="gr3">
                            <p id="coursedetails">Course Details</p><br><br>
                            <?php
                            echo $grade;
                             print "<br>";
                             
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