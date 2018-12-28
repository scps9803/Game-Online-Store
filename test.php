<?php
//$connect = include('/connect.php');
//header("Content-Type:text/html; charset=utf-8");
//// $sql = "SELECT * FROM product LIMIT 3";
//$sql = "SELECT * FROM product LIMIT 3";
//$res = $db->prepare($sql);
//$res->execute();
//
//
//
//
//$i = 0;
//while($goods = $res->fetch()){
//    $all_goods[$i] = $goods;
//    // $all_goods[i]['img_url'] = "";
//    echo($goods['pName'])." ";
//    $i++;
//}

    class GoogleChart{
    var $width,$height;
    var $chart_type;
    var $api_url;
    var $parameters;
    function GoogleChart($w,$h,$type,$url="http://chart.apis.google.com/chart"){
        $this->parameters = array();
        $this->width = $w;
        $this->height = $h;
        $this->chart_type = $type;
        $this->api_url = $url;
        $this->parameters['chs'] = $w."x".$h;
        $this->parameters['cht'] = $type;
    }   


    function draw(){
        $url = $this->api_url;
        $params = array();
        foreach($this->parameters as $key => $value){
            $params[] = "$key=$value";
        }   
        $url .= "?".implode("&",$params);
        //    header("Location:http://tw.yahoo.com.tw/");
        echo "<script>";
        echo " location.href='$url'; ";
        echo "</script>";
        //  header("Location: $url");
        echo $url;
    }   
} //class GoogleChart

class GooglePieChart extends GoogleChart{
    function GooglePieChart($w,$h,$type="p"){
        parent::GoogleChart($w,$h,$type);
    }   

    function setData($data,$labels=null,$legends=null){
        $this->parameters['chd'] = "t:".implode(",",$data);
        if($labels) $this->setLabels($labels);
        if($legends) $this->setLegends($legends);
    }   

    function setLabels($labels){
        $this->parameters['chl'] = implode("|",$labels);
    }

    function setLegends($legends){
        $this->parameters['chdl'] = implode("|",$legends);
    }
} //class GooglePieChart extends: GoogleChart

class GooglePieChart3D extends GooglePieChart{
    function GooglePieChart3D($w,$h){
        parent::GooglePieChart($w,$h,"p3");
    }
}



$chart = new GooglePieChart(400,200);
$data = array(3,4,5);
$labels = array("中鋼","和碩","現金資產");
$legends = array("中鋼","和碩","現金資產");
$chart->setData($data,$labels,$legends);
$url = $chart->draw();


?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <img src="">
</body>
</html>

