<?php
    session_start();

    if(!$_SESSION['id']){
        header('location:../../login.php');
    }

    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,'demo');



    


    $query = "SELECT * FROM discussion ";
    $query_r = mysqli_query($connection, $query);


    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discussion Forum</title>
    <link rel="stylesheet" href="child_discussion.css">
</head>
<body>
    <img src="images/logo.jpg" class="logo" align="right" height="80px" width="80px">
    <div class="grid-container">
        
        <div class="sidebar">
        
              
              <br><br><br>
        <a href="../child_dashboard.php">Dashboard</a>
        <a href="../Grades/child_grade.php">My Courses</a>
        <a href="../Quiz/child_quiz1.php">Quiz</a>
        <a href="../Profile/child_profile.php">Profile</a>
        <a href="">Discussion</a>
        <a href="../child_cal.php">Calendar</a>
        <a href="../Exhibition/child_exhi.php">Exhibition</a>
        <a href="../child_Payment.php">Payment</a>
        <a href="../logout.php?logout=true">Logout</a>
         
        </div>
       </div>
       <h1 class="title" align="center">Discussion Area</h1>

    
                    
       <?php if(mysqli_num_rows($query_r) > 0)
                 {
                    while($row = mysqli_fetch_assoc($query_r))
                        {
                            $d_id=$row['d_id'];         
                         echo "<br>";?>
                         <?php $question= $row['question']; ?>
                         <?php 
                $tname=$row['teacher_id'];
                $query = "SELECT * FROM members where id=$tname";
                $query_s = mysqli_query($connection, $query);
                if(mysqli_num_rows($query_s) > 0){
                while($row = mysqli_fetch_assoc($query_s)){
                                                                                    
                $fname=$row['first_name'];
                $lname=$row['last_name'];

                }
            }
                
                
                ?>
                                                       
                         <div class="question_a">
            <img src="images/but.gif" class="gif" height="70px" width="70px">
           <img src="images/teacher2.jpg" height="70px" width="70px"  class="image rounded-corners">
           <p class="name"><?php echo $fname; ?>&nbsp;<?php echo $lname; ?></p>
           
           <p class="Q"><?php echo $question;
             ?></p>
                        </div>
                                                                        
                                                    <?php $query = "SELECT * FROM comments where d_id=$d_id   ";
                                                    //  $query = "DELETE FROM register WHERE id='$id' ";
                                                        $query_run = mysqli_query($connection, $query);
                                                    ?>
                                                        <?php if(mysqli_num_rows($query_run) > 0){
                                                                while($row = mysqli_fetch_assoc($query_run)){
                                                                    
                                                                            echo "<br>"; ?>
                                                                            <?php $comment= $row['comment']; ?>
                                                                            <?php $id= $row['commenter_id']; ?>
           

                  <?php
                        $query = "SELECT * FROM members where id=$id";
                        $query_s = mysqli_query($connection, $query);
                        if(mysqli_num_rows($query_s) > 0){
                        while($row = mysqli_fetch_assoc($query_s)){
                                                                                    		
                        $fname=$row['first_name'];
                        $lname=$row['last_name'];

                        }
                    }
                ?>

               
                                                                                                                                             
            <div class="reply">
            <img src="images/but.gif" class="gif" height="70px" width="70px">
            <img src="images/g1.png" height="70px" width="70px" class="image">
            <p class="name"><?php echo $fname; ?>&nbsp;<?php echo $lname; ?></p>
           
            <p class="Q"><?php echo $comment; ?></p>
        </div>
        
        




                                                                       
                                                                        <?php 
                                                                    }
                                                            }
                                                        ?>
<div class="question">

                                  
                                   

                                    <form method="post" action="action.php">
                                        <label for="email" class="label">If you have any doubt, feel free to ask: </label>
                                        <br>  <br> <br>    <br>  <br> <br>        <br>  <br> <br> <input type="text" class="textarea" name="t_comment"  placeholder="Add a comment...">
                                        <br><br>  <br> <br> <button class="s_button" name="s_button" value="<?php echo $d_id; ?>">Send</button>
                                           
                                    </form>      
                                  
                                    
                                    <br>
                               
        </div>
     <?php

                            }
                        } 
                         ?>





























       
</body>
</html>