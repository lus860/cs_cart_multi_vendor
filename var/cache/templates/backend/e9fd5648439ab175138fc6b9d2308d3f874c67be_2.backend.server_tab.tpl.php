<?php
/* Smarty version 4.3.0, created on 2024-06-16 11:05:04
  from '/var/www/cs_cart_multi_vendor/design/backend/templates/views/debugger/components/server_tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f29506f8467_87772990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9fd5648439ab175138fc6b9d2308d3f874c67be' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/backend/templates/views/debugger/components/server_tab.tpl',
      1 => 1717753007,
      2 => 'backend',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666f29506f8467_87772990 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="deb-tab-content" id="DebugToolbarTabServerContent">
    <?php echo fn_get_phpinfo('1');?>


    <?php echo fn_get_phpinfo('2');?>


    <?php echo fn_get_phpinfo('4');?>


    <?php echo fn_get_phpinfo('8');?>

<!--DebugToolbarTabServerContent--></div><?php }
}
