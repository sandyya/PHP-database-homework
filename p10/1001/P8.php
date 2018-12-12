
<html>
<head>
<meta charset="utf-8" />
<title>P8</title>
</head>
<body>
<div style="text-align:center;>
	<div style="margin";><h1>testdb資料庫users資料表</h1></div>
</div>
<?php
$db = dirname(__FILE__) ."/testdb.mdb";
$dsn = "DRIVER={Microsoft Access Driver (*.mdb, *.accdb)}; DBQ=$db;";
$username = "";
$password = "";
$link = odbc_connect($dsn, $username, $password);

$sql="SELECT * FROM users";
$result = odbc_exec($link, $sql);// 一筆一筆的以表格顯示記錄
echo "<table border=1 align=center><tr>";// 顯示欄位名稱
for ($i = 1; $i <= odbc_num_fields($result); $i++){
	echo "<td>" . odbc_field_name($result, $i) . "</td>";
}
echo "</tr>"; // 取得欄位數

// 顯示每一筆記錄
while ($rows=odbc_fetch_array($result)){
	echo "<tr><td>".$rows["No"]."</td>";
	echo "<td>".mb_convert_encoding($rows["Name"], "UTF-8", "BIG5")."</td>";
	echo "<td>".mb_convert_encoding($rows["Address"], "UTF-8", "BIG5")."</td>";
	echo "<td>".mb_convert_encoding($rows["Tel"], "UTF-8", "BIG5")."</td>";
	echo "<td>".$rows["Birthday"]."</td>";	
	echo "<td>".$rows["Email"]."</td>";
	echo "<td>".$rows["Priority"]."</td></tr>";	
}
echo "</table>";
odbc_free_result($result); // 釋放佔用記憶體  
odbc_close($link); 
 ?>

 </body>
 </html>