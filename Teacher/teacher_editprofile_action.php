<?php
    session_start();

    if(!$_SESSION['id']){
        header('location:../login.php');
    }

 $connection = mysqli_connect("localhost","root","");
 $db = mysqli_select_db($connection,'demo');

if(isset($_POST['but_upload'])){
 
    $name = $_FILES['file']['name'];
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
  
    // Select file type
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  
    // Valid file extensions
    $extensions_arr = array("jpg","jpeg","png","gif");


  
    // Check extension
    if( in_array($imageFileType,$extensions_arr) ){
       // Upload file
       if(move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name)){
          // Insert record
          // $query = "INSERT INTO members(img) values('".$name."') where id='105'";

          // $sql = "select name from images where id='$_SESSION[id]'";

            $sql="SELECT name FROM images where member_id='$_SESSION[id]'";
            $result = mysqli_query($connection,$sql);
            //$row = mysqli_fetch_array($result);

            
            if(mysqli_num_rows($result) > 0){
               $query = "UPDATE images SET  name='".$name."' where member_id = '$_SESSION[id]'";
               mysqli_query($connection,$query);
               echo '<script>showAlert();window.setTimeout(function () {HideAlert();},3000);</script>';  echo "<meta http-equiv='refresh' content='0;url=teacher_editprofile.php'>";  
           
            }
            else{
               echo "$_SESSION[id]";
               $query = "INSERT INTO images (name,member_id) VALUES ('".$name."','$_SESSION[id]')  ";
               // echo "$_SESSION[id]";
             mysqli_query($connection,$query);
             echo '<script>showAlert();window.setTimeout(function () {HideAlert();},3000);</script>';  echo "<meta http-equiv='refresh' content='0;url=teacher_editprofile.php'>";  


            }





         
       }
  
    }



   
  }



?>