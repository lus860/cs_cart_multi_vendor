<?php
/* Smarty version 4.3.0, created on 2024-06-16 14:58:37
  from '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/tags/hooks/pages/search_form.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f600dc35c50_33893232',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfac0edc55060e748d64ae065fbe51580573ea8e' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/tags/hooks/pages/search_form.post.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666f600dc35c50_33893232 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('tag'));
?>
<div class="control-group">
    <label class="control-label" for="elm_tag"><?php echo $_smarty_tpl->__("tag");?>
</label>
    <div class="controls">
    <input id="elm_tag" type="text" name="tag" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['tag'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();"/>
    </div>
</div><?php }
}
