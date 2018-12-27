<?php
session_start();// 啟用交談期

//四大功能判定
if(isset($_POST['Query'])){
	if($_POST['Query'] == "查詢"){
		$_SESSION["main"] = "Query";
		header("Location: Query/veiw.php"); //畫面轉跳
		return 0;
	}
}

if(isset($_POST['Add'])){
	if($_POST['Add'] == "新增"){
		$_SESSION["main"] = "Add";
		header("Location: Add/veiw.php"); //畫面轉跳
		return 0;
	}
}

if(isset($_POST['Modify'])){
	if($_POST['Modify'] == "修改"){
		$_SESSION["main"] = "Modify";
		header("Location: Modify/veiw.php"); //畫面轉跳
		return 0;
	}
}

if(isset($_POST['Delete'])){
	if($_POST['Delete'] == "刪除"){
		$_SESSION["main"] = "Delete";
		header("Location: Delete/veiw.php"); //畫面轉跳
		return 0;
	}
}
?>