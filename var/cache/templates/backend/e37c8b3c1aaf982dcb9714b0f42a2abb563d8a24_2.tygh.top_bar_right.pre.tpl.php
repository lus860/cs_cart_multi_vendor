<?php
/* Smarty version 4.3.0, created on 2024-06-16 09:33:18
  from '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/help_center/hooks/menu/top_bar_right.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f13ce801b80_27948025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e37c8b3c1aaf982dcb9714b0f42a2abb563d8a24' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/help_center/hooks/menu/top_bar_right.pre.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/help_center/component/help_center_popup.tpl' => 1,
  ),
),false)) {
function content_666f13ce801b80_27948025 (Smarty_Internal_Template $_smarty_tpl) {
if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "admin") {?>
    <div class="top-bar__btn-wrapper dropdown dropdown-top-menu-item cm-dropdown-skip-processing help-center-menu">
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/help_center/component/help_center_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
<?php }
}
}
