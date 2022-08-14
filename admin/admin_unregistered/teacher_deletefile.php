<?php
    session_start();

    

    $conn =mysqli_connect("localhost","root","","demo");
   
    if(isset($_POST['stud_delete_btn'])){
        echo $_POST['delete_stud_id'];
        $id=$_POST['delete_stud_id'];
        $q="DELETE FROM teacher_qualification_pdf WHERE proof_name='$id' ";
        echo $_POST['delete_stud_id'];
        $query=mysqli_query($conn,$q);
        echo $_POST['delete_stud_id'];
        if($query){
            $_SESSION['status']="";
            echo $_POST['delete_stud_id'];
            header("Location:teacher_profile_unregistered.php");
            //echo "HI";
        }
        else{
            $_SESSION['status']="";
            echo $_POST['delete_stud_id'];
            header("Location:teacher_profile_unregistered.php");
            //echo "bye";
        }
       
     
    }
   // $file = 'upload/' .$name;
   
    if(isset($_POST['stud_delete_btn'])){
        $id=$_POST['delete_stud_id'];
        echo $_POST['delete_stud_id'];

     $path='./upload/' .$id;
     if(!unlink($path)) {
         echo "You have an error!";
     }
     else{
         header ("Location:teacher_profile_unregistered.php");
       
     }
    }
    


?>