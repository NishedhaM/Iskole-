<?php include "connection.php"; ?>

<?php
session_start();

if(!$_SESSION['id']){
    header('location:../../login.php');
}

$ID= $_POST["fname"];
$sql = "SELECT like_count FROM video_2 WHERE video_id=$ID";
$res = mysqli_query($conn,  $sql);
if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_assoc($res)) {
        $count=$row['like_count']+1;
    
       
                }
        }
 echo $count;   
    
 echo '12';
 $sql2="INSERT INTO `cheer1` (`creation_id`, `id`) VALUES ($ID, $_SESSION[id])";
 $res2 = mysqli_query($conn,  $sql2);
$sql1 = "UPDATE video_2 SET like_count=$count WHERE video_id=$ID";
$res1 = mysqli_query($conn,  $sql1);

// $sql2="INSERT INTO cheer1 (creation_id,id) VALUES ($ID,$_SESSION[id]";

 


?>