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




if(isset($_POST["log out"])){


	session_destroy();
	header("index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title></title>
  	<link rel="stylesheet" type="text/css" href="style_dashboard.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
	<link rel="stylesheet" href="jquery-ui.css" />
	<script src="jquery-ui.js"></script>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<noscript>Please turn on your Javascript!</noscript>

 
  	<script>



  		function createTaskElements(){



  		}

  		function createTask(){

  			var id = 1;
  			var firstColor = "rgb(250,250,250)";

  			var taskNameInput = document.getElementById("taskName").value;
			var taskDateInput = document.getElementById("taskDate").value;
			var taskTimeInput = document.getElementById("taskTime1").value;
			var taskTimeInput2 = document.getElementById("taskTime2").value;



			if(!taskNameInput){

				alert("Please enter task name.");
				return;

			}else

			if(taskTimeInput > 23){

				alert("Invalid time. Maximum hour can be 23. ");
				return;

			}else

			if((taskTimeInput < 0 )|| (isNaN(taskTimeInput) == true)){

				alert("Invalid time. Hours can't be less then 0 and cannot be a text.");
				return;
			}else


			if(taskTimeInput2 >= 60){

				alert("Invalid time. Maximum minutes can be 59. ");
				return;
			}else

			if((taskTimeInput2) < 0 || (isNaN(taskTimeInput2) == true)){

				alert("Invalid time. Hours can't be less then 0 and cannot be a text.");
				return;
			}else{


					/* Create the html of the task */

					var task = document.createElement("DIV");

					task.id = id;

					var taskName = document.createTextNode(taskNameInput);
					var taskDate = document.createTextNode(taskDateInput);
					var taskTimeh = document.createTextNode(taskTimeInput + " : ");
					var taskTimem = document.createTextNode(taskTimeInput2);

					taskNameDiv = document.createElement("DIV");
					taskNameDiv.style.marginLeft = "10px";
					taskNameDiv.style.marginRight = "10px";
					taskNameDiv.style.display = "inline-block";

					taskDateDiv = document.createElement("DIV");
					taskDateDiv.style.marginLeft = "10px";
					taskDateDiv.style.marginRight = "10px";
					taskDateDiv.style.display = "inline-block";

					taskTimehourDiv = document.createElement("DIV");
					taskTimehourDiv.style.paddingLeft = "0px";
					taskTimehourDiv.style.paddingRight = "0px";
					taskTimehourDiv.style.display = "inline-block";

					taskTimeMinuteDiv = document.createElement("DIV");
					taskTimeMinuteDiv.style.paddingLeft = "5px";
					taskTimeMinuteDiv.style.paddingRight = "0px";
					taskTimeMinuteDiv.style.display = "inline-block";

					taskNameDiv.appendChild(taskName);
					taskDateDiv.appendChild(taskDate);
					taskTimehourDiv.appendChild(taskTimeh);
					taskTimeMinuteDiv.appendChild(taskTimem);




					// Create checkbox

					var checkBox = document.createElement("input");

					checkBox.type="checkbox";
					checkBox.id = id;

				//	checkbox.addEventListener("checked", deleteTask, false);

					task.appendChild(checkBox);
					task.appendChild(taskNameDiv);
					task.appendChild(taskDateDiv);
					task.appendChild(taskTimehourDiv);
					task.appendChild(taskTimeMinuteDiv);

					task.style.width= "100%";
					task.style.height = "50px";


					task.style.backgroundColor = firstColor;
					document.getElementById("container").appendChild(task);

					$('#create').click(function(){

						document.getElementById("taskName").value = "";

					});
				}
					




	  	}



	  		function deleteTask(){

	  			var checkBoxes = document.querySelectorAll('input[type="checkbox"]:checked');

	  			var checkBoxArray = [].slice.call(checkBoxes,0);

	  			checkBoxArray.forEach(function(checkbox){

	  				console.log(checkbox);
	  				checkbox.parentElement.outerHTML = "";



	  			}, this);

	  		}

	  		function deleteAllTasks(){

	  			var checkBoxes = document.querySelectorAll('input[type="checkbox"]');
	  			var AllcheckBoxes = [].slice.call(checkBoxes, 0);

	  			for(var i=0;i<AllcheckBoxes.length;i++)
	  			{
	  				AllcheckBoxes[i].parentElement.outerHTML = "";

	  			}

	  		}



  	</script>
</head>
<body>


	
		<div id="logo">
			Simple task manager
		</div>
		<div id="container">

			<div class="title">
				<?php echo $_SESSION["username"];?>
			</div>
			<a id="log_out" name="log_out" href="index.php">Log out</a>
			<div id="list">
			


					<form name="myform" id="myform" onsubmit="return false">
						<label>Task</label>
						<input type="text" id="taskName" name="taskName" minlength="3" maxlength="100" required/><br />
						<label>Date</label>
						<input type="date" id="taskDate" name="taskDate" required /><br />
						<script>

							var DateElem = document.getElementById("taskDate");
	      					DateElem.setAttribute('type', 'date');
		 
						      if ( DateElem.type === 'text' ) {
						         $('#taskDate').datepicker(); 
						      }


						</script>
						<label>Time</label>
						
						<input type="text" id="taskTime1" name="taskTime1" minlength="2" maxlength="2"/> : <input type="text" id="taskTime2" name="taskTime2" minlength="2"  maxlength="2" />
						<select>
							<option value="AM">AM</option>
							<option value="PM">PM</option>
						</select>
						<br />

						<input type="submit" name="create" id="create" onclick="createTask()" value="Create task" />
						<input type="submit" name="delete" id="delete" onclick="deleteTask()" value="Delete finished task" />
						<input type="submit" name="deleteAll" id="deleteAll" onclick="deleteAllTasks()" value="Delete all tasks" />
				</form>
		
		</div>
		</div>

		<div id="result">
		</div>



</body>
</html>
