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
    <title>Generated Progress Report</title>
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
                <img src="../teacher_images/logo.png" width="50px" alt="">

                <div class="brand-icons">
                    <span class=""></span>
                   <a href="./teacher_mailbox/mailbox.html"> <span class="las la-bell"></span></a>
                </div>
            </div>
        </div>

        <div class="sidebar-main">
            <div class="sidebar-user">
                <a href="../teacher_profile.php"> <img src="<?php echo $image_src;  ?>" ></a>
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
                            Progress Reports
                        </h3>
                    </div>
                 
                    <div class="header-actions">
                        <!-- <a href="#" class="hbtn hb-fill-right-rev-bg-br"><span class="las la-tools"></span>Settings</a> -->

                    </div>
                  
                </div>
                
                <div class="container">

                <div style="margin-top:50px;" class="stuhis">
                            <p><b>Student History</b><span>

                            <form action="" method="post">
                            <select name="Grade">
                            <option value="" disabled selected>Choose option</option>
                            <option value="G1">Grade1</option>
                            <option value="G2">Grade2</option>
                            <option value="G3">Grade3</option>
                            <option value="G4">Grade4</option>
                            <option value="G5">Grade5</option>
                            </select>

                            <select name="Subject">
                            <option value="" disabled selected>Choose option</option>
                            <option value="S1">Mathematics</option>
                            <option value="S2">English</option>
                            <option value="S3">Sinhala</option>
                            <option value="S4">Aesthetic</option>
                            <option value="S5">Environmental Science</option>
                            </select>

                            <input type="submit" name="submit" class="submit"  vlaue="Choose options">
                            </form>
                            
                            <?php
                                if(isset($_POST['submit'])){
                                    if(!empty($_POST['Grade'])) {
                                        if(!empty($_POST['Subject'])) {
                                            $selected = $_POST['Grade'];
                                            $selected2 = $_POST['Subject'];
                                            echo 'You have chosen: ' . $selected;
                                            echo 'You have chosen: ' . $selected2;

                                                 if($selected=='G1' && $selected2=='S1'){
                                                   
                                                        $connection = mysqli_connect("localhost","root","","demo");
                                                        $query = "SELECT qid  FROM quizz  where gid='G1' AND sid='S1'  ";
                                                        $rows = mysqli_query($connection,$query);?>
                                                        <table style="margin-left: 0px;margin-top: 30px;" width="1200px" cellspacing="0">
                                                        <thead>
                                                        <th  width="25%">Student</th>
                                                        <th width="25%">Full Name</th>
                                                        <th width="25%">Login_Time</th>
                                                        <th width="25%">Progress</th>
                                                        </thead>
                               
                                                         <tbody>

                                                            <?php
                                                            
                                                            foreach ($rows as $row) : 
                                                            $qid=$row['qid'];
                                                        // echo $row['gid'];
                                                                $query ="SELECT *  FROM marks  where  qid='$qid' " ;
                                                                $rows = mysqli_query($connection,$query);
                                                                    
                                                                foreach ($rows as $row) : 
                                                                $student_id=$row['student_id'];
                                                                $access_dt=$row['access_dt'];
                                                                $q_marks=$row['q_marks'];

                                                                $query ="SELECT *  FROM members  where  id='$student_id' " ;
                                                                $rows = mysqli_query($connection,$query);
                                                                    
                                                                foreach ($rows as $row) : 
                                                                $first_name=$row['first_name'];
                                                                $last_name=$row['last_name'];
                                                                
                                                                // echo $row['qid'];
                                                                ?>
                                                                
                                                                <tr>
                                                                    <td><img src="img/Ellipse 30.png" alt=""></td>
                                                                        <td><a href="../t_student_profile3.php"><?php echo $first_name; ?>&nbsp;<?php echo $last_name; ?></a></td>
                                                                        <td><?php echo $access_dt;?></td>
                                                                        <td>
                                                                            <div class="container2">
                                                                            <div class="skill html"> <?php echo $q_marks;?><div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                <?php
                                                                    endforeach;
                                                
                                                                endforeach;
                                                                                
                                                            endforeach;
                                                            }

                                                            elseif($selected=='G1' && $selected2=='S2'){
                                                   
                                                                $connection = mysqli_connect("localhost","root","","demo");
                                                                $query = "SELECT qid  FROM quizz  where gid='G1' AND sid='S2'  ";
                                                                $rows = mysqli_query($connection,$query);?>
                                                                <table style="margin-left: -40px;margin-top: 30px;" width="1200px" cellspacing="0">
                                                                <thead>
                                                                <th width="100">Student</th>
                                                                <th width="100">Name</th>
                                                                <th width="100">Login_Time</th>
                                                                <th width="100">Progress</th>
                                                                </thead>
                                       
                                                                 <tbody>
        
                                                                    <?php
                                                                    
                                                                    foreach ($rows as $row) : 
                                                                    $qid=$row['qid'];
                                                                // echo $row['gid'];
                                                                        $query ="SELECT *  FROM marks  where  qid='$qid' " ;
                                                                        $rows = mysqli_query($connection,$query);
                                                                            
                                                                        foreach ($rows as $row) : 
                                                                        $student_id=$row['student_id'];
                                                                        $access_dt=$row['access_dt'];
                                                                        $q_marks=$row['q_marks'];
                                                                        // echo $row['qid'];
                                                                        ?>
                                                                        
                                                                        <tr>
                                                                            <td><img src="img/Ellipse 30.png" alt=""></td>
                                                                                <td><a href="../t_student_profile3.php"><?php echo $student_id;?></a></td>
                                                                                <td><?php echo $access_dt;?></td>
                                                                                <td>
                                                                                    <div class="container2">
                                                                                    <div class="skill html"> <?php echo $q_marks;?><div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        <?php
                                                        
                                                                        endforeach;
                                                                                        
                                                                    endforeach;
                                                                    }


                                                                    if($selected=='G1' && $selected2=='S3'){
                                                   
                                                                        $connection = mysqli_connect("localhost","root","","demo");
                                                                        $query = "SELECT qid  FROM quizz  where gid='G1' AND sid='S3'  ";
                                                                        $rows = mysqli_query($connection,$query);?>
                                                                        <table style="margin-left: -40px;margin-top: 30px;" width="1200px" cellspacing="0">
                                                                        <thead>
                                                                        <th width="100">Student</th>
                                                                        <th width="100">Name</th>
                                                                        <th width="100">Login_Time</th>
                                                                        <th width="100">Progress</th>
                                                                        </thead>
                                               
                                                                         <tbody>
                
                                                                            <?php
                                                                            
                                                                            foreach ($rows as $row) : 
                                                                            $qid=$row['qid'];
                                                                        // echo $row['gid'];
                                                                                $query ="SELECT *  FROM marks  where  qid='$qid' " ;
                                                                                $rows = mysqli_query($connection,$query);
                                                                                    
                                                                                foreach ($rows as $row) : 
                                                                                $student_id=$row['student_id'];
                                                                                $access_dt=$row['access_dt'];
                                                                                $q_marks=$row['q_marks'];
                                                                                // echo $row['qid'];
                                                                                ?>
                                                                                
                                                                                <tr>
                                                                                    <td><img src="img/Ellipse 30.png" alt=""></td>
                                                                                        <td><a href="../t_student_profile3.php"><?php echo $student_id;?></a></td>
                                                                                        <td><?php echo $access_dt;?></td>
                                                                                        <td>
                                                                                            <div class="container2">
                                                                                            <div class="skill html"> <?php echo $q_marks;?><div>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                <?php
                                                                
                                                                                endforeach;
                                                                                                
                                                                            endforeach;
                                                                            }

                                                                    if($selected=='G1' && $selected2=='S4'){
                                                   
                                                                            $connection = mysqli_connect("localhost","root","","demo");
                                                                            $query = "SELECT qid  FROM quizz  where gid='G1' AND sid='S4'  ";
                                                                            $rows = mysqli_query($connection,$query);?>
                                                                            <table style="margin-left: -40px;margin-top: 30px;" width="1200px" cellspacing="0">
                                                                            <thead>
                                                                            <th width="100">Student</th>
                                                                            <th width="100">Name</th>
                                                                            <th width="100">Login_Time</th>
                                                                            <th width="100">Progress</th>
                                                                            </thead>
                                                       
                                                                            <tbody>
                        
                                                                         <?php
                                                                                    
                                                                            foreach ($rows as $row) : 
                                                                            $qid=$row['qid'];
                                                                                // echo $row['gid'];
                                                                            $query ="SELECT *  FROM marks  where  qid='$qid' " ;
                                                                            $rows = mysqli_query($connection,$query);
                                                                                            
                                                                            foreach ($rows as $row) : 
                                                                            $student_id=$row['student_id'];
                                                                            $access_dt=$row['access_dt'];
                                                                            $q_marks=$row['q_marks'];
                                                                                        // echo $row['qid'];
                                                                            ?>
                                                                                        
                                                                            <tr>
                                                                            <td><img src="img/Ellipse 30.png" alt=""></td>
                                                                            <td><a href="../t_student_profile3.php"><?php echo $student_id;?></a></td>
                                                                            <td><?php echo $access_dt;?></td>
                                                                            <td>
                                                                            <div class="container2">
                                                                            <div class="skill html"> <?php echo $q_marks;?><div>
                                                                            </div>
                                                                            </td>
                                                                            </tr>
                                                                            <?php
                                                                        
                                                                            endforeach;
                                                                                                        
                                                                            endforeach;
                                                                            }
                                                                    if($selected=='G1' && $selected2=='S5'){
                                                   
                                                                        $connection = mysqli_connect("localhost","root","","demo");
                                                                        $query = "SELECT qid  FROM quizz  where gid='G1' AND sid='S5'  ";
                                                                        $rows = mysqli_query($connection,$query);?>
                                                                        <table style="margin-left: -40px;margin-top: 30px;" width="1200px" cellspacing="0">
                                                                        <thead>
                                                                        <th width="100">Student</th>
                                                                        <th width="100">Name</th>
                                                                        <th width="100">Login_Time</th>
                                                                        <th width="100">Progress</th>
                                                                        </thead>
                                                               
                                                                        <tbody>
                                
                                                                         <?php
                                                                                            
                                                                        foreach ($rows as $row) : 
                                                                        $qid=$row['qid'];
                                                                    // echo $row['gid'];
                                                                            $query ="SELECT *  FROM marks  where  qid='$qid' " ;
                                                                            $rows = mysqli_query($connection,$query);
                                                                                
                                                                            foreach ($rows as $row) : 
                                                                            $student_id=$row['student_id'];
                                                                            $access_dt=$row['access_dt'];
                                                                            $q_marks=$row['q_marks'];
                                                                            // echo $row['qid'];
                                                                            ?>
                                                                            
                                                                            <tr>
                                                                                <td><img src="img/Ellipse 30.png" alt=""></td>
                                                                                    <td><a href="../t_student_profile3.php"><?php echo $student_id;?></a></td>
                                                                                    <td><?php echo $access_dt;?></td>
                                                                                    <td>
                                                                                        <div class="container2">
                                                                                        <div class="skill html"> <?php echo $q_marks;?><div>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            <?php
                                                            
                                                                            endforeach;
                                                                                            
                                                                        endforeach;
                                                                        } 
                                                                    if($selected=='G2' && $selected2=='S1'){
                                                   
                                                                        $connection = mysqli_connect("localhost","root","","demo");
                                                                        $query = "SELECT qid  FROM quizz  where gid='G2' AND sid='S1'  ";
                                                                        $rows = mysqli_query($connection,$query);?>
                                                                        <table style="margin-left: -40px;margin-top: 30px;" width="1200px" cellspacing="0">
                                                                        <thead>
                                                                        <th width="100">Student</th>
                                                                        <th width="100">Name</th>
                                                                        <th width="100">Login_Time</th>
                                                                        <th width="100">Progress</th>
                                                                        </thead>
                                                
                                                                            <tbody>
                
                                                                            <?php
                                                                            
                                                                            foreach ($rows as $row) : 
                                                                            $qid=$row['qid'];
                                                                        // echo $row['gid'];
                                                                                $query ="SELECT *  FROM marks  where  qid='$qid' " ;
                                                                                $rows = mysqli_query($connection,$query);
                                                                                    
                                                                                foreach ($rows as $row) : 
                                                                                $student_id=$row['student_id'];
                                                                                $access_dt=$row['access_dt'];
                                                                                $q_marks=$row['q_marks'];
                                                                                // echo $row['qid'];
                                                                                ?>
                                                                                
                                                                                <tr>
                                                                                    <td><img src="img/Ellipse 30.png" alt=""></td>
                                                                                        <td><a href="../t_student_profile3.php"><?php echo $student_id;?></a></td>
                                                                                        <td><?php echo $access_dt;?></td>
                                                                                        <td>
                                                                                            <div class="container2">
                                                                                            <div class="skill html"> <?php echo $q_marks;?><div>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                <?php
                                                                
                                                                                endforeach;
                                                                                                
                                                                            endforeach;
                                                                            } 
                                                                                                    
                                                                        if($selected=='G2' && $selected2=='S2'){
                                                   
                                                                            $connection = mysqli_connect("localhost","root","","demo");
                                                                            $query = "SELECT qid  FROM quizz  where gid='G2' AND sid='S2'  ";
                                                                            $rows = mysqli_query($connection,$query);?>
                                                                            <table style="margin-left: -40px;margin-top: 30px;" width="1200px" cellspacing="0">
                                                                            <thead>
                                                                            <th width="100">Student</th>
                                                                            <th width="100">Name</th>
                                                                            <th width="100">Login_Time</th>
                                                                            <th width="100">Progress</th>
                                                                            </thead>
                                                    
                                                                                <tbody>
                    
                                                                                <?php
                                                                                
                                                                                foreach ($rows as $row) : 
                                                                                $qid=$row['qid'];
                                                                            // echo $row['gid'];
                                                                                    $query ="SELECT *  FROM marks  where  qid='$qid' " ;
                                                                                    $rows = mysqli_query($connection,$query);
                                                                                        
                                                                                    foreach ($rows as $row) : 
                                                                                    $student_id=$row['student_id'];
                                                                                    $access_dt=$row['access_dt'];
                                                                                    $q_marks=$row['q_marks'];
                                                                                    // echo $row['qid'];
                                                                                    ?>
                                                                                    
                                                                                    <tr>
                                                                                        <td><img src="img/Ellipse 30.png" alt=""></td>
                                                                                            <td><a href="../t_student_profile3.php"><?php echo $student_id;?></a></td>
                                                                                            <td><?php echo $access_dt;?></td>
                                                                                            <td>
                                                                                                <div class="container2">
                                                                                                <div class="skill html"> <?php echo $q_marks;?><div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                    <?php
                                                                    
                                                                                    endforeach;
                                                                                                    
                                                                                endforeach;
                                                                                }
                                                                        if($selected=='G2' && $selected2=='S3'){
                                                   
                                                                            $connection = mysqli_connect("localhost","root","","demo");
                                                                            $query = "SELECT qid  FROM quizz  where gid='G2' AND sid='S3'  ";
                                                                            $rows = mysqli_query($connection,$query);?>
                                                                            <table style="margin-left: -40px;margin-top: 30px;" width="1200px" cellspacing="0">
                                                                            <thead>
                                                                            <th width="100">Student</th>
                                                                            <th width="100">Name</th>
                                                                            <th width="100">Login_Time</th>
                                                                            <th width="100">Progress</th>
                                                                            </thead>
                                                    
                                                                                <tbody>
                    
                                                                                <?php
                                                                                
                                                                                foreach ($rows as $row) : 
                                                                                $qid=$row['qid'];
                                                                            // echo $row['gid'];
                                                                                    $query ="SELECT *  FROM marks  where  qid='$qid' " ;
                                                                                    $rows = mysqli_query($connection,$query);
                                                                                        
                                                                                    foreach ($rows as $row) : 
                                                                                    $student_id=$row['student_id'];
                                                                                    $access_dt=$row['access_dt'];
                                                                                    $q_marks=$row['q_marks'];
                                                                                    // echo $row['qid'];
                                                                                    ?>
                                                                                    
                                                                                    <tr>
                                                                                        <td><img src="img/Ellipse 30.png" alt=""></td>
                                                                                            <td><a href="../t_student_profile3.php"><?php echo $student_id;?></a></td>
                                                                                            <td><?php echo $access_dt;?></td>
                                                                                            <td>
                                                                                                <div class="container2">
                                                                                                <div class="skill html"> <?php echo $q_marks;?><div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                    <?php
                                                                    
                                                                                    endforeach;
                                                                                                    
                                                                                endforeach;
                                                                                }
                                                                        if($selected=='G2' && $selected2=='S4'){
                                                   
                                                                            $connection = mysqli_connect("localhost","root","","demo");
                                                                            $query = "SELECT qid  FROM quizz  where gid='G2' AND sid='S4'  ";
                                                                            $rows = mysqli_query($connection,$query);?>
                                                                            <table style="margin-left: -40px;margin-top: 30px;" width="1200px" cellspacing="0">
                                                                            <thead>
                                                                            <th width="100">Student</th>
                                                                            <th width="100">Name</th>
                                                                            <th width="100">Login_Time</th>
                                                                            <th width="100">Progress</th>
                                                                            </thead>
                                                    
                                                                                <tbody>
                    
                                                                                <?php
                                                                                
                                                                                foreach ($rows as $row) : 
                                                                                $qid=$row['qid'];
                                                                            // echo $row['gid'];
                                                                                    $query ="SELECT *  FROM marks  where  qid='$qid' " ;
                                                                                    $rows = mysqli_query($connection,$query);
                                                                                        
                                                                                    foreach ($rows as $row) : 
                                                                                    $student_id=$row['student_id'];
                                                                                    $access_dt=$row['access_dt'];
                                                                                    $q_marks=$row['q_marks'];
                                                                                    // echo $row['qid'];
                                                                                    ?>
                                                                                    
                                                                                    <tr>
                                                                                        <td><img src="img/Ellipse 30.png" alt=""></td>
                                                                                            <td><a href="../t_student_profile3.php"><?php echo $student_id;?></a></td>
                                                                                            <td><?php echo $access_dt;?></td>
                                                                                            <td>
                                                                                                <div class="container2">
                                                                                                <div class="skill html"> <?php echo $q_marks;?><div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                    <?php
                                                                    
                                                                                    endforeach;
                                                                                                    
                                                                                endforeach;
                                                                                }
                                                                        if($selected=='G2' && $selected2=='S5'){
                                                   
                                                                            $connection = mysqli_connect("localhost","root","","demo");
                                                                            $query = "SELECT qid  FROM quizz  where gid='G2' AND sid='S5'  ";
                                                                            $rows = mysqli_query($connection,$query);?>
                                                                            <table style="margin-left: -40px;margin-top: 30px;" width="1200px" cellspacing="0">
                                                                            <thead>
                                                                            <th width="100">Student</th>
                                                                            <th width="100">Name</th>
                                                                            <th width="100">Login_Time</th>
                                                                            <th width="100">Progress</th>
                                                                            </thead>
                                                
                                                                            <tbody>

                                                                                <?php
                                                                                
                                                                                foreach ($rows as $row) : 
                                                                                $qid=$row['qid'];
                                                                            // echo $row['gid'];
                                                                                    $query ="SELECT *  FROM marks  where  qid='$qid' " ;
                                                                                    $rows = mysqli_query($connection,$query);
                                                                                        
                                                                                    foreach ($rows as $row) : 
                                                                                    $student_id=$row['student_id'];
                                                                                    $access_dt=$row['access_dt'];
                                                                                    $q_marks=$row['q_marks'];
                                                                                    // echo $row['qid'];
                                                                                    ?>
                                                                                    
                                                                                    <tr>
                                                                                        <td><img src="img/Ellipse 30.png" alt=""></td>
                                                                                            <td><a href="../t_student_profile3.php"><?php echo $student_id;?></a></td>
                                                                                            <td><?php echo $access_dt;?></td>
                                                                                            <td>
                                                                                                <div class="container2">
                                                                                                <div class="skill html"> <?php echo $q_marks;?><div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                    <?php
                                                                    
                                                                                    endforeach;
                                                                                                    
                                                                                endforeach;
                                                                                }
                                                                        if($selected=='G3' && $selected2=='S1'){
                                                   
                                                                            $connection = mysqli_connect("localhost","root","","demo");
                                                                            $query = "SELECT qid  FROM quizz  where gid='G3' AND sid='S1'  ";
                                                                            $rows = mysqli_query($connection,$query);?>
                                                                            <table style="margin-left: -40px;margin-top: 30px;" width="1200px" cellspacing="0">
                                                                            <thead>
                                                                            <th width="100">Student</th>
                                                                            <th width="100">Name</th>
                                                                            <th width="100">Login_Time</th>
                                                                            <th width="100">Progress</th>
                                                                            </thead>
                                                
                                                                            <tbody>

                                                                                <?php
                                                                                
                                                                                foreach ($rows as $row) : 
                                                                                $qid=$row['qid'];
                                                                            // echo $row['gid'];
                                                                                    $query ="SELECT *  FROM marks  where  qid='$qid' " ;
                                                                                    $rows = mysqli_query($connection,$query);
                                                                                        
                                                                                    foreach ($rows as $row) : 
                                                                                    $student_id=$row['student_id'];
                                                                                    $access_dt=$row['access_dt'];
                                                                                    $q_marks=$row['q_marks'];
                                                                                    // echo $row['qid'];
                                                                                    ?>
                                                                                    
                                                                                    <tr>
                                                                                        <td><img src="img/Ellipse 30.png" alt=""></td>
                                                                                            <td><a href="../t_student_profile3.php"><?php echo $student_id;?></a></td>
                                                                                            <td><?php echo $access_dt;?></td>
                                                                                            <td>
                                                                                                <div class="container2">
                                                                                                <div class="skill html"> <?php echo $q_marks;?><div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                    <?php
                                                                    
                                                                                    endforeach;
                                                                                                    
                                                                                endforeach;
                                                                                }
                                                                        if($selected=='G3' && $selected2=='S2'){
                                                   
                                                                                    $connection = mysqli_connect("localhost","root","","demo");
                                                                                    $query = "SELECT qid  FROM quizz  where gid='G3' AND sid='S2'  ";
                                                                                    $rows = mysqli_query($connection,$query);?>
                                                                                    <table style="margin-left: -40px;margin-top: 30px;" width="1200px" cellspacing="0">
                                                                                    <thead>
                                                                                    <th width="100">Student</th>
                                                                                    <th width="100">Name</th>
                                                                                    <th width="100">Login_Time</th>
                                                                                    <th width="100">Progress</th>
                                                                                    </thead>
                                                        
                                                                                    <tbody>
        
                                                                                        <?php
                                                                                        
                                                                                        foreach ($rows as $row) : 
                                                                                        $qid=$row['qid'];
                                                                                    // echo $row['gid'];
                                                                                            $query ="SELECT *  FROM marks  where  qid='$qid' " ;
                                                                                            $rows = mysqli_query($connection,$query);
                                                                                                
                                                                                            foreach ($rows as $row) : 
                                                                                            $student_id=$row['student_id'];
                                                                                            $access_dt=$row['access_dt'];
                                                                                            $q_marks=$row['q_marks'];
                                                                                            // echo $row['qid'];
                                                                                            ?>
                                                                                            
                                                                                            <tr>
                                                                                                <td><img src="img/Ellipse 30.png" alt=""></td>
                                                                                                    <td><a href="../t_student_profile3.php"><?php echo $student_id;?></a></td>
                                                                                                    <td><?php echo $access_dt;?></td>
                                                                                                    <td>
                                                                                                        <div class="container2">
                                                                                                        <div class="skill html"> <?php echo $q_marks;?><div>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            <?php
                                                                            
                                                                                            endforeach;
                                                                                                            
                                                                                        endforeach;
                                                                                        }
                                                                        if($selected=='G3' && $selected2=='S3'){
                                                   
                                                                                $connection = mysqli_connect("localhost","root","","demo");
                                                                                $query = "SELECT qid  FROM quizz  where gid='G3' AND sid='S3'  ";
                                                                                $rows = mysqli_query($connection,$query);?>
                                                                                <table style="margin-left: -40px;margin-top: 30px;" width="1200px" cellspacing="0">
                                                                                <thead>
                                                                                <th width="100">Student</th>
                                                                                <th width="100">Name</th>
                                                                                <th width="100">Login_Time</th>
                                                                                <th width="100">Progress</th>
                                                                                </thead>
                                                    
                                                                                <tbody>

                                                                                    <?php
                                                                                    
                                                                                    foreach ($rows as $row) : 
                                                                                    $qid=$row['qid'];
                                                                                // echo $row['gid'];
                                                                                        $query ="SELECT *  FROM marks  where  qid='$qid' " ;
                                                                                        $rows = mysqli_query($connection,$query);
                                                                                            
                                                                                        foreach ($rows as $row) : 
                                                                                        $student_id=$row['student_id'];
                                                                                        $access_dt=$row['access_dt'];
                                                                                        $q_marks=$row['q_marks'];
                                                                                        // echo $row['qid'];
                                                                                        ?>
                                                                                        
                                                                                        <tr>
                                                                                            <td><img src="img/Ellipse 30.png" alt=""></td>
                                                                                                <td><a href="../t_student_profile3.php"><?php echo $student_id;?></a></td>
                                                                                                <td><?php echo $access_dt;?></td>
                                                                                                <td>
                                                                                                    <div class="container2">
                                                                                                    <div class="skill html"> <?php echo $q_marks;?><div>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                        <?php
                                                                        
                                                                                        endforeach;
                                                                                                        
                                                                                    endforeach;
                                                                                    }
                                                                        if($selected=='G3' && $selected2=='S4'){
                                                   
                                                                            $connection = mysqli_connect("localhost","root","","demo");
                                                                            $query = "SELECT qid  FROM quizz  where gid='G3' AND sid='S4'  ";
                                                                            $rows = mysqli_query($connection,$query);?>
                                                                            <table style="margin-left: -40px;margin-top: 30px;" width="1200px" cellspacing="0">
                                                                            <thead>
                                                                            <th width="100">Student</th>
                                                                            <th width="100">Name</th>
                                                                            <th width="100">Login_Time</th>
                                                                            <th width="100">Progress</th>
                                                                            </thead>
                                                
                                                                            <tbody>

                                                                                <?php
                                                                                
                                                                                foreach ($rows as $row) : 
                                                                                $qid=$row['qid'];
                                                                            // echo $row['gid'];
                                                                                    $query ="SELECT *  FROM marks  where  qid='$qid' " ;
                                                                                    $rows = mysqli_query($connection,$query);
                                                                                        
                                                                                    foreach ($rows as $row) : 
                                                                                    $student_id=$row['student_id'];
                                                                                    $access_dt=$row['access_dt'];
                                                                                    $q_marks=$row['q_marks'];
                                                                                    // echo $row['qid'];
                                                                                    ?>
                                                                                    
                                                                                    <tr>
                                                                                        <td><img src="img/Ellipse 30.png" alt=""></td>
                                                                                            <td><a href="../t_student_profile3.php"><?php echo $student_id;?></a></td>
                                                                                            <td><?php echo $access_dt;?></td>
                                                                                            <td>
                                                                                                <div class="container2">
                                                                                                <div class="skill html"> <?php echo $q_marks;?><div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                    <?php
                                                                    
                                                                                    endforeach;
                                                                                                    
                                                                                endforeach;
                                                                                }
                                                                                if($selected=='G3' && $selected2=='S5'){
                                                   
                                                                                    $connection = mysqli_connect("localhost","root","","demo");
                                                                                    $query = "SELECT qid  FROM quizz  where gid='G3' AND sid='S5'  ";
                                                                                    $rows = mysqli_query($connection,$query);?>
                                                                                    <table style="margin-left: -40px;margin-top: 30px;" width="1200px" cellspacing="0">
                                                                                    <thead>
                                                                                    <th width="100">Student</th>
                                                                                    <th width="100">Name</th>
                                                                                    <th width="100">Login_Time</th>
                                                                                    <th width="100">Progress</th>
                                                                                    </thead>
                                                        
                                                                                    <tbody>
        
                                                                                        <?php
                                                                                        
                                                                                        foreach ($rows as $row) : 
                                                                                        $qid=$row['qid'];
                                                                                    // echo $row['gid'];
                                                                                            $query ="SELECT *  FROM marks  where  qid='$qid' " ;
                                                                                            $rows = mysqli_query($connection,$query);
                                                                                                
                                                                                            foreach ($rows as $row) : 
                                                                                            $student_id=$row['student_id'];
                                                                                            $access_dt=$row['access_dt'];
                                                                                            $q_marks=$row['q_marks'];
                                                                                            // echo $row['qid'];
                                                                                            ?>
                                                                                            
                                                                                            <tr>
                                                                                                <td><img src="img/Ellipse 30.png" alt=""></td>
                                                                                                    <td><a href="../t_student_profile3.php"><?php echo $student_id;?></a></td>
                                                                                                    <td><?php echo $access_dt;?></td>
                                                                                                    <td>
                                                                                                        <div class="container2">
                                                                                                        <div class="skill html"> <?php echo $q_marks;?><div>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            <?php
                                                                            
                                                                                            endforeach;
                                                                                                            
                                                                                        endforeach;
                                                                                        }
                                                                                if($selected=='G4' && $selected2=='S1'){
                                                   
                                                                                        $connection = mysqli_connect("localhost","root","","demo");
                                                                                        $query = "SELECT qid  FROM quizz  where gid='G4' AND sid='S1'  ";
                                                                                        $rows = mysqli_query($connection,$query);?>
                                                                                        <table style="margin-left: -40px;margin-top: 30px;" width="1200px" cellspacing="0">
                                                                                        <thead>
                                                                                        <th width="100">Student</th>
                                                                                        <th width="100">Name</th>
                                                                                        <th width="100">Login_Time</th>
                                                                                        <th width="100">Progress</th>
                                                                                        </thead>
                                                            
                                                                                        <tbody>
            
                                                                                            <?php
                                                                                            
                                                                                            foreach ($rows as $row) : 
                                                                                            $qid=$row['qid'];
                                                                                        // echo $row['gid'];
                                                                                                $query ="SELECT *  FROM marks  where  qid='$qid' " ;
                                                                                                $rows = mysqli_query($connection,$query);
                                                                                                    
                                                                                                foreach ($rows as $row) : 
                                                                                                $student_id=$row['student_id'];
                                                                                                $access_dt=$row['access_dt'];
                                                                                                $q_marks=$row['q_marks'];
                                                                                                // echo $row['qid'];
                                                                                                ?>
                                                                                                
                                                                                                <tr>
                                                                                                    <td><img src="img/Ellipse 30.png" alt=""></td>
                                                                                                        <td><a href="../t_student_profile3.php"><?php echo $student_id;?></a></td>
                                                                                                        <td><?php echo $access_dt;?></td>
                                                                                                        <td>
                                                                                                            <div class="container2">
                                                                                                            <div class="skill html"> <?php echo $q_marks;?><div>
                                                                                                            </div>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                <?php
                                                                                
                                                                                                endforeach;
                                                                                                                
                                                                                            endforeach;
                                                                                            }
                                                                                if($selected=='G4' && $selected2=='S2'){
                                                   
                                                                                        $connection = mysqli_connect("localhost","root","","demo");
                                                                                        $query = "SELECT qid  FROM quizz  where gid='G4' AND sid='S2'  ";
                                                                                        $rows = mysqli_query($connection,$query);?>
                                                                                        <table style="margin-left: -40px;margin-top: 30px;" width="1200px" cellspacing="0">
                                                                                        <thead>
                                                                                        <th width="100">Student</th>
                                                                                        <th width="100">Name</th>
                                                                                        <th width="100">Login_Time</th>
                                                                                        <th width="100">Progress</th>
                                                                                        </thead>
                                                            
                                                                                        <tbody>
            
                                                                                            <?php
                                                                                            
                                                                                            foreach ($rows as $row) : 
                                                                                            $qid=$row['qid'];
                                                                                        // echo $row['gid'];
                                                                                                $query ="SELECT *  FROM marks  where  qid='$qid' " ;
                                                                                                $rows = mysqli_query($connection,$query);
                                                                                                    
                                                                                                foreach ($rows as $row) : 
                                                                                                $student_id=$row['student_id'];
                                                                                                $access_dt=$row['access_dt'];
                                                                                                $q_marks=$row['q_marks'];
                                                                                                // echo $row['qid'];
                                                                                                ?>
                                                                                                
                                                                                                <tr>
                                                                                                    <td><img src="img/Ellipse 30.png" alt=""></td>
                                                                                                        <td><a href="../t_student_profile3.php"><?php echo $student_id;?></a></td>
                                                                                                        <td><?php echo $access_dt;?></td>
                                                                                                        <td>
                                                                                                            <div class="container2">
                                                                                                            <div class="skill html"> <?php echo $q_marks;?><div>
                                                                                                            </div>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                <?php
                                                                                
                                                                                                endforeach;
                                                                                                                
                                                                                            endforeach;
                                                                                            }
                                                                                if($selected=='G4' && $selected2=='S3'){
                                                   
                                                                                        $connection = mysqli_connect("localhost","root","","demo");
                                                                                        $query = "SELECT qid  FROM quizz  where gid='G4' AND sid='S3'  ";
                                                                                        $rows = mysqli_query($connection,$query);?>
                                                                                        <table style="margin-left: -40px;margin-top: 30px;" width="1200px" cellspacing="0">
                                                                                        <thead>
                                                                                        <th width="100">Student</th>
                                                                                        <th width="100">Name</th>
                                                                                        <th width="100">Login_Time</th>
                                                                                        <th width="100">Progress</th>
                                                                                        </thead>
                                                            
                                                                                        <tbody>
            
                                                                                            <?php
                                                                                            
                                                                                            foreach ($rows as $row) : 
                                                                                            $qid=$row['qid'];
                                                                                        // echo $row['gid'];
                                                                                                $query ="SELECT *  FROM marks  where  qid='$qid' " ;
                                                                                                $rows = mysqli_query($connection,$query);
                                                                                                    
                                                                                                foreach ($rows as $row) : 
                                                                                                $student_id=$row['student_id'];
                                                                                                $access_dt=$row['access_dt'];
                                                                                                $q_marks=$row['q_marks'];
                                                                                                // echo $row['qid'];
                                                                                                ?>
                                                                                                
                                                                                                <tr>
                                                                                                    <td><img src="img/Ellipse 30.png" alt=""></td>
                                                                                                        <td><a href="../t_student_profile3.php"><?php echo $student_id;?></a></td>
                                                                                                        <td><?php echo $access_dt;?></td>
                                                                                                        <td>
                                                                                                            <div class="container2">
                                                                                                            <div class="skill html"> <?php echo $q_marks;?><div>
                                                                                                            </div>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                <?php
                                                                                
                                                                                                endforeach;
                                                                                                                
                                                                                            endforeach;
                                                                                            }
                                                                                if($selected=='G4' && $selected2=='S4'){
                                                   
                                                                                        $connection = mysqli_connect("localhost","root","","demo");
                                                                                        $query = "SELECT qid  FROM quizz  where gid='G4' AND sid='S4'  ";
                                                                                        $rows = mysqli_query($connection,$query);?>
                                                                                        <table style="margin-left: -40px;margin-top: 30px;" width="1200px" cellspacing="0">
                                                                                        <thead>
                                                                                        <th width="100">Student</th>
                                                                                        <th width="100">Name</th>
                                                                                        <th width="100">Login_Time</th>
                                                                                        <th width="100">Progress</th>
                                                                                        </thead>
                                                            
                                                                                        <tbody>
            
                                                                                            <?php
                                                                                            
                                                                                            foreach ($rows as $row) : 
                                                                                            $qid=$row['qid'];
                                                                                        // echo $row['gid'];
                                                                                                $query ="SELECT *  FROM marks  where  qid='$qid' " ;
                                                                                                $rows = mysqli_query($connection,$query);
                                                                                                    
                                                                                                foreach ($rows as $row) : 
                                                                                                $student_id=$row['student_id'];
                                                                                                $access_dt=$row['access_dt'];
                                                                                                $q_marks=$row['q_marks'];
                                                                                                // echo $row['qid'];
                                                                                                ?>
                                                                                                
                                                                                                <tr>
                                                                                                    <td><img src="img/Ellipse 30.png" alt=""></td>
                                                                                                        <td><a href="../t_student_profile3.php"><?php echo $student_id;?></a></td>
                                                                                                        <td><?php echo $access_dt;?></td>
                                                                                                        <td>
                                                                                                            <div class="container2">
                                                                                                            <div class="skill html"> <?php echo $q_marks;?><div>
                                                                                                            </div>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                <?php
                                                                                
                                                                                                endforeach;
                                                                                                                
                                                                                            endforeach;
                                                                                            }

                                                                                if($selected=='G4' && $selected2=='S5'){
                                                   
                                                                                        $connection = mysqli_connect("localhost","root","","demo");
                                                                                        $query = "SELECT qid  FROM quizz  where gid='G4' AND sid='S5'  ";
                                                                                        $rows = mysqli_query($connection,$query);?>
                                                                                        <table style="margin-left: -40px;margin-top: 30px;" width="1200px" cellspacing="0">
                                                                                        <thead>
                                                                                        <th width="100">Student</th>
                                                                                        <th width="100">Name</th>
                                                                                        <th width="100">Login_Time</th>
                                                                                        <th width="100">Progress</th>
                                                                                        </thead>
                                                            
                                                                                        <tbody>
            
                                                                                            <?php
                                                                                            
                                                                                            foreach ($rows as $row) : 
                                                                                            $qid=$row['qid'];
                                                                                        // echo $row['gid'];
                                                                                                $query ="SELECT *  FROM marks  where  qid='$qid' " ;
                                                                                                $rows = mysqli_query($connection,$query);
                                                                                                    
                                                                                                foreach ($rows as $row) : 
                                                                                                $student_id=$row['student_id'];
                                                                                                $access_dt=$row['access_dt'];
                                                                                                $q_marks=$row['q_marks'];
                                                                                                // echo $row['qid'];
                                                                                                ?>
                                                                                                
                                                                                                <tr>
                                                                                                    <td><img src="img/Ellipse 30.png" alt=""></td>
                                                                                                        <td><a href="../t_student_profile3.php"><?php echo $student_id;?></a></td>
                                                                                                        <td><?php echo $access_dt;?></td>
                                                                                                        <td>
                                                                                                            <div class="container2">
                                                                                                            <div class="skill html"> <?php echo $q_marks;?><div>
                                                                                                            </div>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                <?php
                                                                                
                                                                                                endforeach;
                                                                                                                
                                                                                            endforeach;
                                                                                            }
                                                                                            if($selected=='G5' && $selected2=='S1'){
                                                   
                                                                                                $connection = mysqli_connect("localhost","root","","demo");
                                                                                                $query = "SELECT qid  FROM quizz  where gid='G5' AND sid='S1'  ";
                                                                                                $rows = mysqli_query($connection,$query);?>
                                                                                                <table style="margin-left: -40px;margin-top: 30px;" width="1200px" cellspacing="0">
                                                                                                <thead>
                                                                                                <th width="100">Student</th>
                                                                                                <th width="100">Name</th>
                                                                                                <th width="100">Login_Time</th>
                                                                                                <th width="100">Progress</th>
                                                                                                </thead>
                                                                    
                                                                                                <tbody>
                    
                                                                                                    <?php
                                                                                                    
                                                                                                    foreach ($rows as $row) : 
                                                                                                    $qid=$row['qid'];
                                                                                                // echo $row['gid'];
                                                                                                        $query ="SELECT *  FROM marks  where  qid='$qid' " ;
                                                                                                        $rows = mysqli_query($connection,$query);
                                                                                                            
                                                                                                        foreach ($rows as $row) : 
                                                                                                        $student_id=$row['student_id'];
                                                                                                        $access_dt=$row['access_dt'];
                                                                                                        $q_marks=$row['q_marks'];
                                                                                                        // echo $row['qid'];
                                                                                                        ?>
                                                                                                        
                                                                                                        <tr>
                                                                                                            <td><img src="img/Ellipse 30.png" alt=""></td>
                                                                                                                <td><a href="../t_student_profile3.php"><?php echo $student_id;?></a></td>
                                                                                                                <td><?php echo $access_dt;?></td>
                                                                                                                <td>
                                                                                                                    <div class="container2">
                                                                                                                    <div class="skill html"> <?php echo $q_marks;?><div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        <?php
                                                                                        
                                                                                                        endforeach;
                                                                                                                        
                                                                                                    endforeach;
                                                                                                    }
                                                                                        if($selected=='G5' && $selected2=='S2'){
                                                           
                                                                                                $connection = mysqli_connect("localhost","root","","demo");
                                                                                                $query = "SELECT qid  FROM quizz  where gid='G5' AND sid='S2'  ";
                                                                                                $rows = mysqli_query($connection,$query);?>
                                                                                                <table style="margin-left: -40px;margin-top: 30px;" width="1200px" cellspacing="0">
                                                                                                <thead>
                                                                                                <th width="100">Student</th>
                                                                                                <th width="100">Name</th>
                                                                                                <th width="100">Login_Time</th>
                                                                                                <th width="100">Progress</th>
                                                                                                </thead>
                                                                    
                                                                                                <tbody>
                    
                                                                                                    <?php
                                                                                                    
                                                                                                    foreach ($rows as $row) : 
                                                                                                    $qid=$row['qid'];
                                                                                                // echo $row['gid'];
                                                                                                        $query ="SELECT *  FROM marks  where  qid='$qid' " ;
                                                                                                        $rows = mysqli_query($connection,$query);
                                                                                                            
                                                                                                        foreach ($rows as $row) : 
                                                                                                        $student_id=$row['student_id'];
                                                                                                        $access_dt=$row['access_dt'];
                                                                                                        $q_marks=$row['q_marks'];
                                                                                                        // echo $row['qid'];
                                                                                                        ?>
                                                                                                        
                                                                                                        <tr>
                                                                                                            <td><img src="img/Ellipse 30.png" alt=""></td>
                                                                                                                <td><a href="../t_student_profile3.php"><?php echo $student_id;?></a></td>
                                                                                                                <td><?php echo $access_dt;?></td>
                                                                                                                <td>
                                                                                                                    <div class="container2">
                                                                                                                    <div class="skill html"> <?php echo $q_marks;?><div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        <?php
                                                                                        
                                                                                                        endforeach;
                                                                                                                        
                                                                                                    endforeach;
                                                                                                    }
                                                                                        if($selected=='G5' && $selected2=='S3'){
                                                           
                                                                                                $connection = mysqli_connect("localhost","root","","demo");
                                                                                                $query = "SELECT qid  FROM quizz  where gid='G5' AND sid='S3'  ";
                                                                                                $rows = mysqli_query($connection,$query);?>
                                                                                                <table style="margin-left: -40px;margin-top: 30px;" width="1200px" cellspacing="0">
                                                                                                <thead>
                                                                                                <th width="100">Student</th>
                                                                                                <th width="100">Name</th>
                                                                                                <th width="100">Login_Time</th>
                                                                                                <th width="100">Progress</th>
                                                                                                </thead>
                                                                    
                                                                                                <tbody>
                    
                                                                                                    <?php
                                                                                                    
                                                                                                    foreach ($rows as $row) : 
                                                                                                    $qid=$row['qid'];
                                                                                                // echo $row['gid'];
                                                                                                        $query ="SELECT *  FROM marks  where  qid='$qid' " ;
                                                                                                        $rows = mysqli_query($connection,$query);
                                                                                                            
                                                                                                        foreach ($rows as $row) : 
                                                                                                        $student_id=$row['student_id'];
                                                                                                        $access_dt=$row['access_dt'];
                                                                                                        $q_marks=$row['q_marks'];
                                                                                                        // echo $row['qid'];
                                                                                                        ?>
                                                                                                        
                                                                                                        <tr>
                                                                                                            <td><img src="img/Ellipse 30.png" alt=""></td>
                                                                                                                <td><a href="../t_student_profile3.php"><?php echo $student_id;?></a></td>
                                                                                                                <td><?php echo $access_dt;?></td>
                                                                                                                <td>
                                                                                                                    <div class="container2">
                                                                                                                    <div class="skill html"> <?php echo $q_marks;?><div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        <?php
                                                                                        
                                                                                                        endforeach;
                                                                                                                        
                                                                                                    endforeach;
                                                                                                    }
                                                                                        if($selected=='G5' && $selected2=='S4'){
                                                           
                                                                                                $connection = mysqli_connect("localhost","root","","demo");
                                                                                                $query = "SELECT qid  FROM quizz  where gid='G5' AND sid='S4'  ";
                                                                                                $rows = mysqli_query($connection,$query);?>
                                                                                                <table style="margin-left: -40px;margin-top: 30px;" width="1200px" cellspacing="0">
                                                                                                <thead>
                                                                                                <th width="100">Student</th>
                                                                                                <th width="100">Name</th>
                                                                                                <th width="100">Login_Time</th>
                                                                                                <th width="100">Progress</th>
                                                                                                </thead>
                                                                    
                                                                                                <tbody>
                    
                                                                                                    <?php
                                                                                                    
                                                                                                    foreach ($rows as $row) : 
                                                                                                    $qid=$row['qid'];
                                                                                                // echo $row['gid'];
                                                                                                        $query ="SELECT *  FROM marks  where  qid='$qid' " ;
                                                                                                        $rows = mysqli_query($connection,$query);
                                                                                                            
                                                                                                        foreach ($rows as $row) : 
                                                                                                        $student_id=$row['student_id'];
                                                                                                        $access_dt=$row['access_dt'];
                                                                                                        $q_marks=$row['q_marks'];
                                                                                                        // echo $row['qid'];
                                                                                                        ?>
                                                                                                        
                                                                                                        <tr>
                                                                                                            <td><img src="img/Ellipse 30.png" alt=""></td>
                                                                                                                <td><a href="../t_student_profile3.php"><?php echo $student_id;?></a></td>
                                                                                                                <td><?php echo $access_dt;?></td>
                                                                                                                <td>
                                                                                                                    <div class="container2">
                                                                                                                    <div class="skill html"> <?php echo $q_marks;?><div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        <?php
                                                                                        
                                                                                                        endforeach;
                                                                                                                        
                                                                                                    endforeach;
                                                                                                    }
        
                                                                                        if($selected=='G5' && $selected2=='S5'){
                                                           
                                                                                                $connection = mysqli_connect("localhost","root","","demo");
                                                                                                $query = "SELECT qid  FROM quizz  where gid='G5' AND sid='S5'  ";
                                                                                                $rows = mysqli_query($connection,$query);?>
                                                                                                <table style="margin-left: -40px;margin-top: 30px;" width="1200px" cellspacing="0">
                                                                                                <thead>
                                                                                                <th width="100">Student</th>
                                                                                                <th width="100">Name</th>
                                                                                                <th width="100">Login_Time</th>
                                                                                                <th width="100">Progress</th>
                                                                                                </thead>
                                                                    
                                                                                                <tbody>
                    
                                                                                                    <?php
                                                                                                    
                                                                                                    foreach ($rows as $row) : 
                                                                                                    $qid=$row['qid'];
                                                                                                // echo $row['gid'];
                                                                                                        $query ="SELECT *  FROM marks  where  qid='$qid' " ;
                                                                                                        $rows = mysqli_query($connection,$query);
                                                                                                            
                                                                                                        foreach ($rows as $row) : 
                                                                                                        $student_id=$row['student_id'];
                                                                                                        $access_dt=$row['access_dt'];
                                                                                                        $q_marks=$row['q_marks'];
                                                                                                        // echo $row['qid'];
                                                                                                        ?>
                                                                                                        
                                                                                                        <tr>
                                                                                                            <td><img src="img/Ellipse 30.png" alt=""></td>
                                                                                                                <td><a href="../t_student_profile3.php"><?php echo $student_id;?></a></td>
                                                                                                                <td><?php echo $access_dt;?></td>
                                                                                                                <td>
                                                                                                                    <div class="container2">
                                                                                                                    <div class="skill html"> <?php echo $q_marks;?><div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        <?php
                                                                                        
                                                                                                        endforeach;
                                                                                                                        
                                                                                                    endforeach;
                                                                                                    }
                                                    
                                                                
                                                                


    








                                                            }


                                                            }
                                                            } else {
                                                            echo 'Please select the value.';
                                                            }
                                                            
                                                        ?>
                                                        <p>
                                                    
                                </tbody>
                                </table>
                                
                        </div>
                   
                </div>
                    
                
                
            </main>

                
            </div>
        <label for="sidebar-toggle" class="body-label"></label>
        <script type="text/javascript" src="./discussion.js"></script>
        
            
        
</body>
</html>