<?php
session_start();
  
if(!$_SESSION['id']){
    header('location:../../login.php');
}

$connection =mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'demo');


$query="SELECT * FROM teacher where teacher_id=$_SESSION[id]";
$query_run = mysqli_query($connection,$query);
echo $_SESSION['id'];

if($result = mysqli_query($connection,$query)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
          
                $NIC= $row['NIC'] ;
                $mobile   =  $row['mobile'] ;
               
        }}}

$query="SELECT * FROM teacher_qualification where teacher_id=$_SESSION[id]";
$query_run = mysqli_query($connection,$query);

if($result = mysqli_query($connection,$query)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
          
                $qualification= $row['qualification'] ;
                // $mobile   =  $row['mobile'] ;
               
        }}}

$query="SELECT login_time FROM login where user_id=$_SESSION[id] ORDER BY login_time DESC LIMIT 1 ";
$query_run = mysqli_query($connection,$query);

if($result = mysqli_query($connection,$query)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            
                $login_time= $row['login_time'] ;
                // $mobile   =  $row['mobile'] ;
                
        }}}

$query="SELECT created_at FROM members where id=$_SESSION[id]  ";
$query_run = mysqli_query($connection,$query);

if($result = mysqli_query($connection,$query)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            
                $created_at= $row['created_at'] ;
                // $mobile   =  $row['mobile'] ;
                
        }}}

if($query_run){
    // echo '<script type="text/javascript"> alert("Data Updated")</script>';
  }
  else{
    // echo '<script type="text/javascript"> alert("Data not Updated")</script>';
  }


  $sql= "SELECT name FROM images where  member_id=$_SESSION[id] ";
        $query_run = mysqli_query($connection, $sql);
            if($result = mysqli_query($connection,$sql)){
                     if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_array($result)){
                                $image = $row['name'];
                                $image_src = "upload/".$image;
                    

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
    <title>TeacherProfile</title>
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
                <img src="../teacher_images/logo.png" width="50px" alt="">

                <div class="brand-icons">
                    <span class=""></span>
                    <span class=" las la-bell"></span>
                </div>
            </div>
        </div>

        <div class="sidebar-main">
            <div class="sidebar-user">
            <a href="teacher_profile.php"> <img src="../teacher_images/unreg_teacher-removebg-preview.png" ></a>
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
                <li><a href="../teacher_terms.html">
                <span class="las la-tachometer-alt"></span>Rules and Regulations
            </a></li>

            <li><a href="./teacher_syllabus _notregistered.php">
                <span class="las la-book"></span>Syallabus 
            </a></li>

            <li><a href=""><span class="las la-users"></span>Profile</a></li>

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
                    
                       
                           <img id="teacherprofile" src="../teacher_images/unreg_teacher-removebg-preview.png">
                           <p id="p1"><?php echo ucfirst($_SESSION['first_name']); ?>&nbsp;<?php echo ucfirst($_SESSION['last_name']); ?></p>
                           <!-- <p id="p2">Teaher in Royal College</p> -->
                          <a href="#"><p id="p3"><?php echo ($_SESSION['email']); ?></p></a> 

                        
                    </div>
                 
                    <div class="header-actions">
                        <a href="./teacher_editprofile.php" class="hbtn hb-fill-right-rev-bg-br"><span class="las la-tools"></span>Edit Profile</a>

                    </div>
                  
                </div>
                
                <div class="container">
                    <div class="main1">
                        <div class="gr1">
                            <p id="userdetails">User Details</p><br><br>
                            <p id="useremailaddress">User Email Address</p>
                            <a href="#"><p id="email"><?php echo ($_SESSION['email']); ?></p></a><br><br>
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
                            <a href="#">Bachelor of science early childhood development</a><br>
                            <hr>
                            <a href="#">Master of Online MS in Education</a><br>
                            <hr>
                            <a href="#">Master of Administrative side in Education</a><br>
                            <hr>
                            <a href="#">Bachelor of Arts in Education</a><br>
                            <hr>
                            <a href="#">Bachelor of Science Collaborative</a><br>
                            <hr>
                            
                        </div>
                    </div>

                    <div class="main2">
                        <div class="gr3">
                            <p id="coursedetails">Qualification Pdf</p><br><br>
                            <?php 
                                $q="SELECT * FROM teacher_qualification_pdf WHERE teacher_id=$_SESSION[id] ";
                                $query_run=mysqli_query($connection,$q);
                            if(mysqli_num_rows($query_run) > 0)
                                            {
                                            while($row = mysqli_fetch_assoc($query_run))
                                            {
                                    
                                            echo "<br>";
                                        ?>
                             <a href="../teacher_unregistered/upload/<?php echo $row['proof_name'];?>" target="blank" >
                            <?php echo $row['proof_name']; ?>   
                            </a>  
                            
                            <?php $delete_stud_id= $row['proof_name']; ?>

                             <form action='./teacher_deletefile.php' method='POST'>
                        
                                             <input type="hidden" name="delete_stud_id"  value="<?php echo $delete_stud_id; ?>" class="form_control">
                                      
                                    
                                                <button style="margin-left: 200px;margin-top:-60px;"  type="submit" name="stud_delete_btn" class="btn btn-primary" name='del'>Delete</button>
                                  
                                        </form>
                                        <?php
                                        }}
                                        ?>
                             <p id="coursedetails">Grades</p><br><br>
                             <?php
                              $query = "SELECT gid,sid FROM teacher_grade_subject where teacher_id=$_SESSION[id]  ";
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

                            
                                echo $grade;
                                
                                print "<br>";
                                 
                              endforeach;
                           
                            ?>
                                        
                                  
                            
                            
                        </div>

                        <!-- <div class="gr4">
                            <p id="loginactivities">Login Activities</p><br><br>
                            <p id="First">First access to the site  :-<?php echo "$created_at" ?></p><br>
                            <p id="Last">Last access to the site:-<?php echo "$login_time" ?></p>
                        </div> -->
                    </div>

                    
                </div>
                
            </main>

                
            </div>
        <label for="sidebar-toggle" class="body-label"></label>

        
            
        
</body>
</html>