<?php
    session_start();
    if(isset($_SESSION['id'])){
        include_once "config.php";
        $logout_id = mysqli_real_escape_string($conn, $_GET['logout_id']);
        if(isset($logout_id)){
            $c_status = "Offline now";
            $sql = mysqli_query($conn, "UPDATE members SET c_status = '{$c_status}' WHERE id={$_GET['logout_id']}");
            if($sql){
                session_unset();
                session_destroy();
                header("location: ../../teacher_dashboard.php");
            }
        }else{
            header("location: ../users.php");
        }
    }else{
        header("location: ../../teacher_dashboard.php");
    }
?>
