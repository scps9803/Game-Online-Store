<?php
/* Smarty version 3.1.33, created on 2019-01-02 11:24:14
  from 'C:\wamp64\www\Game-Online-Store\templates\store.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2c2ede588368_64345365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81f6adbb7a90fe8b2b1105123385620231693a72' => 
    array (
      0 => 'C:\\wamp64\\www\\Game-Online-Store\\templates\\store.html',
      1 => 1546399452,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2c2ede588368_64345365 (Smarty_Internal_Template $_smarty_tpl) {
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

            .text_center{
                text-align: center
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
                <h4>商品分類</h4>

                <ul class="nav nav-pills nav-stacked">
                    <li id="category_all"><a href="store.php?category=0">所有</a></li>
                    <li id="category_set"><a href="store.php?category=1">禮盒</a></li>
                    <li id="category_skin"><a href="store.php?category=2">造型</a></li>
                    <li id="category_weapon"><a href="store.php?category=3">武器</a></li>
                    <li id="category_hat"><a href="store.php?category=4">帽子</a></li>
                    <li id="category_coat"><a href="store.php?category=5">上衣</a></li>
                    <li id="category_pants"><a href="store.php?category=6">褲裙</a></li>
                </ul><br>

                <div class="input-group">
                    <input type="text" class="form-control" placeholder="搜尋商品.." id="search_text">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button" id="search_btn">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                </div>
            </div>

            <div class="col-sm-9">
                <div class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_goods']->value, 'goods');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['goods']->value) {
?>
                    <div class="col-sm-4">
                        <div class="panel panel-success">
                            <div class="panel-heading text_center"><?php echo $_smarty_tpl->tpl_vars['goods']->value['category'];?>
</div>
                            <div class="panel-body">
                                <a href="item_detail.php?pNo=<?php echo $_smarty_tpl->tpl_vars['goods']->value['pNo'];?>
"><img src="uploads/<?php echo $_smarty_tpl->tpl_vars['goods']->value['pNo'];?>
" class="img-responsive" style="margin:auto;height:200px;" alt="Image"></a>
                            </div>
                            <div class="panel-footer text_center"><?php echo $_smarty_tpl->tpl_vars['goods']->value['pName'];?>
 $<?php echo $_smarty_tpl->tpl_vars['goods']->value['unitPrice'];?>
</div>
                        </div>
                    </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>

            <div class="align_center">
                <ul class="pagination">
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                </ul>
            </div>
        </div>
    </div>

    <footer class="container-fluid text_center">
        <p>Game-Online-Store Copyright by Wei-Cheng Shih 2018</p>
    </footer>

</body>

<?php echo '<script'; ?>
>
    $(document).ready(function() {
        $parm = location.search;
        $category = $parm.split("=");

        var has_search_result = "<?php echo $_smarty_tpl->tpl_vars['all_goods']->value[0]['pNo'];?>
";
        if(has_search_result.length==0){
            $(".align_center").remove();
            $(".col-sm-9").append("<h1 class='text_center'>查無搜尋結果!!!!</h1><br>");
        }

        switch ($category[1]) {
            case "0":
                $("#category_all").css("background-color","skyblue");
                $("#category_all").css("border-radius","4px");
                break;
            case "1":
                $("#category_set").css("background-color","skyblue");
                $("#category_set").css("border-radius","4px");
                break;
            case "2":
                $("#category_skin").css("background-color","skyblue");
                $("#category_skin").css("border-radius","4px");
                break;
            case "3":
                $("#category_weapon").css("background-color","skyblue");
                $("#category_weapon").css("border-radius","4px");
                break;
            case "4":
                $("#category_hat").css("background-color","skyblue");
                $("#category_hat").css("border-radius","4px");
                break;
            case "5":
                $("#category_coat").css("background-color","skyblue");
                $("#category_coat").css("border-radius","4px");
                break;
            case "6":
                $("#category_pants").css("background-color","skyblue");
                $("#category_pants").css("border-radius","4px");
                break;
            case "7":
                // $(".col-sm-9 >").remove();
                // $(".col-sm-9 >").append("<h2>查無搜尋結果!!!!</h2>");
                break;
        }
        $("#search_btn").click(function(){
            $search_text = $("#search_text").val();
            // $(location).attr('href', 'function.php?action=search_item&search_text=$search_text');
            $(location).attr('href', 'store.php?category=7&search_text='+$search_text);
        });
    });

<?php echo '</script'; ?>
>

</html>
<?php }
}
