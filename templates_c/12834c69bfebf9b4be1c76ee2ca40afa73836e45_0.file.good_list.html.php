<?php
/* Smarty version 3.1.33, created on 2018-12-22 01:47:40
  from 'C:\wamp64\www\web\templates\good_list.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1d273c38a961_19779823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12834c69bfebf9b4be1c76ee2ca40afa73836e45' => 
    array (
      0 => 'C:\\wamp64\\www\\web\\templates\\good_list.html',
      1 => 1545414413,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c1d273c38a961_19779823 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_goods']->value, 'goods');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['goods']->value) {
?>
    <div class="col-sm-4">
        <div class="panel panel-primary">
            <div class="panel-heading">BLACK FRIDAY DEAL</div>
            <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
            <div class="panel-footer"><?php echo $_smarty_tpl->tpl_vars['goods']->value['pName'];?>
</div>
        </div>
    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
}
