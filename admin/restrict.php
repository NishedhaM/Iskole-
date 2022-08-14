<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'demo');
date_default_timezone_set('Asia/Colombo');
$date=date('Y-m-d H:i:s');
if(isset($_POST['restrict_btn']))
{
    $id = $_POST['restrict_id'];

    $query = "UPDATE members SET status = 'restrict'  , restricted_date='$date' WHERE id = $id";

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
        header('Location: ./admin_analytics/registered_list.php');

    }
}
?>
