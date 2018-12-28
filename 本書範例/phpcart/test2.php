<?php
require_once("connMysql.php");
//�w�]�C������
$pageRow_records = 3;
//�w�]����
$num_pages = 1;
//�Y�w�g��½���A�N���Ƨ�s
if (isset($_GET['page'])) {
  $num_pages = $_GET['page'];
}
//�����}�l�O������ = (����-1)*�C���O������
$startRow_records = ($num_pages -1) * $pageRow_records;
$cid=2;
$id=1;
$query_RecProduct = "SELECT * FROM product WHERE categoryid=? ORDER BY productid DESC";
//�[�W������ܵ��ƪ�SQL�ԭz�y�A�ѥ����}�l�O�����ƶ}�l�A�C����ܹw�]����
$query_limit_RecProduct = $query_RecProduct." LIMIT {$startRow_records}, {$pageRow_records}";
$stmt = $db_link->prepare($query_RecProduct);

$stmt->bind_param("i", $cid);
$stmt->execute();
$result = $stmt->get_result();
echo $result->num_rows."<br>";


$stmt = $db_link->prepare($query_limit_RecProduct);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
	printf("%s %s %s %s %s<br>", $row["productid"], $row["categoryid"], $row["productname"], $row["productprice"], $row["productimages"]);
}

$stmt->close();
?>