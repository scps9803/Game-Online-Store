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

$sql = "SELECT * FROM product";
$res = $conn->query($sql);
// $res = $db->prepare($sql);
// $res->execute();

$i = 0;
while($goods = $res->fetch_assoc()){
    $all_goods[$i] = $goods;
    // $all_goods[i]['img_url'] = "";
    $i++;
}
$smarty->assign("all_goods",$all_goods);

$smarty->assign("welcome",$welcome);
$smarty->display("index.html");
?>
