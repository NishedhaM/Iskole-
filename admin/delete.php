<?php
session_start();
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'demo');
date_default_timezone_set('Asia/Colombo');
$date=date('Y-m-d H:i:s');
//echo $date;
if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query1="UPDATE members SET status = 'deleted' WHERE id = $id AND type = 'teacher'";
    $query_run1 = mysqli_query($connection, $query1);
    $query = "DELETE FROM teacher_grade_subject WHERE teacher_id=$id";

    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Teacher is Accepted";
        $_SESSION['status_code'] = "success";
        header('Location:./admin_dashboard.php');

    }
    else
    {
        $_SESSION['status'] = "Connection failed";
        $_SESSION['status_code'] = "error";
        header('Location: ./admin_analytics/restrict_list.php');

    }
}
?>
