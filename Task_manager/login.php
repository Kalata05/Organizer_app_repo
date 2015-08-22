<?php

	
	$host = "mysql5.000webhost.com";
	$username = "a4191716_iserver";
	$password = "k010203";
	$db = "a4191716_testg";
	
	
	
	/*$host = "localhost";
	$username = "user_root";
	$password = "010203";
	$db = "game_db";*/
	
	

	$conn = new mysqli($host, $username,$password, $db);

	if($conn->connect_error){
		
		die("Connection failed: " . $conn->connect_error);
		
	}

	session_start();

	error_reporting(E_ALL);
	ini_set('display error', 1);


	if(isset($_POST["loginButton"])){

		if(isset($_POST["username"])){

			if(isset($_POST["loginPassword"])){

				$username = $_POST["username"];
				$loginPassword = mysql_escape_string($_POST["loginPassword"]);

				$lPassword = hash("md5", $loginPassword);
				
				$query = "SELECT * FROM user WHERE username='$username' and password='$lPassword'";
 
				$result = mysqli_query($conn,$query) or die(mysqli_error());
				$count = mysqli_num_rows($result);
				if ($count == 1){
					
					$_SESSION["username"] = $username;
					$_SESSION["password"] = $loginPassword;
					$_SESSION["query"] = $conn;

					
					

						header("Location:profile.php");
					




				}else{
				echo "Invalid Login Credentials." . "<br /> <a href='index.php'>Go back</a>";
				}

			}

		}
		


		
			
	
	}

?>