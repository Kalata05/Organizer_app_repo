<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title></title>
  <link rel="stylesheet" type="text/css" href="style.css">
  
</head>
<body>


	
		<div id="logo">
			Simple task manager
		</div>
		<h2 id="intro">This is Simple task manager - the only task manager you will ever need.</h2>

		<div id="login_container">
		<h2>Sign in</h2>
		<form name="register" method="POST" action="login.php"> <!--Why form fucks up required -->
			<label>Username</label><br />
			<input type="text" id="username" name="username" maxlength="20" minlength="3" placeholder="username" required><br />
			<label>Password</label><br />
			<input type="password" id="loginPassword" name="loginPassword" maxlength="10" minlength="3" placeholder="password" required><br />
			<input type="submit" id="loginButton" name="loginButton" value="Sign in" /><br />
			<div class="register">
		<a href="register_page.php">Register</a>
	</div>
		</form>
	</div>

<footer id="footer">
	<h3>Copyright Team recommen 2015</h3>
</footer>



</body>
</html>
