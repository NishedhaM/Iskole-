<?php
    session_start();

    if(!$_SESSION['id']){
        header('location:../login.php');
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,minimum-scale=1">
    <title>Generated Progress Report</title>
    <link rel="stylesheet" href="teacher_generated_report.css">
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
                <img src="./teacher_images/logo.png" width="50px" alt="">

                <div class="brand-icons">
                    <span class=""></span>
                   <a href="./teacher_mailbox/mailbox.php"> <span class="las la-bell"></span></a>
                </div>
            </div>
        </div>

        <div class="sidebar-main">
            <div class="sidebar-user">
                <a href="teacher_profile.php"><img src="./teacher_images/teacher2.jpg"  alt=""></a>
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
                    <li><a href="./teacher_dashboard.php">
                        <span class="las la-tachometer-alt"></span>Dashboard
                    </a></li>

                    <li><a href="./teacher_subjects/mathematics/grade4/subjectindex.php">
                        <span class="las la-book"></span>Subjects
                    </a></li>

                    <li><a href="./mystudents/mystudents.php"><span class="las la-users"></span>My Students</a></li>

                    <li><a href="./teacher_quiz/quiz.php"><span class="las la-check-circle"></span>Tasks</a>
                    </li>
                     
                     <li><a href="./analytics/progressreport.php"><span class="las la-chart-pie"></span>Analytics</a></li>

                     <li><a href="./teacher_calendar/calendar.php">
                         <span class="las la-calendar"></span>Calendar
                     </a></li>
                     
                     <li>
                     <a href="./teacher_discussion/discussion.php">
                        <span class="las la-users"></span>Discussion
                    </a></li>

                    <li>
                     <a href="./teacher_exhibition.php">
                        <span class="las la-images"></span>Exhibition
                    </a></li>

                    
                    <li><a href="./ChatApp/login.php"><span class="las la-comments"></span>Chat</a></li>
                    

                    <li><a href="./teacher_finance/finance.php">
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
                    <!-- <span class="las la-search"></span>
                    <span class="las la-bookmark"></span>
                    <span class="las la-sms"></span> -->
                </div>
            </header>

            <main>
                <div class="page-header">
                    <div>
                        <h3>
                            Total Progress Reports
                        </h3>
                    </div>
                 
                    <div class="header-actions">
                        <!-- <a href="#" class="hbtn hb-fill-right-rev-bg-br"><span class="las la-tools"></span>Settings</a> -->

                    </div>
                  
                </div>
                
                <div class="container">
                    <div class="buttons">
                    <!-- <select name="grade" id="grade">
                        <option value="Grade 1">Grade 1</option>
                        <option value="Grade 2">Grade 2</option>
                        <option value="Grade 3">Grade 3</option>
                        <option value="Grade 4">Grade 4</option>
                        <option value="Grade 5">Grade 5</option>
                      </select>

                      <select name="subject" id="subject">
                        <option value="Mathematics">Mathematics</option>
                        <option value="Sinhala">Sinhala</option>
                        <option value="English">English</option>
                        <option value="Aesthetic">Aesthetic</option>
                      </select>
                    </div> -->

                    <table>
                       
                        <tr>
                           
                           
                          <td><b>Grade</b></td>
                            <td><b>Subject</b></td>
                            <td><b>No of Students</b></td>
                            <td><b>Total Progress</b> </td>
                          
                
                        </tr>
                      
                        <tr>
                           
                            <td>Grade1</td>
                            <td>Mathematics</td>
                            <td>15</td>
                            <td>87%</td>
                          
                         
                        </tr>
                        <tr>
                           
                            <td>Grade1</td>
                            <td>Sinhala</td>
                            <td>15</td>
                            <td>87%</td>
                       
                        </tr>
                        <tr>
                            
                            <td>Grade1</td>
                            <td>English</td>
                            <td>15</td>
                            <td>57%</td>
                           
                        </tr>
                        <tr>
                         
                            <td>Grade1</td>
                            <td>Aesthetic</td>
                            <td>15</td>
                            <td>47%</td>
                           
                        </tr>

                        <tr>
                           
                           <td>Grade2</td>
                           <td>Mathematics</td>
                           <td>25</td>
                           <td>87%</td>
                         
                        
                       </tr>
                       <tr>
                          
                           <td>Grade2</td>
                           <td>Sinhala</td>
                           <td>25</td>
                           <td>87%</td>
                      
                       </tr>
                       <tr>
                           
                           <td>Grade2</td>
                           <td>English</td>
                           <td>25</td>
                           <td>57%</td>
                          
                       </tr>
                       <tr>
                        
                           <td>Grade2</td>
                           <td>Aesthetic</td>
                           <td>25</td>
                           <td>47%</td>
                          
                       </tr>
                     
                       
                    </table>
                      
                   
                </div>
                    
                
                
            </main>

                
            </div>
        <label for="sidebar-toggle" class="body-label"></label>
        <script type="text/javascript" src="./discussion.js"></script>
        
            
        
</body>
</html>