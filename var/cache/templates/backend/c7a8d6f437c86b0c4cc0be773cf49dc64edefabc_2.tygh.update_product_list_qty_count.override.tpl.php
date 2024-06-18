<?php
/* Smarty version 4.3.0, created on 2024-06-16 15:49:36
  from '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/product_variations/hooks/products/update_product_list_qty_count.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f6c0046e713_58796833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7a8d6f437c86b0c4cc0be773cf49dc64edefabc' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/product_variations/hooks/products/update_product_list_qty_count.override.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666f6c0046e713_58796833 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("list_qty_count")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
