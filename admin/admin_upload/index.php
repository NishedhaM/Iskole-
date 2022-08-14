<!DOCTYPE html>
<html>
    <head>
        <title>Display </title>
    </head>


    <body>
        <div class="container mt-3 mb -3">
            <!-- <h1>Display</h1> -->
            <hr/>
            <a href="upload.php" class="btn btn-primary mt-3">Upload a New video</a>
        <div class="row">
            <?php
                include("dp.php");

                $q="SELECT * FROM video WHERE gid='G1' AND sid='S1' AND uid='U1' AND content_type='mp4' ";
                $query=mysqli_query($conn,$q);
                while($row=mysqli_fetch_array
               ($query)){
                   $name=$row['name'];
                    ?>
                    <div class="col-md-4">
                        <video style="margin-left: 400px;margin-top:150px" id="myVideo" width="50%" controls>
                            <source src="<?php echo 'upload/' .$name;?>">
                        </video>
                    </div>
                    <?php }


                $q="SELECT * FROM video WHERE gid='G2' AND sid='S2' AND uid='U2' AND content_type='mp4' ";
                $query=mysqli_query($conn,$q);
                while($row=mysqli_fetch_array
                ($query)){
                $name=$row['name'];
                    ?>
                    <div class="col-md-4">
                        <video style="margin-left: 400px;margin-top:150px" id="myVideo" width="50%" controls>
                            <source src="<?php echo 'upload/' .$name;?>">
                        </video>
                    </div>
                    <?php }


                
                    ?>
                
        </div>
       
    </body>
</html>