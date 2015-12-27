<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="../style/style_login.css">
		<link href='http://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
	</head>

	<body>

		<div class="login">
			<div class="login-header">
				<h1>e-Learning SMA N 2 Grabag</h1>
			</div>
            <?php
            error_reporting(0);
            if($_GET['action']=='gagal'){
                echo "Password salah";
            }
            
            ?>
            
            
			<form action="login-check.php" method="POST">
				<div class="login-form">
					<h3>Username:</h3>
					<input type="text" name="frm_username" placeholder="Username" />
					<br>
					<h3>Password:</h3>
					<input type="password" name="frm_password" placeholder="Password" />
					<br><br>
					<input type="submit" value="Login" class="btn-login" />
                    
					<br><br>
				</div>
			</form>
		</div>

	</body>

</html>