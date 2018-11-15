<?php
header("content-type:text/html;charset=utf-8");
session_start();

if(isset($_POST["fun"])){
	$fun=$_POST["fun"];
	if($fun=="回登入畫面"){
		$_SESSION["success"]="no";
		$_SESSION["fail"]="no";
		header('Location:login.php');
		return 0;
	}
}
$file = "score.dat";
$fpin=fopen($file,"r");
$line=fscanf($fpin,"%s %s %s %d %d %d");

while($line!=null){
	list($ID,$PW,$NAME,$CHINESE,$ENGLISH,$MATH)=$line;
	if($_POST["id"]==$ID and $_POST["password"]==$PW){
		if(!isset($_COOKIE['counter'])){
			$counter=1;
			setcookie("counter",$counter,time()+7*24*3600);
			$_SESSION['counter']=FALSE;//不准使用者重新整理網頁虛灌上線次數
		}else{
			$counter=$_COOKIE['counter']+1;
			setcookie("counter",$counter,time()+7*24*3600);
			$_SESSION['counter']=FALSE;//不准使用者重新整理網頁虛灌上線次數
		}
		$_SESSION['success']="yes";
		$_SESSION['fail']="no";
		$_SESSION['id']=$ID;
		$_SESSION['ch']=$CHINESE;
		$_SESSION['en']=$ENGLISH;
		$_SESSION['ma']=$MATH;
		header('Location:success.php');
		return 0;
	}
	$line=fscanf($fpin,"%s %s %s %d %d %d");
}
$_SESSION['id']=$_POST["id"];
$_SESSION['success']="no";
$_SESSION['fail']="yes";
header('Location:fail.php');
session_destroy();

?>