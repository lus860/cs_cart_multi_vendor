<?php
/* Smarty version 4.3.0, created on 2024-06-16 15:09:39
  from '/var/www/cs_cart_multi_vendor/design/backend/templates/views/debugger/components/sorter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f62a326aa51_71916578',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f295ecab2283566711da78bc57cbc202105b2df' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/backend/templates/views/debugger/components/sorter.tpl',
      1 => 1717753007,
      2 => 'backend',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666f62a326aa51_71916578 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/cs_cart_multi_vendor/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
if ($_smarty_tpl->tpl_vars['field']->value != $_smarty_tpl->tpl_vars['order_by']->value) {?>
    <?php $_smarty_tpl->_assignInScope('direction', "none");?>
    <?php $_smarty_tpl->_assignInScope('order_direction', "asc");
} else { ?>
    <?php if ($_smarty_tpl->tpl_vars['direction']->value == "asc") {?>
        <?php $_smarty_tpl->_assignInScope('order_direction', "desc");?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('order_direction', "asc");?>
    <?php }
}?>
<a class="cm-ajax cm-ajax-cache" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['url']->value)."?order_by=".((string)$_smarty_tpl->tpl_vars['field']->value).",".((string)$_smarty_tpl->tpl_vars['order_direction']->value)."&debugger_hash=".((string)$_smarty_tpl->tpl_vars['debugger_hash']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['target_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['text']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['direction']->value == "none") {
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"icon-asc"),$_smarty_tpl);
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"icon-desc",'data'=>array('style'=>"margin-left: -2px;")),$_smarty_tpl);
} else {
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>$_smarty_tpl->tpl_vars['order_direction']->value),$_smarty_tpl);
}?></a>
<?php }
}
