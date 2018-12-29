<?php
/* Smarty version 3.1.33, created on 2018-12-29 17:29:02
  from 'C:\wamp64\www\web\templates\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c273e5e0e9639_36410515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f96c7be0617f2a8395da2ec59cd53feb2f863f79' => 
    array (
      0 => 'C:\\wamp64\\www\\web\\templates\\index.html',
      1 => 1546075738,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.html' => 1,
  ),
),false)) {
function content_5c273e5e0e9639_36410515 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <title>遊戲首富線上商城</title>
    <!-- <meta charset="utf-8"> -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <?php echo '<script'; ?>
 src="js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <style>
        /* Remove the navbar's default rounded borders and increase the bottom margin */

.navbar {
margin-bottom: 50px;
border-radius: 0;
}
/* Remove the jumbotron's default bottom margin */

.jumbotron {
margin-bottom: 0;
}
/* Add a gray background color and some padding to the footer */

footer {
background-color: #f2f2f2;
padding: 25px;
}

@media (min-width:500px) {
#searchbar{
width: 500px;
}
}

#searchbar{
margin: 20px auto;
}
        
.text_center{
text-align: center
}
.text_center > span {
	color: firebrick;
    font-weight: bolder;
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
                    <li class="active"><a href="#">首頁</a></li>
                    <li><a href="#">關於本站</a></li>
                    <li><a href="test.php">Deals</a></li>
                    <li><a href="store.php">線上商店</a></li>
                    <li><a href="#">聯繫我們</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
<!--
                    <li><a href="login.html"><span class="glyphicon glyphicon-user"></span>登入/註冊</a></li>
                    <li><a href="account.html"><span class="glyphicon glyphicon-user"></span>會員中心</a></li>
-->
                    <?php echo $_smarty_tpl->tpl_vars['welcome']->value;?>

                    <li><a href="cart.php?add_to_cart=no"><span class="glyphicon glyphicon-shopping-cart"></span>購物車</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron">
        <div class="container text-center">
            <h2>Welcome to</h2>
            <h1>遊戲首富</h1>
        </div>
    </div>

    <div class="input-group" id="searchbar">
        <input type="text" class="form-control" placeholder="搜尋商品..">
        <span class="input-group-btn">
            <button class="btn btn-default" type="button">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
    </div>

<!--
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="panel panel-success">
                    <div class="panel-heading">BLACK FRIDAY DEAL</div>
                    <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
                    <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-danger">
                    <div class="panel-heading">BLACK FRIDAY DEAL</div>
                    <div class="panel-body">
                        <a href="item.html"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></a>
                    </div>
                    <div class="panel-footer" style="text-align: center;">遊戲寶物2</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-success">
                    <div class="panel-heading">BLACK FRIDAY DEAL</div>
                    <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
                    <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
                </div>
            </div>
        </div>
    </div><br>
-->

    <div class="container">
        <div class="row">
            <h2 class="text_center"><span class="panel panel-danger">&nbsp&nbsp熱門商品 HOT!!&nbsp&nbsp</span></h2><br>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_goods']->value, 'goods');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['goods']->value) {
?>
            <!-- <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">BLACK FRIDAY DEAL</div>
                    <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
                    <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">BLACK FRIDAY DEAL</div>
                    <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
                    <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
                </div>
            </div> -->
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

    <!-- <footer class="container-fluid text-center">
        <p>Online Store Copyright</p>
        <form class="form-inline">Get deals:
            <input type="email" class="form-control" size="50" placeholder="Email Address">
            <button type="button" class="btn btn-danger">Sign Up</button>
        </form>
    </footer> -->
    <?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>

<?php echo '<script'; ?>
>
    $(document).ready(function() {
        $("h1").click(function() {
            $(this).hide();
        });
    });

<?php echo '</script'; ?>
>

</html>
<?php }
}
