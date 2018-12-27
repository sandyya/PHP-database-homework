<?php
session_start();// 啟用交談期
if(isset($_POST['return'])){
	$fun =$_POST['return'];
	if($fun == "回主畫面"){
		$_SESSION["main"] = 'b';
        header("Location: ../P11.php");
        return 0;
	}
}elseif(isset($_POST['delete'])){
	$fun =$_POST['delete'];
    if($fun == "回刪除畫面"){
        $_SESSION["success"] = "no";
        $_SESSION["fail"] = "no";
        header("Location:veiw.php"); //畫面轉跳
		return 0;
	}
}

// 是否是表單送回
if ( isset($_POST['execute']) ) {
// 取得SQL指令
    $yesorno =$_POST['execute'];
	if($yesorno=="是"){
		if(isset($_SESSION["cust_no"]) ) {
			$cust_no = $_SESSION["cust_no"];
			$name = $_SESSION["name"];
			$id = $_SESSION["id"];
			$tel_no = $_SESSION["tel_no"];
			$address = $_SESSION["address"];
			
			//https://goo.gl/NWpfXY
			$sql = "DELETE FROM basic WHERE cust_no= $cust_no";
			// 開啟MySQL的資料庫連接
			$link = mysqli_connect("localhost", "root", "", "customer")or die("無法開啟MySQL資料庫連接!<br/>");
			//送出UTF8編碼的MySQL指令
	
			if(mysqli_errno($link)!=0){
				echo "錯誤訊息". mysqli_error($link);
			}
	
			mysqli_query($link, 'SET NAMES utf8');
			// 執行SQL查詢
			$result = mysqli_query($link, $sql);
			mysqli_free_result($result);
			mysqli_close($link);
			
			$_SESSION["exe_result"]= "!資料刪除成功!";
			$_SESSION["result_btn"]= "回刪除畫面";
			header('Location: result.php'); //畫面轉跳
			return 0;
		}else{
			$_SESSION["exe_result"]= "<div style='color:red;'>!資料刪除失敗!</div>";
			$_SESSION["result_btn"]= "回刪除畫面";
			header('Location: result.php'); //畫面轉跳
			return 0;
		}
	}elseif($yesorno == "否"){
		$_SESSION["exe_result"]= "!資料沒有刪除!";
		$_SESSION["result_btn"]= "回刪除畫面";
		header('Location: result.php'); //畫面轉跳
		return 0;
	}
}
?>