<?php
	session_start();
	
	
	if(isset($_POST["input"])) {
		if(
		(($_POST["IDnumber"] == "9923701")&&($_POST["Name"] == "黃一")&&($_POST["password"] == "1073299")) 
		|| 
		(($_POST["IDnumber"] == "9923702")&&($_POST["Name"] == "吳二")&&($_POST["password"] == "2073299"))
		){
			$_SESSION["IDnumber"] = $_POST["IDnumber"];
			$_SESSION["Name"] = $_POST["Name"];
			$_SESSION["password"] = $_POST["password"];
			header("Location: B10423024_success.php");
		} else {
			header("Location: B10423024_fail.php");
		}
		
	}