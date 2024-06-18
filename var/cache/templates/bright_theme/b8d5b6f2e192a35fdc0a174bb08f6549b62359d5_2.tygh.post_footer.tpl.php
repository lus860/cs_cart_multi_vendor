<?php
/* Smarty version 4.3.0, created on 2024-06-16 09:37:49
  from '/var/www/cs_cart_multi_vendor/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/post_footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f14dddff6b9_17381342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8d5b6f2e192a35fdc0a174bb08f6549b62359d5' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/post_footer.tpl',
      1 => 1718464474,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_reviews/views/product_reviews/components/post_images.tpl' => 2,
    'tygh:addons/product_reviews/views/product_reviews/components/post_votes.tpl' => 2,
  ),
),false)) {
function content_666f14dddff6b9_17381342 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/cs_cart_multi_vendor/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/var/www/cs_cart_multi_vendor/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['product_review']->value) {?>
    <footer class="ty-product-review-post-footer">

        <div class="ty-product-review-post-footer__primary">
            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/post_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['product_review']->value['images'],'preview_id'=>uniqid($_smarty_tpl->tpl_vars['product']->value['product_id'])), 0, false);
?>
        </div>
        
        <div class="ty-product-review-post-footer__secondary">
            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/post_votes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_review_id'=>$_smarty_tpl->tpl_vars['product_review']->value['product_review_id'],'vote_up'=>$_smarty_tpl->tpl_vars['product_review']->value['helpfulness']['vote_up'],'vote_down'=>$_smarty_tpl->tpl_vars['product_review']->value['helpfulness']['vote_down']), 0, false);
?>
        </div>
    </footer>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/post_footer.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/post_footer.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['product_review']->value) {?>
    <footer class="ty-product-review-post-footer">

        <div class="ty-product-review-post-footer__primary">
            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/post_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['product_review']->value['images'],'preview_id'=>uniqid($_smarty_tpl->tpl_vars['product']->value['product_id'])), 0, true);
?>
        </div>
        
        <div class="ty-product-review-post-footer__secondary">
            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/post_votes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_review_id'=>$_smarty_tpl->tpl_vars['product_review']->value['product_review_id'],'vote_up'=>$_smarty_tpl->tpl_vars['product_review']->value['helpfulness']['vote_up'],'vote_down'=>$_smarty_tpl->tpl_vars['product_review']->value['helpfulness']['vote_down']), 0, true);
?>
        </div>
    </footer>
<?php }
}
}
}
