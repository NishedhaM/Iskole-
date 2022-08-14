<?php
    session_start();

    if(!$_SESSION['id']){
        header('location:../../../../login.php');
    }
 
    

    $conn =mysqli_connect("localhost","root","","demo");
    $q="SELECT * FROM video WHERE gid='G1' AND sid='S1' AND uid='U1' AND content_type='mp4' ";
    $query=mysqli_query($conn,$q);


    $q="SELECT * FROM video WHERE gid='G1' AND sid='S1' AND uid='U1' AND content_type='Pdf' ";
    $query_run=mysqli_query($conn,$q);

    $q="SELECT * FROM video WHERE gid='G1' AND sid='S1' AND uid='U1' AND content_type='PPTX' ";
    $query_runppt=mysqli_query($conn,$q);


   
    $q="SELECT * FROM video WHERE gid='G1' AND sid='S1' AND uid='U2' AND content_type='mp4' ";
    $query2=mysqli_query($conn,$q);


    $q="SELECT * FROM video WHERE gid='G1' AND sid='S1' AND uid='U2' AND content_type='Pdf' ";
    $query_runun2=mysqli_query($conn,$q);

    $q="SELECT * FROM video WHERE gid='G1' AND sid='S1' AND uid='U2' AND content_type='PPTX' ";
    $query_runppt2=mysqli_query($conn,$q);


    
    $q="SELECT * FROM video WHERE gid='G1' AND sid='S1' AND uid='U3' AND content_type='mp4' ";
    $query3=mysqli_query($conn,$q);


    $q="SELECT * FROM video WHERE gid='G1' AND sid='S1' AND uid='U3' AND content_type='Pdf' ";
    $query_runun3=mysqli_query($conn,$q);

    $q="SELECT * FROM video WHERE gid='G1' AND sid='S1' AND uid='U3' AND content_type='PPTX' ";
    $query_runppt3=mysqli_query($conn,$q);

    
    $q="SELECT * FROM video WHERE gid='G1' AND sid='S1' AND uid='U4' AND content_type='mp4' ";
    $query4=mysqli_query($conn,$q);


    $q="SELECT * FROM video WHERE gid='G1' AND sid='S1' AND uid='U4' AND content_type='Pdf' ";
    $query_runun4=mysqli_query($conn,$q);

    $q="SELECT * FROM video WHERE gid='G1' AND sid='S1' AND uid='U4' AND content_type='PPTX' ";
    $query_runppt4=mysqli_query($conn,$q);
    

    


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,minimum-scale=1">
    <title>Subjects</title>
    <link rel="stylesheet" href="subjectindex.css">
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
                    <!-- <span class="las la-bell"></span> -->
                    <a href="../../../teacher_mailbox/mailbox.html"><span class="las la-bell"></span></a>
                </div>
            </div>
        </div>

        <div class="sidebar-main">
            <div class="sidebar-user">
                <a href="../../../teacher_profile.php"><img src="img/teacher2.jpg"  alt=""></a>
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
                <li><a href="../../../teacher_dashboard.php">
                    <span class="las la-tachometer-alt"></span>Dashboard
                </a></li>

                <li><a href="../../../teacher_subjects/sub_grade1.php">
                    <span class="las la-book"></span>Subjects
                </a></li>

                <li><a href="../../../mystudents/mystudents.php"><span class="las la-users"></span>My Students</a></li>

                <li><a href="../../../teacher_quiz/sub_grade1.php"><span class="las la-check-circle"></span>Tasks</a>
                </li>
                 
                 <li><a href="../../../analytics/progressreport.php"><span class="las la-chart-pie"></span>Analytics</a></li>

                 <li><a href="../../../teacher_calendar/calendar_0/index.php">
                     <span class="las la-calendar"></span>Calendar
                 </a></li>
                 
                 <li>
                 <a href="../../../teacher_discussion/discussion.php">
                    <span class="las la-users"></span>Discussion
                </a></li>

                <li>
                    <a href="../../../teacher_exhibition.php">
                       <span class="las la-images"></span>Exhibition
                   </a></li>


                
                <li><a href="../../../ChatApp/login.php"><span class="las la-comments"></span>Chat</a></li>
                

                <li><a href="../../../teacher_finance/finance.html">
                    <span class="las la-credit-card"></span>Finance
                </a></li>

                <li><a href="../../../../login.php">
                    <span class="fas fa-sign-out-alt"></span>Logout
                    </a></li>

             </ul>


        </div>
    </div>

