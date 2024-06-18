<?php
/* Smarty version 4.3.0, created on 2024-06-16 15:49:32
  from '/var/www/cs_cart_multi_vendor/design/backend/templates/views/products/components/search_filters/products_feature_items.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f6bfcad2a87_96183531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '481c9dd517ed41d898e2213343dee4ea94eb0348' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/backend/templates/views/products/components/search_filters/products_feature_items.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/products/components/advanced_search_form.tpl' => 1,
  ),
),false)) {
function content_666f6bfcad2a87_96183531 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('error_features_too_many_variants'));
if ($_smarty_tpl->tpl_vars['feature_items']->value) {?>
    <div class="group form-horizontal">
        <div class="control-group">
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/advanced_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('filter_features'=>$_smarty_tpl->tpl_vars['feature_items']->value,'prefix'=>((string)$_smarty_tpl->tpl_vars['form_id']->value)."_feature_",'data_name'=>"feature_variants"), 0, false);
?>
        </div>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['feature_items_too_many']->value) {?>
    <div class="group form-horizontal">
        <?php echo $_smarty_tpl->__("error_features_too_many_variants");?>

    </div>
<?php }
}
}
