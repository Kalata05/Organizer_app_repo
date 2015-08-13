<?php

	$host = "mysql5.000webhost.com";
	$username = "a4191716_iserver";
	$password = "k010203";
	$db = "a4191716_testg";

	$conn = new mysqli($host, $username,$password, $db);

	if($conn->connect_error){
		
		die("Connection failed: " . $conn->connect_error);
		
	}
	include("login.php");
	error_reporting(E_ALL);
	ini_set('display error', 1);
	$user = $_SESSION["username"];
	 print_r($_SESSION["username"]);




	 $result = mysqli_query($conn, "SHOW TABLES FROM $db");

	 while($row = mysqli_fetch_row($result)){

	 	$arr[] = $row[0];

	 }


	 if(in_array($user,$arr)){

	 	echo "Table exists";
	 }if(in_array($user,$arr)==0){

	 	echo "Creating table";

	 	 $sql = "CREATE TABLE $user(

	 		TaskName varchar(255) NOT NULL,
	 		TaskDate DATE,
	 		TaskTime TIMESTAMP


	 	)";

		$result = mysqli_query($conn, $sql);
		echo $result;



	 }


	 if(isset($_POST["submit"])){

	 	if(isset($_POST["taskName"])){

	 		$taskName = $_POST["taskName"];

	 		$saveTask = "INSERT INTO $user (TaskName) VALUES ('$taskName')";
	 		mysqli_query($conn, $saveTask) or die(mysqli_error());

	 	}
	 }



		

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title></title>
  	<link rel="stylesheet" type="text/css" href="style_dashboard.css">

</head>
<body>


	
		<div id="logo">
			Simple task manager
		</div>
		<div id="container">

			<div class="title">
				Welcome, 
				
			</div>

			<div id="add_task">
				<a href="addtask.php">Add Task</a>
			</div>

			
				<div class="task">
					<input type="checkbox" id="check_task" />
					<div class="task_name"><?php echo "$taskName;" ?></div>
					<div class="date_task">11.05.2015</div>
					<div class="time_task">12:45</div>
					<div class="remove_task">Remove task</div>
				</div>
				<div class="task">
					<input type="checkbox" id="check_task" />
					<div class="task_name">Name of task</div>
					<div class="date_task">11.05.2015</div>
					<div class="time_task">12:45</div>
					<div class="remove_task">Remove task</div>
				</div>
				<div class="task">
					<input type="checkbox" id="check_task" />
					<div class="task_name">Name of task</div>
					<div class="date_task">11.05.2015</div>
					<div class="time_task">12:45</div>
					<div class="remove_task">Remove task</div>
				</div>

				


			<form name="formTask" id="formTask" method="POST" action="profile.php">
				<input type="text" id="taskName" name="taskName" />
				<input type="submit" name="submit" id="submit" value="Save Task" />
			</form>
		
		</div>



</body>
</html>
