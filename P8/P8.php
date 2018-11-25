
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
require_once("open.inc");
$link = mysqli_connect("localhost", "root","","testdb")or die("無法開啟MySQL資料庫連接!<br/>");

mysqli_query($link, 'SET NAMES utf8'); 
$sql="SELECT * FROM `users`";
$result = mysqli_query($link, $sql);
// 一筆一筆的以表格顯示記錄
echo "<table border=1 align=center><tr>";
// 顯示欄位名稱
while ($meta = mysqli_fetch_field($result)){
	echo "<td>".$meta->name."</td>";
}
echo "</tr>"; // 取得欄位數

$total_fields = mysqli_num_fields($result);
// 顯示每一筆記錄
while ($row = mysqli_fetch_row($result)) {
	echo "<tr>"; // 顯示每一筆記錄的欄位值
    for ($i=0; $i <= $total_fields-1; $i++){
		echo "<td>" . $row[$i] . "</td>";
	}
    echo "</tr>";
 }
 echo "</table>";
 mysqli_free_result($result); // 釋放佔用記憶體  
 mysqli_close($link); 
 ?>

 </body>
 </html>