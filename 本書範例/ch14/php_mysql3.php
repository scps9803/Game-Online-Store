<?php 
	header("Content-Type: text/html; charset=utf-8");
	include("connMysql.php");
	$seldb = @mysqli_select_db($db_link, "class");
	if (!$seldb) {
		die("資料庫選擇失敗！");
	}else{
		echo "資料庫選擇成功！";
	}
?>