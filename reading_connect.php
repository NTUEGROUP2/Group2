<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php
			include("mysql_connect.php"); //mysql_connect.php資料庫載入
			$id = $_POST[ 'id' ]; //用post的方式接收資料
			$pw = $_POST[ 'pw' ];
			$sql = "SELECT * FROM member where account='$id' and password='$pw'";
			$row = mysql_fetch_array( mysql_query( $sql ) );
		?>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>App Inventor教學網</title>
	</head>

	<body>
		<h2>電腦多媒體理論與實務_Group 2成果</h2>
		<div id="MAIN_NAV" >
			<p align="center"><img src="design/customLogo.png"></p>
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
		<div id="CONTENT"> <!--主要的顯示內容-->
			<p>

				<center>

					<?php
						if( !$row ) { // add this check.
							echo "<h3>帳號或密碼錯誤，請重新輸入</h3>";
							echo '<meta http-equiv=REFRESH CONTENT=2;url=reading.php>';
						}
						else {
							echo "<h2>$id ，請選擇閱讀材料<br/><br/></h2>";
							$sql = "SELECT * FROM reading";
							$result = mysql_query( $sql );

							if( !$result ) { // add this check.
								die( 'Invalid query: ' . mysql_error() );
							}

							echo "<form name='form' method='post' action='reading_start.php'>"; //拿出reading的資料
							echo "<input type='hidden' name='id' value=" . $id . " />";
							echo "<input type='hidden' name='pw' value=" . $pw . " />";

							echo "<table width=800 border=1>"; //以表格方式秀出資料
							echo "<tr align=center><td>選取</td><td>編號</td><td>類型</td><td>資料名</td></tr>";

							while( $row = mysql_fetch_array( $result ) ) {//以迴圈的方式一筆一筆列出資料
								echo "<tr align=center><td><input name='select' type='radio' value=" . $row[ 'serial' ] . "+" . $row[ 'type' ] . "></td>"; //radio屬性，value輸出的內容				
								echo "<td>" . $row[ 'serial' ] . "</td>";
								echo "<td>" . $row[ 'type' ] . "</td>";
								echo "<td>" . $row[ 'name' ] . "</td>";
								echo "</tr>";
							}
							echo "</table>";
							echo "<input type='submit' name='button' value='開始閱讀' />";
							echo "</form>";
						}
					?>
				</center>
			</p>
		</div>
	</body>
</html>


