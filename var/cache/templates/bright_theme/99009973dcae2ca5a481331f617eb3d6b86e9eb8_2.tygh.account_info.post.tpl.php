<?php
/* Smarty version 4.3.0, created on 2024-06-16 15:24:08
  from '/var/www/cs_cart_multi_vendor/design/themes/responsive/templates/addons/age_verification/hooks/profiles/account_info.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f66080d1249_94097896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99009973dcae2ca5a481331f617eb3d6b86e9eb8' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/themes/responsive/templates/addons/age_verification/hooks/profiles/account_info.post.tpl',
      1 => 1718492322,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 2,
    'tygh:common/calendar.tpl' => 2,
  ),
),false)) {
function content_666f66080d1249_94097896 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/cs_cart_multi_vendor/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/var/www/cs_cart_multi_vendor/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('age_verification','birthday','age_verification','birthday'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="ty-age-verification-birthday">
    <?php if (!$_smarty_tpl->tpl_vars['nothing_extra']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("age_verification")), 0, false);
?>
    <?php }?>

    <div class="ty-control-group">
        <label class="ty-control-group__title" for="birthday"><?php echo $_smarty_tpl->__("birthday");?>
</label>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>"birthday",'date_name'=>"user_data[birthday]",'date_val'=>$_smarty_tpl->tpl_vars['user_data']->value['birthday'],'is_changeable_range'=>false), 0, false);
?>
    </div>
</div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/age_verification/hooks/profiles/account_info.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/age_verification/hooks/profiles/account_info.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="ty-age-verification-birthday">
    <?php if (!$_smarty_tpl->tpl_vars['nothing_extra']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("age_verification")), 0, true);
?>
    <?php }?>

    <div class="ty-control-group">
        <label class="ty-control-group__title" for="birthday"><?php echo $_smarty_tpl->__("birthday");?>
</label>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>"birthday",'date_name'=>"user_data[birthday]",'date_val'=>$_smarty_tpl->tpl_vars['user_data']->value['birthday'],'is_changeable_range'=>false), 0, true);
?>
    </div>
</div><?php }
}
}
