<?php
/* Smarty version 4.3.0, created on 2024-06-16 15:42:25
  from '/var/www/cs_cart_multi_vendor/design/themes/responsive/templates/views/products/components/notification.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f6a51172249_82152223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f10ea2d51a762ed1508b9482b78b2b78d64e3fb' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/themes/responsive/templates/views/products/components/notification.tpl',
      1 => 1718407867,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/products/components/product_notification_items.tpl' => 2,
  ),
),false)) {
function content_666f6a51172249_82152223 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/cs_cart_multi_vendor/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/var/www/cs_cart_multi_vendor/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="ty-product-notification__body cm-notification-max-height"><?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_notification_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo $_smarty_tpl->tpl_vars['product_info']->value;?>
</div><div class="ty-product-notification__buttons clearfix"><?php echo $_smarty_tpl->tpl_vars['product_buttons']->value;?>
</div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/components/notification.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/products/components/notification.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="ty-product-notification__body cm-notification-max-height"><?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_notification_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
echo $_smarty_tpl->tpl_vars['product_info']->value;?>
</div><div class="ty-product-notification__buttons clearfix"><?php echo $_smarty_tpl->tpl_vars['product_buttons']->value;?>
</div><?php }
}
}
