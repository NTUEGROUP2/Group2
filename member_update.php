<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php
			include("mysql_connect.php");
			$id = $_POST[ 'account' ];
			$pw = $_POST[ 'pw' ];
			$pwconfirm = $_POST[ 'pwconfirm' ];
			$username = $_POST[ 'username' ];
			$email = $_POST[ 'email' ];
			$country = $_POST[ 'country' ];
			$age = $_POST[ 'age' ];
		?>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>國立臺北教育大學_學習網</title>
	</head>

	<body>
		<h2>電腦多媒體理論與實務_Group 2成果</h2><!-- 網頁標題-->
		<div id="MAIN_NAV" >
			<p align="center"><img src="design/customLogo.png" /></p><!-- 標題圖片-->
		</div>
		<div id="MAIN_NAV">
			<ul>
				<li><a href="index.php">首頁</a></li>
				<li><a href="reading.php">進入教室</a></li>
				<li><a href="upload.php">檔案上傳</a></li>
				<li><a href="message.php">留言板</a></li>
				<li><b>會員資料修改</b></li>
				<li><a href="group.php">管理團隊</a></li>

			</ul>
		</div>
		<div id="CONTENT">
			<p>
				<h2>會員資料修改<br/></h2>
				<br/>
				<br/>
				<center>
					<?php
						if( $username == null ) {
							echo "<h3>使用者名稱為空白，請重新輸入</h3>";
							echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
						}
						else if( $email == null ) {
							echo "<h3>Email為空白，請重新輸入</h3>";
							echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
						}
						else if( $country == null ) {
							echo "<h3>城市為空白，請重新輸入</h3>";
							echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
						}
						else if( $age == null ) {
							echo "<h3>年齡為空白，請重新輸入</h3>";
							echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
						}
						else {
							if( $pw == null ) {
								$sql = "UPDATE member SET username='$username', email='$email', country='$country', age='$age' WHERE account='$id'"; //更新相關資料
								$result = mysql_query( $sql );

								if( !$result ) {
									die( 'Invalid query: ' . mysql_error() );
								}
								echo "<h3>修改成功!</h3>";
								echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
							}
							else {
								if( $pw != $pwconfirm ) {
									echo "<h3>密碼輸入有誤，請重新輸入</h3>";
									echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
								}
								else {
									$sql = "UPDATE member SET password='$pw', username='$username', email='$email', country='$country', age='$age' WHERE account='$id'";
									$result = mysql_query( $sql );

									if( !$result ) {
										die( 'Invalid query: ' . mysql_error() );
									}
									echo "<h3>修改成功!</h3>";
									echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
								}
							}
						}
					?>
				</center>
			</p>	
		</div>
	</body>
</html>