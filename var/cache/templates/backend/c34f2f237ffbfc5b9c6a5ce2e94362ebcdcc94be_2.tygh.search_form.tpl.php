<?php
/* Smarty version 4.3.0, created on 2024-06-16 10:37:34
  from '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/seo/views/seo_redirects/components/search_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f22de752ff3_22932420',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c34f2f237ffbfc5b9c6a5ce2e94362ebcdcc94be' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/seo/views/seo_redirects/components/search_form.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/advanced_search.tpl' => 1,
  ),
),false)) {
function content_666f22de752ff3_22932420 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/cs_cart_multi_vendor/app/functions/smarty_plugins/modifier.sizeof.php','function'=>'smarty_modifier_sizeof',),));
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_title','seo.old_url','type','language'));
?>
<div class="sidebar-row">
<h6><?php echo $_smarty_tpl->__("admin_search_title");?>
</h6>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="seo_redirects_search_form" method="get">
<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "simple_search", null, null);?>
<div class="sidebar-field">
    <label><?php echo $_smarty_tpl->__("seo.old_url");?>
</label>
    <input type="text" name="src" size="20" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['src'], ENT_QUOTES, 'UTF-8');?>
" class="search-input-text" />
</div>

<div class="sidebar-field">
    <label><?php echo $_smarty_tpl->__("type");?>
</label>
    <select name="type">
    <option value="">--</option>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['seo_vars']->value, 'seo_var', false, 'var_type');
$_smarty_tpl->tpl_vars['seo_var']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['var_type']->value => $_smarty_tpl->tpl_vars['seo_var']->value) {
$_smarty_tpl->tpl_vars['seo_var']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['seo_var']->value['picker'] || $_smarty_tpl->tpl_vars['var_type']->value == "s") {?>
    <option <?php if ($_smarty_tpl->tpl_vars['var_type']->value == $_smarty_tpl->tpl_vars['search']->value['type']) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var_type']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['seo_var']->value['name']);?>
</option>
    <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>    
</div>

<?php if ($_smarty_tpl->tpl_vars['addons']->value['seo']['single_url'] != "Y" && smarty_modifier_sizeof($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
<div class="sidebar-field">
    <label><?php echo $_smarty_tpl->__("language");?>
</label>
    <select name="lang_code">
    <option value="">--</option>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lng');
$_smarty_tpl->tpl_vars['lng']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['lng']->value) {
$_smarty_tpl->tpl_vars['lng']->do_else = false;
?>
    <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['lng']->value['lang_code'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['search']->value['lang_code'] == $_smarty_tpl->tpl_vars['lng']->value['lang_code']) {?>selected="selected"<?php }?> ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['lng']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
</div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('simple_search'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'simple_search'),'dispatch'=>$_smarty_tpl->tpl_vars['dispatch']->value,'view_type'=>"seo_redirects",'in_popup'=>$_smarty_tpl->tpl_vars['in_popup']->value), 0, false);
?>

</form>
</div><?php }
}
