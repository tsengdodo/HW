<?php session_start();?>

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
<div class="login">
<?php
include("contain.php");
if (isset($_POST['id'])) {
	$id=$_POST['id'];
	$pw=$_POST['pw'];
}

//搜尋資料庫資料
$sql="SELECT * FROM member_table WHERE username=$id AND password=$pw";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($result);

//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員

if($id!=null && $pw!= null && $row[1]==$id && $row[2]==$pw){
	//將帳號寫入session，方便驗證使用者身份
	$_SESSION['username']=$id;  
	echo '登入成功!';
	echo '<meta http-equiv=REFRESH CONTENT=1;url=first.php>';
}
else{
	echo '登入失敗!';
	echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
}

?>
</div>