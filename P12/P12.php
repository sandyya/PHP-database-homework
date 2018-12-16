
<html>
<head><title>系統登入</title>
<script type="text/javascript">
<!--
function Input(){
	var url, qs;
	var name, passwd;
	xmlhttp = createXMLHttp();
	if (xmlhttp){
		name = aForm.account.value;
		passwd = aForm.passwd.value;
		url = "P12-1.php";
		qs = "account=" + name + "&passwd=" + passwd;
		xmlhttp.onreadystatechange = showMsg;
		xmlhttp.open("POST", url, true);  // 非同步傳輸 + POST
		xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xmlhttp.send(qs);  //查詢字串
	}
}
function createXMLHttp() {
	var xhr;
	try {
		xhr = new ActiveXObject("Msxml2.XMLHTTP");
	}catch (e) {
		try {
			xhr = new ActiveXObject("Microsoft.XMLHTTP");
		}catch(e1){
			try{
				xhr = new XMLHttpRequest();
			}catch(e2){
				xhr = null;
			}
		}
	}
	return xhr;
}
function showMsg(){
	var strMsg;
	if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
		strMsg = xmlhttp.responseText;
		document.getElementById("result").value = strMsg;
	}
}
//-->
</script>
</head>
<body>
<hr>
<h1>系統登入</h1>
<hr>

<p><h4>輸入帳號密碼</h4></p>

<form id="aForm">

帳號: <INPUT TYPE="text" NAME="account" size="20"><br>
密碼: <INPUT TYPE="password" NAME="passwd"size="20"><br>
<p>
<input type="Button" value="送出" onclick="Input()">
<input type="reset" value="重填">
</p>

<hr>
<p><h4>非同步訊息</h4></p>
<p>訊息欄：<INPUT TYPE="text" id="result" size="20" value=""></p>
<hr>

</form>
</body>
</html>