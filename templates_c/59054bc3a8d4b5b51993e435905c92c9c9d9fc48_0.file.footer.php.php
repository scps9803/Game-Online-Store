<?php
/* Smarty version 3.1.33, created on 2018-12-23 22:15:09
  from 'C:\wamp64\www\web\footer.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1f986de64628_80877268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59054bc3a8d4b5b51993e435905c92c9c9d9fc48' => 
    array (
      0 => 'C:\\wamp64\\www\\web\\footer.php',
      1 => 1545573173,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c1f986de64628_80877268 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>if(isset($_COOKIE["cart"]) && $_COOKIE["cart"]!=""){
    $smarty->assign("cart",$_COOKIE["cart"]);
}
$smarty->display("index.html")
<?php echo '?>';
}
}
