<?php

$validA = array("9923701","9923702");
$validP = array("1073299","2073299");

//檢查帳號密碼
if(isset($_POST['account']) and isset($_POST['passwd'])){
	if($_POST['account'] == $validA[0]) {
		if($_POST['passwd'] == $validP[0] ){
			echo "登入成功";
		}else{
			echo "密碼錯誤";
		}
	}else if($_POST['account'] == $validA[1]){
		if($_POST['passwd'] == $validP[1]){
			echo "登入成功";
		}else{
			echo "密碼錯誤";
		}
	}else{
		echo "帳號錯誤";
	}
}

?>