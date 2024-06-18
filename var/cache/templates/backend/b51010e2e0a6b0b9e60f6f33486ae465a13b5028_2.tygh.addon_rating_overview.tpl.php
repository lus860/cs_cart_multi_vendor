<?php
/* Smarty version 4.3.0, created on 2024-06-16 09:36:12
  from '/var/www/cs_cart_multi_vendor/design/backend/templates/views/addons/components/rating/addon_rating_overview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f147cf3ce86_15452146',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b51010e2e0a6b0b9e60f6f33486ae465a13b5028' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/backend/templates/views/addons/components/rating/addon_rating_overview.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/addons/components/rating/stars_with_text.tpl' => 1,
    'tygh:views/addons/components/rating/stars_details.tpl' => 1,
    'tygh:views/addons/components/rating/total_reviews.tpl' => 1,
  ),
),false)) {
function content_666f147cf3ce86_15452146 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['total_addon_reviews']->value) {?>
    <section class="cs-addons-rating-addon-rating-overview well">
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/rating/stars_with_text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rating'=>$_smarty_tpl->tpl_vars['average_rating']->value,'size'=>"xlarge"), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/rating/stars_details.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ratings_stats'=>$_smarty_tpl->tpl_vars['ratings_stats']->value), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/rating/total_reviews.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('total_addon_reviews'=>$_smarty_tpl->tpl_vars['total_addon_reviews']->value), 0, false);
?>

    </section>
<?php }
}
}
