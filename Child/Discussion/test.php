
                    
                <?php if(mysqli_num_rows($query_r) > 0)
                 {
                    while($row = mysqli_fetch_assoc($query_r))
                        {
                                    
                         echo "<br>";?>
                         <?php $question= $row['question']; ?>
                                                       
                         <div class="question_a">
            <img src="images/but.gif" class="gif" height="70px" width="70px">
           <img src="images/g1.png" height="70px" width="70px" class="image">
           <p class="name">Windy Fernando</p>
           <p class="name_s">1 day ago</p>
           <p class="Q"><?php echo $question; $d_id=$row['d_id'] ?></p>
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
                                                                                    		//  echo $row['first_name']; 
                                                                                            $fname=$row['first_name'];
                                                                                            $lname=$row['last_name'];

                                                                                        }
                                                                              		  }
                                                                            ?>
                                                                                                                                             
            <div class="reply">
            <img src="images/but.gif" class="gif" height="70px" width="70px">
            <img src="images/g1.png" height="70px" width="70px" class="image">
            <p class="name"><?php echo $fname; ?><?php echo $lname; ?></p>
            <p class="name_s">1 day ago</p>
            <p class="Q"><?php echo $comment; ?></p>
        </div>
        
        




                                                                       
                                                                        <?php 
                                                                    }
                                                            }
                                                        ?>
<div class="question">
            <div class="input-group">
            <form method="post" action="action.php">
                <label for="email" class="label">If you have any doubt, feel free to ask: </label>
                <br> <br><br> <br> <br> <br><input type="text" class="textarea" name="email" placeholder="Enter the Comment" class="form-control">
                </form> 
            </div>
           
            <br><br>  <br><br>
            <button name="s_button" class="btn"  value="<?php echo $d_id; ?>">Ask </button><br>
        </div>




                                   
                                          
                            <?php

                            }
                        } 
                         ?>