<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>


    <body>
       
            <!-- <h1>Display</h1> -->
            <hr/>
            <a href="upload.php" class="btn btn-primary mt-3">Upload a new pdf</a>
        
            <?php
                include("dp.php");

                $q="SELECT * FROM video WHERE gid='G1' AND sid='S1' AND uid='U1' AND content_type='Pdf' ";
                $query=mysqli_query($conn,$q);
                while($row=mysqli_fetch_array
               ($query)){
                   $name=$row['name'];
                   
               }
  // The location of the PDF file
  // on the server
                $file = 'upload/' .$name;
                //$filename=$name;

    
  // Header content type
                header("Content-type: application/pdf");
                header('Content-Disposition: inline; filename=" '.$name. '"');
                header('Content-Transfer-Encoding:binary');
                header('Accept-Ranges:bytes');
                @readfile($file);
    
  // Send the file to the browser.
               
  
                          
                    
                   

                
                    ?>
                
       
       
    </body>
</html>