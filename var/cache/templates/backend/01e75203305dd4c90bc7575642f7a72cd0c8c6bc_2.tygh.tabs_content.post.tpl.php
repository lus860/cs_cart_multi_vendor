<?php
/* Smarty version 4.3.0, created on 2024-06-16 10:41:25
  from '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/discussion/hooks/categories/tabs_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f23c5566862_28917615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01e75203305dd4c90bc7575642f7a72cd0c8c6bc' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/discussion/hooks/categories/tabs_content.post.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/discussion/views/discussion_manager/components/discussion.tpl' => 1,
  ),
),false)) {
function content_666f23c5566862_28917615 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && fn_allowed_for("ULTIMATE") || !fn_allowed_for("ULTIMATE")) {
$_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion_manager/components/discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_company_id'=>0), 0, false);
}
}
}
