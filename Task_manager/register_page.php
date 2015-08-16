<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title></title>
  <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>


	<div id="reg_container">
		<h2>Register</h2>
		<form name="register" method="POST" action="register.php">
			<label>Email</label><br />
			<input type="email" id="email" name="email" /><br />
			<label>Username</label><br />
			<input type="text" id="username" name="username" /><br />
			<label>Password</label><br />
			<input type="text" id="password" name="password" /><br />
			<label>Repeat password</label><br />
			<input type="text" id="password_r" name="password_r" /><br />
			<input type="checkbox" id="check_terms" name="checkbox" />Read terms<br />
			<input type="submit" id="register_button" name="register_button" /><br />
		</form>
	</div>
	



</body>
</html>
