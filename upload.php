<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php
		include("mysql_connect.php");
		?>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>App Inventor教學網</title>                 <!--網頁標題-->  
	</head>

	<body>
		<div id="HEADER">
			<h2>電腦多媒體理論與實務_Group 2成果</h2>         <!--網頁主題--> 
		</div>
		
		<div id="MAIN_NAV" >
		<p align="center"><img src="design/customLogo.png"></p> 
		<div id="MAIN_NAV" >
			<ul>
				<li><a href="reading.php">進入教室</a></li               <!--左橫幅--> 
				<li><b>檔案上傳</b></li>
				<li><a href="message.php">留言板</a></li>
				<li><a href="login.php">會員資料修改</a></li>
				<li><a href="group.php">管理團隊</a></li>
				
				<li><a href="index.php" style="color:#FF99FF">回首頁</a></li>
			</ul>
		</div>
		<div id="CONTENT"> 
			<p align="center"><img src="meterial/film.jpg"></p>  
			<p align="center">
				歡迎使用檔案上傳服務，您可以一次上傳多個檔案。         <!--主要內容--> 
			</p> 
			<p align="center">
				<center>
					<form method="post" action="uploadconect.php" enctype="multipart/form-data">         <!--檔案限定，上傳--> 
						<input type="file" name="myfile[]" size="50"></input><br/>
						<input type="file" name="myfile[]" size="50"></input><br/>
						<input type="file" name="myfile[]" size="50"></input><br/>
						<input type="file" name="myfile[]" size="50"></input><br/><br/>
						<input type="submit" value="上傳"></input>
						<input type="reset" value="重新設定"></input>
					</form>
			</P>
		</div>
		<div id="FOOTER">	
			<p>
				<br/><br/><br/><br/><br/><br/>
				<h2><center><br/>Author by <i>Yi-Chan Kao</i> & <i>Gung-Si Chen</i> </center></h2>
			</p>
		</div>
	</body>