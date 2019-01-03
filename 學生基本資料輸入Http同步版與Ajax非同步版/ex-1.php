<html>
<head>
</head>
<body>
<?php
if (isset($_POST["home"])) 
	header("Location: ex.htm");
?>
<center>
<h3>學生基本資料輸入測試<br><font color="red">Http同步版</font></h3>
<hr>
<form action="ex-1.php" method="post">
學號: <INPUT TYPE="text" NAME="no" value="<?php  if (isset($_POST["sfun"]) && isset($_POST["no"])) echo $_POST["no"]; ?>"><br>
姓名: <INPUT TYPE="text" NAME="name" value="<?php if (isset($_POST["sfun"]) && isset($_POST["name"])) echo $_POST["name"]; ?>"><br>
年齡: <INPUT TYPE="text" NAME="age" value="<?php  if (isset($_POST["sfun"]) && isset($_POST["age"])) echo $_POST["age"]; ?>"><p>
<INPUT TYPE="submit" name="sfun" VALUE="輸入">
<INPUT TYPE="submit" name="rfun" VALUE="清除">
<INPUT TYPE="submit" name="home" VALUE="回主選單"><br>
</form>
<hr>
<?php
if (isset($_POST["sfun"])) 
{
?>
<font color="red">同步輸入資料</font><br>
學號: <?php if (isset($_POST["no"])) echo $_POST["no"]; ?><br>
姓名: <?php if (isset($_POST["name"])) echo $_POST["name"]; ?><br>
年齡: <?php if (isset($_POST["age"])) echo $_POST["age"]; ?><p> 
<?php
}
?>
<hr>
</center>
</body>
</html>