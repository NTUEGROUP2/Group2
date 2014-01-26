<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>App Inventor教學網</title>
	</head>
	<body>
		<h2>電腦多媒體理論與實務_Group 2成果</h2>  <!-- 網頁標題-->

		<div id="MAIN_NAV" >
			<p align="center"><img src="design/customLogo.png" /></p> <!-- 標題圖片-->
			<ul>
				<li><a href="index.php">首頁</a></li>
				<li><b>進入教室</b></li>
				<li><a href="register.php">學生註冊</a></li>
				<li><a href="group.php">管理團隊</a></li>
			
			</ul>
		</div>
		<div id="CONTENT"> <!-- 點入開始閱讀之後出現的畫面-->
			<p>
				<center>
					<h2>開始上課<br/><br/></h2>
					<h3>

						<form name="form" method="post" action=" reading_connect.php"> <!-- 資料被傳入reading_connect.php-->
							<p>
								<table>
									<td align="left">
										帳號：<input type="text" name="id" /> <br/>
										密碼：<input type="password" name="pw" /> <br/>
									</td>
								</table>
							</p>
							<input type="submit" name="button" value="開始" />
						</form>

					</h3>
				</center>
			</p>
		</div>
	</body>
</html>
