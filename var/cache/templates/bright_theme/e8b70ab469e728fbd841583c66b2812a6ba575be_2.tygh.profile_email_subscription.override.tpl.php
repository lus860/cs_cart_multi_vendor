<?php
/* Smarty version 4.3.0, created on 2024-06-16 15:24:08
  from '/var/www/cs_cart_multi_vendor/design/themes/responsive/templates/addons/newsletters/addons/gdpr/hooks/newsletters/profile_email_subscription.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f660812d243_02017831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8b70ab469e728fbd841583c66b2812a6ba575be' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/themes/responsive/templates/addons/newsletters/addons/gdpr/hooks/newsletters/profile_email_subscription.override.tpl',
      1 => 1718464474,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/gdpr/componentes/agreement_checkbox.tpl' => 2,
  ),
),false)) {
function content_666f660812d243_02017831 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/cs_cart_multi_vendor/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/var/www/cs_cart_multi_vendor/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('show_agreement', false);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "agreement_contents", null, null);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/gdpr/componentes/agreement_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"newsletters_subscribe",'meta'=>"cm-gdpr-newsletters-agreement",'suffix'=>$_smarty_tpl->tpl_vars['tab_id']->value), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['show_agreement']->value) {?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'agreement_contents');?>


    <?php echo '<script'; ?>
>
        (function(_, $) {
            $.ceEvent('on', 'ce.gdpr_agreement_accepted', function ($item, context) {
                var checked = $item.prop('checked');
                var $subscription_items = $item.closest('.ty-newsletters').find('input:checkbox').not($item);

                if (checked) {
                    $subscription_items.prop('disabled', false);
                } else {
                    $subscription_items.prop('disabled', true).prop('checked', false);
                }
            });

            $.ceEvent('on', 'ce.commoninit', function(context) {
                $(context).find('.ty-newsletters').find('input:checkbox').not('.cm-gdpr-newsletters-agreement, input:checked').prop('disabled', true);
            });
        }(Tygh, Tygh.$));
    <?php echo '</script'; ?>
>
<?php }?>


<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/newsletters/addons/gdpr/hooks/newsletters/profile_email_subscription.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/newsletters/addons/gdpr/hooks/newsletters/profile_email_subscription.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('show_agreement', false);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "agreement_contents", null, null);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/gdpr/componentes/agreement_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"newsletters_subscribe",'meta'=>"cm-gdpr-newsletters-agreement",'suffix'=>$_smarty_tpl->tpl_vars['tab_id']->value), 0, true);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['show_agreement']->value) {?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'agreement_contents');?>


    <?php echo '<script'; ?>
>
        (function(_, $) {
            $.ceEvent('on', 'ce.gdpr_agreement_accepted', function ($item, context) {
                var checked = $item.prop('checked');
                var $subscription_items = $item.closest('.ty-newsletters').find('input:checkbox').not($item);

                if (checked) {
                    $subscription_items.prop('disabled', false);
                } else {
                    $subscription_items.prop('disabled', true).prop('checked', false);
                }
            });

            $.ceEvent('on', 'ce.commoninit', function(context) {
                $(context).find('.ty-newsletters').find('input:checkbox').not('.cm-gdpr-newsletters-agreement, input:checked').prop('disabled', true);
            });
        }(Tygh, Tygh.$));
    <?php echo '</script'; ?>
>
<?php }?>


<?php }
}
}
