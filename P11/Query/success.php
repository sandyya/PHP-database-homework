<html>
<head>
<meta charset="utf-8" />
<title>success</title>
</head>
<body>
<?php
session_start();   // 啟用交談期
if(!isset($_SESSION["success"])){
	header("Location: view.php");
}elseif($_SESSION["success"] == "no"){
	header("Location: view.php");
}elseif (isset($_SESSION["main"])){
	if ($_SESSION["main"] == "b"){
		header("Location: ../P11.php");
	}
}     

?>

<h1>資料庫管理系統-查詢</h1>
<hr size="1px" align="center" width="100%">

客戶代號：<?php echo $_SESSION['cust_no']?><br>
姓名：　　<?php echo $_SESSION['name']?><br>
統一編號：<?php echo $_SESSION['id']?><br>
電話號碼：<?php echo $_SESSION['tel_no']?><br>
地址：　　<?php echo $_SESSION['address']?><br>

<form name="search" method="post" action="control.php">

<input type="submit" name="search" value="回查詢畫面">
<input type="submit" name="return" value="回主畫面">

<hr size="1px" align="center" width="100%">
</form>
</body>
</html>