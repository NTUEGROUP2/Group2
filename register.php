<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>App Inventor教學網</title>
	</head>
	<body>
        <h2>電腦多媒體理論與實務_Group 2成果</h2> <!-- 標題 -->
		<div id="MAIN_NAV" >
			<p align="center"><img src="design/customLogo.png"></p>
			<ul>
				<li><a href="index.php">回首頁</a></li>
                <li><a href="reading.php">進入教室</a></li>
				<li><b>學生註冊</b></li>
                <li><a href="group.php">管理團隊</a></li>
                
			</ul>
		</div>
		<div id="CONTENT">
			<p>
				<center>
					<!--註冊開始-->
					<h2>學生註冊</h2>
					<br/>
					<form name="form" method="post" action="register_connect.php"> <!--傳資料-->
						<table> <!--表格排版-->
							<tr align="left">
								<td>帳號：</td>
								<td><input type="text" name="account" /></td>
							</tr>
							<tr align="left">
								<td>密碼：</td>
								<td><input type="password" name="pw" /></td>
							</tr>
							<tr align="left">
								<td>確認密碼：</td>
								<td><input type="password" name="pwconfirm" /></td>
							</tr>
							<tr align="left">
								<td>使用者姓名：</td>
								<td><input type="text" name="username"  /></td>
							</tr>
							<tr align="left">
								<td>Email：</td>
								<td><input type="text" name="email" /></td>
							</tr>
							<tr align="left">
								<td>城市：</td>
								<td><input type="text" name="country" /></td>
							</tr>
							<tr align="left">
								<td>年齡：</td>
								<td><input type="text" name="age" /></td>
							</tr>
						</table>
						<br/><br/>
						<input type="submit" name="button" value="註冊" />
					</form>
				</center>
			</p>
		</div>
	</body>
</html>


