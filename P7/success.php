

<html>
<head>
<meta charset="utf-8"/>
<title>success</title>
</head>

<body>
<?php
session_start();
if(!isset($_SESSION["success"])){
	header("Location:login.php");
}elseif($_SESSION["success"]=="no"){
	header("Location:login.php");
}
?>

<h2>學生查詢系統</h2>
<p>
學號：<input type="text" size="10" value="<?php echo $_SESSION['id'] ?>"/>
登入次數：<input type="text" size="2" value="<?php echo $_COOKIE['counter'] ?>"/>
</p>

<font>國文：<input type="text" size="2" value="<?php echo $_SESSION['ch'] ?>"/><br/></font>
<font>英文：<input type="text" size="2" value="<?php echo $_SESSION['en'] ?>"/><br/></font>
<font>數學：<input type="text" size="2" value="<?php echo $_SESSION['ma'] ?>"/><br/></font>
<p>
<font>平均：<input type="text" size="2" value="<?php echo round(($_SESSION['ch']+$_SESSION['en']+$_SESSION['ma'])/3,2) ?>"/><br/></font>
</p>
<form name="login" method="post" action="control.php">

<font><input type="submit" name="fun" value="回登入畫面"/></font>

</form>

</body>

</html>