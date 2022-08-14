<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="child_leaderboard.css"/>
    <title>Quiz2</title>
</head>

	<body>
		<div class="nav-container">
			<div class="logo">
			  <img src="images/logo.jpg" align="right" height="80px" width="80px" >
		  </div> 
		  <a href="child_quiz1.php"> <button class="btn1"><img src="images/back.png" height="80px" width="60px">  </button></a>
		   
				 
	<nav>
	  
			   
		<div class="icon-bar">
		  <a class="active" href="../child_dashboard.php"><img src="images/home.png" height="30px" width="30px"/></a> 
		  <a href="../child_profile.php"><img src="images/profile1.png" height="30px" width="30px"/></a> 
		  <a href="child_discussion.php"><img src="images/notifications.png" height="30px" width="30px"/></a> 
					 
		</div>  
    </nav>
		<h2><i><small>ස්කෝලේ</small></i>&nbsp;&nbsp;-&nbsp;&nbsp;LeaderBoard</h2>
		<div class="nav-container2">
		<table>
			<tr>
				<td>Ranking&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br><br><br></td>
				<td>Student Id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br><br><br></td>
               
				<td>Marks
            <br><br><br></td> 
			</tr>
		</table>
		</div>
		<div class="nav-container1">
            <?php

/* Connection Variable ("Servername",
"username","password","database") */
$con = mysqli_connect("localhost",
		"root", "", "demo");

/* Mysqli query to fetch rows
in descending order of marks */
 
$result = mysqli_query($con, "SELECT student_id,
q_marks FROM marks ORDER BY q_marks DESC");


/* First rank will be 1 and
	second be 2 and so on */
$ranking = 1;

/* Fetch Rows from the SQL query */
if (mysqli_num_rows($result)) {
	while ($row = mysqli_fetch_array($result)) {
		echo "<tr><td>{$ranking}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>{$row['student_id']}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         </td>
		<td>{$row['q_marks']}</td><br><br><br></tr>";
		$ranking++;
       
        
	}
}

?>


</div>



</body>
</html>

