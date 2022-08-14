
<?php 
include 'db.php';
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grades</title>
    <link rel="stylesheet" href="teacher_eng.css"/>
</head>
<body>


    <div class="main">


    <div class="nav-container">
      <a href="../child_dashboard.php">
        <button class="btn1"><img src="../images/back.png" height="80px" width="60px"></button>
      
      </a>
      <img src="../images/logo.jpg" align="right" height="80px" width="80px">
      <nav>


      <div class="icon-bar">
      <a class="active" href="../child_dashboard.php"><img src="../images/home.png" height="30px" width="30px"/></a> 
      <a href="../child_profile.php"><img src="../images/profile1.png" height="30px" width="30px"/></a> 
      <a href="../child>discussion.php"><img src="../images/notifications.png" height="30px" width="30px"/></a> 

      </div>
    </nav>


      <h1 class="title" align="center">My Teachers</h1>
     
      <nav>

      <?php 
       if(isset($_POST['view_btn']))
       {
           $id = $_POST['view_id'];
        //    echo $id;

           
       
           ?>  


      </nav>
    </div>
      <br><br><br>

      <div class="container">
                
        
     
<?php 
include("db.php");

$query = "SELECT * FROM `members` WHERE  id IN(SELECT teacher_id FROM `teacher_grade_subject` WHERE gid='$id' AND sid='S5')";
$query_run = mysqli_query($conn, $query);
?>

<div class="container_table">
<table>

    <tr>


        <td><b>ID</b></td>
        <td><b>First Name</b></td>
        <td><b>Last Name</b></td>
        <td><b>Email</b> </td>
        <td></td>

    </tr>
    <?php
    if(mysqli_num_rows($query_run) > 0)
    {
        while($row = mysqli_fetch_assoc($query_run))
        {
    ?>
    <tr>
    <td><?php  echo $row['id']; ?></td>
    <td><?php  echo $row['first_name']; ?></td>
    <td><?php  echo $row['last_name']; ?></td>
    <td><?php  echo $row['email']; ?></td>
    <td>
        <form action="accepted_profile.php" method="post">
            <input type="hidden" name="view_id" value="<?php echo $row['id']; ?>">
            <button type="submit" name="view_btn" class="button1"> View Profile</button>
        </form>
      </td>
  </tr>
  <?php
      }
  }
  else {
      echo "No Record Found";
  }?>

<?php

       }
?></table></div>









        <br>  <br>  <br> <br>

<!-- <hr style="color: blue; ">            -->
<div class="footer-main">

<div class="footer">

<footer>&copy; 2021    ALL RIGHTS RESERVED BY 361°</footer>
</div> 
</div> 
  </div>
  
  
</body>
</html>
