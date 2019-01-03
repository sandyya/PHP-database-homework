<?php
if (isset($_POST["fun1"])) 
	header("Location: ex-1.php");
else 
	if (isset($_POST["fun2"]))
		header("Location: ex-2.htm");
	else
		echo("功能選擇錯誤");
?>