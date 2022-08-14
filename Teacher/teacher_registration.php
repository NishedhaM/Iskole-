<?php
session_start();
require_once('config.php');

if(isset($_POST['submit']))
{
    if(isset($_POST['first_name'],$_POST['last_name'],$_POST['email'],$_POST['password']) && !empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['password']))
    {
        $firstName = trim($_POST['first_name']);
        $lastName = trim($_POST['last_name']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        $number = preg_match('@[0-9]@', $password);
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);

        $options = array("cost"=>4);
        $hashPassword = password_hash($password,PASSWORD_BCRYPT,$options);
        $date = date('Y-m-d H:i:s');
        $type = 'teacher';
        $status = 'pending';

      
        if(filter_var($email, FILTER_VALIDATE_EMAIL))
		{
            $sql = 'select * from members where email = :email';
            $stmt = $pdo->prepare($sql);
            $p = ['email'=>$email];
            $stmt->execute($p);

            if(strlen($password) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
                $errors[]=  "Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
               } else {
                $errors[]= "Your password is strong.";
                

            if($stmt->rowCount() == 0)
            {
                $sql = "insert into members (first_name, last_name, email, `password`, created_at,updated_at ,type,status) values(:fname,:lname,:email,:pass,:created_at,:updated_at,:type,:status)";

                try{
                    $handle = $pdo->prepare($sql);
                    $params = [
                        ':fname'=>$firstName,
                        ':lname'=>$lastName,
                        ':email'=>$email,
                        ':pass'=>$hashPassword,
                        ':created_at'=>$date,
                        ':updated_at'=>$date,
                        ':type'=>$type,
                        ':status'=>$status
                    ];

                    $handle->execute($params);

                    $success = 'User has been created successfully';

                    $sql = "select id from members where email = :email ";
                    $handle = $pdo->prepare($sql);
              			$params = ['email'=>$email];
              			$handle->execute($params);

              			if($handle->rowCount() > 0) {
                      $getRow = $handle->fetch(PDO::FETCH_ASSOC);
                      $id=$getRow['id'];
                    //   echo "id: " . $id."<br>";


                      $sql = "insert into teacher (teacher_id) values(:id)";
                   

                      try{
                          $handle = $pdo->prepare($sql);
                          $params = [
                            ':id'=>$id,
                            // ':status'=>$status,
                            
                        ];
    
                          $handle->execute($params);
                      }
                      catch(PDOException $e){
                          $errors[] = $e->getMessage();
                      }

                      $sql = "insert into teacher_qualification (teacher_id) values(:id)";

                      try{
                          $handle = $pdo->prepare($sql);
                          $params = [
                            ':id'=>$id,
                            
                        ];
    
                          $handle->execute($params);
                      }
                      catch(PDOException $e){
                          $errors[] = $e->getMessage();
                      }

                      

                    //   $sql = "insert into teacher (status) values(:status)";

                    //   try{
                    //       $handle = $pdo->prepare($sql);
                    //       $params = [':status'=>$status];
                    //       $handle->execute($params);
                    //   }
                    //   catch(PDOException $e){
                    //       $errors[] = $e->getMessage();
                    //   }


                      }


                }
                catch(PDOException $e){
                    $errors[] = $e->getMessage();
                }
            }
            else
            {
                $valFirstName = $firstName;
                $valLastName = $lastName;
                $valEmail = '';
                $valPassword = $password;
                


                $errors[] = 'Email address already registered';
            }
               }
    
        }
        else
        {
            $errors[] = "Email address is not valid";
        }
    }
    else
    {
        if(!isset($_POST['first_name']) || empty($_POST['first_name']))
        {
            $errors[] = 'First name is required';
        }
        else
        {
            $valFirstName = $_POST['first_name'];
        }
        if(!isset($_POST['last_name']) || empty($_POST['last_name']))
        {
            $errors[] = 'Last name is required';
        }
        else
        {
            $valLastName = $_POST['last_name'];
        }

        if(!isset($_POST['email']) || empty($_POST['email']))
        {
            $errors[] = 'Email is required';
        }
        else
        {
            $valEmail = $_POST['email'];
        }

        if(!isset($_POST['password']) || empty($_POST['password']))
        {
            $errors[] = 'Password is required';
        }
        else
        {
            $valPassword = $_POST['password'];
        }

    }

}
?>


<!doctype html>
<html>
<head>
<link rel="stylesheet" href="teacher_registration.css">

</head>
<body>
<div class="nav-container">

        <nav>
            <div class="logo">
                <img src="./teacher_images/logo.png" align="right" width="60px" height="60px">
            </div>


        </nav>


    </div>
    <div>
                <br> <br><br><br><br>  <br><br><br><br>
               
                <br><br><br><br>
               

            </div>


<div style="margin-left:170px; height:670px;width:650px;margin-top:-20px;"class="wrapper">
    <div style="margin-left:20px;"class="container">
        <p class="login-text" style="font-size: 2rem; font-weight: 800; margin-left:40px; width:550px;margin-top:10px;">Teacher Registration</p>
			<?php
				if(isset($errors) && count($errors) > 0)
				{
					foreach($errors as $error_msg)
					{
						echo '<div class="alert alert-danger">'.$error_msg.'</div>';
					}
                }

                if(isset($success))
                {

                    echo '<div class="alert alert-success">'.$success.'</div>';
                }
			?>

		<form action="" method="POST" class="login-email">

		<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <div style="margin-top:12px;" class="input-group">
					<label style="font-size: 18px;" for="email" class="label">First Name:</label>
					<input style="font-size: 16px;"type="text" name="first_name" placeholder="Enter First Name" class="form-control" value="<?php echo ($valFirstName??'')?>">
				</div>
                <div style="margin-top:10px;" class="input-group">
					<label style="font-size: 18px;" for="email" class="label">Last Name:</label>
					<input style="font-size: 16px; " type="text" name="last_name" placeholder="Enter Last Name" class="form-control" value="<?php echo ($valLastName??'')?>">
				</div>

                <div style="margin-top:10px;"class="input-group">
					<label style="font-size: 18px;" for="email" class="label">Email:</label>
					<input style="font-size: 16px;" type="text" name="email" placeholder="Enter Email" class="form-control" value="<?php echo ($valEmail??'')?>">
				</div>
				<div style="margin-top:10px;"class="input-group">
				<label style="font-size: 18px;" for="email" class="label">Password:</label>
					<input style="font-size: 16px;" type="password" name="password" placeholder="Enter Password" class="form-control" value="<?php echo ($valPassword??'')?>">
                    <div class="logics">
                   <br> At least one number<br>
                    At least one uppercase<br>
                    At least one lowercase<br>
                    At least one special character<br>
                    Must be at least 8 characters<br>
                    <a href="./teacher_terms.html">Terms ans Conditions</a>
                </div>
				</div>
                <br><br>
             
               
               
				<div class="input-group"><br>
				<button style="margin-top:10px;"name="submit" class="btn" onclick="checkPassword()">Register</button><br><br><br>
				<p style="font-size: 20px;margin-top:-100px;" class="login-register-text">Have an account? <a href="./teacher_login.php" color="blue">Login Here</a>.</p>
			   </div>

			</form>
		</div>
	</div>
</div>



</body>
</html>
