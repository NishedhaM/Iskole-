<?php
    session_start();

    if(!$_SESSION['id']){
        header('location:../../login.php');
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,minimum-scale=1">
    <title>Mailbox</title>
    <link rel="stylesheet" href="./mailbox.css">
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
                <a href=""><img src="../teacher_images/logo.png" width="50px" alt=""></a>

                <div class="brand-icons">
                    <!-- <span class=""></span> -->
                    <span class="las la-bell"></span>
                </div>
            </div>
        </div>

        <div class="sidebar-main">
            <div class="sidebar-user">
                <a href="../teacher_profile.php"><img src="img/teacher2.jpg"  alt=""></a>
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
                            Mailbox
                        </h3>
                    </div>
                 
                    <div class="header-actions">
                        <!-- <a href="#" class="hbtn hb-fill-right-rev-bg-br"><span class="las la-tools"></span>Settings</a> -->

                    </div>
                  
                </div>
                
                <div class="container">
                        <div class="box1">
                            <img id="admin" src="img/admin.jpg">
                            <div class="name">
                            <p>Admin</p>
                            <p>Friday 1,October 2021<span>10.00 a.m.</span></p>
                            </div><br>
                            <p><span><b>Topic – Kickstart Your Salesforce Career</b></span><br><br>

                                Date : Oct 4, 2021 05:30 PM India
                                
                                Audience – Undergraduate(2nd and 3rd year) & postgraduate students.
                                
                                Type of session – Discussion mode Webinar
                                
                                Monitoring person available – Yes (All audience queries before Q & A session can be forwarded to the monitoring person)
                                
                                Duration – 1hour
                                
                                Introduction and welcome notes – 2-3 min
                                Session – 35-40min
                                Q & A – 10-15min
                                Closing notes – 2-3min
                                Community Registration (Register participants who is like to take part in iTelaSoft internship & Sponsorship initiatives & Salesforce student community) – 5min
                                This is not going to be a highly technical session and mainly giving students the overall understanding about the Salesforce eco system, job opportunities and how to get started. Therefore, it is possible to open this session for none computing students as well.  Introduction and welcome notes – 2-3 min
                                Session – 35-40min<br><br>
                                Q & A – 10-15min
                                Closing notes – 2-3min
                                Community Registration (Register participants who is like to take part in iTelaSoft internship & Sponsorship initiatives & Salesforce student community) – 5min
                                This is not going to be a highly technical session and mainly giving students the overall understanding about the Salesforce eco system, job opportunities and how to get started. Therefore, it is possible to open this session for none computing   Introduction and welcome notes – 2-3 min
                                Session – 35-40min<br><br>
                                Q & A – 10-15min
                                Closing notes – 2-3min
                                Community Registration (Register participants who is like to take part in iTelaSoft internship & Sponsorship initiatives & Salesforce student community) – 5min
                                This is not going to be a highly technical session and mainly giving students the overall understanding about the Salesforce eco system, job opportunities and how to get started. Therefore, it is possible to open this session for none computing </p>
                        </div>

                        <div class="box1">
                            <img src="img/admin.jpg">
                            <div class="name">
                            <p>Admin</p>
                            <p>Friday 1,October 2021<span>10.00 a.m.</span></p>
                            </div><br>
                            <p><span><b>Topic – Kickstart Your Salesforce Career</b></span><br><br>

                                Date : Oct 4, 2021 05:30 PM India
                                
                                Audience – Undergraduate(2nd and 3rd year) & postgraduate students.
                                
                                Type of session – Discussion mode Webinar
                                
                                Monitoring person available – Yes (All audience queries before Q & A session can be forwarded to the monitoring person)
                                
                                Duration – 1hour
                                
                                Introduction and welcome notes – 2-3 min
                                Session – 35-40min
                                Q & A – 10-15min
                                Closing notes – 2-3min
                                Community Registration (Register participants who is like to take part in iTelaSoft internship & Sponsorship initiatives & Salesforce student community) – 5min
                                This is not going to be a highly technical session and mainly giving students the overall understanding about the Salesforce eco system, job opportunities and how to get started. Therefore, it is possible to open this session for none computing students as well.  Introduction and welcome notes – 2-3 min
                                Session – 35-40min<br><br>
                                Q & A – 10-15min
                                Closing notes – 2-3min
                                Community Registration (Register participants who is like to take part in iTelaSoft internship & Sponsorship initiatives & Salesforce student community) – 5min
                                This is not going to be a highly technical session and mainly giving students the overall understanding about the Salesforce eco system, job opportunities and how to get started. Therefore, it is possible to open this session for none computing   Introduction and welcome notes – 2-3 min
                                Session – 35-40min<br><br>
                                Q & A – 10-15min
                                Closing notes – 2-3min
                                Community Registration (Register participants who is like to take part in iTelaSoft internship & Sponsorship initiatives & Salesforce student community) – 5min
                                This is not going to be a highly technical session and mainly giving students the overall understanding about the Salesforce eco system, job opportunities and how to get started. Therefore, it is possible to open this session for none computing </p>
                        </div>
                   
                </div>
                    
                
                
            </main>

                
            </div>
        <label for="sidebar-toggle" class="body-label"></label>
        <script type="text/javascript" src="./discussion.js"></script>
        
            
        
</body>
</html>