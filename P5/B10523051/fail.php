<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>登入失敗</title>
</head>
<body>
<?php
session_start();  
if (!isset($_SESSION["fail"]))
   header("Location: login.php");
elseif ($_SESSION["fail"] == "no")
   header("Location: login.php");
?>
<form name="login" method="post" action="control.php">
<h2><font color="red">登入失敗</font></h2>
<p>
<input type="submit" name="fun" value="回登入畫面"/>
</form>
</body>
</html>