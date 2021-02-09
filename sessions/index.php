<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>

	<?php 

	    session_start();
	    if(isset($_SESSION['login']))
	    {
	    	header('Location:dashboared.php');
	    }

		if($_SERVER['REQUEST_METHOD']==='POST')
		{
			$email = trim($_POST['user_email']);
			$pass = trim($_POST['password']);

			if($email=='admin@gmail.com' && $pass=='admin'){
				$_SESSION['login'] = "you have been loged in";
				header('Location:dashboared.php');
			}
		}
	 ?>
	<div class="form-container">
		<form method="POST">
		<label>Enter Email : </label>
		<input type="email" name="user_email">
		<label>Enter Password</label>
		<input type="password" name="password">
		<input type="submit" name="" value="Login">
	</form>
	</div>
</body>
</html>