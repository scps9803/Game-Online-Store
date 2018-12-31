<?php
session_start();
//require_once "config.php";
//require_once "function.php";
require_once "smarty/libs/Smarty.class.php";
// include('/function.php');
include('/connect.php');
$smarty = new Smarty;
$op = isset($_REQUEST["op"]);
$pNo = $_GET["pNo"];

$welcome = "";
if(isset($_SESSION["user_name"])){
    $welcome = "<li><a href='account.php'><span class='glyphicon glyphicon-user'></span>".$_SESSION["user_name"]."</a></li>"
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

$sql = "SELECT * FROM product WHERE pNo={$pNo}";
// $res = $db->prepare($sql);
// $res->execute();
$res = $conn->query($sql);
$product_info = $res->fetch_assoc();


$smarty->assign("welcome",$welcome);
$smarty->assign("product_info",$product_info);
$smarty->display("item_detail.html");
?>
