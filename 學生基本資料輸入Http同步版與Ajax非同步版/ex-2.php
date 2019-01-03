<html>
<head><title>非同步傳輸--POST方法</title>
<script type="text/javascript">
<!--
function Input() { // 按下 '=' 按鈕會執行此函式
	//alert("Input");
	xhr = createXMLHttp();
	// 設定當收到回應資料時, 執行 getData() 函式
	// 使用 POST 方法, 並設定表頭
	//value1 = document.getElementById("no").value;
	//value2 = document.getElementById("name").value;
	//value3 = document.getElementById("age").value;
	value1 = aForm.no.value;
	value2 = aForm.name.value;
	value3 = aForm.age.value;
	url = "respdata.php";
	qs = "no=" + value1 + "&name=" + value2+ "&age=" + value3;
	//alert("url = " + url);
	xhr.onreadystatechange = getData;
	xhr.open("POST", url, true);  // 非同步傳輸 + POST
	xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	xhr.send(qs);  //查詢字串
}
// 收到回應資料時, XMLHttpRequest 物件會自動呼叫此函式
// 函式會將收到的文字內容 
// 設為 id="answer" 的 <span> 標籤之內容
function getData() {
	if (xhr.readyState==4) // 若已收到全部資料
		if (xhr.status==200) // 若 HTTP 狀態 OK
			document.getElementById("result").innerHTML = xhr.responseText;
}
function createXMLHttp() {
	var xhr;
	try {
		xhr = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
		try {
			xhr = new ActiveXObject("Microsoft.XMLHTTP");
		} catch (e1) {
			try {
				xhr = new XMLHttpRequest();
			} catch (e2) {
				xhr = null;
			}
		}
	}
	return xhr;
}

function Clear(){
	//document.getElementById("no").value = "";
	//document.getElementById("name").value = "";
	//document.getElementById("age").value = "";
	document.getElementById("result").innerHTML = "";
	//alert("Clear");
	aForm.no.value = "";
	aForm.name.value = "";
	aForm.age.value = "";
	//aForm.result.innerHTML = "";
}
function home(){
	window.location = "ex.htm";
}
// -->
</script>
</head>
<body>
<center>
<h3>學生基本資料輸入測試<br><font color="red">Ajax非同步版</font></h3>
<hr>
<form id="aForm">
學號: <INPUT TYPE="text" NAME="no"><br>
姓名: <INPUT TYPE="text" NAME="name"><br>
年齡: <INPUT TYPE="text" NAME="age"><p>
<input type="Button" value="輸入" onclick="Input()">
<input type="Button" value="清除" onclick="Clear()">
<input type="Button" value="回主選單" onclick="home()"><br>
</form>
<hr>
<div id="result"></div>
<hr>
</center>
</body>
</html>