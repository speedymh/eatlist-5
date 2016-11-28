<!DOCTYPE html>
<html>
<head>
		<meta charset="uft-8">
			<?php
			
			session_start();
	
			if(isset($_SESSION['register'])) {
				echo "click";
				$db = mysqli_connect('', 'root', 'Mi1wds3hL', 'eatlist');
				
				$username = strip_tags($_POST['login-field-name']);
				$passwort = strip_tags($_POST['login-field-pw']);
				
				$username = stripslashes($username);
				$passwort = stripslashes($passwort);
				
				$username = mysqli_real_escape_string($db, $username);
				$passwort = mysqli_real_escape_string($db, $passwort);
				
				$sql_store = "INSERT into benutzerdaten (benutzername, passwort) VALUES ('$username','$passwort')";
				$sql_fetch_username = "SELECT benutzername FROM benutzerdaten WHERE benutzername = '$username'";
		
				$query_username = mysqli_query($db, $sql_fetch_username);
				
				if(mysqli_num_rows($query_username)) {
					echo "There is already a user with that name!";
					return;
				}
				
				if ($passwort == "") {
					echo "Please insert a password";
					return;
				}
				
				mysqli_query($db, $sql_store);
				
				header("Location: benutzerdefinierteseite.php");
				
				echo "hat geklappt";
				
			}
?>
	</head>
	<body>
		<p>Moinsen</p>
	</body>
</html>