<?php
session_start();// 啟用交談期
if(isset($_POST['return'])){
	$fun =$_POST['return'];
	if($fun == "回主畫面"){
		$_SESSION["main"] = 'b';
        header("Location: ../P11.php");
        return 0;
	}
}

if(isset($_POST['search'])){
	$fun =$_POST['search'];
    if($fun == "回查詢畫面"){
        $_SESSION["success"] = "no";
        $_SESSION["fail"] = "no";
        header("Location:veiw.php"); //畫面轉跳
        return 0;
	}
}
// 是否是表單送回
if ( isset($_POST["cust_no"]) ) {
// 取得SQL指令
    $sql = "SELECT * FROM basic WHERE cust_no=".$_POST["cust_no"];
    // 開啟MySQL的資料庫連接
    $link = mysqli_connect("localhost", "root", "", "customer")or die("無法開啟MySQL資料庫連接!<br/>");
    //送出UTF8編碼的MySQL指令
	
	if(mysqli_errno($link)!=0){
		echo "錯誤訊息". mysqli_error($link);
	}
	
    mysqli_query($link, 'SET NAMES utf8');
    // 執行SQL查詢
    $result = mysqli_query($link, $sql);
	$row = mysqli_fetch_assoc($result);
	
	if (!isset($row["cust_no"])) {    // 返回資料筆數
		$_SESSION['cust_no'] = $_POST["cust_no"];
		$_SESSION['success'] = 'no';
		$_SESSION["fail"] = "yes";
		header('Location: fail.php'); //畫面轉跳
		mysqli_free_result($result);
		mysqli_close($link);
		return 0;
	}else{
		//如果有查到資料
		//將查到的資料存放至 SESSION中
		$_SESSION['success'] = 'yes';
		$_SESSION["fail"] = "no";
		$_SESSION['cust_no'] = $row["cust_no"];
		$_SESSION['name'] = $row["name"];
		$_SESSION['id'] = $row["id"];
		$_SESSION['address'] = $row["address"];
		$_SESSION['tel_no'] = $row["tel_no"];
 
		mysqli_free_result($result);
		mysqli_close($link);
				
		header('Location: success.php'); //畫面轉跳
		return 0;
	}
}



?>