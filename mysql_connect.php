<?php  
$host="localhost";
$user="group2";
$password="ab4";
$link=mysql_connect($host,$user,$password);
$query = "SET NAMES 'utf8'";
$result = mysql_query($query);
mysql_select_db("Group2",$link) || die("db error");
?>