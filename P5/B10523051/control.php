<?php
session_start();
if (!isset($_POST["fun"])) {
  header("Location: login.php");
}else{ 
  $fun = $_POST["fun"];
}
if ($fun == "登入成功") {
  $_SESSION['snumber']=$_POST['tbxNumber'];
  $_SESSION['name']=$_POST['tbxName'];
  $_SESSION['pw']=$_POST['tbxpw'];
  header("Location: success.php");
}elseif ($fun == "登入失敗") {
  $_SESSION["success"] = "no";
  $_SESSION["fail"] = "yes";
  header("Location: fail.php");
}elseif ($fun == "重新登入") {
  $_SESSION["success"] = "no";
  $_SESSION["fail"] = "no";
  header("Location: login.php");
}elseif ($fun == "回登入畫面") {
  $_SESSION["success"] = "no";
  $_SESSION["fail"] = "no";
  header("Location: login.php");
}
?>