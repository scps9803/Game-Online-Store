<?php
/* Smarty version 3.1.33, created on 2018-12-29 17:22:25
  from 'C:\wamp64\www\web\templates\account.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c273cd1d61c52_74569901',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5a6f87b1ee7f81f0cac3d4dee688eb1bd59d71e' => 
    array (
      0 => 'C:\\wamp64\\www\\web\\templates\\account.html',
      1 => 1546075344,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c273cd1d61c52_74569901 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <title>遊戲首富線上商城</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <style>
        /* Set height of the grid so .sidenav can be 100% (adjust if needed) */

        .row.content {
            height: 1500px
        }
        /* Set gray background color and 100% height */

        .sidenav {
            background-color: #f1f1f1;
            height: 100%;
        }
        /* Set black background color, white text and some padding */

        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }
        /* On small screens, set height to 'auto' for sidenav and grid */

        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {
                height: auto;
            }
        }
        
        #return_trend{
            text-align: center;
            vertical-align: middle;
        }
        @media screen and (max-width: 600px) {
            .return_plot {
                width: 100%;
            }
        }
        
        .invest_info > h4{
            margin-top: 30px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Logo</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">首頁</a></li>
                    <li><a href="#">關於本站</a></li>
                    <li><a href="#">Deals</a></li>
                    <li><a href="#">線上商店</a></li>
                    <li><a href="#">聯繫我們</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <?php echo $_smarty_tpl->tpl_vars['welcome']->value;?>

                    <li><a href="cart.php?add_to_cart=no"><span class="glyphicon glyphicon-shopping-cart"></span>購物車</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row content">
            <div class="col-sm-3 sidenav">
                <h4>我的帳戶</h4>

                <ul class="nav nav-pills nav-stacked">
                    <li id="accountBtn"><a href="#">個人資料</a></li>
                    <li id="transBtn"><a href="#">購買紀錄</a></li>
                    <li id="walletBtn"><a href="#">我的錢包</a></li>
                    <li id="investBtn"><a href="#">投資現況</a></li>
                </ul><br>

                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search Blog..">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                </div>
            </div>

            <div class="col-sm-9">
                <h2>Vertical (basic) form</h2>
                <form action="/action_page.php">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="remember"> Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>

        </div>
    </div>

    <footer class="container-fluid">
        <p>Footer Text</p>
    </footer>

</body>

<?php echo '<script'; ?>
>
    var trans_record =
        "<h2>購買紀錄</h2>" +
        "<p>The .table-striped class adds zebra-stripes to a table:</p>" +
        "<table class='table table-striped'>" +

        "<thead>" +
        "<tr>" +
        "<th>訂單編號</th>" +
        "<th>商品名稱</th>" +
        "<th>價格</th>" +
        "<th>數量</th>" +
        "<th>付款方式</th>" +
        "<th>交易時間</th>" +
        "</tr>" +
        "</thead>" +

        "<tbody>" +
        "<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['trans_record']->value, 'record', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['record']->value) {
?>"+
        "<tr>" +
        "<td><?php echo $_smarty_tpl->tpl_vars['record']->value['detailNo'];?>
</td>" +
        "<td><?php echo $_smarty_tpl->tpl_vars['record']->value['pName'];?>
</td>" +
        "<td><?php echo $_smarty_tpl->tpl_vars['record']->value['unitPrice'];?>
</td>" +
        "<td><?php echo $_smarty_tpl->tpl_vars['record']->value['amount'];?>
</td>" +
        "<td><?php echo $_smarty_tpl->tpl_vars['record']->value['method'];?>
</td>" +
        "<td><?php echo $_smarty_tpl->tpl_vars['record']->value['transTime'];?>
</td>" +
        "</tr>" +
        "<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>";

        "<tr>" +
        "<td>訂單編號</td>" +
        "<td>商品名稱</td>" +
        "<td>價格</td>" +
        "<td>數量</td>" +
        "<td>付款方式</td>" +
        "<td>交易時間</td>" +
        "</tr>" +

        "<tr>" +
        "<td>訂單編號</td>" +
        "<td>商品名稱</td>" +
        "<td>價格</td>" +
        "<td>數量</td>" +
        "<td>付款方式</td>" +
        "<td>交易時間</td>" +
        "</tr>" +
        "</tbody>" +
        "</table>"

    var wallet =
        "<h2>我的錢包</h2>" +
        "<h3>目前餘額: 599</h3>" +
        "<p>The .table-striped class adds zebra-stripes to a table:</p>" +

        "<div class='btn - group'>" +
        "<button type='button' class='btn btn-primary'>儲值</button>" +
        "<button type='button' class='btn btn-primary'>兌現</button>" +
        "</div>" +

        "<table class='table table - striped'>" +
        "<thead>" +
        "<tr>" +
        "<th>訂單編號</th>" +
        "<th>類型</th>" +
        "<th>金額</th>" +
        "<th>交易方式</th>" +
        "<th>交易時間</th>" +
        "</tr>" +
        "</thead>" +
        "<tbody>" +
        "<tr>" +
        "<td>t000001</td>" +
        "<td>儲值</td>" +
        "<td>$300</td>" +
        "<td>信用卡</td>" +
        "<td>2018-12-24 11:21:51.000000</td>" +
        "</tr>" +
        "<tr>" +
        "<td>t000002</td>" +
        "<td>收入</td>" +
        "<td>$150</td>" +
        "<td>系統撥款</td>" +
        "<td>2018-12-25 16:29:51.000000</td>" +
        "</tr>" +
        
        "</tbody>" +
        "</table>" +

        "<div class='align_center'>" +
        "<ul class='pagination'>" +
        "<li><a href='#'>1</a></li>" +
        "<li><a href='#'>2</a></li>" +
        "<li><a href='#'>3</a></li>" +
        "<li><a href='#'>4</a></li>" +
        "<li><a href='#'>5</a></li>" +
        "</ul>" +
        "</div>"
    
    var invest =
        "<h2>投資現況</h2>" +
        "<h3>資產配置</h3>" +
        "<img src='uploads/piechart.jpg' width=100<?php echo '%>';?>" +
        "<h3>資產總計</h3>" +
        
        "<table class='table table - striped' border='1'>"+
            "<tr>"+
                "<td class='invest_info'>"+
                "<h4>現金資產: $1,781,729</h4>" +
                "<h4>證券資產: $221,167</h4>" +
                "<h4>淨資產:&nbsp&nbsp&nbsp $123,456</h4>" +
                "<h4>累積獲利: $31,107</h4>" +
                "<h4>總報酬率: 1.56%</h4>" +
                "</td>"+
        "<td id='return_trend'><h4>報酬率走勢圖</h4><img src='uploads/stock.jpg' width='400' class='return_plot'></td>"+
            "</tr>"+
        "</table><hr>"+
        
        "<h3>庫存明細</h3>" +

//        "<div class='btn - group'>" +
//        "<button type='button' class='btn btn-primary'>儲值</button>" +
//        "<button type='button' class='btn btn-primary'>兌現</button>" +
//        "</div>" +

        "<table class='table table - striped'>" +
        "<thead>" +
        "<tr>" +
        "<th>台股代碼(名稱)</th>" +
        "<th>倉別</th>" +
        "<th>庫存/可交易</th>" +
        "<th>平均成本</th>" +
        "<th>現價</th>" +
        "</tr>" +
        "</thead>" +
        "<tbody>" +
        "<tr>" +
        "<td>2002(中鋼)</td>" +
        "<td>現股</td>" +
        "<td>5張/5張</td>" +
        "<td>23.40</td>" +
        "<td>24.15</td>" +
        "</tr>" +
        "<tr>" +
        "<td>4938(和碩)</td>" +
        "<td>現股</td>" +
        "<td>2張/2張</td>" +
        "<td>74.70</td>" +
        "<td>50.70</td>" +
        "</tr>" +
        
        "</tbody>" +
        "</table>" +

        "<div class='align_center'>" +
        "<ul class='pagination'>" +
        "<li><a href='#'>1</a></li>" +
        "<li><a href='#'>2</a></li>" +
        "<li><a href='#'>3</a></li>" +
        "<li><a href='#'>4</a></li>" +
        "<li><a href='#'>5</a></li>" +
        "</ul>" +
        "</div>"

    $(document).ready(function() {

        $("#accountBtn").css("background-color","skyblue");
        $("#accountBtn").click(function() {
            $(".col-sm-9 >").remove();
        });

        $("#transBtn").click(function() {
            $("#accountBtn").css("background-color","");
            $(".col-sm-9 >").remove();
            $(".col-sm-9").append(trans_record);
        });

        $("#walletBtn").click(function() {
            $("#accountBtn").css("background-color","");
            $(".col-sm-9 >").remove();
            $(".col-sm-9").append(wallet);
        });
        
        $("#investBtn").click(function() {
            $("#accountBtn").css("background-color","");
            $(".col-sm-9 >").remove();
            $(".col-sm-9").append(invest);
        });
    });

<?php echo '</script'; ?>
>

</html>
<?php }
}
