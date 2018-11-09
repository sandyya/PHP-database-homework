<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>練習4</title>
</head>
<body>

<form name="login" method="post" action="B10423016P4-2.php">
學號: <input type= "text" name="ID" size="15"/><br/>
姓名: <input type= "text" name="Name" size="15"/><br/>
性別:
<input type="radio" name="Gender"
		value="male"　/>男
<input type="radio" name="Gender" 
		value="female"　/>女<br/>

		
		
興趣:
<input type="checkbox" name="WP"/>寫程式
<input type="checkbox" name="SW"/>上網
<input type="checkbox" name="SP"/>逛街
<input type="checkbox" name="EX"/>運動<br/>


專長:
<select name="Expertise">
<option value="IT" selected="True">資訊技術</option>
<option value="IM">資訊管理</option>
</select><br/>


建議:<br/>
<textarea name="SJ" rows="5" cols="50"  ?>
</textarea><br/>
<input type="hidden" name="Type" value="Member"/><br/>
<input type="submit" name="send" value="送出"/>
<input type="reset" value="清除"/>
</form>

</body>
</html>
