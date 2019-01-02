<?php
session_start();
require_once "smarty/libs/Smarty.class.php";
include('/connect.php');

$smarty = new Smarty;
$op = isset($_REQUEST["op"]);
$category = $_GET["category"];

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
// $sql = "SELECT * FROM product";
// $res = $conn->query($sql);
//
// $i = 0;
// while($goods = $res->fetch_assoc()){
//     $all_goods[$i] = $goods;
//     $i++;
// }

switch($category){
    case "0":
        $sql = "SELECT * FROM product";
        $res = $conn->query($sql);

        $i = 0;
        while($goods = $res->fetch_assoc()){
            $all_goods[$i] = $goods;
            $i++;
        }
        break;
    case "1":
        $sql = "SELECT * FROM product WHERE category='禮盒'";
        $res = $conn->query($sql);

        $i = 0;
        while($goods = $res->fetch_assoc()){
            $all_goods[$i] = $goods;
            $i++;
        }
        break;
    case "2":
        $sql = "SELECT * FROM product WHERE category='造型'";
        $res = $conn->query($sql);

        $i = 0;
        while($goods = $res->fetch_assoc()){
            $all_goods[$i] = $goods;
            $i++;
        }
        break;
    case "3":
        $sql = "SELECT * FROM product WHERE category='武器'";
        $res = $conn->query($sql);

        $i = 0;
        while($goods = $res->fetch_assoc()){
            $all_goods[$i] = $goods;
            $i++;
        }
        break;
    case "4":
        $sql = "SELECT * FROM product WHERE category='帽子'";
        $res = $conn->query($sql);

        $i = 0;
        while($goods = $res->fetch_assoc()){
            $all_goods[$i] = $goods;
            $i++;
        }
        break;
    case "5":
        $sql = "SELECT * FROM product WHERE category='上衣'";
        $res = $conn->query($sql);

        $i = 0;
        while($goods = $res->fetch_assoc()){
            $all_goods[$i] = $goods;
            $i++;
        }
        break;
    case "6":
        $sql = "SELECT * FROM product WHERE category='褲裙'";
        $res = $conn->query($sql);

        $i = 0;
        while($goods = $res->fetch_assoc()){
            $all_goods[$i] = $goods;
            $i++;
        }
        break;
    case "7": //search_item
        $sql = "SELECT * FROM product WHERE pName LIKE '%{$_GET["search_text"]}%' OR description LIKE '%{$_GET["search_text"]}%'";
        $res = $conn->query($sql);

        $i=0;
        $all_goods = NULL;
        while($goods=$res->fetch_assoc()){
            $all_goods[$i] = $goods;
            $i++;
        }
        break;
}

$smarty->assign("welcome",$welcome);
$smarty->assign("all_goods",$all_goods);
$smarty->display("store.html");
?>
