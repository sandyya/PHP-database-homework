<html>
<head>
<meta charset="utf-8" />
<title>P11</title>
</head>
<body>

<?php
session_start();
if (isset($_SESSION["main"])){
    if ($_SESSION["main"] == "Query")
        header("Location: Query/veiw.php");
    if ($_SESSION["main"] == "Add")
        header("Location: Add/veiw.php");
    if ($_SESSION["main"] == "Modify")
        header("Location: Modify/veiw.php");
    if ($_SESSION["main"] == "Delete")
        header("Location: Delete/veiw.php");
}

?>

<h1>資料管理系統</h1>
<hr size="1px" align="center" width="100%">
	
<form name= "Menu" method="post" action="Mcontrol.php">

<p>1.<input type="submit" name="Query" value="查詢"></p>
<p>2.<input type="submit" name="Add" value="新增"></p>
<p>3.<input type="submit" name="Modify" value="修改"></p>
<p>4.<input type="submit" name="Delete" value="刪除"></p>

</form>
<hr size="1px" width="100%">
</body>
</html>