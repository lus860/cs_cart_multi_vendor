<?php
/* Smarty version 4.3.0, created on 2024-06-16 14:31:58
  from '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/product_reviews/hooks/usergroups/general_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f59ceeae364_32686944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bf418df83ed6f4ea97f3ecc69030009eeda26f8' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/product_reviews/hooks/usergroups/general_content.post.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666f59ceeae364_32686944 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/cs_cart_multi_vendor/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
echo smarty_function_script(array('src'=>"js/addons/product_reviews/backend/usergroup_privileges.js"),$_smarty_tpl);
}
}
