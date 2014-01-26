<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>App Inventor教學網</title>  <!--網頁標題-->
	</head>

	<body>
		<div id="HEADER">
			<h2>電腦多媒體理論與實務_Group 2成果</h2> <!--主頁標題-->
		</div>
		<div id="MAIN_NAV" >
			<p align="center"><img src="design/customLogo.png" /></p>
		</div>

		<div id="MAIN_NAV"> <!--索引-->
			<ul>
				<li><a href="index.php">回首頁</a></li>
				<li><a href="reading.php">進入教室</a></li>
				<li><a href="upload.php">檔案上傳</a></li>
				<li><a href="message.php">留言板</a></li>
				<li><b>會員資料修改</b></li>
				<li><a href="group.php">管理團隊</a></li>
			</ul>
		</div>
		<div id="CONTENT">
			<p>
				<p align="center"><img src="meterial/member.jpg"></p>
				<center>
					<h2>會員資料修改<br/></h2>  <!--會員資料修改-->
					<br/>
					<br/>
					<form name="form" method="post" action="connect.php">   <!--輸入帳號密碼-->
						<p>
							帳號：<input type="text" name="id" /> <br/>
							密碼：</h1><input type="password" name="pw" /> <br/>
						</p>
						<input type="submit" name="button" value="送出" />
					</form>
				</center>
			</p>
		</div>
	</body>
</html>
