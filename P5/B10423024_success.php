<!DOCTYPE = html>
<html>
<head>
<title>B10423024</title>
</head>
<body>	
		<?php session_start();?>
		<h1>登入成功</h1>
		<h3 style=" display: inline;">學號：</h3>
		<?php echo $_SESSION["IDnumber"]; ?><br>
		<h3 style=" display: inline-block;">姓名：</h3>
		<?php echo $_SESSION["Name"]; ?><br>
		<?php echo "!系統登入成功!"?>
</body>
</html>