<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="child_quiz3.css"/>
    <title>Quiz3</title>
</head>
<body>
  <br><br>
<a href="child_quiz2.php">
    <button class="btn1"><img src="images/back.png" height="80px" width="60px">  </button></a>
     
<div class="logo">
      <img src="images/logo.jpg" align="right" height="80px" width="80px" >
  </div> 
<div class="icon-bar">
      <a class="active" href="child_dashboard.php"><img src="images/home.png" height="30px" width="30px"/></a> 
      <a href="child_profile.php"><img src="images/profile1.png" height="30px" width="30px"/></a> 
      <a href="child>discussion.php"><img src="images/notifications.png" height="30px" width="30px"/></a> 
             
            </div> 
  <div class="nav-container">
  <h1 class="title" align="center">Quiz</h1> 
    
  
          <nav>

          <br><br><br>
     
            <a href="child_leaderboard.php"> <button class="btn2" height="80px" width="60px"> Display Leaderboard </button></a>
          </nav>
    
      
     
  
    <nav>
       
     
      
      
  </nav>
  </div>

  <?php require 'dbconfig.php';
session_start(); 

if(!$_SESSION['id']){
  header('location:../../login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="child_quiz3.css"/>
    <title>Quiz1</title>
</head>





<?php 
$qid='Q4';															
					if (isset($_POST['click']) || isset($_GET['start'])) {
					@$_SESSION['clicks'] += 1 ;
						$c = $_SESSION['clicks'];
						if(isset($_POST['userans'])) { $userselected = $_POST['userans'];
						$fetchqry2 = "UPDATE `question` SET `userans`='$userselected' WHERE `qqid`=$c-1 AND qid='$qid'"; 
						$result2 = mysqli_query($con,$fetchqry2);
						}
		  } else {
						$_SESSION['clicks'] = 0;
			}
																
	?>

<div class="table-design">
<div class="bump"><br><form><?php if($_SESSION['clicks']==0){ ?> 
<button class="button" name="start" float="left"><span>START QUIZ</span></button> <?php } ?></form></div>
<form action="" method="post">  				
<table><?php if(isset($c)) {   $fetchqry = "SELECT * FROM `question` where qqid='$c' AND qid='$qid'"; 
				$result=mysqli_query($con,$fetchqry);
				$num=mysqli_num_rows($result);
				$row = mysqli_fetch_array($result,MYSQLI_ASSOC); }
		  ?>
<tr><td><h3><br><?php echo @$row['q_desc'];?></h3><br><br></td></tr> <?php if($_SESSION['clicks'] > 0 && $_SESSION['clicks'] < 6){ ?>
  <tr><td><input required type="radio" name="userans" value="<?php echo $row['op1'];?>">&nbsp;<?php echo $row['op1']; ?><br><br>
  <tr><td><input  required type="radio" name="userans" value="<?php echo $row['op2'];?>">&nbsp;<?php echo $row['op2'];?><br><br></td></tr>
  <tr><td><input  required type="radio" name="userans" value="<?php echo $row['op3'];?>">&nbsp;<?php echo $row['op3']; ?><br><br></td></tr>
  <tr><td><input  required type="radio" name="userans" value="<?php echo $row['op4'];?>">&nbsp;<?php echo $row['op4']; ?><br><br><br></td></tr>
  <tr><td><button class="button3" name="click" >Next</button></td></tr> <?php }  
																	?> </div>
  <form>
  <?php if($_SESSION['clicks']>5){
  
  
	$qry3 = "SELECT `ans`, `userans` FROM `question`;";
	$result3 = mysqli_query($con,$qry3);
	$storeArray = Array();
	while ($row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC)) {
     if($row3['ans']==$row3['userans']){
		 @$_SESSION['score'] += 1 ;
	 }
}
 
 ?> 
 
 
 <h2>Result</h2><br><br>
 <div class="final">
 <span>No. of Correct Answers:&nbsp;<?php echo $no = @$_SESSION['score']; 
 
 ?></span><br><br><br><br>
 <span>Your Score:&nbsp<?php echo $total=$no*20; ?></span>
 
 <?php 
 $total = $no *20;

$sql="INSERT INTO marks (qid,student_id,q_marks) VALUES ('Q4',$_SESSION[id],$total)";
$result4=mysqli_query($con,$sql);

} ?></div>
<?php

// session_unset();
?>


           
</body>
</html>

 









