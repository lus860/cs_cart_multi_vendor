<?php
/* Smarty version 4.3.0, created on 2024-06-16 14:07:16
  from '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/reward_points/hooks/profiles/update_tools_list.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f5404558f14_18521988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6aed4aebc71428c0ce13d221e35cb95f22f20522' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/reward_points/hooks/profiles/update_tools_list.post.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666f5404558f14_18521988 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('view_user_points'));
if ($_smarty_tpl->tpl_vars['user_data']->value['user_type'] == "C" && fn_check_permissions("reward_points","userlog","admin","GET")) {?>
    <li><a class="tool-link" href="<?php echo htmlspecialchars((string) fn_url("reward_points.userlog?user_id=".((string)$_smarty_tpl->tpl_vars['id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("view_user_points");?>
</a></li>
<?php }
}
}
