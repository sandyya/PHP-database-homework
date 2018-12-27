<html>
<head>
<meta charset="utf-8" />
<title>Add</title>
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
<h1>資料庫管理系統-新增</h1>
<hr size="1px" align="center" width="100%">

<form name="add" method="post" action="control.php">

客戶代號：<input type="text" name="cust_no" size="15"><p>
姓名：　　<input type="text" name="name" size="15"><p>
統一編號：<input type="text" name="id" size="15"><p>
電話號碼：<input type="text" name="tel_no" size="15"><p>
地址：　　<input type="text" name="address" size="20"><p>
<input type="submit" name="add" value="新增">
<input type="reset" value="清除">
<input type="submit" name="return" value="回主畫面">

</form>

<hr size="1px" align="center" width="100%">
</body>
</html>