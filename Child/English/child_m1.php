<?php
include_once 'dbconfig.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>File Uploading With PHP and MySql</title>
<link rel="stylesheet" href="child_m1.css" type="text/css" />
</head>
<body>
<div class="nav-container">
        <div class="logo">
          <img src="images/logo.jpg" align="right" height="80px" width="80px" >
      </div> 
      <!-- <a href="child_maths.php"> <button class="btn1"><img src="images/back.png" height="80px" width="60px">  </button></a>
        -->
             
              <nav>
  
           
      <div class="icon-bar">
      <a class="active" href="child_dashboard.php"><img src="images/home.png" height="30px" width="30px"/></a> 
      <a href="child_profile.php"><img src="images/profile1.png" height="30px" width="30px"/></a> 
      <a href="child>discussion.php"><img src="images/notifications.png" height="30px" width="30px"/></a> 
      </div></nav>
    
      <h1 class="title" align="center"> Maths-PDFs</h1>
       
          <br>  <br>  <br>  <br>
<div id="body">
<!-- <th colspan="4">your uploads...<label><a href="upload.php">upload new files...</a></label></th> -->
<div class="row">
        <?php 
       if(isset($_POST['view_btn']))
       {
           $id = $_POST['view_id'];
          //  echo $id;

           
       
           ?>
           
  <div class="backbtn">
  <form action="child_maths.php" method="post">
  <input type="hidden" name="view_id" value="<?php echo $id?>">
  <button type="submit" name="view_btn" class="btn1"> <img src="../images/back.png" height="80px" width="60px"> 
  </button>  </form> 
 
  </div> 
  
<br><br><br><br><br><br><br><br><br>
<table width="80%" border="1">
    <tr>
    <thead>
    <td>Name</td>
    <td>File Type</td>
    <!-- <td>File Size(KB)</td> -->
    <td>View</td>

    </tr>
  </thead>
    <?php
 $sql="SELECT * FROM video WHERE gid='$id' AND sid='S1' AND content_type='pdf'";
 $result_set=mysqli_query($conn,$sql);
 while($row=mysqli_fetch_array($result_set))
 {
  ?>
  <tbody>
        <tr>
         
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['content_type'] ?></td>
       
        <td><a href="upload/<?php echo $row['name'] ?>" target="_blank">view file</a></td>
        </tr>
      </tbody>
        <?php
 }
}
 ?>

 
    </table>
    
</div>
</body>
</html>
