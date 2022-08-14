<?php
   session_start();

   if(!$_SESSION['id']){
       header('location:teacher_login.php');
   }

   $connection = mysqli_connect("localhost","root","");
   $db = mysqli_select_db($connection,'demo');
  //  echo ($_SESSION['id']);

  if(isset($_POST['grade_id'])){
    $grade_id = $_POST['grade_id'];
    echo $grade_id;
  }
  



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="quiz.css"/>
    <title>Quiz3</title>
</head>
<body>
 

    
</body>
</html>