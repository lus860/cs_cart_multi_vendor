<?php
/* Smarty version 4.3.0, created on 2024-06-16 09:36:03
  from '/var/www/cs_cart_multi_vendor/design/themes/responsive/templates/addons/rma/views/products/components/return_period_representation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f14733c1d14_58312367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93c73db68deaa6f00c09c53ad40bd612a5ef6f62' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/themes/responsive/templates/addons/rma/views/products/components/return_period_representation.tpl',
      1 => 1718464474,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666f14733c1d14_58312367 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/cs_cart_multi_vendor/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/var/www/cs_cart_multi_vendor/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('return_period','days','return_period','days'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['addons']->value['rma']['display_product_return_period'] == "Y" && $_smarty_tpl->tpl_vars['product']->value['return_period'] && $_smarty_tpl->tpl_vars['product']->value['is_returnable'] == "Y") {?>
    <div class="ty-control-group product-list-field">
        <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("return_period");?>
:</label>
        <span class="ty-control-group__item"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['return_period'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo $_smarty_tpl->__("days");?>
</span>
    </div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/rma/views/products/components/return_period_representation.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/rma/views/products/components/return_period_representation.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['addons']->value['rma']['display_product_return_period'] == "Y" && $_smarty_tpl->tpl_vars['product']->value['return_period'] && $_smarty_tpl->tpl_vars['product']->value['is_returnable'] == "Y") {?>
    <div class="ty-control-group product-list-field">
        <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("return_period");?>
:</label>
        <span class="ty-control-group__item"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['return_period'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo $_smarty_tpl->__("days");?>
</span>
    </div>
<?php }
}
}
}
