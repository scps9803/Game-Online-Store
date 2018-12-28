<?php
require_once("connMysql.php");
$query_RecProduct = "SELECT * FROM product WHERE categoryid=? ORDER BY productid DESC";
$stmt = $db_link->prepare($query_RecProduct);
$cid=1;
$stmt->bind_param("i", $cid);
$stmt->execute();

/*
�w�s�y�k�ϥ� get_result() ���覡���o��ƫ�ͦ���ƪ���
�A�Ѫ���num_rows�ݩʥi�H���o����`��
���ۥi��fetch_assoc()��k���o�H��쬰�W����Ƥ��e
*/
$result = $stmt->get_result();
echo $result->num_rows."<br>";

while ($row = $result->fetch_assoc()) {
	printf("%s %s %s %s %s<br>", $row["productid"], $row["categoryid"], $row["productname"], $row["productprice"], $row["productimages"]);
}

echo(memory_get_usage());
echo "<br>";
//$stmt->close();
echo(memory_get_usage());
echo "<br>";

//$query_RecProduct = "SELECT * FROM product WHERE categoryid=? ORDER BY productid DESC";
//$stmt = $db_link->prepare($query_RecProduct);
$cid=2;
$stmt->bind_param("i", $cid);
$stmt->execute();
/*
�w�s�y�k�ϥ� store_result() �Nstmt��Ƥ��e�Ȧs�b�O���餤
�A��stmt����num_rows�ݩʥi�H���o����`��
���ۥi��bind_result()�Bfetch()��k���o�H�j�w�ܼƪ���Ƥ��e
*/
$stmt->store_result();
echo $stmt->num_rows."<br>";
$stmt->bind_result($pid, $cid, $pname, $pprice, $pimg, $pdesc);
while ($stmt->fetch()){
	printf("%s %s %s %s %s<br>", $pid, $cid, $pname, $pprice, $pimg);	
}

echo(memory_get_usage());
echo "<br>";
$stmt->free_result();
echo(memory_get_usage());
echo "<br>";
$stmt->close();
echo(memory_get_usage());
echo "<br>";
$db_link->close();
echo(memory_get_usage());
echo "<br>";
?>