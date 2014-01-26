<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php
			include("mysql_connect.php");
			$id = $_POST[ 'id' ];
			$pw = $_POST[ 'pw' ];
			$serial = $_POST[ 'select' ];

			$sql = "SELECT * FROM member where account='$id' and password='$pw'";
			$row = mysql_fetch_array( mysql_query( $sql ) );
		?>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>App Inventor教學網</title><!-- 網頁標題-->
	</head>

	<body>
		<h2>電腦多媒體理論與實務_Group 2成果</h2><!-- 網頁標題-->
		<div id="MAIN_NAV" >
			<p align="center"><img src="design/customLogo.png" /></p><!-- 標題圖片-->
		</div>
		<div id="MAIN_NAV">
			<ul>
				<li><a href="index.php">首頁</a></li>
				<li><b>進入教室</b></li>
				<li><a href="upload.php">檔案上傳</a></li>
		<li><a href="message.php">留言板</a></li>
		<li><a href="login.php">會員資料修改</a></li>
				<li><a href="group.php">管理團隊</a></li>
				
			</ul>
		</div>
		<div id="CONTENT">
			<p>

				<center>
					<h2><?php echo $id; ?>，開始閱讀<br/></h2>  <!-- 帶入ID在最前面-->
					<br/>
					<br/>
					<!-- 判斷帳密-->  <!--擷取出資料庫內容-->

					<?php
						if( !$row ) {
							echo "<h3>帳號或密碼錯誤，請重新輸入</h3>";
							echo '<meta http-equiv=REFRESH CONTENT=2;url=reading.php>';
						}
						else {
							$serial_array = explode( "+", $serial );
							$serial_number = $serial_array[ 0 ];
							$type = $serial_array[ 1 ];

							$sql = "SELECT content FROM reading WHERE serial=" . $serial_number . "";
							$result = mysql_query( $sql );

							if( !$result ) {
								die( 'Invalid query: ' . mysql_error() );
							}

							$f = mysql_fetch_array( $result );
							echo "<table width=800 border=1>";
							echo "<tr><td>";

							if( $type === "article" ) {
								$arrText = file( "meterial/" . $f[ 'content' ] );
								for( $i = 0; $i < count( $arrText ); $i++ ) {
									echo $arrText[ $i ] . "<br/>";
								}
							}
							else if( $type === "figure" ) {
								echo "<img src='meterial/" . $f[ 'content' ] . "' alt='Figure not found'>";
							}
							echo "</td></tr></table>";
						}
					?>
					<br/><br/><br/><br/><br/><br/><br/><br/><br/>
					<form name="form" method="post" action="reading_connect.php">
						<input type="hidden" name="id" value=<?php echo $id; ?> />;
						<input type="hidden" name="pw" value=<?php echo $pw; ?> />;
						<input type="submit" name="button" value="回上一頁" />	
					</form>

				</center>
				<br/>
				<br/>
			</p>
		</div>
	</body>
</html>


