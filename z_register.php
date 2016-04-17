<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>憨廬的簡易留言板</title>
	<link href="indexm.css" rel="stylesheet" type="text/css">
	
	</head>
<body class="background">
	<div>
	<img src="mes1.jpg">
	</div>

</body>
</html>

<?php

//連接資料庫
include("contain.php");?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<div class="login">
<form name="form" method="post" action="z_register_finish.php">
帳號 <input type="text" name="id"><br/>(20個以內的數字)<br/><br/>
密碼 <input type="password" name="pw"><br/>(20個以內的數字)<br/><br/>
電話 <input type="text" name="telephone"><br/><br/>
地址 <input type="text" name="address"><br/><br/>
備註 <br/>
<textarea  name="other" cols="45" row="30"></textarea><br/><br/>

<input type="submit" name="button" value="確定" style="font-size: 30px;font-family: 微軟正黑體;">

</form>
</div>