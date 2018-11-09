<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>練習4</title>
</head>
<body>
<?php
$error = "";   
$msg = "";// 初始變數值
$id = "";  // 保留的欄位值
$name = "";
$showform = true;  // true顯示表單
// 檢查是否是表單送回
if ( isset($_POST["send"]) ){
	$id = $_POST["ID"];
	$name = $_POST["Name"];
	$sj = $_POST["SJ"];
	$msg .= "<p>學號：".$id."</p>";
	$msg .= "<p>姓名：".$name."</p>";
	$gender = $_POST["Gender"]; 	
	switch ($gender) {
		case "male":
			 $msg .= "<p>性別：男</p>";
			 break;
		case "female":
			 $msg .= "<p>性別：女</p>";
			 break;
	}
	$msg .= "興趣：";
	$a=array();
	if (isset($_POST["WP"]))
		array_push($a,"寫程式");
	if (isset($_POST["SW"]))
		array_push($a,"上網");
	if (isset($_POST["SP"]))
		array_push($a,"逛街");
	if (isset($_POST["EX"]))
		array_push($a,"運動");
	$i=count($a);
	foreach($a as $value){
		$msg .=$value;
		if($i-1>0){
			$msg .=", ";
			$i--;
		}
	}

	$expertise = $_POST["Expertise"]; 
	switch ($expertise) {
		case "IT":
			$msg .="<p>專長：資訊技術</p>";
			break;
		case "IM":
			$msg .="<p>專長：資訊技術</p>";
			break;
	}	
		
	$showform = false;
}

	
$msg .= "<p>建議：<br/>".nl2br($sj)."<br/>";
print $msg;

?>
</body>
</html>