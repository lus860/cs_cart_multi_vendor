<?php
/* Smarty version 4.3.0, created on 2024-06-16 15:49:36
  from '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/product_variations/hooks/products/update_product_shipping_settings.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f6c00552ab6_76860469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d31665f8e441b6e486bab9b17c8cb0989fa4057' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/product_variations/hooks/products/update_product_shipping_settings.override.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666f6c00552ab6_76860469 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("shippings")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
