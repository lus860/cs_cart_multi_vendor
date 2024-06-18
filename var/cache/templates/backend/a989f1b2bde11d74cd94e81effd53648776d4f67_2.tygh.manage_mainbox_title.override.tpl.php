<?php
/* Smarty version 4.3.0, created on 2024-06-16 14:05:51
  from '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/vendor_data_premoderation/hooks/companies/manage_mainbox_title.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f53af546603_15462210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a989f1b2bde11d74cd94e81effd53648776d4f67' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/vendor_data_premoderation/hooks/companies/manage_mainbox_title.override.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666f53af546603_15462210 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/cs_cart_multi_vendor/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('vendor_data_premoderation.vendors_require_approval'));
if ($_smarty_tpl->tpl_vars['_REQUEST']->value && $_smarty_tpl->tpl_vars['_REQUEST']->value['dispatch'] && $_smarty_tpl->tpl_vars['_REQUEST']->value['dispatch'] === "companies.manage" && $_smarty_tpl->tpl_vars['_REQUEST']->value['status'] && $_smarty_tpl->tpl_vars['_REQUEST']->value['status'][0] === smarty_modifier_enum("Addons\VendorDataPremoderation\PremoderationStatuses::PENDING") && $_smarty_tpl->tpl_vars['_REQUEST']->value['status'][1] === smarty_modifier_enum("Addons\VendorDataPremoderation\PremoderationStatuses::DISAPPROVED")) {?>
    <?php echo $_smarty_tpl->__("vendor_data_premoderation.vendors_require_approval");?>

<?php }
}
}
