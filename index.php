<!DOCTYPE>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">		
    <link rel="stylesheet"  type="text/css" href="css/style.css">
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="js/function.js"></script>
		
		<?php
			session_start();
			
			if(isset($_POST['login'])) {
				$db = mysqli_connect('', 'root', 'Mi1wds3hL', 'eatlist');
				$username = $_POST['login-field-name'];
				$passwort = $_POST['login-field-pw'];
				
				$sql = "SELECT * FROM benutzerdaten WHERE username='$username'";
				$query = mysqli_query($db, $sql);
				$row = mysqli_fetch_array($query);
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
			if (isset($_POST["register"])) 
		{
			$con = mysqli_connect("", "root", "Mi1wds3hL");
			mysqli_select_db($con, "eatlist");
			
			$sql = "INSERT INTO benutzerdaten(benutzername, passwort) values('" . $_POST["register-field-name"] . "', '"
			 . $_POST["register-field-pw"] . "')";
			
			mysqli_query($con, $sql);
			
			$num = mysqli_affected_rows($con);
			if($num>0) {
				echo "<p><font color = '#00aa00'>Ein Datensatz hinzugekommen</font></p>";
			} else {
				echo "<p><font color='#ff0000'>Es ist ein Fehler aufgetreten, es ist kein Datensatz hinzugekommen</font></p>";
			}
			
			mysqli_close($con);
		}
		?>
		
	</head>
	
	<body>	
		
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