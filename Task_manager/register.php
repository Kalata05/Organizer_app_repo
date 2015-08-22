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

if(isset($_POST["register_button"])){

	if(isset($_POST["email"])){

		if(isset($_POST["username"])){

			if(isset($_POST["password"])){

				if(isset($_POST["password_r"])){

					if(strcmp($_POST["password"], $_POST["password_r"]) == 0){

						if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {

							$email = $_POST["email"];

							$username_u = mysql_escape_string($_POST["username"]);

							$password_p = mysql_escape_string($_POST["password"]);

							$passw = hash("md5", $password_p);
						
						//hashing password

						//$passw = hash('sha25',$password_p);
						
						// add user to db
						
							$Add_User = "INSERT INTO user (email, username, password) VALUES ('$email', '$username_u', '$passw')";
							$result = mysqli_query($conn,$Add_User);
							if($result == 1){
							
								header("Location: profile.php");
							
							}}else echo "Error registering. Invalid input. Please make sure you have typed the information correctly.". "<br />" . "<a href='register_page.php'>Go back</a>";
  							

						
	
						
					}else // dont register if the reuired fields are empty
					echo "Error registering. Invalid input. Please check the fields."  . "<br /> " . "<a href='register_page.php'>Go back</a>";
				}
		  	}
		}
	
	}
}







?>