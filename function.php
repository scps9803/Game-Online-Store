<?php
$action = $_GET["action"];

switch ($action) {
    case "delete_cart_item":
        delete_cart_item($_GET["pNo"]);
        break;
}

function list_goods(){
    $connect = include("/connect.php");
    $smarty = new Smarty;

    $sql = "SELECT * FROM product LIMIT 3";
    $res = $db->prepare($sql);
    $res->execute();

    $i = 0;
    while($goods = $res->fetch()){
        $all_goods[$i] = $goods;
        $all_goods[$i]["img_url"] = "123";
        $i++;
    }
    $smarty->assign("all_goods",$all_goods);
}

function get_product_pic($pId=""){
    $fileName = "uploads/{$pId}.jpg";
    if(file_exists($fileName)){
        return $fileName;
    }
    else{
        return "";
    }
}

function delete_cart_item($pNo){
    $connect = include("/connect.php");
    $sql = "DELETE FROM cart WHERE pNo='{$pNo}'";
    $conn->query($sql);
    header("Location: cart.php?add_to_cart=no");
}
?>
