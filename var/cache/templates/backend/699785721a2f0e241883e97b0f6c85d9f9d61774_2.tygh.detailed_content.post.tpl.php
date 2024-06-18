<?php
/* Smarty version 4.3.0, created on 2024-06-16 15:40:54
  from '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/seo/hooks/companies/detailed_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f69f61ffd64_57290733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '699785721a2f0e241883e97b0f6c85d9f9d61774' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/seo/hooks/companies/detailed_content.post.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/seo/common/seo_name_field.tpl' => 1,
  ),
),false)) {
function content_666f69f61ffd64_57290733 (Smarty_Internal_Template $_smarty_tpl) {
if (!fn_allowed_for("ULTIMATE")) {
$_smarty_tpl->_subTemplateRender("tygh:addons/seo/common/seo_name_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_data'=>$_smarty_tpl->tpl_vars['company_data']->value,'object_name'=>"company_data",'object_id'=>$_smarty_tpl->tpl_vars['company_data']->value['company_id'],'object_type'=>"m"), 0, false);
}
}
}
