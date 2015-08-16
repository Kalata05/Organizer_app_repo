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
		
	}
	include("login.php");

	error_reporting(E_ALL);
	ini_set('display error', 1);






/*


	 if(isset($_POST["submit"])){

	 	if(isset($_POST["taskName"])){

	 		$taskName = $_POST["taskName"];

	 		$saveTask = "INSERT INTO $user (TaskName) VALUES ('$taskName')";
	 		mysqli_query($conn, $saveTask) or die(mysqli_error());

	 	}
	 }


*/
		

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title></title>
  	<link rel="stylesheet" type="text/css" href="style_dashboard.css">
  	<script>

  		function createTask(){

  			var id = 1;
  			var firstColor = "rgb(250,250,250)";

  			var taskNameInput = document.getElementById("taskName").value;
			var taskDateInput = document.getElementById("taskDate").value;
			var taskTimeInput = document.getElementById("taskTime").value;

			/* Create the html of the task */

			var task = document.createElement("DIV");

			task.id = id;

			var taskName = document.createTextNode(taskNameInput);
			var taskDate = document.createTextNode(taskDateInput);
			var taskTime = document.createTextNode(taskTimeInput);

			taskNameDiv = document.createElement("DIV");
			taskNameDiv.style.marginLeft = "10px";
			taskNameDiv.style.marginRight = "10px";
			taskNameDiv.style.display = "inline-block";

			taskDateDiv = document.createElement("DIV");
			taskDateDiv.style.marginLeft = "10px";
			taskDateDiv.style.marginRight = "10px";
			taskDateDiv.style.display = "inline-block";

			taskTimeDiv = document.createElement("DIV");
			taskTimeDiv.style.paddingLeft = "10px";
			taskTimeDiv.style.paddingRight = "10px";
			taskTimeDiv.style.display = "inline-block";

			taskNameDiv.appendChild(taskName);
			taskDateDiv.appendChild(taskDate);
			taskTimeDiv.appendChild(taskTime);


			task.appendChild(taskNameDiv);
			task.appendChild(taskDateDiv);
			task.appendChild(taskTimeDiv);

			task.style.width= "100%";
			task.style.height = "50px";


			task.style.backgroundColor = firstColor;
			document.getElementById("container").appendChild(task);




  		}


  	</script>
</head>
<body>


	
		<div id="logo">
			Task manager
		</div>
		<div id="container">

			<div class="title">
				Welcome, <? print_r($_SESSION["username"]); ?>
				
			</div>

			


			
				<input type="text" id="taskName" name="taskName" />
				<input type="text" id="taskDate" name="taskDate" />
				<input type="text" id="taskTime" name="taskTime" />


				<input type="submit" name="submit" id="submit" onclick="createTask()" value="Create Task" />
				<button>Delete task</button>
		
		</div>



</body>
</html>
