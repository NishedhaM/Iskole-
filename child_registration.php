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
        $type = 'student';
        $g_name ="Guardian's Name";
        $g_mobile ="Guardian's Mobile";
        $status ="accepted";

      
        if(filter_var($email, FILTER_VALIDATE_EMAIL))
		{
            $sql = 'select * from members where email = :email';
            $stmt = $pdo->prepare($sql);
            $p = ['email'=>$email];
            $stmt->execute($p);

            if(strlen($password) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
                $errors[]=  "Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
               } else {
                // $errors[]= "Your password is strong.";
                

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
                   
                    // $sql ="insert into `student` (`student_id`, `g_name`, `g_mobile`, `dob`) VALUES ('$_SESSION[id]', NULL, NULL, NULL)";
                    // if(!$_SESSION['id']){
      
                    //     // header('location:child_login.php');
                    // }
                    $success = 'User has been created successfully';
                    $sql = "select id from members where email = :email ";
                    $handle = $pdo->prepare($sql);
              			$params = ['email'=>$email];
              			$handle->execute($params);

              			if($handle->rowCount() > 0) {
                      $getRow = $handle->fetch(PDO::FETCH_ASSOC);
                      $id=$getRow['id'];
                    //   echo "id: " . $id."<br>";


                      $sql = "insert into student (student_id,g_name,g_mobile) values(:id,:g_name,:g_mobile)";

                      try{
                          $handle = $pdo->prepare($sql);
                          $params = [':id'=>$id,':g_name'=>$g_name,
                          ':g_mobile'=>$g_mobile];
                          $handle->execute($params);
                      }
                      catch(PDOException $e){
                          $errors[] = $e->getMessage();
                      }


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
<link rel="stylesheet" href="child_registration.css">

</head>
<body>
<div class="nav-container">

        <nav>
            <div class="logo">
                <img src="images/logo.jpg" align="right" width="60px" height="60px">
            </div>


        </nav>


    </div>
    <div>
                <br> <br><br><br><br>  <br><br><br><br>
               
                <br><br><br><br>
               

            </div>


<div class="wrapper">
            <div class="container">
        <p class="login-text" style="font-size: 2rem; font-weight: 800; margin-left:-40px; width:550px;">Student Registration</p>
        <div class="alert">
			<?php

				if(isset($errors) && count($errors) > 0)
				{
					foreach($errors as $error_msg)
					{
						echo '<div class="alert-alert-danger">'.$error_msg.'</div>';
					}
                }

                if(isset($success))
                {

                    echo '<div class="alert-alert-success">'.$success.'</div>';
                }
			?>
</div>
		<form action="" method="POST" class="login-email">

		<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <div class="input-group">
					<label for="email" class="label">Child's First Name:</label>
					<input type="text" name="first_name" placeholder="Enter Child's First Name" class="form-control" value="<?php echo ($valFirstName??'')?>">
				</div>
                <div class="input-group">
					<label for="email" class="label">Child's Last Name:</label>
					<input type="text" name="last_name" placeholder="Enter Child's Last Name" class="form-control" value="<?php echo ($valLastName??'')?>">
				</div>

                <div class="input-group">
					<label for="email" class="label">Guardian's Email: </label>
					<input type="text" name="email" placeholder="Enter Guardian's Email" class="form-control" value="<?php echo ($valEmail??'')?>">
				</div>
				<div class="input-group">
				<label for="email" class="label">Password:</label>
					<input type="password" name="password" placeholder="Enter Password" class="form-control" value="<?php echo ($valPassword??'')?>">
                    <div class="logics">
                   <br> At least one number<br>
                    At least one uppercase<br>
                    At least one lowercase<br>
                    At least one special character<br>
                    Must be at least 8 characters</div>
				</div>
                <br><br>
             
               

				<div class="input-group">
				<button name="submit" class="btn" onclick="checkPassword()">Register</button><br>
				<p class="login-register-text">Have an account? <a href="login.php" color="blue">Login Here</a>.</p>
			</div>

			</form>
		</div>
	</div>
</div>



</body>
</html>
