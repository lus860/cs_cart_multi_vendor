<?php
/* Smarty version 4.3.0, created on 2024-06-16 16:00:12
  from '/var/www/cs_cart_multi_vendor/design/backend/templates/views/sync_data/components/sync_provider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f6e7c57d801_07607513',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '900c1c505a645a4ab0298495b327b3e84a167662' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/backend/templates/views/sync_data/components/sync_provider.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666f6e7c57d801_07607513 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/cs_cart_multi_vendor/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
\Tygh\Languages\Helper::preloadLangVars(array('never','nothing_sign','nothing_sign'));
$_smarty_tpl->_assignInScope('allow_manage', fn_check_permissions("sync_data","update","admin","GET",array("sync_provider_id"=>$_smarty_tpl->tpl_vars['provider_id']->value)));
if ($_smarty_tpl->tpl_vars['allow_manage']->value) {?>
    <tr>
        <td><a href="<?php echo htmlspecialchars((string) fn_url("sync_data.update?sync_provider_id=".((string)$_smarty_tpl->tpl_vars['provider_id']->value)), ENT_QUOTES, 'UTF-8');?>
" class="link--monochrome"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['provider']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></td>
        <td><?php if (!empty($_smarty_tpl->tpl_vars['last_sync_info']->value['last_sync_timestamp'])) {
echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['last_sync_info']->value['last_sync_timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');
} else {
echo $_smarty_tpl->__("never");
}?></td>
        <td><?php if (!empty($_smarty_tpl->tpl_vars['last_sync_info']->value['status'])) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['last_sync_info']->value['status'], ENT_QUOTES, 'UTF-8');
} else {
echo $_smarty_tpl->__("nothing_sign");
}?></td>
        <td><?php if (!empty($_smarty_tpl->tpl_vars['last_sync_info']->value['log_file_url'])) {?><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['last_sync_info']->value['log_file_url'], ENT_QUOTES, 'UTF-8');?>
" class="link--monochrome"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['last_sync_info']->value['log_file_name'], ENT_QUOTES, 'UTF-8');?>
</a><?php } else {
echo $_smarty_tpl->__("nothing_sign");
}?></td>
    </tr>
<?php }
}
}
