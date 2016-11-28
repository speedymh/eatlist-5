<!DOCTYPE html>
<html>
<head>
	<meta charset = "uft-8">
	<?php 	
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
	<?php 
		echo "HEy there";
	?>
	<p>hi</p>
</body>
</html>