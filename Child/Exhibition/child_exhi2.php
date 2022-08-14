<?php


session_start();

if(!$_SESSION['id']){
    header('location:../../login.php');
}
require 'connection.php';
	date_default_timezone_set('Asia/Manila');
	require_once 'connection.php';
	
	if(ISSET($_POST['save'])){
		$file_name = $_FILES['video']['name'];
		$file_temp = $_FILES['video']['tmp_name'];
		$file_size = $_FILES['video']['size'];
		
		if($file_size < 50000000){
			$file = explode('.', $file_name);
			$end = end($file);
			$allowed_ext = array('avi', 'flv', 'wmv', 'mov', 'mp4');
			if(in_array($end, $allowed_ext)){
				$name = date("Ymd").time();
				$location = 'video/'.$name.".".$end;
				if(move_uploaded_file($file_temp, $location)){
					mysqli_query($conn, "INSERT INTO `video_2` VALUES('', '$name', '$location', '$_SESSION[id]')");
					echo "<script>alert('Video Uploaded')</script>";
					echo "<script>window.location = 'child_exhi4.php'</script>";
				}
			}else{
				echo "<script>alert('Wrong video format')</script>";
				echo "<script>window.location = 'child_exhi4.php'</script>";
			}
		}else{
			echo "<script>alert('File too large to upload')</script>";
			echo "<script>window.location = 'child_exhi4.php'</script>";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="child_exhi2.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <title>Video Upload</title>
</head>
<body>
<div class="nav-container">
      <div class="logo">
        <img src="../images/logo.jpg" align="right" height="80px" width="80px" >
    </div> 
    <a href="child_view_gallery.php"> <button class="btn1"><img src="../images/back.png" height="80px" width="60px">  </button></a>
	
       <br>  <br>  <br>  
		
			<form action="child_exhi2.php" method="POST" enctype="multipart/form-data">
				
								<h1>Upload Your Videos</h1>
								<br>
								
				
								<div class="design">
								<img src="images/bow.png" class="img" height=150px width=350px>
								<label for="image" class="label">Select Your Video : </label>
								<input type="file" name="video" class="form-control-file"/>
							
								
					
					
					<br><br><br><br>
						<!-- <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button> -->
						<button name="save" class="button"><span class="glyphicon glyphicon-save"></span> Save</button>
                        <!-- <a href="child_view_gallery.php"><button name="gallery" class="button1"></span> View My Gallery</button></a> -->
						</div>
			</form>
			<a href="child_view_gallery.php"> <button class="btn2" height="80px" width="60px"> View My Gallery </button></a>
           
	
	
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>