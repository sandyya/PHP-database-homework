<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>系統登入</title>
</head>
<body>
<?php
session_start();  

$valid = array("snumber"=>"9923701","name"=>"黃一","pw"=>"1073299");
$valid = array("snumber"=>"9923702","name"=>"吳二","pw"=>"2073299");

if(isset($_POST['tbxNumber']) and isset($_POST['tbxName']) and isset($_POST['tbxpw'])){
	if($_POST['tbxNumber'] == $valid['snumber'] && $_POST['tbxName'] == $valid['name'] && $_POST['tbxpw'] == $valid[pw]){
		$_SESSION['snumber']=$_POST['tbxNumber'];
		$_SESSION['name']=$_POST['tbxName'];
		header('Location: success.php');
	}
	else{
		$_SESSION['snumber']=$_POST['tbxNumber'];
		$_SESSION['name']=$_POST['tbxName'];
		header('Location: fail.php');
	}
}
?>
<form name="login" method="post" action="control.php">
<h2>&nbsp;&nbsp;&nbsp;系統登入</h2>
學號：<input type="text" name="tbxNumber"><br/>
姓名：<input type="text" name="tbxName"><br/>
密碼：<input type="password" name="tbxpw"><br/>
<input type="submit" name="fun" value="送出"/>
<input type="reset" name="fun" value="重填">
</form>
</body>
</html>