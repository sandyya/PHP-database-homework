<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>登入成功</title>
</head>
<body>
<?php
session_start(); 
if (!isset($_SESSION["success"])){
   header("Location: login.php");
}elseif ($_SESSION["success"] == "no"){
   header("Location: login.php");
}
?>
<form name="login" method="post" action="control.php">
<h2>登入成功</h2>
<p>
</form>
</body>
</html>