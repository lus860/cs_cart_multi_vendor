<?php
/* Smarty version 4.3.0, created on 2024-06-16 09:33:26
  from '/var/www/cs_cart_multi_vendor/design/themes/responsive/templates/addons/paypal_checkout/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f13d6cc1e62_20882384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f788ea91e46543550a517c99e079be9d5208aa1b' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/themes/responsive/templates/addons/paypal_checkout/hooks/index/scripts.post.tpl',
      1 => 1718464474,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666f13d6cc1e62_20882384 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/cs_cart_multi_vendor/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/var/www/cs_cart_multi_vendor/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/var/www/cs_cart_multi_vendor/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('paypal_checkout.paypal_cookie_title','paypal_checkout.paypal_cookie_description','paypal_checkout.paypal_cookie_title','paypal_checkout.paypal_cookie_description'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo smarty_function_script(array('src'=>"js/addons/paypal_checkout/checkout.js",'cookie-name'=>"paypal"),$_smarty_tpl);?>


<?php echo '<script'; ?>
>
    (function(_, $) {
        _.tr({
            "paypal_checkout.paypal_cookie_title":
                "<?php echo strtr((string)$_smarty_tpl->__("paypal_checkout.paypal_cookie_title"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
",
            "paypal_checkout.paypal_cookie_description":
                "<?php echo strtr((string)$_smarty_tpl->__("paypal_checkout.paypal_cookie_description"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
"
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/paypal_checkout/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/paypal_checkout/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo smarty_function_script(array('src'=>"js/addons/paypal_checkout/checkout.js",'cookie-name'=>"paypal"),$_smarty_tpl);?>


<?php echo '<script'; ?>
>
    (function(_, $) {
        _.tr({
            "paypal_checkout.paypal_cookie_title":
                "<?php echo strtr((string)$_smarty_tpl->__("paypal_checkout.paypal_cookie_title"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
",
            "paypal_checkout.paypal_cookie_description":
                "<?php echo strtr((string)$_smarty_tpl->__("paypal_checkout.paypal_cookie_description"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
"
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php }
}
}
