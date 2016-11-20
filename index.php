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
			$con = mysqli_connect("", "root", "Mi1wds3hL");
		
			mysqli_select_db($con, "eatlist");
		
			$res = mysqli_query($con, "SELECT * FROM benutzerdaten");
		
			$num = mysqli_num_rows($res);
		
			if($num > 0) echo "Ergebnis:<br>";
			else echo "Keine Ergebnisse<br>";
		
			$dsatz = mysqli_fetch_assoc($res);
			if ("$_POST['login-filed-name'] == $dsatz['benutzername']") {
				echo "Hat geklappt";
			}
		
		mysqli_close($con);
		?>
		
		
		<section class="wrapper">
  		<img src="images/eatlist-logo.svg">
  		<p class="text">Hey Chef!<br> What do you want to do?</p>
  		<form action="test1.php" method="post" class="cta-wrapper">
				<div class="cta">
					<button class="login-button" type="button" name="login" formaction="index.php">
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