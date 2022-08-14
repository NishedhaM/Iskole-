<?php
session_start();
$status="";

if(!$_SESSION['id']){
    header('location:../login.php');

}

    include('db.php');
    date_default_timezone_set('Asia/Colombo');
    $date=date('Y-m-d H:i:s');
    $next = date('Y-m-d H:i:s', strtotime("+30 days"));
    // echo $next;

    $connection = mysqli_connect("localhost","root","","demo");
    $query="INSERT INTO `payment`(`student_id`) VALUES ('$_SESSION[id]')";
    $query_run = mysqli_query($connection,$query);


    $sql= "SELECT payment_id FROM payment where  student_id=$_SESSION[id] ORDER BY student_id DESC ";
    $query_run = mysqli_query($connection, $sql);
    		if($result = mysqli_query($connection,$sql)){
    						 if(mysqli_num_rows($result) > 0){
    										while($row = mysqli_fetch_array($result)){
    												$id = $row['payment_id'];



    												}
    							}
    		}
        foreach ($_SESSION["shopping_cart"] as $product){
          $gid=$product["gid"];
          $sql= "INSERT INTO `paid_items`(`payment_id`,`student_id`,`gid`,`valid_from`,`valid_till`) VALUES ($id,'$_SESSION[id]','$gid','$date','$next')";
          $query_run = mysqli_query($connection, $sql);

          
          }
        	//$gid=$product["gid"];
        ?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <<link rel="stylesheet" href="payment.css">
</head>

    <body>
    <a href="../child_dashboard.php">
        <button class="btn1"><img src="../images/back.png" height="80px" width="60px"></button>
      
      </a>
     <h1>Your Payment is succesfully added.</h1>    </body>
</html>
