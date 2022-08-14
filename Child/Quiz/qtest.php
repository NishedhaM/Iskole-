<!DOCTYPE html>
<html lang="en" dir="ltr">
	<link rel="stylesheet" href="index.css">
<?php require 'dbconfig.php';
session_start(); 
if(!$_SESSION['id']){
  header('location:child_login.php');
}
echo ($_SESSION['id']);
?>
<head>
<title>Technopoints Quiz</title>

</head>
<body>



<?php
include_once 'db.php';
?>

<?php 
  if(isset($_POST['submit'])){

    $Grade_new=$_POST['Grade'];
    echo $Grade_new;
}

?>
 <form action="" method="post">
<div class="select">
              <label for="unit">Grade:</label>
              <select id="Grade" name="Grade">
              <option value="" disabled selected>Choose option</option>
                <?php
                $sql= "SELECT * FROM quizz where  gid='G1' AND sid='S1'; ";
                $query_run = mysqli_query($conn, $sql);
                    if($result = mysqli_query($conn,$sql)){
                             if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_array($result)){
                                        $qid = $row['qid'];
                                        $qname = $row['q_title'];
                                        
                                        
                                       
                                       
                                        echo "<option value='$qid'>$qname</option>";
                                        }
                              }
                    }
              
                
                  
                ?>
              </select>
              </div>
            
        </div>
      </div>
    </div>
    <input type="submit" name="submit" class="submit"  vlaue="Choose options">
                </form>
                <?php 
$qid='Q2';															
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
																
																//echo($_SESSION['clicks']);
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
 session_unset(); ?></span><br><br><br><br>
 <span>Your Score:&nbsp<?php echo $total=$no*2; ?></span>
<?php } ?></div>
<?php
// $id=$_SESSION['id'];
$no = @$_SESSION['score'];
$total=$no*2;
// $no1 = $_SESSION['score']; 
// $mark=$_SESSION['score'];
$sql = "insert into marks (qid,student_id,q_Marks) values('Q2',$id,$total)";
$result4=mysqli_query($conn,$sql);
// echo $id;
// echo "<br>";
// echo $total ;
// echo $no;
?>
