<?php
/* Smarty version 4.3.0, created on 2024-06-16 10:35:27
  from '/var/www/cs_cart_multi_vendor/design/themes/responsive/templates/addons/rss_feed/hooks/wrapper/mainbox_general_title_wrapper.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f225fa9fee2_95657527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46fe38cfeaedb723ed6c2e6d0236e0a8847c2b6d' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/themes/responsive/templates/addons/rss_feed/hooks/wrapper/mainbox_general_title_wrapper.post.tpl',
      1 => 1718464474,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/rss_feed/blocks/rss_feed.tpl' => 2,
  ),
),false)) {
function content_666f225fa9fee2_95657527 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/cs_cart_multi_vendor/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/var/www/cs_cart_multi_vendor/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_REQUEST['category_id']) {?>
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['rss_feed']['display_rss_feed_in_category'] == "Y") {
$_smarty_tpl->_subTemplateRender("tygh:addons/rss_feed/blocks/rss_feed.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('param'=>"&category_id=".((string)$_REQUEST['category_id'])), 0, false);
}
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/rss_feed/hooks/wrapper/mainbox_general_title_wrapper.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/rss_feed/hooks/wrapper/mainbox_general_title_wrapper.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_REQUEST['category_id']) {?>
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['rss_feed']['display_rss_feed_in_category'] == "Y") {
$_smarty_tpl->_subTemplateRender("tygh:addons/rss_feed/blocks/rss_feed.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('param'=>"&category_id=".((string)$_REQUEST['category_id'])), 0, true);
}
}
}
}
}
