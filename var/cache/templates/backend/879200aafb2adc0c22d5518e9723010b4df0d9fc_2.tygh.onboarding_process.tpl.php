<?php
/* Smarty version 4.3.0, created on 2024-06-16 11:05:00
  from '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/onboarding_guide/steps/onboarding_process.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f294c7c5237_20318579',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '879200aafb2adc0c22d5518e9723010b4df0d9fc' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/onboarding_guide/steps/onboarding_process.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666f294c7c5237_20318579 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('onboarding_guide.customize_onboarding_process','onboarding_guide.walk_the_seller_path'));
?>
<div class="onboarding_content_margin--bottom">
    <span class="onboarding_section__progress_text"><?php echo $_smarty_tpl->__("onboarding_guide.customize_onboarding_process");?>
</span>
</div>

<div class="onboarding_section__action_block onboarding_content_margin--bottom">
    <a href="<?php echo htmlspecialchars((string) fn_url("profiles.act_as_user?user_id=".((string)$_smarty_tpl->tpl_vars['auth']->value['user_id'])."&area=C&redirect_url=companies.apply_for_vendor",$_smarty_tpl->tpl_vars['auth']->value['user_type']), ENT_QUOTES, 'UTF-8');?>
" class="og-step-complete btn btn-primary" target="_blank"><?php echo $_smarty_tpl->__("onboarding_guide.walk_the_seller_path");?>
 ↗</a>
</div>

<?php }
}
