<?php

	require("register.php");
	error_reporting(E_ALL);
	ini_set('display error', 1);

	if(isset($_POST["loginButton"])){
		
		$loginEmail = $_POST["loginEmail"];
		$loginPassword = $_POST["loginPassword"];
		
		$query = "SELECT * FROM user WHERE email='$loginEmail' and password='$loginPassword'";
 
		$result = mysqli_query($conn,$query) or die(mysql_error());
		$count = mysqli_num_rows($result);
		//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
		if ($count == 1){
			echo"Valid login.";
		}else{
		//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
		echo "Invalid Login Credentials.";
		}
		
			
			
			
	
	}







?>