<?php
	header("Content-Type: text/html; charset=utf-8");
	include("connMysql.php");
	$seldb = @mysqli_select_db($db_link, "class");
	$sql_query = "SELECT * FROM students";
	$result = mysqli_query($db_link, $sql_query);
?>