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

<h1>資料庫管理系統-刪除</h1>
<hr size="1px" align="center" width="100%">

客戶代號：<?php echo $_SESSION['cust_no']?><br>
姓名：　　<?php echo $_SESSION['name']?><br>
統一編號：<?php echo $_SESSION['id']?><br>
電話號碼：<?php echo $_SESSION['tel_no']?><br>
地址：　　<?php echo $_SESSION['address']?><P>

<form name="delete" method="post" action="control_yesno.php">
<font color="#FF0000">是否真的要刪除?</font>
<input type = 'submit' name="execute" value="是">
<input type = 'submit' name="execute" value="否">


<hr size="1px" align="center" width="100%">
</form>
</body>
</html>