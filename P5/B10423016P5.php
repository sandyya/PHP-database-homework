<!DOCTYPE html>

<?php
header("content-type:text/html;charset=utf-8");
session_start();
$validM = array("9923701","9923702");
$validN = array("黃一","吳二");
$validP = array("1073299","2073299");

//檢查帳號密碼
if(isset($_POST['taxMember']) and isset($_POST['taxName'])and isset($_POST['taxPassword'])){
	$sucess = FALSE;
	for($i=0;$i<count($validM);$i++){
		if($_POST['taxMember']==$validM[$i] &&$_POST['taxName'] == $validN[$i]&&$_POST['taxPassword'] == $validP[$i]){
			$sucess = TRUE;
		}
	}
	//登入錯誤, 重新輸入
	$_SESSION['Member']=$_POST['taxMember'];
	$_SESSION['Name']=$_POST['taxName'];
	if($sucess){
		//進入會員區
		header('Location: B10423016P5-1.php');
	}else{
		header('Location: B10423016P5-2.php');
	}
}
?>

<html>
<head>
<meta charset="utf-8" />
<title>練習5</title>
</head>
<body>
<?php

//如果是因為登入錯誤回到此畫面, 顯示重新登入訊息

if($_SESSION['logErr']){
     $_SESSION['logErr']=FALSE;
 }
 else{   
   $_SESSION['logErr']=TRUE;
 }

 ?>

<form action=<?php echo $_SERVER['PHP_SELF'];?> method="post">

<h2>系統登入</h2>
<p>學號: <input type= "text" name="taxMember" size="15" value=""/></p>
<p>姓名: <input type= "text" name="taxName" size="15" value=""/></p>
<p>密碼: <input type= "password" name="taxPassword" size="15" value=""/></p>
<input type="submit" value="送出"/>
<input type="reset" value="重填"/>
</form>
</body>
</html>