<?php
session_start();
  
if(!$_SESSION['id']){
    header('location:../../login.php');
}

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'demo');



if(isset($_POST['update'])){
    $date = date('Y-m-d H:i:s');
    $query = "UPDATE teacher SET NIC='$_POST[NIC]', mobile='$_POST[mobile]' where teacher_id = '$_SESSION[id]'";
    // $query = "UPDATE members SET first_name='$_POST[first_name]', last_name='$_POST[last_name]' where email='$_POST[email]'";
    
    $query_run = mysqli_query($connection,$query);

    if( $query_run){
        echo '<script> alert("Your Profile Updated")</script>';

    }else{
        echo '<script> alert("Profile Not Updated")</script>';

    }
    if( $query_run){
      $_SESSION['status'] = "Profile is Updated";
      $_SESSION['status_code'] = "success";
      header('Location:./teacher_editprofile_stream.php');

    }else{
        echo '<script> alert("Profile Not Updated")</script>';

    }
}


if(isset($_POST['update'])){
  $date = date('Y-m-d H:i:s');
  $qualification_new=$_POST['qualification'];
  $query = "UPDATE teacher_qualification SET qualification='$_POST[qualification]' where teacher_id = '$_SESSION[id]'";
  // $query = "UPDATE members SET first_name='$_POST[first_name]', last_name='$_POST[last_name]' where email='$_POST[email]'";
  
  $query_run = mysqli_query($connection,$query);

  if( $query_run){
      echo '<script> alert("Your Profile is Updated")</script>';

  }else{
      echo '<script> alert("Your Profile is not Updated ")</script>';

  }
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
    <title>Edit Profile</title>
    <link rel="stylesheet" href="teacher_editprofile.css">
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
                <img src="teacher_images/logo.png" width="50px" alt="">

                <div class="brand-icons">
                    <!-- <span class="las la-bell"></span> -->
                    <a href="./teacher_editprofile.php"><span class="las la-bell"></span></a>
                </div>
            </div>
        </div>

        <div class="sidebar-main">
            <div class="sidebar-user">
                <a href="./teacher_editprofile.php"><img src="../teacher_images/unreg_teacher-removebg-preview.png"  alt="">
                 <div>
                <h3><?php echo ucfirst($_SESSION['first_name']); ?>&nbsp;<?php echo ucfirst($_SESSION['last_name']); ?></h3>
                <span><?php echo ucfirst($_SESSION['email']); ?></span>
            </div>
         </div>

         <div class="sidebar-menu">
               
          <ul>
           
            <li><a href="../teacher_terms.html">
                <span class="las la-tachometer-alt"></span>Rules and Regulations
            </a></li>

            <li><a href="./teacher_syllabus _notregistered.php">
                <span class="las la-book"></span>Syallabus 
            </a></li>

            <li><a href="../teacher_unregistered/teacher_profile_unregistered.php"><span class="las la-users"></span>Profile</a></li>

           
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

                 

                    <div style="margin-left: 100px;" class="dpandname">

                           <h1 style="margin-top: 40px;margin-left:360px;font-size:40px;" id="p1" id="p1"><?php echo ucfirst($_SESSION['first_name']); ?>&nbsp;<?php echo ucfirst($_SESSION['last_name']); ?></h1>
                           <h2 style="margin-top: 0px;margin-left:390px;"> <?php echo ucfirst($_SESSION['email']); ?> </h2>
                        
                        
                    </div>
                 
                    <!-- <div class="header-actions">
                        <a href="#" class="hbtn hb-fill-right-rev-bg-br"><span class="las la-tools"></span>Edit Profile</a>

                    </div>
                   -->
                </div>
                
                <div  style="background-color: #f2f2f2;margin-left:0px;height:auto " class="container ">
                   <div style="height:auto;margin-left:70px" class="formdiv">
                    <form action="" method="POST">
                    
                        <div class="row">
                          <div class="col-25">
                            <label for="fname">First Name</label>
                          </div>
                          <div class="col-75">
                            <input type="text" id="first_name" name="first_name" placeholder="<?php echo ucfirst($_SESSION['first_name']); ?>" disabled>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-25">
                            <label for="lname">Last Name</label>
                          </div>
                          <div class="col-75">
                            <input type="text" id="last_name" name="last_name" placeholder="<?php echo ucfirst($_SESSION['last_name']); ?>" disabled>
                          </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label for="lname">Email Address</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="email" name="email"placeholder="<?php echo ucfirst($_SESSION['email']); ?>" disabled>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-25">
                              <label for="lname">NIC</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="NIC" name="NIC" placeholder="Your NIC number">
                            </div>
                          </div>

                        <div class="row">
                          <div class="col-25">
                            <label for="lname">Phone Number</label>
                          </div>
                          <div class="col-75">
                            <input type="tel" id="mobile" name="mobile" 
                            pattern="[0-9]{10}">

                          </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label for="subject">Qualifications</label>
                            </div>
                            <div class="col-75">
                              <textarea id="qualification" name="qualification" placeholder="Qualifications.." style="height:400px"></textarea>
                              <!-- <a href="../teacher_unregistered/teacher_upload/upload.php" id="upload" >Upload qualifications</a> -->
                            </div>
                          </div> 
                            <form action="./teacher_editprofile_stream.php">
                            <div class="buttons2">
                            <input type="hidden" name="qualification_id" value="<?php echo $qualification_new; ?>">
                            <input type="submit" name="update" value="update Profile">
                            
                              <input type="submit1" value="Cancel">
                            </div>                       
                            </form>
                            
                       </table>
                          </div>
                        </div> 
                    
                        
                       
                      </form>
                   </div>
                    
                </div>
                
            </main>

                
            </div>
        <label for="sidebar-toggle" class="body-label"></label>

        
            
        
</body>
</html>