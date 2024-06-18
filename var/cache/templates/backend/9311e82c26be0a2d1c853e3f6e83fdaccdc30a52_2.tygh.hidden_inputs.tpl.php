<?php
/* Smarty version 4.3.0, created on 2024-06-16 15:49:32
  from '/var/www/cs_cart_multi_vendor/design/backend/templates/components/search_filters/hidden_inputs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f6bfcb5bde0_37554419',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9311e82c26be0a2d1c853e3f6e83fdaccdc30a52' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/backend/templates/components/search_filters/hidden_inputs.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666f6bfcb5bde0_37554419 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/cs_cart_multi_vendor/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/var/www/cs_cart_multi_vendor/app/functions/smarty_plugins/function.array_to_fields.php','function'=>'smarty_function_array_to_fields',),));
?>
<input type="hidden" name="is_search" value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="type" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['search_filters']->value['search_type'] ?? null)===null||$tmp==='' ? "simple" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="update_view_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['view_id'], ENT_QUOTES, 'UTF-8');?>
" disabled data-ca-search-filters="updateView" />
<?php if ($_REQUEST['redirect_url']) {?>
    <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_REQUEST['redirect_url'], ENT_QUOTES, 'UTF-8');?>
" />
<?php }
if ($_smarty_tpl->tpl_vars['search_filters']->value['selected_section'] !== '') {?>
    <input type="hidden" id="selected_section" name="selected_section" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_filters']->value['selected_section'], ENT_QUOTES, 'UTF-8');?>
" />
<?php }
if ($_smarty_tpl->tpl_vars['put_request_vars']->value) {?>
    <div class="hidden" data-ca-search-filters="requestVars">
        <?php echo smarty_function_array_to_fields(array('data'=>$_REQUEST,'skip'=>array("callback"),'escape_all'=>true),$_smarty_tpl);?>

    </div>
<?php }
}
}
