<html>
<head>
<meta charset = 'utf-8'>
<title>fail.php</title>
</head>
<body>
<?php
session_start();   // 啟用交談期
if (!isset($_SESSION["fail"])){
	header("Location: view.php");
}elseif ($_SESSION["fail"] == "no"){
	header("Location: view.php");
}elseif (isset($_SESSION["main"])){
	if ($_SESSION["main"] == "b"){
		header("Location: ../P11.php");
	}
}

?>
<h1>資料庫管理系統-新增</h1>
<hr size="1px" align="center" width="100%">
<font color="#FF0000">!資料新增失敗!</font><p>

<form name="add" method="post" action="control.php">

<input type = 'submit' name="add" value = '回新增畫面'/>
<input type = 'submit' name="return" value = '回主畫面'/>

</form>
<hr size="1px" align="center" width="100%">
</body>
</html>