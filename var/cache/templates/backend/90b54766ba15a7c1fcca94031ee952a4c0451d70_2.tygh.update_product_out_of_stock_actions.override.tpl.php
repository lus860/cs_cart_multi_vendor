<?php
/* Smarty version 4.3.0, created on 2024-06-16 15:49:36
  from '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/product_variations/hooks/products/update_product_out_of_stock_actions.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f6c004d6a21_21274938',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90b54766ba15a7c1fcca94031ee952a4c0451d70' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/product_variations/hooks/products/update_product_out_of_stock_actions.override.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666f6c004d6a21_21274938 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("out_of_stock_actions")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
