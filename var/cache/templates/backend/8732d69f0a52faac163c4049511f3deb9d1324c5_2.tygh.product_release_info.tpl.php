<?php
/* Smarty version 4.3.0, created on 2024-06-16 09:33:18
  from '/var/www/cs_cart_multi_vendor/design/backend/templates/common/product_release_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f13ce850835_26327001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8732d69f0a52faac163c4049511f3deb9d1324c5' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/backend/templates/common/product_release_info.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666f13ce850835_26327001 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('env_provider', (($tmp = $_smarty_tpl->tpl_vars['env_provider']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['app']->value["product.env"] ?? null : $tmp));
$_smarty_tpl->_assignInScope('is_name_shown', (($tmp = $_smarty_tpl->tpl_vars['is_product_shown']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('is_version_shown', (($tmp = $_smarty_tpl->tpl_vars['is_version_shown']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('is_time_shown', (($tmp = $_smarty_tpl->tpl_vars['is_time_shown']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('release_time', $_smarty_tpl->tpl_vars['env_provider']->value->getReleaseTime());
$_tmp_array = isset($_smarty_tpl->tpl_vars['release_time']) ? $_smarty_tpl->tpl_vars['release_time']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['params']["[month]"] = $_smarty_tpl->__($_smarty_tpl->tpl_vars['release_time']->value['params']["[month]"]);
$_smarty_tpl->_assignInScope('release_time', $_tmp_array);?><span class="product-release"><?php if ($_smarty_tpl->tpl_vars['is_name_shown']->value) {?><span class="product-release__name"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['env_provider']->value->getProductName(), ENT_QUOTES, 'UTF-8');?>
</span><?php }
if ($_smarty_tpl->tpl_vars['is_version_shown']->value) {?><span class="product-release__version">v<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['env_provider']->value->getProductVersion(), ENT_QUOTES, 'UTF-8');?>
</span><?php }
if ($_smarty_tpl->tpl_vars['is_time_shown']->value) {?><span class="product-release__time">(<?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['release_time']->value['message'],$_smarty_tpl->tpl_vars['release_time']->value['params']);?>
)</span><?php }?></span><?php }
}
