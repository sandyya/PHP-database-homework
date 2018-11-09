<?php

header("content-type:text/html;charset=utf-8");
session_start();
$msg = "";

?>
<html>
	<head>
		<meta charset="utf-8" />
		<title>練習5失敗</title>
	</head>
	<body>
		<form action=<?php echo $_SERVER['PHP_SELF'];?> method="post">
			<h2>登入失敗</h2>
			學號：<?php echo $_SESSION['Member']?><br/>
			姓名：<?php echo $_SESSION['Name']?><br/>
			<p>!系統登入失敗!</p>

			<a href="B10423016P5.php">回系統登入畫面</a>
		</form>
	</body>
</html>