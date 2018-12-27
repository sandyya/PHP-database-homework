<html>
<head>
<meta charset="utf-8" />
<title>success</title>
</head>
<body>
<?php
session_start();   // 啟用交談期
if (!isset($_SESSION["success"])){
	header("Location: view.php");
}elseif ($_SESSION["success"] == "no"){
	header("Location: view.php");
}elseif (isset($_SESSION["main"])){
	if ($_SESSION["main"] == "b"){
		header("Location: ../P11.php");
	}
}     

?>

<h1>資料庫管理系統-修改</h1>
<hr size="1px" align="center" width="100%">
<form name="modify" method="post" action="control_yesno.php">
客戶代號：<?php echo $_SESSION['cust_no']?><br> 
姓名：　　<input type="text" name="name" value="<?php echo $_SESSION['name']?>"><br>
統一編號：<input type="text" name="id" value="<?php echo $_SESSION['id']?>"><br>
電話號碼：<input type="text" name="tel_no" value="<?php echo $_SESSION['tel_no']?>"><br>
地址：　　<input type="text" name="address" value="<?php echo $_SESSION['address']?>"><P>
<input type="submit" name="modify" value="修改">
<input type="submit" name="search" value="回修改主畫面">
<input type="submit" name="return" value="回主畫面">

<hr size="1px" align="center" width="100%">
</form>
</body>
</html>