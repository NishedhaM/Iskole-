<?php   
 include 'connection.php';  
 if (isset($_GET['id'])) {  
      $id = $_GET['id'];  
      $query = "DELETE FROM `tb_upload` WHERE id = '$id'";  
      $run = mysqli_query($conn,$query);  
      if ($run) {  
           header('location:child_view_gallery.php');  
      }else{  
           echo "Error: ".mysqli_error($conn);  
      }  
 }  

 if (isset($_GET['video_id'])) {  
     $id = $_GET['video_id'];  
     $query = "DELETE FROM `video_2` WHERE id = '$id'";  
     $run = mysqli_query($conn,$query);  
     if ($run) {  
          header('location:child_view_gallery.php');  
     }else{  
          echo "Error: ".mysqli_error($conn);  
     }  
} 
 ?>