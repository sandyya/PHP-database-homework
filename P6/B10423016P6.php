<html>
<head>
<meta charset="utf-8"/>
<title>練習6</title>
</head>
<body>
<?php
$file  = "C:\\xampp\\htdocs\\p6_input.dat";


if (file_exists($file)) {
	$lines = file($file);  // 將檔案讀入陣列
	foreach ($lines as $line_num => $line) {
		echo $line . "<br/>";
	}
} else{
	print "檔案 $file 不存在<br/>";
}

$fpin  = fopen($file,  "r");
$fpout = fopen("C:\\xampp\\htdocs\\p6_output.dat", "w");
$productno=0;
$line = fscanf($fpin,"%s %s %s %s")or exit("檔案 $file 開啟錯誤<br/>");
while ($line != null) {
	$productno++;
	list($no, $name, $q, $p)=$line;
	echo $productno. " " . $no . " " . $name . " " . $q . " " . $p . "<br/>";
	fprintf($fpout,"%s %s %s %s %s\n",$productno,$no,$name,$q,$p);
	$line=fscanf($fpin,"%s %s %s %s %s");
}
fclose($fpin);
fclose($fpout);
?>
</body>
</html>

