<?php
/* Smarty version 4.3.0, created on 2024-06-16 09:37:49
  from '/var/www/cs_cart_multi_vendor/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/product_star_line.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f14ddea06a2_41725371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a565624382e8e4f39d9af1304eadde866b8c7b71' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/product_star_line.tpl',
      1 => 1718464474,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666f14ddea06a2_41725371 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/cs_cart_multi_vendor/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/var/www/cs_cart_multi_vendor/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.n_stars','product_reviews.reviews','product_reviews.n_stars','product_reviews.reviews'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?>
<div class="ty-product-review-product-star-line">

    <div class="ty-product-review-product-star-line__quantity">
        <?php echo $_smarty_tpl->__("product_reviews.n_stars",array($_smarty_tpl->tpl_vars['quantity']->value));?>

    </div>

    <progress
        class="ty-product-review-product-star-line__line"
        max="100"
        value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['percentage']->value, ENT_QUOTES, 'UTF-8');?>
"
        title="<?php echo $_smarty_tpl->__("product_reviews.reviews",array($_smarty_tpl->tpl_vars['count']->value));?>
"
    ></progress>


    <div class="ty-product-review-product-star-line__percentage">
        <?php echo htmlspecialchars((string) round((float) $_smarty_tpl->tpl_vars['percentage']->value, (int) 0, (int) 1), ENT_QUOTES, 'UTF-8');?>
%
    </div>

</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/product_star_line.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/product_star_line.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?>
<div class="ty-product-review-product-star-line">

    <div class="ty-product-review-product-star-line__quantity">
        <?php echo $_smarty_tpl->__("product_reviews.n_stars",array($_smarty_tpl->tpl_vars['quantity']->value));?>

    </div>

    <progress
        class="ty-product-review-product-star-line__line"
        max="100"
        value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['percentage']->value, ENT_QUOTES, 'UTF-8');?>
"
        title="<?php echo $_smarty_tpl->__("product_reviews.reviews",array($_smarty_tpl->tpl_vars['count']->value));?>
"
    ></progress>


    <div class="ty-product-review-product-star-line__percentage">
        <?php echo htmlspecialchars((string) round((float) $_smarty_tpl->tpl_vars['percentage']->value, (int) 0, (int) 1), ENT_QUOTES, 'UTF-8');?>
%
    </div>

</div>
<?php }
}
}
