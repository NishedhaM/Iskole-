<?php
    session_start();

    

    $conn =mysqli_connect("localhost","root","","demo");
   
    if(isset($_POST['stud_delete_btn'])){
        // echo $_POST['delete_stud_id'];
        $id=$_POST['delete_stud_id'];
        $q="DELETE FROM video WHERE name='$id' ";
        // echo $_POST['delete_stud_id'];
        $query=mysqli_query($conn,$q);
        // echo $_POST['delete_stud_id'];
        if($query){
            $_SESSION['status']="";
            echo $_POST['delete_stud_id'];
            header("Location:teacher_subjects\mathematics\grade1\subjectindex.php");
            //echo "HI";
        }
        else{
            $_SESSION['status']="";
            echo $_POST['delete_stud_id'];
            header("Location:teacher_subjects\mathematics\grade1\subjectindex.php");
            //echo "bye";
        }
       
     
    }
   // $file = 'upload/' .$name;
   
   $path="teacher_upload/upload/";
   $path2="../child/english/upload/";
   $path3="../admin/admin_upload/upload/";


   function deleteFile($filename) {
      if (file_exists($filename)) {
       unlink($filename);
       echo 'File '.$filename.' has been deleted';
       header ("Location:teacher_subjects\mathematics\grade1\subjectindex.php?deletesuccess");
     
      } else {
       echo 'Could not delete '.$filename.', file does not exist';
      }
     }
     
     if(isset($_POST['stud_delete_btn'])){
      $id=$_POST['delete_stud_id'];
      deleteFile($path.$id);
      deleteFile($path2.$id);
      deleteFile($path3.$id);
     }



?>