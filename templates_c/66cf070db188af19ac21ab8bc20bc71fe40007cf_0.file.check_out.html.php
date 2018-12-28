<?php
/* Smarty version 3.1.33, created on 2018-12-24 22:50:27
  from 'C:\wamp64\www\web\templates\check_out.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c20f233b92091_49774855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66cf070db188af19ac21ab8bc20bc71fe40007cf' => 
    array (
      0 => 'C:\\wamp64\\www\\web\\templates\\check_out.html',
      1 => 1545663002,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c20f233b92091_49774855 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <li><a href="store.html">線上商店</a></li>
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
        <h1>訂單已送出!</h1>
        <a href="index.php"><button class="btn btn-default btn_chechout" id="btn_check">查看明細</button></a>
        <a href="index.php"><button class="btn btn-default btn_chechout" id="btn_check">繼續購物</button></a>
    </div>
</body>

<?php echo '<script'; ?>
>
    $(document).ready(function() {
        $("#btn_check").click(function(){

        });
    });

<?php echo '</script'; ?>
>
</html>
<?php }
}
