<?php


	$host = "mysql5.000webhost.com";
	$username = "a4191716_iserver";
	$password = "k010203";
	$db = "a4191716_testg";
	
	/*
	$host = "localhost";
	$username = "user_root";
	$password = "010203";
	$db = "game_db";
	*/
	

	$conn = new mysqli($host, $username,$password, $db);

	if($conn->connect_error){
		
		die("Connection failed: " . $conn->connect_error);
		
	};

	session_start();

	error_reporting(E_ALL);
	ini_set('display error', 1);


	if(isset($_POST["loginButton"])){
		
		$loginUsername = $_POST["loginUsername"];
		$loginPassword = $_POST["loginPassword"];



		
		$query = "SELECT * FROM user WHERE username='$loginUsername' and password='$loginPassword'";
 
		$result = mysqli_query($conn,$query) or die(mysqli_error());
		$count = mysqli_num_rows($result);
		if ($count == 1){
			
			$_SESSION["username"] = $loginUsername;
			$_SESSION["password"] = $loginPassword;
			$_SESSION["query"] = $conn;
			header("Location:profile.php");


		}else{
		echo "Invalid Login Credentials.";
		}
		
			
	
	}

?>