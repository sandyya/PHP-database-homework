<html>
<head>
<meta charset = 'utf-8'>
<title>result</title>
</head>
<body>

<h1>資料庫管理系統-刪除</h1>
<hr size="1px" align="center" width="100%">

<form name="delete" method="post" action="control.php">
<?php
session_start();   // 啟用交談期
echo $_SESSION["exe_result"];
?>
<p>
<input type = 'submit' name="delete" value = "<?php echo $_SESSION["result_btn"]?>">
<input type = 'submit' name="return" value = '回主畫面'>

</form>
<hr size="1px" align="center" width="100%">
</body>
</html>