</div>


        <div class="main-content" >
            <header>
                <div class="menu-toggle">
                    <label for="sidebar-toggle">
                        <span class="las la-bars"></span>
                    </label>
                </div>
                

            </header>

            <main>
                <div class="page-header">
                    <div>
                        <h3>
                            Subjects
                        </h3>
                        <!-- <small>
                            Monitor dfdskfjnsgkjdfkb dfbm 
                        </small> -->
                    </div>
                 
                    <div class="header-actions">
                      
                        <a href="../../../teacher_syllabus.php" class="hbtn hb-fill-right-rev-bg-br"><span class="las la-tools"></span>Syllabus</a>

                    </div>
                  
                </div>
                <div>
                
                <h1>Mathematics(G1)</h1>
            
                
                </div>  
                <div class="float-container">

                    <div class="float-child1">
                        
                        <div group1>
                            <div class="header">
                            <div class="announcement">
                            <!-- <img src="img/maps-and-flags 1.png"> -->
                            <!-- <p><a href=""><b><a href="../../../teacher_announcement.php">Announcements</a></b></a></p> -->
                            </div>
                        </div>

                        <div><img scr="img/Line 1.png"></div>
                    </div>

                        <hr style="margin-top: 5px;">
                        <div group2>


                        <br>
                        <div class="numbers">
                        <h3>Numbers</h3>
                        <br><br>




                                <div class="numbers1">
                                  <img src="img/files 1.png">

                                 
                                     <p><b>Number PDF</b></p>
                                     <table> 
                                        <tr>
                                          <?php if(mysqli_num_rows($query_run) > 0)
                                            {
                                            while($row = mysqli_fetch_assoc($query_run))
                                            {
                                    
                                            echo "<br>";
                                            ?>
                                            <a href="../../../teacher_upload/upload/<?php echo $row['name'];?>" target="blank" >
                                       
                                            <?php echo $row['name'];
                                            ?>
                                       
                                            </a>

                                            <?php $delete_stud_id= $row['name']; ?>
                                       
                                     
                                    <!-- </a> -->
                                
                                  <div class="hide">
                                            <form action='../../../teacher_deletefile.php' method='POST'>
                        
                                             <input type="hidden" name="delete_stud_id"  value="<?php echo $delete_stud_id; ?>" class="form_control">
                                      
                                    
                                                <button onclick="return confirm('Are you sure you want to Delete?');"  style="margin-left: 200px;margin-top:-60px;"  type="submit" name="stud_delete_btn" class="btn btn-primary" name='del'>Delete</button>
                                                
                                           </form>
                                  </div>
                                  <?php
                                    }}
                                  ?>
                                     <br>
                                    </tr>

                                  </div>
                                  <br>





                                <div class="numbers1">
                                    <img src="img/Vector.png">
                                  
                                    <p><b>Number Video</b></p>
                                        
                                    <table> 
                                    <tr>
                                    <?php if(mysqli_num_rows($query) > 0)
                                    {
                                    while($row = mysqli_fetch_assoc($query))
                                    {
                                    ?>
                                    <a href="../../../teacher_upload/upload/<?php echo $row['name'];?>" target="blank" >
                                       
                                       <?php echo $row['name'];
                                       ?>
                                      
                                       </a>
                                    <div class="hide">
                                     <!-- <input class="checkbox-effectcheckbox-effect-2" id="hide0000" type="checkbox" value="hide" name="hide00"/>
                                            <label for="hide">&nbsp;Hidden from students</label>  -->
                                            <form action='../../../teacher_deletefile.php' method='POST'>
                        
                                             <input type="hidden" name="delete_stud_id"  value="<?php echo $delete_stud_id; ?>" class="form_control">
                                      
                                    
                                            <button onclick="return confirm('Are you sure you want to Delete?');"           style="margin-left: 200px;margin-top:-60px;"  type="submit" name="stud_delete_btn" class="btn btn-primary" name='del'>Delete
                                             </button>
                                        
                                                

                                                
                                                
                                          </form></div>
                                    
                                    <?php
                                    }}
                                  ?>
                                    </tr>
                                    </table>
                                  </div>
                                <br><br>

                                <div class="numbers1">
                                  <img src="img/GROUP.png">

                                 
                                 <p><b>Number PPT with audio clip</b></p>
                                 <table> 
                                     <tr>
                                     <?php if(mysqli_num_rows($query_runppt) > 0)
                                     {
                                     while($row = mysqli_fetch_assoc($query_runppt))
                                    {
                                    
                                      echo "<br>";?>
                                       <a href="../../../teacher_upload/upload/<?php echo $row['name'];?>" target="blank" >
                                       
                                       <?php echo $row['name'];
                                       ?>
                                      
                                       </a>

                                   <?php $delete_stud_id= $row['name']; ?>
                                     
                                    <!-- </a> -->
                                
                                  <div class="hide">
                                      
                                   <!-- <input class="checkbox-effectcheckbox-effect-2" id="hide4" type="checkbox" value="hide" name="hide000"/>
                                  <label style="padding-left:10px;" for="hide">Hidden from students</label> -->
                               
                                  <form action='../../../teacher_deletefile.php' method='POST'>
                        
                                             <input type="hidden" name="delete_stud_id"  value="<?php echo $delete_stud_id; ?>" class="form_control">
                                      
                                    
                                                <button onclick="return confirm('Are you sure you want to Delete?');"  style="margin-left: 200px;margin-top:-60px;"  type="submit" name="stud_delete_btn" class="btn btn-primary" name='del'>Delete
                                                </button>
                                                        
                                  </form>
                                  </div>
                                  </div>
                                  <?php
                                    }}
                                  ?>
                                     <br>
                                    </tr>

                                  </div>
                                  <br>

                                 
                                  <!-- <a href="../../../teacher_content_quiz_view.php"><b>Quiz</b></a> -->
                                  <!-- <button id="up" style="margin-left: 850px;"><a href="../../../teacher_upload/upload.php">Upload</a></button> -->
                            </div>
    
                            <!-- <div><img scr="img/Line 1.png"></div> -->
                           
                        </div>
                      
                        <div group3>



                        <hr style="margin-top: 5px">
                        <br>
                        <div class="numbers">
                        <h3 style="margin-left: -20px;">Addition</h3>
                        <br><br>




                        <div class="numbers1">
                        <img style="margin-left: -20px;" src="img/files 1.png">


                        <p style="margin-left: 15px;"><b>Addition PDF</b></p>
                        <table> 
                        <tr>
                        <?php if(mysqli_num_rows($query_runun2) > 0)
                                            {
                                            while($row = mysqli_fetch_assoc($query_runun2))
                                            {
                                    
                                            echo "<br>";
                                        ?>
                                            <a href="../../../teacher_upload/upload/<?php echo $row['name'];?>" target="blank" >
                                       
                                        <?php echo $row['name'];
                                        ?>
                                       
                                        </a>

                                        <?php $delete_stud_id= $row['name']; ?>
                        <!-- </a> -->

                        <div class="hide">
                            
                        <!-- <input class="checkbox-effectcheckbox-effect-2" id="hide4" type="checkbox" value="hide" name="hide000"/>
                        <label style="padding-left:10px;" for="hide">Hidden from students</label> -->

                        <form action='../../../teacher_deletefile.php' method='POST'>
                        
                        <input type="hidden" name="delete_stud_id"  value="<?php echo $delete_stud_id; ?>" class="form_control">
                 
               
                           <button onclick="return confirm('Are you sure you want to Delete?');"  style="margin-left: 200px;margin-top:-60px;"  type="submit" name="stud_delete_btn" class="btn btn-primary" name='del'>Delete</button>
                   
                           

                           
                           
                        </form></div>
                        <?php
                        }}
                        ?>
                        <br>
                        </tr>

                        </div>
                        <br>





                        <div class="numbers1">
                        <img src="img/Vector.png">

                        <p><b>Addition Video</b></p>
                            
                        <table> 
                        <tr>
                        <?php if(mysqli_num_rows($query2) > 0)
                                    {
                                    while($row = mysqli_fetch_assoc($query2))
                                    {
                                    ?>
                                   <a href="../../../teacher_upload/upload/<?php echo $row['name'];?>" target="blank" >
                                       
                                       <?php echo $row['name'];
                                       ?>
                                      
                                       </a>
                        <div class="hide">
                        <!-- <input class="checkbox-effectcheckbox-effect-2" id="hide0000" type="checkbox" value="hide" name="hide00"/>
                                <label for="hide">&nbsp;Hidden from students</label>  -->
                                <form action='../../../teacher_deletefile.php' method='POST'>
                        
                                             <input type="hidden" name="delete_stud_id"  value="<?php echo $delete_stud_id; ?>" class="form_control">
                                      
                                    
                                                <button onclick="return confirm('Are you sure you want to Delete?');"  style="margin-left: 200px;margin-top:-60px;"  type="submit" name="stud_delete_btn" class="btn btn-primary" name='del'>Delete</button>
                                        
                                                

                                                
                                                
                                        </form></div>
                        
                        <?php
                        }}
                        ?>
                        </tr>
                        </table>
                        </div>
                        <br><br>

                        <div class="numbers1">
                        <img src="img/GROUP.png">


                        <p><b>Addition PPT with audio clip</b></p>
                        <table> 
                        <tr>
                        <?php if(mysqli_num_rows($query_runppt2) > 0)
                        {
                        while($row = mysqli_fetch_assoc($query_runppt2))
                        {
                        
                            echo "<br>";?>
                            <a href="../../../teacher_upload/indexppt.php"> 
                        
                            <?php echo $row['name'];
                            $delete_stud_id= $row['name']; ?>
                        
                            </a>
                        
                        <!-- </a> -->

                        <div class="hide">
                            
                        <!-- <input class="checkbox-effectcheckbox-effect-2" id="hide4" type="checkbox" value="hide" name="hide000"/>
                        <label style="padding-left:10px;" for="hide">Hidden from students</label> -->

                        <form action='../../../teacher_deletefile.php' method='POST'>
                        
                        <input type="hidden" name="delete_stud_id"  value="<?php echo $delete_stud_id; ?>" class="form_control">
                 
               
                           <button onclick="return confirm('Are you sure you want to Delete?');"  style="margin-left: 200px;margin-top:-60px;"  type="submit" name="stud_delete_btn" class="btn btn-primary" name='del'>Delete</button>
                   
                           

                           
                           
                   </form></div>
                        <?php
                        }}
                        ?>
                        <br>
                        </tr>

                        </div>
                        <br>


                        <!-- <a href="../../../teacher_content_quiz_view.php"><b>Quiz</b></a> -->
                        <!-- <button id="up" style="margin-left: 850px;"><a href="../../../teacher_upload/upload.php">Upload</a></button> -->
                        </div>

                        <!-- <div><img scr="img/Line 1.png"></div> -->

                        </div>
                        <hr>
                        <div group4>


                            <br>
                            <div class="numbers">
                            <h3 style="margin-left:-20px;">Multiplication</h3>
                            <br><br>




                            <div class="numbers1">
                            <img style="margin-left:-20px;" src="img/files 1.png">


                            <p style="margin-left:15px;"><b>Multiflication PDF</b></p>
                            <table> 
                            <tr>
                            <?php if(mysqli_num_rows($query_runun3) > 0)
                            {
                            while($row = mysqli_fetch_assoc($query_runun3))
                            {
                            
                                echo "<br>";?>
                                <a href="../../../teacher_upload/indexpdf.php"> 
                            
                                <?php echo $row['name'];
                                $delete_stud_id= $row['name']; ?>
                            
                                </a>
                            
                            <!-- </a> -->

                            <div class="hide">
                                
                            <!-- <input class="checkbox-effectcheckbox-effect-2" id="hide4" type="checkbox" value="hide" name="hide000"/>
                            <label style="padding-left:10px;" for="hide">Hidden from students</label> -->

                            <form action='../../../teacher_deletefile.php' method='POST'>
                        
                        <input type="hidden" name="delete_stud_id"  value="<?php echo $delete_stud_id; ?>" class="form_control">
                 
               
                           <button onclick="return confirm('Are you sure you want to Delete?');"  style="margin-left: 200px;margin-top:-60px;"  type="submit" name="stud_delete_btn" class="btn btn-primary" name='del'>Delete</button>
                   
                           

                           
                           
                   </form></div>
                            <?php
                            }}
                            ?>
                            <br>
                            </tr>

                            </div>
                            <br>





                            <div class="numbers1">
                            <img src="img/Vector.png">

                            <p><b>Multiplication Video</b></p>
                                
                            <table> 
                            <tr>
                            <?php if(mysqli_num_rows($query3) > 0)
                            {
                            while($row = mysqli_fetch_assoc($query3))
                            {
                            ?>
                            <a href="../../../teacher_upload/index.php">
                            <?php
                                echo "<br>";
                                echo $row['name'];
                            ?>
                            </a>
                            <div class="hide">
                            <!-- <input class="checkbox-effectcheckbox-effect-2" id="hide0000" type="checkbox" value="hide" name="hide00"/>
                                    <label for="hide">&nbsp;Hidden from students</label>  -->
                                    <form action='../../../teacher_deletefile.php' method='POST'>
                        
                        <input type="hidden" name="delete_stud_id"  value="<?php echo $delete_stud_id; ?>" class="form_control">
                 
               
                           <button onclick="return confirm('Are you sure you want to Delete?');"  style="margin-left: 200px;margin-top:-60px;"  type="submit" name="stud_delete_btn" class="btn btn-primary" name='del'>Delete</button>
                   
                           

                           
                           
                   </form></div>
                            
                            <?php
                            }}
                            ?>
                            </tr>
                            </table>
                            </div>
                            <br><br>

                            <div class="numbers1">
                            <img src="img/GROUP.png">


                            <p><b>Multiplication PPT with audio clip</b></p>
                            <table> 
                            <tr>
                            <?php if(mysqli_num_rows($query_runun3) > 0)
                            {
                            while($row = mysqli_fetch_assoc($query_runppt3))
                            {
                            
                                echo "<br>";?>
                                <a href="../../../teacher_upload/indexppt.php"> 
                            
                                <?php echo $row['name'];
                                $delete_stud_id= $row['name']; ?>
                            
                                </a>
                            
                            <!-- </a> -->

                            <div class="hide">
                                
                            <!-- <input class="checkbox-effectcheckbox-effect-2" id="hide4" type="checkbox" value="hide" name="hide000"/>
                            <label style="padding-left:10px;" for="hide">Hidden from students</label> -->

                            <form action='../../../teacher_deletefile.php' method='POST'>
                        
                        <input type="hidden" name="delete_stud_id"  value="<?php echo $delete_stud_id; ?>" class="form_control">
                 
               
                           <button onclick="return confirm('Are you sure you want to Delete?');"  style="margin-left: 200px;margin-top:-60px;"  type="submit" name="stud_delete_btn" class="btn btn-primary" name='del'>Delete</button>
                   
                           

                           
                           
                   </form></div>
                            <?php
                            }}
                            ?>
                            <br>
                            </tr>

                            </div>
                            <br>


                            <!-- <a href="../../../teacher_content_quiz_view.php"><b>Quiz</b></a> -->
                            <!-- <button id="up" style="margin-left: 850px;"><a href="../../../teacher_upload/upload.php">Upload</a></button> -->
                            </div>

                            <!-- <div><img scr="img/Line 1.png"></div> -->

                            </div>

                        <hr>
                        <div group5>


                                <br>
                                <div class="numbers">
                                <h3 style="margin-left: -15px;">Substraction</h3>
                                <br><br>




                                <div class="numbers1">
                                <img style="margin-left: -15px;" src="img/files 1.png">


                                <p style="margin-left: 13px;"><b>Sub PDF</b></p>
                                <table> 
                                <tr>
                                <?php if(mysqli_num_rows($query_runun4) > 0)
                                {
                                while($row = mysqli_fetch_assoc($query_runun4))
                                {
                                
                                    echo "<br>";?>
                                    <a href="../../../teacher_upload/indexpdf.php"> 
                                
                                    <?php echo $row['name'];
                                    $delete_stud_id= $row['name']; ?>
                                
                                    </a>
                                
                                <!-- </a> -->

                                <div class="hide">
                                    
                                <!-- <input class="checkbox-effectcheckbox-effect-2" id="hide4" type="checkbox" value="hide" name="hide000"/>
                                <label style="padding-left:10px;" for="hide">Hidden from students</label> -->

                                <form action='../../../teacher_deletefile.php' method='POST'>
                        
                                             <input type="hidden" name="delete_stud_id"  value="<?php echo $delete_stud_id; ?>" class="form_control">
                                      
                                    
                                                <button onclick="return confirm('Are you sure you want to Delete?');"  style="margin-left: 200px;margin-top:-60px;"  type="submit" name="stud_delete_btn" class="btn btn-primary" name='del'>Delete</button>
                                        
                                                

                                                
                                                
                                        </form></div>
                                <?php
                                }}
                                ?>
                                <br>
                                </tr>

                                </div>
                                <br>





                                <div class="numbers1">
                                <img src="img/Vector.png">

                                <p><b>Sub Video</b></p>
                                    
                                <table> 
                                <tr>
                                <?php if(mysqli_num_rows($query4) > 0)
                                {
                                while($row = mysqli_fetch_assoc($query4))
                                {
                                ?>
                                <a href="../../../teacher_upload/index.php">
                                <?php
                                    echo "<br>";
                                    echo $row['name'];
                                ?>
                                </a>
                                <div class="hide">
                                <!-- <input class="checkbox-effectcheckbox-effect-2" id="hide0000" type="checkbox" value="hide" name="hide00"/>
                                        <label for="hide">&nbsp;Hidden from students</label>  -->
                                        <form action='../../../teacher_deletefile.php' method='POST'>
                        
                        <input type="hidden" name="delete_stud_id"  value="<?php echo $delete_stud_id; ?>" class="form_control">
                 
               
                           <button onclick="return confirm('Are you sure you want to Delete?');"  style="margin-left: 200px;margin-top:-60px;"  type="submit" name="stud_delete_btn" class="btn btn-primary" name='del'>Delete</button>
                   
                           

                           
                           
                   </form></div>
                                
                                <?php
                                }}
                                ?>
                                </tr>
                                </table>
                                </div>
                                <br><br>

                                <div class="numbers1">
                                <img src="img/GROUP.png">


                                <p><b>Sub PPT with audio clip</b></p>
                                <table> 
                                <tr>
                                <?php if(mysqli_num_rows($query_runun4) > 0)
                                {
                                while($row = mysqli_fetch_assoc($query_runppt4))
                                {
                                
                                    echo "<br>";?>
                                    <a href="../../../teacher_upload/indexppt.php"> 
                                
                                    <?php echo $row['name'];
                                    $delete_stud_id= $row['name']; ?>
                                
                                    </a>
                                
                                <!-- </a> -->

                                <div class="hide">
                                    
                                <!-- <input class="checkbox-effectcheckbox-effect-2" id="hide4" type="checkbox" value="hide" name="hide000"/>
                                <label style="padding-left:10px;" for="hide">Hidden from students</label> -->

                                <form action='../../../teacher_deletefile.php' method='POST'>
                        
                                             <input type="hidden" name="delete_stud_id"  value="<?php echo $delete_stud_id; ?>" class="form_control">
                                      
                                    
                                                <button onclick="return confirm('Are you sure you want to Delete?');"  style="margin-left: 200px;margin-top:-60px;"  type="submit" name="stud_delete_btn" class="btn btn-primary" name='del'>Delete</button>
                                        
                                                

                                                
                                                
                                        </form></div>
                                <?php
                                }}
                                ?>
                                <br>
                                </tr>

                                </div>
                                <br>


                                <!-- <a href="../../../teacher_content_quiz_view.php"><b>Quiz</b></a> -->
                                <button id="up" style="margin-left: 850px;"><a href="../../../teacher_upload/upload.php">Upload</a></button>
                                </div>

                                <!-- <div><img scr="img/Line 1.png"></div> -->

                                </div>

                                                    </div>  
                                                    
                                                    <!-- <div class="float-child2">
                                                        
                                                    <div class="green"><div class="subject-list">Subject List</div>
                                                        <div class="btn-group">
                                                            <a href="../../mathematics/grade4/subjectindex.php"><button style="background-color: #5850ec;" ><p >Mathematics</p></button></a>
                                                            <a href="../../sinhala/grade4/subjectindex.php"><button><p>Sinhala</p></button></a>
                                                            <a href="../../english/grade4/subjectindex.php"><button><p>English</p></button></a>
                                                            <a href="../../aesthetic/grade4/subjectindex.php"><button><p>Aesthetic</p></button></a>
                                                        </div>
                                                    </div>
                                                
                                                </div>
                                                    -->
                                                </div>
                                <p style="margin-left: 10px;"><b>Quiz</b></p>
                                <br>
                               
                                    
                             <table>
                                <tr>
                                    <th>Quiz Name</th>
                                    <th>View</th>
                                   
                                </tr>
                               
                                    <?php
                                  
                                  $query = "SELECT q_title,qid  FROM quizz  where gid='G1' AND sid='S1'  ";
                                  $rows = mysqli_query($conn,$query);
                                     
                                      
                                      foreach ($rows as $row) : 
                                      $q_title=$row['q_title'];
                                      $qid=$row['qid'];
                                      ?>
                                     
                                       <tr>
                                       <td  style="margin-right: 10px;">
                                       <?php
                                      echo " ";
                                      echo $q_title;
                                     ?>
                                    </td>
                                    <td>
                                    <form action=".././../../teacher_quiz/quiz_maths/view1.php" method="post">
                                    <input type="hidden" name="view_id" value="<?php echo $qid; ?>">
                                    <button type="submit" name="view_btn" class="hbtn hb-fill-right-rev-bg-br" id="submit2"> VIEW</a></button>
                                   </form>
                                        <?php
                                           
                                        print "<br>";                   
                                        endforeach;
                                         
                                                           
                                       ?>
                                    </td>

                                </tr>
                        
                                </table>
                
            </main>

                
            </div>
        <label for="sidebar-toggle" class="body-label"></label>

        
            
        
</body>
</html>