<?php
/* Smarty version 4.3.0, created on 2024-06-16 14:05:51
  from '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/vendor_rating/hooks/companies/list_extra_th.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f53af4965e3_90439568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '557ceb1f85ee0fccd3b70a80a06dc8b29f4c2091' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/vendor_rating/hooks/companies/list_extra_th.post.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666f53af4965e3_90439568 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('vendor_rating.absolute_vendor_rating','vendor_rating.absolute_vendor_rating_short'));
?>
<th width="19%">
    <a class="cm-ajax"
       href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=absolute_vendor_rating&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
"
       data-ca-target-id="pagination_contents"
       title="<?php echo $_smarty_tpl->__("vendor_rating.absolute_vendor_rating");?>
"
    >
        <?php echo $_smarty_tpl->__("vendor_rating.absolute_vendor_rating_short");?>

        <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] == "absolute_vendor_rating") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?>
    </a>
</th>
<?php }
}
