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

if(isset($_POST['add'])){
	$fun =$_POST['add'];
    if($fun == "回新增畫面"){
        $_SESSION["success"] = "no";
        $_SESSION["fail"] = "no";
        header("Location:veiw.php"); //畫面轉跳
        return 0;
	}elseif( $fun=="新增" ) {
		if(isset($_POST['cust_no'])) {
			$cust_no = $_POST["cust_no"];
            $name = $_POST["name"];
            $id = $_POST["id"];
            $tel_no = $_POST["tel_no"];
            $address = $_POST["address"];
			if(strlen($cust_no)>0 &&strlen($name)>0 && strlen($id)>0 && strlen($tel_no)>0 && strlen($address)>0){
				$sql ="INSERT INTO basic (cust_no,name,id,tel_no,address)";
				$sql.= " VALUES( $cust_no ,'$name' ,'$id' ,'$tel_no' ,'$address')";
				// 開啟MySQL的資料庫連接
				$link = mysqli_connect("localhost", "root", "", "customer")or die("無法開啟MySQL資料庫連接!<br/>");
				//送出UTF8編碼的MySQL指令
				
				if(mysqli_errno($link)!=0){
					 $_SESSION['success'] = 'no';
					 $_SESSION["fail"] = "yes";
					 mysqli_free_result($result);
					 mysqli_close($link);
					 header('Location: fail.php');
					 return 0;
				}
				mysqli_query($link, 'SET NAMES utf8');
				$result = mysqli_query($link, $sql);
				$_SESSION['success'] = 'yes';
				$_SESSION["fail"] = "no";
				header('Location: success.php'); //畫面轉跳
				mysqli_free_result($result);
				mysqli_close($link);
				return 0;
			}else{
				$_SESSION['success'] = 'no';
				$_SESSION["fail"] = "yes";
				mysqli_free_result($result);
                mysqli_close($link);
				header('Location: fail.php'); 
				return 0;
			}
		}
		$_SESSION['success'] = 'no';
		$_SESSION["fail"] = "yes";
 
		mysqli_free_result($result);
		mysqli_close($link);
		header('Location: fail.php'); //畫面轉跳
		return 0;
	}
}



?>