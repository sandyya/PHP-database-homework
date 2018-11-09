<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>練習3</title>

<?php
$name = array("姓名","王一", "張二","吳三","Ray","KiKi","KuKu");
$chi = array("國文", 90, 80, 70, 80, 60, 65);
$eng = array("英文", 100, 85, 90, 65, 85, 75);
$math = array("數學", 80, 90, 95, 90, 80, 85);
$class=array($name,$chi,$eng,$math);

function getgrade($a){
	global $name,$chi,$eng,$math;
	for($i=0;$i<count($name);$i++){
		if($a==$name[$i]){
			print $name[0]."：".$name[$i]."<br/>";
			print $chi[0]."：".$chi[$i]."<br/>";
			print $eng[0]."：".$eng[$i]."<br/>";
			print $math[0]."：".$math[$i]."<br/>";
			$sum=$chi[$i]+$eng[$i]+$math[$i];
			print"總分：".$sum."<br/>";
			$avg=(float)($sum/3.0);
			print"平均".number_format($avg,2)."<br/>";
			return 0;
		}
	}
	print "姓名：".$a."<br/>! 學生不存在 !";
	return 0;
}
?>
</head>
<body>
<table border="1">
<?php 
for($i=0;$i<7;$i++){
	print "<tr>";
	for($j=0;$j<4;$j++){
		print "<td>".$class[$j][$i]."</td>";
	}
	print "</tr>";
}
?>
</table>
<?php 
getgrade("張二");
getgrade("Lin");
?>
</body>
</html>
