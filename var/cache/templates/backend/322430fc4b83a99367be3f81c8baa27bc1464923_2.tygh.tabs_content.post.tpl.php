<?php
/* Smarty version 4.3.0, created on 2024-06-16 15:40:54
  from '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/discussion/hooks/companies/tabs_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f69f629a895_27253164',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '322430fc4b83a99367be3f81c8baa27bc1464923' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/discussion/hooks/companies/tabs_content.post.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/discussion/views/discussion_manager/components/discussion.tpl' => 1,
  ),
),false)) {
function content_666f69f629a895_27253164 (Smarty_Internal_Template $_smarty_tpl) {
if (!fn_allowed_for("ULTIMATE")) {?>
	<?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion_manager/components/discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_company_id'=>$_smarty_tpl->tpl_vars['company_data']->value['company_id']), 0, false);
}
}
}
