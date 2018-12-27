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
    if($fun == "回修改主畫面"){
        $_SESSION["success"] = "no";
        $_SESSION["fail"] = "no";
        header("Location:veiw.php"); //畫面轉跳
        return 0;
	}
}

// 是否是表單送回
if ( isset($_POST['modify']) ) {// 取得SQL指令
    $modify =$_POST['modify'];
	if($modify=="修改"){
		if(isset($_SESSION["name"]) ) {
			$link = mysqli_connect("localhost", "root", "", "customer")or die("無法開啟MySQL資料庫連接!<br/>");// 開啟MySQL的資料庫連接
			$cust_no = $_SESSION["cust_no"];
			$name = $_POST["name"];
			$id = $_POST["id"];
			$tel_no = $_POST["tel_no"];
			$address = $_POST["address"];
			if(strlen($name)>0 && strlen($id)>0 && strlen($tel_no)>0 && strlen($address)>0){
				$sql = "UPDATE basic ";
				$sql.= "SET id = '$id', tel_no='$tel_no', address = '$address' , name = '$name'";
				$sql.= " WHERE cust_no = ".$cust_no;
				
				if(mysqli_errno($link)!=0){
					echo "錯誤訊息". mysqli_error($link);
				}
				
				mysqli_query($link, 'SET NAMES utf8');		
				$result = mysqli_query($link, $sql);// 執行SQL查詢
				mysqli_free_result($result);
				mysqli_close($link);
				
				$_SESSION["Result"]= "!資料修改成功!";
				header('Location: result.php'); 
				return 0;
			}else{
				$_SESSION["Result"]= "!資料修改失敗!";
				header('Location: result.php'); 
				return 0;
			}
		}else{
			$_SESSION["Result"]= "!資料修改失敗!";
			header('Location: result.php'); 
			return 0;
		}
				
	}
}

?>
