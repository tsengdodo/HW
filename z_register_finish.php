<?php session_start(); 
include("contain.php"); 
?>
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


if (isset($_POST['id'])) {
$id=$_POST['id'];
$pw=$_POST['pw'];
$telephone=$_POST['telephone'];
$address=$_POST['address'];
$other=$_POST['other'];
}
//判斷帳密是否為空值
if($id!=null && $pw!=null){
	//新增資料進資料庫
	//$sql="SELECT * FROM member_table ";
	$sql="INSERT INTO member_table(username,password,telephone,address,other) 
				VALUES ('$id','$pw','$telephone','$address','$other')";
	if(mysqli_query($conn,$sql)){
		echo '新增成功<br/>';
		echo "<a href='index.php'>返回登入頁</a>";
		//echo '<a href='http-equiv=REFRESH CONTENT=2;url=z_index.php'>返回登入頁</a>;
	}
	else{
		echo '新增失敗<br/>';
		echo "<a href='index.php'>返回登入頁</a>";
		//echo '<meta http-equiv=REFRESH CONTENT=2;url=z_index.php>';
	}
}
else{
	echo '您輸入的資料可能有缺少，請再輸入一次<br/>';
	echo "<a href='index.php'>返回登入頁</a>";
	//echo '<meta http-equiv=REFRESH CONTENT=2;urlz_index.php>';
}
?></div>