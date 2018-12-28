<?php
session_start();
require_once "smarty/libs/Smarty.class.php";
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
        header("Location: index.php");
        break;
}
//顯示購買紀錄
//$sql = "SELECT * FROM transactions NATURAL JOIN transaction_detail NATURAL JOIN product
//    WHERE transMid='{$_SESSION["user_id"]}'";
//$res = $conn->query($sql);
//
//$i=0;
//$trans_record = NULL;
//while($record=$res->fetch_assoc()){    
//    $trans_record[$i] = $record;
//    $i++;
//}


$smarty->assign("welcome",$welcome);
$smarty->display("store.html");
?>