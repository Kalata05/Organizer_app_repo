<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title></title>
  <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

	<div id="logo">
		Simple task manager<br />
		<a href="index.php">Go back Home</a>
	</div>

	<div id="reg_container">
		<h2>Register</h2>
		<form name="register" method="POST" action="register.php">
			<label>Email</label><br />
			<input type="email" id="email" name="email" minlength="4" maxlength="30" required/><br />
			<label>Username</label><br />
			<input type="text" id="username" minlength="3" maxlength="20" name="username" required/><br />
			<label>Password</label><br />
			<input type="password" id="password" minlength="3" maxlength="10" name="password" required/><br />
			<label>Repeat password</label><br />
			<input type="password" id="password_r" minlength="3" maxlength="30" name="password_r" required/><br />
			<input type="submit" id="register_button" name="register_button" value="Register" /><br />
		</form>
	</div>
	



</body>
</html>
