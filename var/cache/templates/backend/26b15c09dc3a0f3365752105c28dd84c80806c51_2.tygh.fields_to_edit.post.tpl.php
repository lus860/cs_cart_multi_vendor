<?php
/* Smarty version 4.3.0, created on 2024-06-16 10:40:16
  from '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/discussion/hooks/categories/fields_to_edit.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f238002fdd4_13356241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26b15c09dc3a0f3365752105c28dd84c80806c51' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/discussion/hooks/categories/fields_to_edit.post.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666f238002fdd4_13356241 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('discussion_title_category'));
?>
<label for="discussion_type" class="checkbox">
<input type="checkbox" value="discussion_type" id="discussion_type" name="selected_fields[extra][]" checked="checked" class="cm-item-s" />
<?php echo $_smarty_tpl->__("discussion_title_category");?>
</label>
<?php }
}
