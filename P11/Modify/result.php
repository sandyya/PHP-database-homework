<html>
<head>
<meta charset = 'utf-8'>
<title>result</title>
</head>
<body>
<h1>資料庫管理系統-修改</h1>
<hr size="1px" align="center" width="100%">
<?php
session_start();   // 啟用交談期
echo $_SESSION["Result"];
?>
<p>
<form name="modify" method="post" action="control.php">

<input type = 'submit' name="search" value = "回修改主畫面">
<input type = 'submit' name="return" value = '回主畫面'>
</form>
<hr size="1px" align="center" width="100%">
</body>
</html>