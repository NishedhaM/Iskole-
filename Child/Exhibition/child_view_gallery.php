
<?php include "connection.php"; ?>
<?php
   session_start();

   if(!$_SESSION['id']){
       header('location:child_login.php');
   }

   $connection = mysqli_connect("localhost","root","");
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="child_view_gallery.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <title>1st Lesson</title>
</head>
<body>
    
    <div class="nav-container">
        <div class="logo">
          <img src="./images/logo.jpg" align="right" height="80px" width="80px" >
      </div> 
      <a href="../child_dashboard.php"> <button class="btn1"><img src="./images/back.png" height="80px" width="60px">  </button></a>
       
             
         <br>  
         <br>  
         <br>  
        
          
          <h1 class="title" align="center"> My Gallery</h1>
      
       
          <br>  <br>  <br>  <br>
      
   <?php
      $i = 1;
      $rows = mysqli_query($conn, "SELECT * FROM tb_upload WHERE uploader_id=$_SESSION[id]")
      ?>
   <br>
  
      <?php foreach ($rows as $row) : ?>
   
     
     <div class="view">
      <br><br>
      <img src="img/<?php echo $row["image"]; ?> "  width = 350 height =  250 title="
      <?php echo $row['image']; ?>">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <?php $id= $row['uploader_id']; ?>
      <br><br>   <br>   <br>
     <div class="Name">
     
     <?php echo $row["name"]; ?></div>
     </div>


     <?php endforeach; ?>


     <?php
      $i = 1;
      $rows = mysqli_query($conn, "SELECT * FROM video_2 WHERE uploader_id=$_SESSION[id]")
      ?>
   <br>
  
      <?php foreach ($rows as $row) : ?>

          <div class="view">
      <br><br>
	  <div class="col-md-8">
				<video width="70%" height="240" controls>
					<source src="<?php echo $row['location']?>">
				</video>
			</div>
      <?php $id= $row['uploader_id']; ?>
      <br>
     <div class="Name">
          
     
  </div>
     </div>


          <?php endforeach; ?>

   

<?php   
 include 'connection.php';  
 $query = "SELECT * FROM tb_upload WHERE uploader_id=$_SESSION[id]";  
 $run = mysqli_query($conn,$query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
 
 <body>  
 <header></header>  

 <table>  
   
      <tr class="heading"> 
            
           <th>Creation No</th>  
           <th>ID</th>  
           <th>Name</th>  
           <th>Image</th>  
           <th>Delete Button</th> 
            
      </tr>  
      <?php   
      $i=1;  
           if ($num = mysqli_num_rows($run)>0) {  
                while ($result = mysqli_fetch_assoc($run)) {  
                     echo "  
                          <tr class='data'>  
                              <td>".$i++."</td>  
                             
                               <td>".$result['id']."</td>  
                               <td>".$result['name']."</td>  
                               <td>".$result['image']."</td>  
                              
                               <td><a href='delete.php?id=".$result['id']."' id='btn'>Delete</a></td>  
                          </tr>  
                     ";  
                }  
           }  
      ?>  

<?php   
 include 'connection.php';  
 $query = "SELECT * FROM video_2 WHERE uploader_id=$_SESSION[id]";  
 $run = mysqli_query($conn,$query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <title>Delete Data From Database in PHP</title>  
      <link rel="stylesheet" type="text/css" href="style.css">  
 </head>  
 <body>  
 <header></header>  
 <br><br><br><br>
 <table > 
 <br><br><br><br> <br><br><br><br> 
      <tr class="heading">  
      <th>Video No</th>  
           <th>ID</th>  
           <th>Name</th>  
           <th>Video</th> 
           <th>Delete Button</th>
            
      </tr>  
      <?php   
      $i=1;  
           if ($num = mysqli_num_rows($run)>0) {  
                while ($result = mysqli_fetch_assoc($run)) {  
                     echo "  
                          <tr class='data'>  
                          <td>".$i++."</td>  
                               <td>".$result['video_id']."</td>  
                               <td>".$result['video_name']."</td>  
                               <td>".$result['location']."</td>  
                              
                               <td><a href='delete.php?id=".$result['video_id']."' id='btn'>Delete</a></td>  
                          </tr>  
                     ";  
                }  
           }
             
      ?> 
      
 </table> 
 <br><br><br><br> <br><br><br><br>   
 </body>  
 </html>