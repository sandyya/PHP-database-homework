<html>
<head>
	<meta charset="utf-8"/>
	<title>login</title>
</head>
<body>
	<?php
	session_start();
	if(isset($_SESSION["success"])){
		if($_SESSION["success"]=="yes"){
			header("Location:success.php");
		}elseif($_SESSION["fail"]=="yes"){
			header("Location:fail.php");
		}
	}elseif(isset($_SESSION["fail"])){
		if($_SESSION["fail"]=="yes"){
			header("Location:fail.php");
		}
	}
	?>

	<form name = "login" action = "control.php" method = "post">
	<h2>學生查詢系統</h2>
	學號：<input type="text" name="id" size="15" value=""/><br/>
	<p>密碼：<input type="password" name = "password" size="15" value=""/></p>
	<input type="submit" name="fun" value="登入"/>
	<input type="reset" value="清除"/>	
	</form>
</body>
</html>