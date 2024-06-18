<?php
/* Smarty version 4.3.0, created on 2024-06-16 15:59:41
  from '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/product_bundles/hooks/product_picker/table_header.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f6e5d8a3041_06027703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78beb4b04dc1181bed18888c93588427e17be6d3' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/product_bundles/hooks/product_picker/table_header.post.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666f6e5d8a3041_06027703 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('price','discount','value','discounted_price','product_bundles.show_on_product_page'));
if ($_smarty_tpl->tpl_vars['runtime']->value['controller'] === "product_bundles" || $_smarty_tpl->tpl_vars['extra_mode']->value === "product_bundles") {?>
    <th><?php echo $_smarty_tpl->__("price");?>
</th>
    <th><?php echo $_smarty_tpl->__("discount");?>
</th>
    <th><?php echo $_smarty_tpl->__("value");?>
</th>
    <th><?php echo $_smarty_tpl->__("discounted_price");?>
</th>
    <th><?php echo $_smarty_tpl->__("product_bundles.show_on_product_page");?>
</th>
<?php }
}
}
