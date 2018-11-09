
<?php

header("content-type:text/html;charset=utf-8");
session_start();
$msg = "";

?>
<html>
<head>
<meta charset="utf-8" />
<title>練習5成功</title>
</head>
<body>
<form action=<?php echo $_SERVER['PHP_SELF'];?> method="post">

<h2>登入成功</h2>

學號：<?php echo $_SESSION['Member']?><br/>
姓名：<?php echo $_SESSION['Name']?><br/>

<p>!系統登入成功!</p>
</form>
</body>
</html>