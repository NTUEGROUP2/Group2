<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>國立臺北教育大學_學習網</title>
    <script type="text/javascript">
      function check_data()
      {
        if (document.myForm.author.value.length == 0)
          alert("作者欄位不可以空白哦！");
        else if (document.myForm.subject.value.length == 0)
          alert("主題欄位不可以空白哦！");
        else if (document.myForm.content.value.length == 0)
          alert("內容欄位不可以空白哦！");
        else
          myForm.submit();
      }
    </script>

</head>

<body>
<body background="https://www.google.com.tw/search?q=app+inventor&site=webhp&source=lnms&tbm=isch&sa=X&ei=SDzGUov5DorIkAX4r4GACQ&ved=0CAcQ_AUoAQ&biw=1040&bih=892#facrc=_&imgdii=PQrI4x_sjMhnzM%3A%3BN_1xk6afTfysDM%3BPQrI4x_sjMhnzM%3A&imgrc=PQrI4x_sjMhnzM%3A%3BqpDCwjNshNje5M%3Bhttp%253A%252F%252Fcourses.cs.vt.edu%252F~cs1004%252Fgoogle-app-inventor-icon-300x297.jpg%3Bhttp%253A%252F%252Fcourses.cs.vt.edu%252F~cs1004%252F%3B300%3B297>
<div id="HEADER">
	<h2>電腦科學學習網</h2>
</div>
<div id="MAIN_NAV">
	<ul>
		<li><a href="reading.php">開始閱讀</a></li>
		<li><a href="upload.php">檔案上傳</a></li>
		<li><b>留言板</b></li>
		<li><a href="record.php">歷史紀錄</a></li>
		<li><a href="login.php">會員資料修改</a></li>
		<li><a href="group.php">管理團隊</a></li>
		<li><a href="manager_login.php">管理者專區</a></li>
		<li><a href="index.php" style="color:#FF99FF">回首頁</a></li>
	</ul>
</div>
<div id="CONTENT"> 
	<p align="center"><img src="meterial/message.jpg"></p>
    <?php
      require_once("dbtools.inc.php");
			
      
      $records_per_page = 5;
