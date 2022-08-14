<?php
    session_start();
    include_once "config.php";
    $outgoing_id = $_SESSION['id'];
    $sql = "SELECT * FROM members WHERE NOT id = {$outgoing_id} AND status='accepted 'ORDER BY id DESC";
    $query = mysqli_query($conn, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= "No users are available to chat";
    }elseif(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }
    echo $output;
?>
