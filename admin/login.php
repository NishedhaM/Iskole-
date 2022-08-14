<?php
 session_start();
require_once('config.php');
date_default_timezone_set('Asia/Colombo');
$date = date('Y-m-d H:i:s');
if(isset($_POST['submit']))
{
	if(isset($_POST['email'],$_POST['password']) && !empty($_POST['email']) && !empty($_POST['password']))
	{
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);
		$type;

		if(filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$sql = "select * from members where email = :email ";
			$handle = $pdo->prepare($sql);
			$params = ['email'=>$email];
			$handle->execute($params);
			if($handle->rowCount() > 0)
			{
				$getRow = $handle->fetch(PDO::FETCH_ASSOC);
				if(password_verify($password, $getRow['password']))
				{
					unset($getRow['password']);
					$_SESSION = $getRow;
					$type=$getRow['type'];
					$status=$getRow['status'];
					// $status=$getRow['accepted'];
					if($type=='student'){
					header('location:child_dashboard.php');
					exit();}
					if($type=='teacher' and $status=='pending' ){
					header('location:./teacher_unregistered/teacher_editprofile.php');
					exit();}
					if($type=='teacher' and $status=='accepted' ){
						// $q1 = " INSERT INTO `login` ( `user_id`, `login_time`) VALUES ($_SESSION[id],'$date');";
						// $query_run1 = mysqli_query($connection,$q1);
						$sql = "insert into login (user_id,login_time ) values(:user_id,:login_time)";

						try{
							$handle = $pdo->prepare($sql);
							$params = [
								':user_id'=>$_SESSION['id'],
								':login_time'=>$date

							];


							$handle->execute($params);
						}

						catch(PDOException $e){
							$errors[] = $e->getMessage();
						}


						header('location:teacher_dashboard.php');
						exit();}
					if($type=='admin'){
					header('location:./admin/admin_dashboard.php');
					exit();}
				}
				else
				{
					$errors[] = "Wrong Email or Password";
				}
			}
			else
			{
				$errors[] = "Wrong Email or Password";
			}

		}
		else
		{
			$errors[] = "Email address is not valid";
		}

	}
	else
	{
		$errors[] = "Email and Password are required";
	}

}
?>

<!doctype html>
<html>
<head>
<link rel="stylesheet" href="./teacher_login.css">

</head>
<body>
<div class="nav-container">

        <nav>


                <img src="teacher_images/logo.png" align="right" width="60px" height="60px">


        </nav>
<div style="width:1100px; margin-left:-10px;margin-top:-50px;"class="wrapper">
            <div class="container">
        <p class="login-text" style=" font-weight: 800; padding-left: 80px;">Login</p>
			<?php
				if(isset($errors) && count($errors) > 0)
				{
					foreach($errors as $error_msg)
					{
						echo '<div class="alert alert-danger">'.$error_msg.'</div>';
					}
				}
			?>
				<form action="" method="POST" class="login-email">
			<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
				<div class="input-group">
					<label for="email" class="label">Email:</label>
					<input type="text" name="email" placeholder="Enter Email" class="form-control">
				</div>
				<div class="input-group">
				<label for="email" class="label">Password:</label>
					<input type="password" name="password" placeholder="Enter Password" class="form-control">
				</div>

				<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="teacher_registration.php">Register Here</a>.</p>
			</form>
			<div class="login-image">
                    <!-- <img src="teacher_images/te1-removebg-preview.png" alt=""/> -->
                    </div>
		</div>
	</div>
</div>
</body>
</html>
