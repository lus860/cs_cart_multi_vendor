<?php
/* Smarty version 4.3.0, created on 2024-06-16 15:49:36
  from '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/rma/hooks/products/detailed_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f6c005e2c26_70085056',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44b765fde523c1d586efbf3647f08b3e2e1e5cdd' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/rma/hooks/products/detailed_content.post.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 1,
  ),
),false)) {
function content_666f6c005e2c26_70085056 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/cs_cart_multi_vendor/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('rma','returnable','return_period_days'));
$_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("rma"),'target'=>"#acc_addon_rma"), 0, false);
?>
<div id="acc_addon_rma" class="collapse in">
<div class="control-group">
    <label class="control-label" for="is_returnable"><?php echo $_smarty_tpl->__("returnable");?>
:</label>
    <div class="controls">
        <label class="checkbox">
        <input type="hidden" name="product_data[is_returnable]" id="is_returnable" value=<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
 />
        <input type="checkbox"
            name="product_data[is_returnable]"
            value=<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>

            <?php if ($_smarty_tpl->tpl_vars['product_data']->value['is_returnable'] === smarty_modifier_enum("YesNo::YES") || ($_smarty_tpl->tpl_vars['runtime']->value['mode'] === "add" && $_smarty_tpl->tpl_vars['addons']->value['rma']['returnable'] === smarty_modifier_enum("YesNo::YES"))) {?>
                checked="checked"
            <?php }?>
            onclick="Tygh.$.disable_elms(['return_period'], !this.checked);"
        />
        </label>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="return_period"><?php echo $_smarty_tpl->__("return_period_days");?>
:</label>
    <div class="controls">
        <input type="text"
            id="return_period"
            name="product_data[return_period]"
            value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['product_data']->value['return_period'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['addons']->value['rma']['return_period'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
            size="10"
            <?php if ($_smarty_tpl->tpl_vars['product_data']->value['is_returnable'] !== smarty_modifier_enum("YesNo::YES") && ($_smarty_tpl->tpl_vars['runtime']->value['mode'] !== "add" || $_smarty_tpl->tpl_vars['addons']->value['rma']['returnable'] !== smarty_modifier_enum("YesNo::YES"))) {?>
                disabled="disabled"
            <?php }?>
        />
    </div>
</div>
</div>
<?php }
}
