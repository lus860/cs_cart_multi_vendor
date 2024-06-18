<?php
/* Smarty version 4.3.0, created on 2024-06-16 10:41:25
  from '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/age_verification/hooks/categories/detailed_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f23c55230c4_88941690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '525a75b45dad82e1b96ffec81a4498a3d4acea73' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/age_verification/hooks/categories/detailed_content.post.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 1,
    'tygh:addons/age_verification/views/age_verification/components/update_fields.tpl' => 1,
  ),
),false)) {
function content_666f23c55230c4_88941690 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('age_verification'));
$_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("age_verification"),'target'=>"#age_verification_fields"), 0, false);
$_smarty_tpl->_subTemplateRender("tygh:addons/age_verification/views/age_verification/components/update_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('array_name'=>"category_data",'record'=>$_smarty_tpl->tpl_vars['category_data']->value), 0, false);
}
}
