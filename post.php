<?php

	require_once("dbtools.inc.php");

	$author = $_POST[ "author" ];
	$school = $_POST[ "school" ];
	$subject = $_POST[ "subject" ];
	$content = $_POST[ "content" ];
	$current_time = date( "Y-m-d H:i:s" );


	$link = create_connection();


	$sql = "INSERT INTO message(author, school, subject, content, date)
          VALUES('$author', '$school', '$subject', '$content', '$current_time')";
	$result = execute_sql( "Group2", $sql, $link );


	mysql_close( $link );


	header( "location:message.php" );
	exit();
?>