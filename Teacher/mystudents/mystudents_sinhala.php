<?php
    session_start();

    if(!$_SESSION['id']){
        header('location:teacher_login.php');
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,minimum-scale=1">
    <title>MyStudents</title>
    <link rel="stylesheet" href="mystudents_sinhala.css">
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
                    <a href="../teacher_mailbox/mailbox.php"><span class="las la-bell"></span></a>
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

                    <li><a href="../teacher_subjects/mathematics/grade4/subjectindex.php">
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
                <div class="page-header">
                    <div>
                        <h3>
                            My Students<span>Sinhala</span>
                        </h3>
                        <!-- <small>
                            Monitor dfdskfjnsgkjdfkb dfbm 
                        </small> -->
                    </div>
                 
                    <div class="header-actions">
                        <!-- <a href="#" class="hbtn hb-fill-right-rev-bg-br"><span class="las la-tools"></span>Settings</a> -->

                    </div>
                  
                </div>

               <div class="container">
                   <div class="group1">
                        <div class="green">
                            <div class="subject-list">Subject List</div>
                                 <div class="btn-group">
                                    <a href="./mystudents.php"><button ><p>Mathematics</p></button><a>
                                    <button style="background-color: #5850ec;" ><p >Sinhala</p></button>
                                    <button><p>English</p></button>
                                    <button><p>Aesthetic</p></button>
                                 </div>
                        </div>
                    </div>

                   <div class="group2">
                    <p><b>Best Students</b></p>
                        <div class="beststu">
                            
                            <div class="stu">
                                <div class="class1">
                                    <!-- <img src="img/image 3.png" class="pen">
                                    <img src="img/image 2.png" class="del"> -->
                                </div>
                                <br>
                                <div class="class2">
                                    <img src="img/Ellipse 28.png"  alt="">
                                    <h3><a href="">Karsha Dara</a></h3>
                                    <span>Grade1</span>
                                </div>
                            </div>

                            <div class="stu">
                                <div class="class1">
                                    <!-- <img src="img/image 3.png" class="pen">s
                                    <img src="img/image 2.png" class="del"> -->
                                </div>
                                <br>
                                <div class="class2">
                                    <img src="img/Ellipse 29.png"  alt="">
                                    <h3><a href="#">Amal Pera</a></h3>
                                    <span>Grade2</span>
                                </div>
                            </div>

                            <div class="stu">
                                <div class="class1">
                                    <!-- <img src="img/image 3.png" class="pen">
                                    <img src="img/image 2.png" class="del"> -->
                                </div>
                                <br>
                                <div class="class2">
                                    <img src="img/Ellipse 28.png"  alt="">
                                    <h3><a href="#">Asha Dara</a></h3>
                                    <span>Grade1</span>
                                </div>
                            </div>

                            <div class="stu">
                                <div class="class1">
                                    <!-- <img src="img/image 3.png" class="pen">
                                    <img src="img/image 2.png" class="del"> -->
                                </div>
                                <br>
                                <div class="class2">
                                    <img src="img/Ellipse 29.png"  alt="">
                                    <h3><a href="#">Kamur Lara</a></h3>
                                    <span>Grade2</span>
                                </div>
                            </div>   
                        </div>
                        <div class="stuhis">
                            <p><b>Student History</b><span>
                            <select>
                                <option value="Grade4">Grade1</option>
                                <option value="Grade5">Grade2</option>
                            </select></span></p>

                            <table width="1200px" cellspacing="0">
                                <thead>
                                <th width="100">Student</th>
                                <th width="100">Name</th>
                                <th width="100">Last Attempt</th>
                                <th width="100">Progress</th>
                                </thead>
                               
                                <tbody>
                              
                                <tr>
                                <td><img src="img/Ellipse 30.png" alt=""></td>
                                    <td>Kalha Pujar</td>
                                    <td>06 Sep 2021</td>
                                    <td>
                                        <div class="container2">
                                        <div class="skill html">80%</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="img/Ellipse 31.png" alt=""></td>
                                    <td>Shama Duar</td>
                                    <td>10 Oct 2021</td>
                                    <td>
                                        <div class="container3">
                                            <div class="skill html">70%</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="img/Ellipse 32.png" alt=""></td>
                                    <td>Jeen Sujar</td>
                                    <td>11 Apr 2021</td>
                                    <td>
                                        <div class="container4">
                                            <div class="skill html">60%</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="img/Ellipse 33.png" alt=""></td>
                                    <td>Veena Asha</td>
                                    <td>06 Sep 2021</td>
                                    <td>
                                        <div class="container5">
                                            <div class="skill html">65%</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="img/Ellipse 30.png" alt=""></td>
                                    <td>Pasan Vije</td>
                                    <td>26 Sep 2021</td>
                                    <td>
                                        <div class="container6">
                                            <div class="skill html">65%</div>
                                        </div>
                                    </td>
                                </tr>
                                
                                </tbody>
                                </table>
                                
                        </div>
                        
                   </div>
                </div>

            
            </main>

                
        </div>
    <label for="sidebar-toggle" class="body-label"></label>

    
        
    
</body>
</html>