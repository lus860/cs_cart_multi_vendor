<?php
/* Smarty version 4.3.0, created on 2024-06-16 15:59:51
  from '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/vendor_plans/hooks/companies/payout_amount.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f6e67a87a61_34516384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b42e26d2c14320307a2604023a5a6a468da6d684' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/vendor_plans/hooks/companies/payout_amount.post.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 1,
  ),
),false)) {
function content_666f6e67a87a61_34516384 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('vendor_plans.out_of_amount'));
if ($_smarty_tpl->tpl_vars['payout']->value['order_id'] && ($_smarty_tpl->tpl_vars['payout']->value['commission'] != 0 || $_smarty_tpl->tpl_vars['payout']->value['commission_amount'] != 0)) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "order_amount", null, null);?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['payout']->value['order_amount']), 0, false);
?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <br>
    <small class="muted">
        <?php echo $_smarty_tpl->__("vendor_plans.out_of_amount",array("[amount]"=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'order_amount')));?>

    </small>
<?php }
}
}
