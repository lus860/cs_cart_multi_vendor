<?php
/* Smarty version 4.3.0, created on 2024-06-16 15:49:14
  from '/var/www/cs_cart_multi_vendor/design/backend/templates/common/status.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f6bea6d7a37_72944763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67b4519bbb3b03b9eafa09b06a6cca85d1868200' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/backend/templates/common/status.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666f6bea6d7a37_72944763 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/cs_cart_multi_vendor/app/lib/vendor/smarty/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),1=>array('file'=>'/var/www/cs_cart_multi_vendor/app/lib/vendor/smarty/smarty/libs/plugins/function.html_checkboxes.php','function'=>'smarty_function_html_checkboxes',),));
if (!$_smarty_tpl->tpl_vars['order_status_descr']->value) {?>
    <?php if (!$_smarty_tpl->tpl_vars['status_type']->value) {
$_smarty_tpl->_assignInScope('status_type', (defined('STATUSES_ORDER') ? constant('STATUSES_ORDER') : null));
}?>
    <?php $_smarty_tpl->_assignInScope('order_status_descr', fn_get_simple_statuses($_smarty_tpl->tpl_vars['status_type']->value));
}?>

<?php if ($_smarty_tpl->tpl_vars['display']->value == "view") {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order_status_descr']->value[$_smarty_tpl->tpl_vars['status']->value], ENT_QUOTES, 'UTF-8');
} elseif ($_smarty_tpl->tpl_vars['display']->value == "select") {
echo smarty_function_html_options(array('name'=>$_smarty_tpl->tpl_vars['name']->value,'options'=>$_smarty_tpl->tpl_vars['order_status_descr']->value,'selected'=>$_smarty_tpl->tpl_vars['status']->value,'id'=>$_smarty_tpl->tpl_vars['select_id']->value),$_smarty_tpl);
} elseif ($_smarty_tpl->tpl_vars['display']->value == "checkboxes") {
echo smarty_function_html_checkboxes(array('name'=>$_smarty_tpl->tpl_vars['name']->value,'options'=>$_smarty_tpl->tpl_vars['order_status_descr']->value,'selected'=>$_smarty_tpl->tpl_vars['status']->value,'columns'=>(($tmp = $_smarty_tpl->tpl_vars['columns']->value ?? null)===null||$tmp==='' ? 4 ?? null : $tmp),'assign'=>'_html_checkboxes','labels'=>false),$_smarty_tpl);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_html_checkboxes']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?><label><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</label><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
