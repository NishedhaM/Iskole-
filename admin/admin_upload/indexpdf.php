<?php
                include("dp.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="header">
<label>File Uploading With PHP and MySql</label>
</div>
<div id="body">

    <?php
 $sql="SELECT * FROM video";
 $result_set=mysqli_query($conn,$sql);
 while($row=mysqli_fetch_array($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['type'] ?></td>
       
        <td><a href="upload/<?php echo $row['name'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php
 }
 ?>
  
    
</div>
</body>
</html>
