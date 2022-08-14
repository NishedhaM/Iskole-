<?php include 'filesLogic.php';?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
    <title>Upload qualifications</title>
    <link rel="stylesheet" href="uploadqualification.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  </head>


  <body>
    <input type="checkbox" name="" id="sidebar-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <div class="brand-flex">
                <img src="img/logo.png" width="50px" alt="">

                <div class="brand-icons">
                    <span class="las la-bell"></span>
                    <span class="las la-user-circle"></span>
                </div>
            </div>
        </div>

        <div class="sidebar-main">
            <div class="sidebar-user">
                <img src="img/teacher2.jpg"  alt="">
                 <div>
                <h3>Ana Alexra</h3>
                <span>Ana@gmail.com</span>
            </div>
         </div>

         <div class="sidebar-menu">
               
            <ul>
                <li><a href="">
                    <span class="las la-home"></span>Home
                </a></li>
                <li><a href="../teacher_dashboard.php">
                    <span class="las la-tachometer-alt"></span>Dashboard
                </a></li>

                <li><a href="../teacher_subjects/mathematics/grade4/subjectindex.html">
                    <span class="las la-book"></span>Subjects
                </a></li>

                <li><a href="../mystudents/mystudents.html"><span class="las la-users"></span>My Students</a></li>

                <li><a href="../quiz/quiz.html"><span class="las la-check-circle"></span>Tasks</a>
                </li>
                 
                 <li><a href="../analytics/progressreport.html"><span class="las la-chart-pie"></span>Analytics</a></li>

                 <li><a href="../teacher_calendar/calendar.html">
                     <span class="las la-calendar"></span>Calendar
                 </a></li>
                 
                 <li>
                 <a href="../teacher_discussion/discussion.html">
                    <span class="las la-users"></span>Discussion
                </a></li>

                
                <li><a href="../teacher_mailbox/mailbox.html"><span class="las la-envelope"></span>Mailbox</a></li>
                

                <li><a href="../teacher_finance/finance.html">
                    <span class="las la-credit-card"></span>Finance
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
                    <span class="las la-search"></span>
                    <span class="las la-bookmark"></span>
                    <span class="las la-sms"></span>
                </div>
            </header>

            <main>
                <div class="page-header">
                    <div class="dpandname">
                       
                           <img id="teacherprofile" src="img/teacher2.jpg">
                           <p id="p1">Ana Alexra</p>
                           <p id="p2">Teaher in Royal College</p>
                          <a href="#"><p id="p3">AnaAlexa@gail.com</p></a> 

                        
                    </div>
                 
                    <div class="header-actions">
                        <a href="#" class="hbtn hb-fill-right-rev-bg-br"><span class="las la-tools"></span>Edit Profile</a>

                    </div>
                  
                </div>
                
                <!-- <div class="container">
                    <p id="head"><b>Upload qualifications</b></p>

                    <div class="upload">
                        <a href=""><img id="img1" src="img/Rectangle 50.png"></a>
                        <a href=""><img id="img2" src="img/Rectangle 51.png"></a>
                    </div>
                    
                    <div class="buttons2">
                        <button id="btn1" type="button">
                            Save
                        </button>
                        <button id="btn2" type="button">
                            Delete
                        </button>
                    </div>
     
                    
                </div> -->

                <div class="container">
      <div class="row">
        <form action="index.php" method="post" enctype="multipart/form-data" >
          <h3>Upload File</h3>
          <input type="file" name="myfile"> <br>
          <button type="submit" name="save">upload</button>
        </form>
      </div>
    </div>
                
            </main>

                
            </div>
        <label for="sidebar-toggle" class="body-label"></label>     
</body>
 
</html>






