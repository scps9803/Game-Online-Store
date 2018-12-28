<?php
/* Smarty version 3.1.33, created on 2018-12-22 01:32:40
  from 'C:\wamp64\www\web\templates\goods_list.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1d23b803f538_26200423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f61eeee34c0f0902bbdde51906a535fdc11d87c' => 
    array (
      0 => 'C:\\wamp64\\www\\web\\templates\\goods_list.html',
      1 => 1545413558,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c1d23b803f538_26200423 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <div class="col-sm-4">
        <div class="panel panel-primary">
            <div class="panel-heading">BLACK FRIDAY DEAL</div>
            <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
            <div class="panel-footer"><?php echo $_smarty_tpl->tpl_vars['all_goods']->value[1]['pName'];?>
</div>
        </div>
    </div>
</div>
<?php }
}
