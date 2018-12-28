<?php
session_start();
//require_once "config.php";
//require_once "function.php";
require_once "smarty/libs/Smarty.class.php";
// include('/function.php');
include('/connect.php');
$smarty = new Smarty;
$op = isset($_REQUEST["op"]);

$add_to_cart = $_GET["add_to_cart"];
// $pNo = $_GET["pNo"];
// $amount = $_GET["amount"];
// $total = $_GET["total"];

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
        header("Location: index.php");
        break;
}

// if(!empty($pNo)){
//     $end_time = time()+365*86400;
//     setcookie("cart[$pNo][$amount]",$amount,$end_time);
// }


// $smarty->assign("cart",$_COOKIE["cart"]);
if(strcmp($add_to_cart,"yes")==0){
    $pNo = $_GET["pNo"];
    $amount = $_GET["amount"];
    $total = $_GET["total"];
    $sql = "INSERT INTO cart (user_id, pNo, amount, total)
    VALUES ('{$_SESSION["user_id"]}', '{$pNo}', '{$amount}', '{$total}')";
    $conn->query($sql);
}
// $sql = "INSERT INTO cart (user_id, pNo, amount, total)
// VALUES ('{$_SESSION["user_id"]}', '{$pNo}', '{$amount}', '{$total}')";
// $conn->query($sql);

$sql = "SELECT * FROM cart NATURAL JOIN product WHERE user_id='{$_SESSION["user_id"]}'";
$res = $conn->query($sql);
// $cart_info = $res->fetch_all(MYSQLI_ASSOC);
$i=0;
$cart_info = NULL;
while($product=$res->fetch_assoc()){
    $cart_info[$i] = $product;
    // $cart_info[$i]["total"] = 1;
    $i++;
}


$smarty->assign("welcome",$welcome);
$smarty->assign("cart_info",$cart_info);
$smarty->display("cart.html");
?>
