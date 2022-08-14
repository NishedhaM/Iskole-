<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="child_subject.css">
    <title>Subject</title>
</head>
<body>
    <div class="nav-container">
      <a href="../Grades/child_grade.php">
        <button class="btn1"><img src="../images/back.png" height="80px" width="60px">  </button>
      </a>
        
    <img src="../images/logo.jpg" align="right" height="80px" width="80px">

    <div class="icon-bar">
    <a class="active" href="../child_dashboard.php"><img src="../images/home.png" height="30px" width="30px"/></a> 
      <a href="../Profile/child_profile.php"><img src="../images/profile1.png" height="30px" width="30px"/></a> 
      <a href="../Disscusion/child>discussion.php"><img src="../images/notifications.png" height="30px" width="30px"/></a> 
      </div>

      <h1>Subjects</h1>


      <br> <br> <br>

  
     <nav>


      


    </nav>
      <div class="welcome">
        <br>Hi, Choose what you prefer to follow....!<img src="../images/hello.png" height="35px"/>
      </div>

    </div>

<?php


if(isset($_POST['view_btn']))
{
    $id = $_POST['view_id'];
    // echo $id;

    ?>
        <div class="subnav1">
        <form action="../English/child_maths.php" method="post">
        <input type="hidden" name="view_id" value="<?php echo $id?>">
        <img src="../images/maths.png" height="120px" width="110px"> <br><br><br><br><br>
        <br><br><br><br><br><br><br><br>Mathematics
        <button type="submit" name="view_btn" class="btn2"> 
<br>Let's Start
        </button>  </form>
        </div>
 <div class="subnav5">
  <form action="../English/child_env.php" method="post">
    <input type="hidden" name="view_id" value="<?php echo $id?>">
    <img src="../images/science.png" height="65px" width="90px">  <small>Environmental<br><br><br><br>
      <br><br><br><br> Studies</small></p>
      <br><br><br><br><br><br><button type="submit" name="view_btn" class="btn2"> 
    Let's Start
    </button>  </form>
  </div>

<div class="subnav5">

  <form action="../English/child_sinhala.php" method="post">
    <input type="hidden" name="view_id" value="<?php echo $id?>">
    <img src="../images/sinhala.png" height="70px" width="80px"> <p class="sin">Sinhala</p>
    <button type="submit" name="view_btn" class="btn2"> 
    Let's Start
    </button>  </form>
</div>


<br>
<div class="subnav2">
  <form action="../English/child_eng.php" method="post">
    <input type="hidden" name="view_id" value="<?php echo $id?>">
    <img src="../images/english.png" height="110px" width="100px"> <br><br><br><p class="e">English</p>
    <button type="submit" name="view_btn" class="btn2"> 
    Let's Start
    </button>  </form>
</div>

<div class="subnav2">

  <form action="../English/child_aes.php" method="post">
    <input type="hidden" name="view_id" value="<?php echo $id?>">
    <img src="../images/aesthetic.png" height="80px" width="80px"> <p class="a">Aesthetic</p>
    <button type="submit" name="view_btn" class="btn2"> 
    Let's Start
    </button>  </form>
    </div>
<?php
}
?>
    <div class="detail">

    </div>

<br><br><br>
           
<div class="footer-main">

<div class="footer">

<footer>&copy; 2021    ALL RIGHTS RESERVED BY 361°</footer>
</div> 
</div>   

</body>
</html>
