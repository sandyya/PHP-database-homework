<html>
<head>
<meta charset="utf-8"/>
<title>fail</title>
</head>
<body>
<?php
session_start();
if(!isset($_SESSION["fail"])){
	header("Location:login.php");
}elseif($_SESSION["fail"]=="no"){
	header("Location:login.php");
}
?>
<form name="login" method="post" action="control.php">
<h2>學生查詢系統</h2>
<p>學號：<input type="text" size="10" value="<?php echo $_SESSION['id'] ?>"/></p>

<p>!登入失敗!</p>
<input type="submit" name="fun" value="回登入畫面"/>

</form>

</body>

</html>