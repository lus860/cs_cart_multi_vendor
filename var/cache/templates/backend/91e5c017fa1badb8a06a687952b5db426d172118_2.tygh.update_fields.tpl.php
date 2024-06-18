<?php
/* Smarty version 4.3.0, created on 2024-06-16 10:41:25
  from '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/age_verification/views/age_verification/components/update_fields.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f23c552d100_87300403',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91e5c017fa1badb8a06a687952b5db426d172118' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/age_verification/views/age_verification/components/update_fields.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:components/append_language.tpl' => 1,
  ),
),false)) {
function content_666f23c552d100_87300403 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('age_verification','age_limit','years','age_warning_message'));
?>
<div id="age_verification_fields" class="in collapse">
    <fieldset>
        <div class="control-group">
            <label for="age_verification" class="control-label"><?php echo $_smarty_tpl->__("age_verification");?>
:</label>
            <div class="controls">
                <input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['array_name']->value, ENT_QUOTES, 'UTF-8');?>
[age_verification]" value="N">
                <input type="checkbox" id="age_verification" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['array_name']->value, ENT_QUOTES, 'UTF-8');?>
[age_verification]" value="Y" <?php if ($_smarty_tpl->tpl_vars['record']->value['age_verification'] == "Y") {?>checked="checked"<?php }?>>
            </div>
        </div>

        <div class="control-group">
            <label for="age_limit" class="control-label"><?php echo $_smarty_tpl->__("age_limit");?>
:</label>
            <div class="controls">
                <input type="text" id="age_limit" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['array_name']->value, ENT_QUOTES, 'UTF-8');?>
[age_limit]" size="10" maxlength="2" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['record']->value['age_limit'] ?? null)===null||$tmp==='' ? "0" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="input-micro">
                <span> &nbsp; <?php echo $_smarty_tpl->__("years");?>
</span>
            </div>
        </div>

        <div class="control-group">
            <label for="age_warning_message" class="control-label"><?php echo $_smarty_tpl->__("age_warning_message");?>
:</label>
            <div class="controls">
                <div class="input-group <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_append']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <textarea id="age_warning_message"
                        class="input-large"
                        name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['array_name']->value, ENT_QUOTES, 'UTF-8');?>
[age_warning_message]"
                        cols="55"
                        rows="4"
                    ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['record']->value['age_warning_message'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:components/append_language.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hide_inputs'=>$_smarty_tpl->tpl_vars['hide_inputs']->value), 0, false);
?>
                </div>
            </div>
        </div>
    </fieldset>
</div><?php }
}
