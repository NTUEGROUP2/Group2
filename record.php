<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include("mysql_connect.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>App Inventor教學網</title>  <!--網頁標題-->
</head>

<body>
<div id="HEADER">
	<h2>電腦多媒體理論與實務_Group 2成果</h2>  <!--主頁標題-->
</div>
<div id="MAIN_NAV" >
			<p align="center"><img src="design/customLogo.png" /></p>
		</div>
<div id="MAIN_NAV">			<!--索引-->

	<ul>
		<li><a href="reading.php">進入教室</a></li>
		<li><a href="upload.php">檔案上傳</a></li>
		<li><a href="message.php">留言板</a></li>
		<li><a href="login.php">會員資料修改</a></li>
		<li><a href="group.php">管理團隊</a></li>
		
		<li><a href="index.php" style="color:#FF99FF">回首頁</a></li>
	</ul>
</div>
<div id="CONTENT"> 	<!--閱讀紀錄-->
	<p>
	<p align="center"><img src="meterial/reading.jpg"></p>
		<center>  
		<h2>閱讀紀錄查詢<br/></h2>
		<br/>
		<br/>
		<h3>

		<form name="form" method="post" action=" record_connect.php"> <!--帳號的移入-->
			<p>
			帳號：<input type="text" name="id" /> <br>
			密碼：<input type="password" name="pw" /> <br>
			</p>
			<input type="submit" name="button" value="送出" />
			<p>
			</p>
		</form>
		
		</center>
		</h3>
	</p>
</div>
<div id="FOOTER">	
	<p>
		<br/><br/><br/><br/><br/><br/>
		
	</p>
</div>
</body>
</html>
