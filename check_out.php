<?php
session_start();
//require_once "config.php";
//require_once "function.php";
require_once "smarty/libs/Smarty.class.php";
// include('/function.php');
include('/connect.php');
$smarty = new Smarty;
$op = isset($_REQUEST["op"]);


$welcome = "";
if(isset($_SESSION["user_name"])){
    $welcome = "<li><a href='account.html'><span class='glyphicon glyphicon-user'></span>".$_SESSION["user_name"]."</a></li>"
        . "<li><a href='index.php?op=logout'><span class='glyphicon glyphicon-user'></span>登出</a></li>";
}
else{
    $welcome = "<li><a href='login.html'><span class='glyphicon glyphicon-user'></span>登入/註冊</a></li>";
}

switch($op){
    case "logout":
        unset($_SESSION["user_id"]);
        unset($_SESSION["user_name"]);
        unset($_SESSION["email"]);
        header("Location: index.php");
        break;
}

$sql = "SELECT * FROM cart NATURAL JOIN product WHERE user_id='{$_SESSION["user_id"]}'";
$res = $conn->query($sql);

$timeZone = ini_get("date.timezone");
$dtz = new DateTimeZone($timeZone);
$dateTime = new DateTime("now",$dtz);
$dateTime = $dateTime->format("Y-m-d h:i:s");
$detailNo = "user_".$_SESSION["user_id"]."_".time();

$sql2 = "INSERT INTO transactions (transMid, method, transTime, detailNo)
VALUES ('{$_SESSION["user_id"]}', '貨到付款', '{$dateTime}', '{$detailNo}')";
$res2 = $conn->query($sql2);


while($product=$res->fetch_assoc()){
    $sql3 = "INSERT INTO transaction_detail (detailNo, pNo, amount)
    VALUES ('{$detailNo}', '{$product["pNo"]}', '{$product["amount"]}')";
    $res3 = $conn->query($sql3);
}
$sql4 = "DELETE FROM cart WHERE user_id='{$_SESSION["user_id"]}'";
$res4 = $conn->query($sql4);


$smarty->assign("welcome",$welcome);
$smarty->display("check_out.html");
?>
