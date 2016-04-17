
<?php
include("contain.php");
$name=$_POST["name"];
$message=$_POST["message"];
date_default_timezone_set('Asia/Taipei');//設定時間
$today=getdate();	
$time=date("Y-m-d H:i:s");
//SQL
echo"<br/>";

$query="SELECT * FROM messagereg ORDER BY no DESC";
$result=mysqli_query($conn,$query);

$numRows=mysqli_num_rows($result);

?>
<html>
	<head>
	<meta charset="UTF-8">
	<title>憨廬的簡易留言板</title>
	<link href="indexm.css" rel="stylesheet" type="text/css">
	
	</head>
<body class="background">

 <!--BACKtoTOP-START-->
<a style="display:scroll;position:fixed;bottom:0px;right:5px;" href="#" title="" onFocus="if(this.blur)this.blur()">
<img alt='' border='0' onmouseover="this.src='http://4.bp.blogspot.com/-AKP9Gl_ets0/TmzrRBJPg_I/AAAAAAAADpY/M3KVvsDNJbA/s1600/Top.png'" src="http://1.bp.blogspot.com/-_gUa3K1wDNo/TmzrHROhBVI/AAAAAAAADpU/vOKm_7zL8DQ/s1600/Top_medium.png" onmouseout="this.src='http://1.bp.blogspot.com/-_gUa3K1wDNo/TmzrHROhBVI/AAAAAAAADpU/vOKm_7zL8DQ/s1600/Top_medium.png'" /></a>

<!--BACKtoTOP-STOP-->
	<div>
	<img src="mes1.jpg">
	</div>
<div class="sum">
<a style="display:scroll;position:fixed;bottom:0px;left:5px;" href="#" title="">
<br/>
<?php 
echo "共有 $numRows 筆留言"  ?></a></div>
 <div class="want">
 <br/>
<a href="mymessage.html">我要留言</a></div>
<?php
$i=1;

//顯示留言內容
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";

while($row=mysqli_fetch_array($result)){	
    //將姓名中的特殊字元轉成 HTML 碼
    $row[1]=htmlspecialchars($row[1], ENT_QUOTES);
    //將留言中的特殊字元、換行字元、與空白轉成 HTML 碼
    $row[2]=htmlspecialchars($row[2], ENT_QUOTES);
    $row[2]=str_replace('	', '&nbsp;&nbsp;', nl2br($row[2]));
	//echo "<ul>";

	//顯示不同的背景顏色, 方便閱讀
    if ($i%2==0) {$liclass='even';}
    else         {$liclass='odd';}
    //$i++;
    //顯示留言者姓名、留言日期時間、與留言內容
    echo "<li class=\"$liclass\"><p><strong>$row[1]</strong>
	      <em>於 {$row[3]}留言</em></p>
		  <p>$row[2]</p></li>";
	$i++;
		   
		
		

    }

?>
</div>
</body>
</html>