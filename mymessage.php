<div><?php

include("contain.php");
echo "<meta charset='UTF-8' />";
$name=$_POST["name"];
$message=$_POST["message"];
date_default_timezone_set('Asia/Taipei');//設定時間
$today=getdate();	
$time=date("Y-m-d H:i:s");
//SQL
echo"<br/>";
$sql="INSERT INTO messagereg(name,message,time) VALUES('$name','$message','$time')";//
//mysqli_query($conn,$sql);//
$query="SELECT * FROM messagereg ORDER BY no DESC";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_row($result);
$numRows=mysqli_num_rows($result);

$myTable='messagereg';
$errMsg='';//存放錯誤訊息的變數
$name='';//存放姓名的變數
$message='';//存放內容的變數

//檢查是否已輸入姓名
if ( !empty($_POST['name']) && !empty($_POST['message'])){
	//將姓名放入$name變數
	//$name=??
	$name=$_POST['name'];
	//將留言放入$message變數
	$message=$_POST['message'];
}
//若否.將錯誤資訊寫入 $errMsg
else{
     echo "<ul>";
	$errMsg.='您忘記輸入姓名或留言內容<br/>';
	echo "</ul>";
}
?></div>
<html>
<head>
	<meta charset="UTF-8">
	<title>憨廬的簡易留言板</title>
	<link href="indexm.css" rel="stylesheet" type="text/css">
	</head>
<body class="background">
	<div>
	<img src="mes1.jpg"><br/><br/><br/><br/>
	</div>
<div class="mymess">
<?php

//include("contain.php");
//如果$errMsg是空字串.表示無誤.故可放心寫入資料庫
if ($errMsg ==''){
	date_default_timezone_set('Asia/Taipei');//設定時間
	
	$time=date("Y-m-d H:i:s");
	echo $time;

	if($numRows>0){
		$query="SELECT * FROM messagereg ORDER BY no DESC";
		$query="INSERT INTO messagereg(name,message,time) VALUES('$name','$message','$time')";
		
		mysqli_query($conn,$query);
		echo '已成功新增一筆留言<br/>';
	}
	else{
		echo '無法新增留言<br/>';
	}
}
//如果 $errMsg不是空字串.便顯示錯誤訊息
else{
	echo $errMsg . '請按上一頁重新輸入<br/>';
}
?></div>
	<p class="mymess"><a href="first.php">回留言板</a></p>

</body>
</html>