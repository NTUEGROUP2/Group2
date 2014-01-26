<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php //register.php傳來的帳密資料
			include("mysql_connect.php");
			require_once("dbtools.inc.php");
			$account = $_POST[ 'account' ];
			$pw = $_POST[ 'pw' ];
			$pwconfirm = $_POST[ 'pwconfirm' ];
			$username = $_POST[ 'username' ];
			$email = $_POST[ 'email' ];
			$country = $_POST[ 'country' ];
			$age = $_POST[ 'age' ];
		?>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>App Inventor教學網</title>
	</head>

	<body>
		<div id="HEADER">
			<h2>電腦多媒體理論與實務_Group 2成果</h2>
		</div>
		<div id="MAIN_NAV" >
			<p align="center"><img src="design/customLogo.png"></p>
			<ul> <!--選單-->
				<li><a href="index.php">回首頁</a></li>
                <li><a href="reading.php">進入教室</a></li>
				<li><b>學生註冊</b></li>
                <li><a href="group.php">管理團隊</a></li>
               
			</ul>
		</div>
		<div id="CONTENT">
			<p>
				<center> <!--註冊資料處理-->
					<h2>學生註冊<br/></h2>
					<br/>
					<br/>
					<?php
						if( $account && $username && $email && $country && $age && $pw && ( $pwconfirm == $pw ) ) {
							$link = create_connection();
							$sql = "SELECT * FROM member WHERE account = '$account'";
							$row = mysql_fetch_array( mysql_query( $sql ) );
							if( $row ) {
								echo "<h3>帳號已存在，請重新建立！</h3>";
								echo '<meta http-equiv=REFRESH CONTENT=2;url=register.php>';
							}
							else { //註冊成功
								$sql = "INSERT INTO member(account, password, username, email, country, age)
									VALUES('$account', '$pw', '$username', '$email', '$country', '$age')";
								$result = execute_sql( "Group2", $sql, $link );
								if( !$result ) {
									die( 'Invalid query: ' . mysql_error() );
								}
								else {
									echo "<h3>註冊成功!</h3>";
									echo '<meta http-equiv=REFRESH CONTENT=3;url=index.php>';
								}
							}
							mysql_close( $link );
						}
						else { //錯誤排除
							if( $account == null ) {
								echo "<h3>帳號未輸入</h3>";
							}
							if( $username == null ) {
								echo "<h3>使用者名稱未輸入</h3>";
							}
							if( $email == null ) {
								echo "<h3>Email未輸入</h3>";
							}
							if( $country == null ) {
								echo "<h3>城市未輸入</h3>";
							}
							if( $age == null ) {
								echo "<h3>年齡未輸入</h3>";
							}
							if( $pw == null ) {
								echo "<h3>密碼未輸入</h3>";
							}
							if( $pw != $pwconfirm ) {
								echo "<h3>密碼輸入不一致，請重新輸入</h3>";
							}
							echo '<meta http-equiv=REFRESH CONTENT=2;url=register.php>';
						}
					?>
				</center>
			</p>	
		</div>
	</body>
</html>