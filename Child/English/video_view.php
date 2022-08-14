<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Display videos</h1>
        <a href="video_upload.php" class="btn">Upload a new video</a>

        <div class="row">
            <?php
            include("db.php");
            $q="SELECT * FROM video";
            $query=mysqli_query($conn,$q);

            while($row=mysqli_fetch_array($query)){
                $name = $row['name'];
                ?>
            <div class="col">
                <video id="myVideo" width="40%" controls>
                    <source src="<?php echo 'upload/'.$name;?>">
                </video>
            </div>
           <?php  }
           ?>
        </div>
    </div>
</body>
</html>