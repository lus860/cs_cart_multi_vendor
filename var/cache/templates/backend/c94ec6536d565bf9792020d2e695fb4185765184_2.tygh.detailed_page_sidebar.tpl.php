<?php
/* Smarty version 4.3.0, created on 2024-06-16 09:36:13
  from '/var/www/cs_cart_multi_vendor/design/backend/templates/views/addons/components/detailed_page/sidebar/detailed_page_sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f147d013549_42912507',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c94ec6536d565bf9792020d2e695fb4185765184' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/backend/templates/views/addons/components/detailed_page/sidebar/detailed_page_sidebar.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/addons/components/detailed_page/sidebar/addon_status.tpl' => 1,
    'tygh:views/addons/components/detailed_page/sidebar/enjoy_addon.tpl' => 1,
    'tygh:views/addons/components/detailed_page/sidebar/addon_market_info.tpl' => 1,
    'tygh:views/addons/components/detailed_page/sidebar/addon_support.tpl' => 1,
  ),
),false)) {
function content_666f147d013549_42912507 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/cs_cart_multi_vendor/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"addons_detailed:manage_sidebar"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"addons_detailed:manage_sidebar"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/detailed_page/sidebar/addon_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/detailed_page/sidebar/enjoy_addon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/detailed_page/sidebar/addon_market_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/detailed_page/sidebar/addon_support.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"addons_detailed:manage_sidebar"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
