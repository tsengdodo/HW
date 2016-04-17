<?php

 $a="localhost";
	$conn=mysqli_connect($a,"root","04172645");
	mysqli_query($conn,"set names utf8");
	mysqli_select_db($conn,"hanlu");
	
   if(mysqli_connect_errno($conn))
	die("無法連接資料庫");
else
	//echo "成功了!";



?>