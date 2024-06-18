<?php
/* Smarty version 4.3.0, created on 2024-06-16 15:40:54
  from '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/discussion/hooks/companies/tabs_extra.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f69f62ad912_00779843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00512caac3961152683e6fc8521ecc8d5cf7c5e1' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/discussion/hooks/companies/tabs_extra.post.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/discussion/views/discussion_manager/components/new_discussion_popup.tpl' => 1,
  ),
),false)) {
function content_666f69f62ad912_00779843 (Smarty_Internal_Template $_smarty_tpl) {
if (!fn_allowed_for("ULTIMATE")) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion_manager/components/new_discussion_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_company_id'=>$_smarty_tpl->tpl_vars['company_data']->value['company_id']), 0, false);
}
}
}
