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
    <title>Upload qualifications</title>
    <link rel="stylesheet" href="uploadqualification.css">
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
                    <!-- <span class=""></span> -->
                  <a href="../admin_upload qualifications/uploadqualification.php">  <span class="las la-bell"></span></a>
                </div>
            </div>
        </div>

        <div class="sidebar-main">
            <div class="sidebar-user">
                <a href="../admin_upload qualifications/uploadqualification.php"><img src="img/teacher2.jpg"  alt=""></a>
                 <div>
                 <h3><?php echo ucfirst($_SESSION['first_name']); ?>&nbsp;<?php echo ucfirst($_SESSION['last_name']); ?></h3>
                <span><?php echo ($_SESSION['email']); ?></span>
            </div>
         </div>

         <div class="sidebar-menu">
               
               <ul>
                 
                  <li><a href="../admin_upload qualifications/uploadqualification.php">
                      <span class="las la-tachometer-alt"></span>Dashboard
                  </a></li>

                  <li><a href="../admin_upload qualifications/uploadqualification.php">
                      <span class="las la-book"></span>Subjects
                  </a></li>

                  <li><a href="../admin_upload qualifications/uploadqualification.php"><span class="las la-users"></span>My Students</a></li>

                  <li><a href="../admin_upload qualifications/uploadqualification.php"><span class="las la-check-circle"></span>Tasks</a>
                  </li>
                   
                   <li><a href="../admin_upload qualifications/uploadqualification.php"><span class="las la-chart-pie"></span>Analytics</a></li>

                   <li><a href="../admin_upload qualifications/uploadqualification.php">
                       <span class="las la-calendar"></span>Calendar
                   </a></li>
                   
                   <li>
                   <a href="../admin_upload qualifications/uploadqualification.php">
                      <span class="las la-users"></span>Discussion
                  </a></li>

                  <li>
                   <a href="../admin_upload qualifications/uploadqualification.php">
                      <span class="las la-images"></span>Exhibition
                  </a></li>

              
                  <li><a href="../admin_upload qualifications/uploadqualification.php"><span class="las la-comments"></span>Chat</a></li>
                  

                  <li><a href="../admin_upload qualifications/uploadqualification.php">
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
                    <div class="dpandname">
                       
                           <img id="teacherprofile" src="img/teacher2.jpg">
                          

                        
                    </div>
                 
                    <div class="header-actions">
                        <!-- <a href="#" class="hbtn hb-fill-right-rev-bg-br"><span class="las la-tools"></span>Edit Profile</a> -->

                    </div>
                  
                </div>
                
                <div class="container">
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
     
                    
                </div>
                
            </main>

                
            </div>
        <label for="sidebar-toggle" class="body-label"></label>

        
            
        
</body>
</html>