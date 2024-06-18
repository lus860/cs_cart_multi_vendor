<?php
/* Smarty version 4.3.0, created on 2024-06-16 09:38:44
  from '/var/www/cs_cart_multi_vendor/design/backend/templates/views/addons/components/marketplace/marketplace_search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f15140f25b2_63834837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '694113942a77161fab1d116294bf638d0c4272fb' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/backend/templates/views/addons/components/marketplace/marketplace_search.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/search.tpl' => 1,
  ),
),false)) {
function content_666f15140f25b2_63834837 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('cscart_marketplace.search','cscart_marketplace.search_description'));
?>
<div class="sidebar-row addons-marketplace-search">
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
        name="addons_marketplace-search_form" 
        method="get"
        class="form--no-margin"
        data-ca-addons-marketplace="marketplaceSearchForm"
    >
        <input type="hidden" name="result_ids" value="addons_market,actions_panel"/>

        <div class="controls">
            <input type="text"
                name="q"
                value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['q'], ENT_QUOTES, 'UTF-8');?>
"
                autofocus
                class="input-full input--no-margin"
                placeholder="<?php echo $_smarty_tpl->__("cscart_marketplace.search");?>
"
                data-ca-addons-marketplace="marketplaceSearch"
            />
        </div>

        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[addons.market]",'but_meta'=>"hidden"), 0, false);
?>
    </form>
    <div class="muted description">
        <?php echo $_smarty_tpl->__("cscart_marketplace.search_description");?>

    </div>
</div>
<?php }
}
