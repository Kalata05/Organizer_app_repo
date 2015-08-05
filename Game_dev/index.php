<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>

</head>
<body>
	<h2>Register</h2>
	<form name="register" method="POST" action="register.php">
		<label>Email</label><br />
		<input type="email" id="email" name="email" required /><br />
		<label>Username</label><br />
		<input type="text" id="username" name="username" required /><br />
		<label>Password</label><br />
		<input type="password" id="password" name="password" required/><br />
		<label>Repeat password</label><br />
		<input type="password" id="password_r" name="password_r" required/><br />
		<input type="checkbox" id="check_terms" name="checkbox" required />Read terms<br />
		<input type="submit" id="register_button" name="register_button" /><br />
		
	</form>
	
	<h2>Login</h2>
	<form name="register" method="POST" action="login.php">
		<label>Email</label><br />
		<input type="email" id="loginEmail" name="loginEmail" required /><br />
		<label>Password</label><br />
		<input type="password" id="loginPassword" name="loginPassword" required /><br />
		<input type="submit" id="loginButton" name="loginButton" /><br />
		
	</form>


</body>
</html>
