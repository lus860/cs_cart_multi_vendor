<?php
/* Smarty version 4.3.0, created on 2024-06-16 14:59:08
  from '/var/www/cs_cart_multi_vendor/design/themes/responsive/templates/addons/hybrid_auth/hooks/auth_info/extra.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f602ceaf352_15365188',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f37b2174319fc408bafd271e2bd19206f0ecbf6a' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/themes/responsive/templates/addons/hybrid_auth/hooks/auth_info/extra.post.tpl',
      1 => 1718464474,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666f602ceaf352_15365188 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/cs_cart_multi_vendor/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/var/www/cs_cart_multi_vendor/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('hybrid_auth.connect_social_title','hybrid_auth.text_connect_social','hybrid_auth.specify_email_title','hybrid_auth.text_specify_email','hybrid_auth.connect_social_title','hybrid_auth.text_connect_social','hybrid_auth.specify_email_title','hybrid_auth.text_specify_email'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['runtime']->value['controller'] == "auth") {?>
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "connect_social") {?>
    <h4 class="ty-login-info__title"><?php echo $_smarty_tpl->__("hybrid_auth.connect_social_title");?>
</h4>
    <div class="ty-login-info__txt"><?php echo $_smarty_tpl->__("hybrid_auth.text_connect_social");?>
</div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "specify_email") {?>
        <h4 class="ty-login-info__title"><?php echo $_smarty_tpl->__("hybrid_auth.specify_email_title");?>
</h4>
        <div class="ty-login-info__txt"><?php echo $_smarty_tpl->__("hybrid_auth.text_specify_email");?>
</div>
    <?php }
}?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/hybrid_auth/hooks/auth_info/extra.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/hybrid_auth/hooks/auth_info/extra.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['runtime']->value['controller'] == "auth") {?>
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "connect_social") {?>
    <h4 class="ty-login-info__title"><?php echo $_smarty_tpl->__("hybrid_auth.connect_social_title");?>
</h4>
    <div class="ty-login-info__txt"><?php echo $_smarty_tpl->__("hybrid_auth.text_connect_social");?>
</div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "specify_email") {?>
        <h4 class="ty-login-info__title"><?php echo $_smarty_tpl->__("hybrid_auth.specify_email_title");?>
</h4>
        <div class="ty-login-info__txt"><?php echo $_smarty_tpl->__("hybrid_auth.text_specify_email");?>
</div>
    <?php }
}?>

<?php }
}
}
