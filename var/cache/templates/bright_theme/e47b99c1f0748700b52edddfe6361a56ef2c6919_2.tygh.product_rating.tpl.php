<?php
/* Smarty version 4.3.0, created on 2024-06-16 09:35:39
  from '/var/www/cs_cart_multi_vendor/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/product_rating.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f145b65e585_49276084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e47b99c1f0748700b52edddfe6361a56ef2c6919' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/product_rating.tpl',
      1 => 1718464474,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_reviews/views/product_reviews/components/product_rating_overview.tpl' => 2,
    'tygh:addons/product_reviews/views/product_reviews/components/product_stars_details.tpl' => 2,
  ),
),false)) {
function content_666f145b65e585_49276084 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/cs_cart_multi_vendor/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/var/www/cs_cart_multi_vendor/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['total_product_reviews']->value) {?>
    <section class="ty-product-review-product-rating">

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/product_rating_overview.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('average_rating'=>$_smarty_tpl->tpl_vars['average_rating']->value,'total_product_reviews'=>$_smarty_tpl->tpl_vars['total_product_reviews']->value), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/product_stars_details.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ratings_stats'=>$_smarty_tpl->tpl_vars['ratings_stats']->value,'total_product_reviews'=>$_smarty_tpl->tpl_vars['total_product_reviews']->value), 0, false);
?>

    </section>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/product_rating.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/product_rating.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['total_product_reviews']->value) {?>
    <section class="ty-product-review-product-rating">

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/product_rating_overview.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('average_rating'=>$_smarty_tpl->tpl_vars['average_rating']->value,'total_product_reviews'=>$_smarty_tpl->tpl_vars['total_product_reviews']->value), 0, true);
?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/product_stars_details.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ratings_stats'=>$_smarty_tpl->tpl_vars['ratings_stats']->value,'total_product_reviews'=>$_smarty_tpl->tpl_vars['total_product_reviews']->value), 0, true);
?>

    </section>
<?php }
}
}
}
