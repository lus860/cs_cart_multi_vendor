<?php
/* Smarty version 4.3.0, created on 2024-06-16 14:06:08
  from '/var/www/cs_cart_multi_vendor/design/backend/templates/views/profiles/components/context_menu/notify_checkboxes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f53c0071e13_35194657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4e23e66f3f381212650c750f311fa53a229ee83' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/backend/templates/views/profiles/components/context_menu/notify_checkboxes.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/notify_checkboxes.tpl' => 1,
  ),
),false)) {
function content_666f53c0071e13_35194657 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('notify_user'));
?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/notify_checkboxes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prefix'=>"multiple",'id'=>"select",'notify'=>true,'notify_customer_status'=>true,'notify_text'=>$_smarty_tpl->__("notify_user"),'name_prefix'=>"notify"), 0, false);
}
}
