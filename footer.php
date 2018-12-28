<?php
if(isset($_COOKIE["cart"]) && $_COOKIE["cart"]!=""){
    $smarty->assign("cart",$_COOKIE["cart"]);
}
$smarty->display("index.html")
?>
