<?php
/* Smarty version 4.3.0, created on 2024-06-16 09:35:39
  from '/var/www/cs_cart_multi_vendor/design/themes/responsive/templates/addons/reward_points/views/products/components/product_representation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f145b039d44_48652212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f42a0aa75b9e15ed7928d76133cd64b20ebbeb20' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/themes/responsive/templates/addons/reward_points/views/products/components/product_representation.tpl',
      1 => 1718464474,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666f145b039d44_48652212 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/cs_cart_multi_vendor/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/var/www/cs_cart_multi_vendor/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('price_in_points','points_lowercase','reward_points','points_lowercase','price_in_points','points_lowercase','reward_points','points_lowercase'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['product']->value['points_info']['price']) {?>
    <div class="ty-reward-group">
        <span class="ty-control-group__label product-list-field"><?php echo $_smarty_tpl->__("price_in_points");?>
:</span>
        <span class="ty-control-group__item" id="price_in_points_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><bdi><?php echo $_smarty_tpl->__("points_lowercase",array($_smarty_tpl->tpl_vars['product']->value['points_info']['price']));?>
</bdi></span>
    </div>
<?php }?>
<div class="ty-reward-group product-list-field<?php if (!$_smarty_tpl->tpl_vars['product']->value['points_info']['reward']['amount']) {?> hidden<?php }?>">
    <span class="ty-control-group__label"><?php echo $_smarty_tpl->__("reward_points");?>
:</span>
    <span class="ty-control-group__item" id="reward_points_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><bdi><?php echo $_smarty_tpl->__("points_lowercase",array($_smarty_tpl->tpl_vars['product']->value['points_info']['reward']['amount']));?>
</bdi></span>
</div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/reward_points/views/products/components/product_representation.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/reward_points/views/products/components/product_representation.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value['points_info']['price']) {?>
    <div class="ty-reward-group">
        <span class="ty-control-group__label product-list-field"><?php echo $_smarty_tpl->__("price_in_points");?>
:</span>
        <span class="ty-control-group__item" id="price_in_points_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><bdi><?php echo $_smarty_tpl->__("points_lowercase",array($_smarty_tpl->tpl_vars['product']->value['points_info']['price']));?>
</bdi></span>
    </div>
<?php }?>
<div class="ty-reward-group product-list-field<?php if (!$_smarty_tpl->tpl_vars['product']->value['points_info']['reward']['amount']) {?> hidden<?php }?>">
    <span class="ty-control-group__label"><?php echo $_smarty_tpl->__("reward_points");?>
:</span>
    <span class="ty-control-group__item" id="reward_points_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><bdi><?php echo $_smarty_tpl->__("points_lowercase",array($_smarty_tpl->tpl_vars['product']->value['points_info']['reward']['amount']));?>
</bdi></span>
</div><?php }
}
}
