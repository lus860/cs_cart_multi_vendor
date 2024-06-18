<?php
/* Smarty version 4.3.0, created on 2024-06-16 15:49:36
  from '/var/www/cs_cart_multi_vendor/design/backend/templates/buttons/add_empty_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f6c0059a4a3_39339276',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd321b2ea80031b7b38c6409f1f96ed0089b53d4' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/backend/templates/buttons/add_empty_item.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666f6c0059a4a3_39339276 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('add'));
?>
<a class="btn btn-add" name="add" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" onclick="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("add");?>
</a>&nbsp;<?php }
}
