<?php
/* Smarty version 4.3.0, created on 2024-06-17 14:42:43
  from '/var/www/cs_cart_multi_vendor/design/backend/templates/views/debugger/components/sorter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6670add3aa2201_43354523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac9e1f6b19b09226fc5b216da3ffc10f9e865eb7' => 
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
function content_6670add3aa2201_43354523 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/cs_cart_multi_vendor/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),1=>array('file'=>'/var/www/cs_cart_multi_vendor/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/var/www/cs_cart_multi_vendor/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
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
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="backend:views/debugger/components/sorter.tpl" id="<?php echo smarty_function_set_id(array('name'=>"backend:views/debugger/components/sorter.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
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
}
