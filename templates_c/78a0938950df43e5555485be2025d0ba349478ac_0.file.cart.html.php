<?php
/* Smarty version 3.1.33, created on 2018-12-30 05:40:37
  from 'C:\wamp64\www\Game-Online-Store\templates\cart.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c285a554afc99_31184917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78a0938950df43e5555485be2025d0ba349478ac' => 
    array (
      0 => 'C:\\wamp64\\www\\Game-Online-Store\\templates\\cart.html',
      1 => 1546148434,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.html' => 1,
  ),
),false)) {
function content_5c285a554afc99_31184917 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <?php echo '<script'; ?>
 src="js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <title></title>
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
                    <li><a href="store.php?category=0">線上商店</a></li>
                    <li><a href="#">聯繫我們</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <?php echo $_smarty_tpl->tpl_vars['welcome']->value;?>

                    <li><a href="cart.html"><span class="glyphicon glyphicon-shopping-cart"></span>購物車</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>商品名稱</th>
                    <th>單價</th>
                    <th>數量</th>
                    <th>總計</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart_info']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
                <tr>
                    <td><img src="uploads/<?php echo $_smarty_tpl->tpl_vars['product']->value['pNo'];?>
" class="item_image"><br><h3><?php echo $_smarty_tpl->tpl_vars['product']->value['pName'];?>
</h3></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['product']->value['unitPrice'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['product']->value['amount'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['product']->value['total'];?>
</td>
                    <td><button class="btn btn-default" id="btn_delete">刪除</button></td>
                </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
        <button class="btn btn-default btn_chechout" id="btn_check">結帳</button>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>

<?php echo '<script'; ?>
>
    $(document).ready(function() {
        $("#btn_check").click(function(){
            $(location).attr('href', 'check_out.php');
        });
        $("#btn_delete").click(function(){
            if(confirm("是否將此商品從購物車中移除?")){
                $(location).attr('href', 'function.php?action=delete_cart_item&pNo=<?php echo $_smarty_tpl->tpl_vars['product']->value['pNo'];?>
');
            }
        });
    });

<?php echo '</script'; ?>
>
</html>
<?php }
}
