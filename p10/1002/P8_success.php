<html>
<head>
<meta charset="utf-8" />
<title>P9</title>
</head>
<body>
    <h1>基本資料管理系統-查詢</h1>
    <hr size="1px" align="center" width="100%">
<?php
$num = $_POST["number"];
print "編號: ".$num."<br/>";

// 建立Access的資料庫連接
$db = dirname(__FILE__) ."/testdb.mdb";
$dsn = "DRIVER={Microsoft Access Driver (*.mdb, *.accdb)}; DBQ=$db;";
$username = "";
$password = "";
$link = odbc_connect($dsn, $username, $password);

if ( !$link ) {
	echo "Access資料庫連接錯誤!<br/>";
	exit();
}
 // 執行SQL查詢
$sql = "SELECT * FROM users WHERE `No` = $num";
$result = odbc_exec($link, $sql);
$row = odbc_fetch_array($result);

if (isset($row["No"])) {
	
    print "姓名: ".mb_convert_encoding($row["Name"], "UTF-8", "BIG5")."<br/>";
	print "地址: ".mb_convert_encoding($row["Address"], "UTF-8", "BIG5")."<br/>";
	print "電話: ".$row["Tel"]."<br/>";
    print "生日: ".$row["Birthday"]."<br/>";
	print "Email: ".$row["Email"]."<br/>";
	print "等級: ".$row["Priority"]."<br/>";
	print "<br/>";
} else {
    echo "<br/>!資料不存在!<br/>";
	print "<br/>";
}  
odbc_free_result($result);
odbc_close($link);
?>
<form method="post" action="P8_search.php">
<input type="submit" value="回查詢畫面">
<hr size="1px" align="center" width="100%">
</form>
</body>
</html>