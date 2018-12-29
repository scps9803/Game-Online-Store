<?php
/* Smarty version 3.1.33, created on 2018-12-29 17:30:48
  from 'C:\wamp64\www\web\templates\store.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c273ec821ea47_35371915',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0884346d1d4c37c461e8811342cba485b0b9ca00' => 
    array (
      0 => 'C:\\wamp64\\www\\web\\templates\\store.html',
      1 => 1546075846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c273ec821ea47_35371915 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <li class="active"><a href="#">所有</a></li>
                    <li><a href="#">禮盒</a></li>
                    <li><a href="#">造型</a></li>
                    <li><a href="#">武器</a></li>
                    <li><a href="#">帽子</a></li>
                    <li><a href="#">上衣</a></li>
                    <li><a href="#">褲裙</a></li>
                </ul><br>

                <div class="input-group">
                    <input type="text" class="form-control" placeholder="搜尋商品..">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
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
                            <!-- <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div> -->
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

    <footer class="container-fluid">
        <p>Footer Text</p>
    </footer>

</body>

<?php echo '<script'; ?>
>
    $(document).ready(function() {
        $("a")
    }
    });

<?php echo '</script'; ?>
>

</html>
<?php }
}
