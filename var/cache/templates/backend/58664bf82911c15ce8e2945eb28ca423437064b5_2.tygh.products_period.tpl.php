<?php
/* Smarty version 4.3.0, created on 2024-06-16 15:49:32
  from '/var/www/cs_cart_multi_vendor/design/backend/templates/views/products/components/search_filters/products_period.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f6bfcab8c34_55440587',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58664bf82911c15ce8e2945eb28ca423437064b5' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/backend/templates/views/products/components/search_filters/products_period.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/period_selector.tpl' => 1,
  ),
),false)) {
function content_666f6bfcab8c34_55440587 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="search-filters__period-selector">
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/period_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('period'=>$_smarty_tpl->tpl_vars['search']->value['period'],'form_name'=>((string)$_smarty_tpl->tpl_vars['form_id']->value)."search_form",'nowrap'=>false,'form_inline'=>false,'show_divider'=>false,'is_block'=>true,'full_width'=>true), 0, false);
?>
</div><?php }
}
