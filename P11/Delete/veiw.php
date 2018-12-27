<html>
<head>
<meta charset="utf-8" />
<title>Delete</title>
</head>
<body>

<?php
session_start();   // 啟用交談期
if (isset($_SESSION["success"])){
    if ($_SESSION["success"] == "yes"){
        header("Location: success.php");
    }elseif ($_SESSION["fail"] == "yes"){ 
        header("Location: fail.php");
    }elseif (isset($_SESSION["fail"])){
        if ($_SESSION["fail"] == "yes"){
            header("Location: fail.php");
		}
    }elseif (isset($_SESSION["main"])){
        if ($_SESSION["main"] == "b"){
            header("Location: ../P11.php");
		}
	}
}            
?>
<h1>資料庫管理系統-刪除</h1>
<hr size="1px" align="center" width="100%">

<form name="search" method="post" action="control.php">
    <p>客戶代號：<input type="text" name="cust_no"></p>
        
    <input type="submit" name="query" value="查詢">
    <input type="reset" value="清除">
	<input type="submit" name="return" value="回主畫面">
</form>

<hr size="1px" align="center" width="100%">
</body>
</html>