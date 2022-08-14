<?php
    session_start();

    if(!$_SESSION['id']){
        header('location:../../login.php');
    }



    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,'demo');

    

    if(isset($_POST['s_button'])){
        $date = date('Y-m-d');
        $comment=trim($_POST['t_comment']);
        $d_id=trim($_POST['s_button']);

       $q = " INSERT INTO `comments` ( `d_id`,`teacher_id` ,`gid`, `comment`, `date`, `commenter_id`) VALUES ('$d_id', '63', 'G1', '$comment', '$date',  $_SESSION[id]);";
         $query_run = mysqli_query($connection,$q);  
         echo '<script>showAlert();window.setTimeout(function () {HideAlert();},3000);</script>';  echo "<meta http-equiv='refresh' content='0;url=child_discussion.php'>";  
 
    }

?>