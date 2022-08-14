<?php
    session_start();

    if(!$_SESSION['id']){
        header('location:../../login.php');
    }

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
    <title>Teacher Details</title>
    <link rel="stylesheet" href="sub_grade.css">
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
                    <!-- <span class=""></span> -->
                    <a href="../teacher_mailbox/mailbox.php"><span style="margin-left: 150px;" class="las la-bell"></span>
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
                   
                    <li><a href="../teacher_dashboard.php">
                        <span class="las la-tachometer-alt"></span>Dashboard
                    </a></li>

                    <li><a href="../teacher_dashboard.php">
                        <span class="las la-book"></span>Subjects
                    </a></li>

                    <li><a href="../mystudents/mystudents.php"><span class="las la-users"></span>My Students</a></li>

                    <li><a href="../teacher_quiz/quiz.php"><span class="las la-check-circle"></span>Tasks</a>
                    </li>
                     
                     <li><a href="../analytics/progressreport.php"><span class="las la-chart-pie"></span>Analytics</a></li>

                     <li><a href="../teacher_calendar/calendar.php">
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
            <button type="submit" id="postback1" name="cmd" value="Save" >Grade 1</button>

            <button type="submit" id="postback1" name="cmd" value="Save" >Grade 2</button>

            <button type="submit" id="postback1" name="cmd" value="Save" >Grade 3</button>

            <button type="submit" id="postback1" name="cmd" value="Save" >Grade 4</button>

            <button type="submit" id="postback1" name="cmd" value="Save" >Grade 5</button>

                
                
            </main>

                
            </div>
        <label for="sidebar-toggle" class="body-label"></label>
        <script type="text/javascript" src="./discussion.js"></script>
        
            
        
</body>
</html>