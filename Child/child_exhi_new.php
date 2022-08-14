<?php
session_start();

if(!$_SESSION['id']){
    header('location:../../login.php');
}
$conn=mysqli_connect('localhost','root','','demo');
if(!$conn){
    echo "Connection Failed";
}
if(isset($_POST['submit'])){
   $imageCount=count($_FILES['image']['name']);
   for($i=0;$i<$imageCount;$i++){
       $imageName=$_FILES['image']['name'][$i];
       $imageTempName=$_FILES['image']['tmp_name'][$i];
       $targetPath="./upload/".$imageName; 
       if(move_uploaded_file($imageTempName,$targetPath)){
           $sql="INSERT INTO img(image)VALUES('',  '$imageName', '$_SESSION[id]')";
           $result=mysqli_query($conn,$sql);

       }
      
   }
   if($result){
       header('location:child_exhi_new.php?msg=ins');
   
   }
}
 




 

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload images to exhi</title>
</head>
<body>
    <?php 
    // if(isset($_GET['msg']) AND $_GET['msg']=='ins'){
    //     echo '<h4 align=center>Images Uploaded Succesfully....!</h4>';

    // } 
    
    
    ?>
     <form action="child_exhi_new.php" method="POST" enctype="multipart/form-data">
        Please select Image<br><br>
        <input type="file" name="image[]" multiple><br><br>
        <input type="submit" name="submit" value="Upload">  
     </form>
    
     
    <?php 
    $sql="SELECT * FROM img";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        while($fetch=mysqli_fetch_assoc($result)){
            ?>
            <img src="upload/<? echo $fetch['image'];?>"
            <?php
        }
    }?>
    
    ?>
</body> 
</html>