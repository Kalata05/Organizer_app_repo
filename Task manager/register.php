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
	
	$email = $_POST["email"];
	$username_u = $_POST["username"];
	$password_p = $_POST["password"];
	
	
	// add user to db
	
	$Add_User = "INSERT INTO user (email, username, password) VALUES ('$email', '$username_u', '$password_p')";
	$result = mysqli_query($conn,$Add_User);
	if($result == 1){
		
		echo "You have been successfully registered.";
		
	}else echo "Error registering" . $Add_User . "br />";
	
	
}







?>