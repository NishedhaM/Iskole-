<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'demo');

if(isset($_POST['accept_btn']))
{
    $id = $_POST['accept_id'];

    $query1 = "UPDATE teacher_grade_subject SET status = 'accepted' WHERE teacher_id = $id";
    $query_run = mysqli_query($connection, $query1);

    $query = "UPDATE members SET status = 'accepted' WHERE id = $id AND type = 'teacher'";

    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Teacher is Accepted";
        $_SESSION['status_code'] = "success";
        header('Location:./admin_analytics/registered_list.php');

    }
    else
    {
        $_SESSION['status'] = "Connection failed";
        $_SESSION['status_code'] = "error";
        header('Location: ./admin_analytics/pending_list.php');

    }
}
?>
