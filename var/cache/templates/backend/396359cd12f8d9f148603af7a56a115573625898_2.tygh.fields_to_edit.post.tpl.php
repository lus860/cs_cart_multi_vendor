<?php
/* Smarty version 4.3.0, created on 2024-06-16 10:40:16
  from '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/seo/hooks/categories/fields_to_edit.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f2380027812_59035439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '396359cd12f8d9f148603af7a56a115573625898' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/seo/hooks/categories/fields_to_edit.post.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666f2380027812_59035439 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('seo_name'));
if ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && fn_allowed_for("ULTIMATE") || fn_allowed_for("MULTIVENDOR")) {?>
    <label class="checkbox" for="seo_name">
    	<input type="checkbox" value="seo_name" id="seo_name" name="selected_fields[extra][]" checked="checked" class="cm-item-s" />
    <?php echo $_smarty_tpl->__("seo_name");?>
</label>
<?php }
}
}
