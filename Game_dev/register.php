<?php

// connect to db

$host = "mysql5.000webhost.com";
$username = "a4191716_iserver";
$password = "k010203";
$db = "a4191716_testg";

$conn = new mysqli($host, $username,$password, $db);

if($conn->connect_error){
	
	die("Connection failed: " . $conn->connect_error);
	
} echo "Connected sussesfully";

if(isset($_POST["register_button"])){

	if(isset($_POST["email"])){

			if(isset($_POST["username"])){
				if(isset($_POST["password"])){

					$email = $_POST["email"];
					$username_u = $_POST["username"];
					$password_p = $_POST["password"];
	


				}
			}

	}	

	
	// add user to db
	
	$Add_User = "INSERT INTO user (email, username, password) VALUES ('$email', '$username_u', '$password_p')";
	
	if($conn->query($Add_User)){
		
		echo "You have been successfully registered.";
		
	}else echo "Error registering" . $Add_User . "br />";
	
		echo $_POST["email"] . "<br />";
		echo $_POST["username"] . "<br />";
		echo $_POST["password"] . "<br />";
	
}







?>