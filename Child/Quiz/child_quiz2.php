<?php
include_once 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="child_quiz2.css"/>
    <title>Quiz2</title>
</head>

       
<body>
    <div class="nav-container">
        <div class="logo">
          <img src="images/logo.jpg" align="right" height="80px" width="80px" >
      </div> 
      <a href="qsub.php"> <button class="btn1"><img src="images/back.png" height="80px" width="60px">  </button></a>
      
              <nav>
  
            <div class="icon-bar">
                <a class="active" href="child_dashboard.php"><img src="images/home.png" height="30px" width="30px"/></a> 
      <a href="child_profile.php"><img src="images/profile1.png" height="30px" width="30px"/></a> 
      <a href="child>discussion.php"><img src="images/notifications.png" height="30px" width="30px"/></a> 
                 
                </div>  
              </nav>
        
          
          <h1 class="title" align="center"> Select Your Most Prefered Quiz</h1>
      <br> <br> <br>
       
     
        
   

  <div class="tclass">
  <table>
        <tr>
         
      
       
        <td> <form action="child_mq1.php" method="post">
        <input type="hidden" name="view_id" value=>
        <button type="submit" name="view_btn" class="btn2">
         Quiz 1 - Attempt
        </button>  </form>
      
        <form action="child_mq2.php" method="post">
        <input type="hidden" name="view_id" value=>
          <button type="submit" name="view_btn" class="btn2">
          Quiz 2 - Attempt
          </button>  </form>

          <form action="child_mq3.php" method="post">
        <input type="hidden" name="view_id" value=>
          <button type="submit" name="view_btn" class="btn2">
          Quiz 3 - Attempt
          </button>  </form>

          <form action="child_mq4.php" method="post">
        <input type="hidden" name="view_id" value=>
          <button type="submit" name="view_btn" class="btn2">
          Quiz 4 - Attempt
          </button>  </form>
        
        </td>
        </tr>
      </table></div>
        
    <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  
    <br>  <br> <br>  <br> <br>  <br> <br>  <br>
    <br>  <br> <br>  <br> <br>   <br> <br>  <br> <br> 

   
    <hr style="color: blue; ">           
<div class="footer-main">

<div class="footer">

<footer>&copy; 2021    ALL RIGHTS RESERVED BY 361°</footer>
</div> 
</div>   
</body>
</html>