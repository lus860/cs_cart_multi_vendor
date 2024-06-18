<?php
/* Smarty version 4.3.0, created on 2024-06-16 14:53:52
  from '/var/www/cs_cart_multi_vendor/design/backend/templates/views/companies/invite.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f5ef0170b19_11475601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc11a20fb4308e42e277df86d2229e1b6836a219' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/backend/templates/views/companies/invite.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/save_cancel.tpl' => 2,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_666f5ef0170b19_11475601 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('invite_vendors_enter_emails','separate_multiple_email_addresses','vendor_edit_invitation_email_template','send_invitations','send_invitations','invite_vendors'));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "invite", null, null);?>

<div>
    <form action="<?php echo htmlspecialchars((string) fn_url("companies.invite"), ENT_QUOTES, 'UTF-8');?>
" method="post" name="invite_vendors_form" class="form-horizontal form-edit">
        <div class="control-group">
            <label class="control-label" for="elm_companies_invite_vendors"><?php echo $_smarty_tpl->__("invite_vendors_enter_emails");?>
:</label>
            <div class="controls">
                <textarea name="vendor_emails" id="elm_companies_invite_vendors" cols="55" rows="10" class="span9"></textarea>
                <p class="muted description"><?php echo $_smarty_tpl->__("separate_multiple_email_addresses");?>
</p>
            </div>
            <?php if (($_smarty_tpl->tpl_vars['settings']->value['Appearance']['email_templates'] == "new")) {?>
            <div class = "controls">
                <?php echo $_smarty_tpl->__("vendor_edit_invitation_email_template",array("[url]"=>fn_url("email_templates.update?code=vendor_invitation&area=A")));?>

            </div>
            <?php }?>
        </div>
    </form>

    <?php if ($_smarty_tpl->tpl_vars['is_ajax']->value) {?>
        <div class="buttons-container">
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("send_invitations"),'cancel_action'=>"close",'but_target_form'=>"invite_vendors_form"), 0, false);
?>
        </div>
    <?php } else { ?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("send_invitations"),'cancel_action'=>"companies.manage",'but_target_form'=>"invite_vendors_form"), 0, true);
?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php }?>
</div>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['is_ajax']->value) {?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'invite');?>

<?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("invite_vendors"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'invite'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons')), 0, false);
}?>


<?php }
}
