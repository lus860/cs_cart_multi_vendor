<?php
/* Smarty version 4.3.0, created on 2024-06-16 10:37:34
  from '/var/www/cs_cart_multi_vendor/design/backend/templates/pickers/pages/js.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f22de6d4b49_52912766',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a8197f4b6d99019e1bc693c5e7cba324b2e5776' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/backend/templates/pickers/pages/js.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666f22de6d4b49_52912766 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/cs_cart_multi_vendor/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),));
\Tygh\Languages\Helper::preloadLangVars(array('remove'));
if ($_smarty_tpl->tpl_vars['page_id']->value) {?>
    <?php $_smarty_tpl->_assignInScope('page', (($tmp = fn_get_page_name($_smarty_tpl->tpl_vars['page_id']->value) ?? null)===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['ldelim']->value)."page".((string)$_smarty_tpl->tpl_vars['rdelim']->value) ?? null : $tmp));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('page', $_smarty_tpl->tpl_vars['default_name']->value);
}?>

<?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
<tr <?php if (!$_smarty_tpl->tpl_vars['clone']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['holder']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php }?>class="cm-js-item<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> cm-clone hidden<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['position_field']->value) {?><td data-th="&nbsp;"><input type="text" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo smarty_function_math(array('equation'=>"a*b",'a'=>$_smarty_tpl->tpl_vars['position']->value,'b'=>10),$_smarty_tpl);?>
" size="3" class="input-micro"<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> disabled="disabled"<?php }?> /></td><?php }?>
    
    <td data-th="&nbsp;"><a href="<?php echo htmlspecialchars((string) fn_url("pages.update?page_id=".((string)$_smarty_tpl->tpl_vars['page_id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value, ENT_QUOTES, 'UTF-8');?>
</a></td>

    <td data-th="&nbsp;">
        <div class="hidden-tools">
        <?php if (!$_smarty_tpl->tpl_vars['hide_delete_button']->value && !$_smarty_tpl->tpl_vars['view_only']->value) {?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("remove"),'onclick'=>"Tygh."."$".".cePicker('delete_js_item', '".((string)$_smarty_tpl->tpl_vars['holder']->value)."', '".((string)$_smarty_tpl->tpl_vars['page_id']->value)."', 'a'); return false;"), true);?>
</li>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

        <?php }?>
        </div>
    </td>
    <?php if (!$_smarty_tpl->tpl_vars['hide_input']->value) {?>
        <input <?php if ($_smarty_tpl->tpl_vars['input_id']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <?php }?>
</tr>
<?php } else { ?>
    <span <?php if (!$_smarty_tpl->tpl_vars['clone']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['holder']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php }?>class="cm-js-item no-margin<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> cm-clone hidden<?php }?>">
    <?php if (!$_smarty_tpl->tpl_vars['first_item']->value && $_smarty_tpl->tpl_vars['single_line']->value) {?><span class="cm-comma<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> hidden<?php }?>">,&nbsp;&nbsp;</span><?php }?>
    <input class="cm-picker-value-description <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra_class']->value, ENT_QUOTES, 'UTF-8');?>
" type="text" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['display_input_id']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['display_input_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> size="10" name="page_name" readonly="readonly" <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra']->value, ENT_QUOTES, 'UTF-8');?>
>&nbsp;
    </span>
<?php }
}
}
