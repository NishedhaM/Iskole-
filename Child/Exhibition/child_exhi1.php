 <?php

session_start();

if(!$_SESSION['id']){
    header('location:../../login.php');
}
require 'connection.php';
if(isset($_POST['submit'])){
 

  $file_name=$_FILES['file']['name'];
  $file_type=$_FILES['file']['type'];
  $temp_name=$_FILES['file']['tmp_name'];
  $file_size=$_FILES['file']['size'];
  $file_destination="uploads/" .$file_name;
  
$name1=$_POST['name'];
  
// $path = "E:\work\CM\myppt.ppt";
  $file = new SplFileInfo($file_destination);
  $extension  = $file->getExtension();
 // echo("The extension is: $extension.");  
 
  




  if(move_uploaded_file($temp_name,$file_destination)){
      
      $q="INSERT INTO tb_upload(name,image,uploader_id) VALUES ('$name1','$file_name','$_SESSION[id]')";

      // $query = " INSERT INTO `material` (`sid`, `gid`, `uid`, `teacher_id`, `uploaded_date`) VALUES ('S1', 'G1', 'U1', $_SESSION[id], '$date');";
      // $query_run = mysqli_query($conn,$query);
      // $q="INSERT INTO 'items'(name,content_type) VALUES ('$file_name','$_POST[content_type]')";
      // $query_run = mysqli_query($conn,$q);


      if(mysqli_query($conn,$q)){
          $success="\n\n\ncontent uploaded successfully";
          echo '<script> alert("Completed")</script>';
      }
      else{
          $failed="Something went wrong";
          echo '<script> alert("Completed")</script>';

      }
  }
  else{
      $msz = "\n\n\n please select a video to upload";
  }
}






?>  
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="child_exhi1.css">
    <title>Upload Image File</title>
  </head>
  <body>

    <div class="nav-container">
      <div class="logo">
        <img src="../images/logo.jpg" align="right" height="80px" width="80px" >
    </div> 
    <a href="../child_dashboard.php"> <button class="btn1"><img src="../images/back.png" height="80px" width="60px">  </button></a>
     
           
       <br>  <br>  <br>  
      
     
        <h1 class="title" align="center"> Upload Your Creations</h1>
              
             
       
      <input type="file" name="file" class="form-control">
                                <!-- <input type="radio" name="content_type" value="Pdf"/>PDF
                                <input type="radio" name="content_type" value="Video"/>Video
                                <input type="radio" name="content_type" value="PPT"/>PPT -->

                                
                                

                            </div>
                            <!-- <label for="name" class="label">Write the Caption : </label> -->
      <input type="file" name="name" class="form-control" required value="">
      <!-- <img src="images/60.gif" height="140px" width="140px" class="img" > -->
      
      <br>
  
      <!-- <label for="image" class="label">Select Your Creation : </label> -->
      <input type="file" name="image"  accept=".jpg, .jpeg, .png" value="">
    
  
      <!-- <label for="image" class="label">Select Your Creation : </label>
      <input type="file" name="image"  accept=".jpg, .jpeg, .png" value=""> -->
     
     
      

                        <?php if(isset($success)){?>
                        <div class="alert alert-success">
                        <?php echo $success;?>
                        </div>
                        <?php }?>
                        <?php if(isset($failed)) {?>
                        <div class="alert alert-danger">
                                <?php echo $failed;?>
                        </div>
                        <?php }?>
                        

                        <?php if(isset($msz)){
                            ?>
                            <div class="alert alert-danger">
                                <?php echo $msz;?>
                            </div>


                        <?php } ?>

      <button type = "submit" name = "submit" class="button">Submit</button><br><br>
      
      <div class="bird">
        <!-- <img src="images/but2.gif" height="90px" width="90px" class="img" > -->
      </div>
      
    </form>
    <br>
   
  </body>
</html>
</body>
</html>
