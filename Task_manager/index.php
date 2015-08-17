<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title></title>
  <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>


	
		<div id="logo">
			Task manager
		</div>
		<h2 id="intro">This is TaskMan. It is a free and simple online task manager.</h2>

		<div id="login_container">
		<h2>Sign in</h2>
		<form name="register" method="POST" action="login.php">
			<label>Username</label><br />
			<input type="text" id="loginUsername" name="loginUsername" /><br />
			<label>Password</label><br />
			<input type="password" id="loginPassword" name="loginPassword" /><br />
			<input type="submit" id="loginButton" name="loginButton" /><br />
		</form>
	</div>

	<div class="register">
		<a href="register_page.php">Register</a>
	</div>





</body>
</html>
