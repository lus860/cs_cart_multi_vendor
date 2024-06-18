<?php
/* Smarty version 4.3.0, created on 2024-06-16 09:36:12
  from '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/reward_points/hooks/addons/addon_settings.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f147cebd416_16419590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84ebc24586b884245410a4bef847fc49cb599a79' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/reward_points/hooks/addons/addon_settings.post.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666f147cebd416_16419590 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/cs_cart_multi_vendor/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
if ($_smarty_tpl->tpl_vars['_addon']->value === "reward_points") {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/reward_points/index.js"),$_smarty_tpl);?>

<?php }
}
}
