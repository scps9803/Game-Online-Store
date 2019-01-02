<?php
$action = $_GET["action"];

switch ($action) {
    case "delete_cart_item":
        delete_cart_item($_GET["pNo"]);
        header("Location: cart.php?add_to_cart=no");
        break;
    // case "search_item":
    //     search_item($_GET["search_text"]);
    //     break;
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
}

function search_item($search_text){
    require_once "smarty/libs/Smarty.class.php";
    $smarty = new Smarty;
    $connect = include("/connect.php");
    $sql = "SELECT * FROM product WHERE pName LIKE '%{$_GET["search_text"]}%' OR description LIKE '%{$_GET["search_text"]}%'";
    $res = $conn->query($sql);

    if($res->num_rows>0){
        $i=0;
        $all_goods = NULL;
        while($goods=$res->fetch_assoc()){
            $all_goods[$i] = $goods;
            $i++;
        }
        header("Location: store.php?category=7&search_result=1");
    }
    else{
        header("Location: store.php?category=7&search_result=0");
    }
}
?>
