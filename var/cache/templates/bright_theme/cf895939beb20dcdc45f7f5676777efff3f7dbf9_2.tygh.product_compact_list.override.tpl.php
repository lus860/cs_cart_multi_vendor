<?php
/* Smarty version 4.3.0, created on 2024-06-16 09:35:39
  from '/var/www/cs_cart_multi_vendor/design/themes/responsive/templates/addons/age_verification/hooks/products/product_compact_list.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f145b8a5188_51941062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf895939beb20dcdc45f7f5676777efff3f7dbf9' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/themes/responsive/templates/addons/age_verification/hooks/products/product_compact_list.override.tpl',
      1 => 1718492322,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 2,
  ),
),false)) {
function content_666f145b8a5188_51941062 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/cs_cart_multi_vendor/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/var/www/cs_cart_multi_vendor/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('product_need_age_verification','verify','product_need_age_verification','verify'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if (!$_SESSION['auth']['age'] && $_smarty_tpl->tpl_vars['product']->value['need_age_verification'] == "Y") {?>
<div class="ty-compact-list__item">

    <a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</a>

    <div class="ty-mt-m">
        <div class="ty-age-verification__txt"><?php echo $_smarty_tpl->__("product_need_age_verification");?>
</div>
        <div class="buttons-container">
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("verify"),'but_href'=>"products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_meta'=>"ty-btn__secondary",'but_role'=>"text"), 0, false);
?>
        </div>
    </div>
</div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/age_verification/hooks/products/product_compact_list.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/age_verification/hooks/products/product_compact_list.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (!$_SESSION['auth']['age'] && $_smarty_tpl->tpl_vars['product']->value['need_age_verification'] == "Y") {?>
<div class="ty-compact-list__item">

    <a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</a>

    <div class="ty-mt-m">
        <div class="ty-age-verification__txt"><?php echo $_smarty_tpl->__("product_need_age_verification");?>
</div>
        <div class="buttons-container">
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("verify"),'but_href'=>"products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_meta'=>"ty-btn__secondary",'but_role'=>"text"), 0, true);
?>
        </div>
    </div>
</div>
<?php }
}
}
}
