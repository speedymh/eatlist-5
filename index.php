<!DOCTYPE>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">		
    <link rel="stylesheet"  type="text/css" href="css/style.css">
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="js/function.js"></script>
	</head>
	
	<body>
		<?php
			session_start();
			
			if(isset($_POST['login'])) {
				$db = mysqli_connect('', 'root', 'Mi1wds3hL', 'eatlist');
				$username = strip_tags($_POST['login-field-name']);
				$passwort = strip_tags($_POST['login-field-pw']);
				
				$username = stripslashes($username);
				$passwort = stripslashes($passwort);
				
				$username = mysqli_real_escape_string($db, $username);
				$passwort = mysqli_real_escape_string($db, $passwort);
				
				$passwort = md5($passwort);
				
				$sql = "SELECT * FROM benutzerdaten WHERE username='$username'";
				$query = mysqli_query($db, $sql);
				$row = mysqli_fetch_array($query);
				$id = $row['id']; //!!!!!!!!!!!!
				$db_passwort = $row['passwort'];
				
				if($passwort == $db_passwort) {
					$_SESSION['login-field-name'] = $username;
					$_SESSION['id'] = $id;
					header("Location: test1.php");
					echo "Alles Supi";
				} else {
					echo "Versuchs nochmal";
				}
			}
		
			if(isset($_SESSION['register'])) {
				$db = mysqli_connect('', 'root', 'Mi1wds3hL', 'eatlist');
				
				$username = strip_tags($_POST['login-field-name']);
				$passwort = strip_tags($_POST['login-field-pw']);
				
				$username = stripslashes($username);
				$passwort = stripslashes($passwort);
				
				$username = mysqli_real_escape_string($db, $username);
				$passwort = mysqli_real_escape_string($db, $passwort);
				
				$passwort = md5($passwort);
				
				$sql_store = "INSERT into benutzerdaten (benutzername, passwort) VALUES ('$username','$passwort')";
				sql_fetch_username = "SELECT benutzername FROM benutzerdaten WHERE benutzername = '$username'";
				
				$query_username = mysqli_query($db, $sql_fetch_username);
				
				if(mysqli_num_rows($query_username)) {
					echo "There is already a user with that name!";
					return;
				}
				
				if ($passwort == "") {
					echo "Please insert a password";
					return;
				}
			}
		?>
		
		
		<section class="wrapper">
  		<img src="images/eatlist-logo.svg">
  		<p class="text">Hey Chef!<br> What do you want to do?</p>
  		<form action="index.php" method="post" class="cta-wrapper">
				<div class="cta">
					<button class="login-button" type="button" name="login">
						Login
						<i class="fa fa-chevron-right i-login" aria-hidden="true"></i> 
					</button>
					<button class="register-button" type="button" name="register">
						Register 
						<i class="fa fa-chevron-right i-register" aria-hidden="true"></i>
					</button>
				</div>
				<input type="text" placeholder="username" class="input-login" name="login-field-name">
				<input type="password" placeholder="password" class="input-login" name="login-field-pw">
				
				<input type="text" placeholder="username-register" class="input-register" name="register-field-name">
				<input type="password" placeholder="password-register" class="input-register" name="register-field-pw">
			</form>
		</section>
	</body>
</html>