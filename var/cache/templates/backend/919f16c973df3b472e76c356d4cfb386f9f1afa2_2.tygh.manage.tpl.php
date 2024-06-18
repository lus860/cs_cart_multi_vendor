<?php
/* Smarty version 4.3.0, created on 2024-06-16 10:33:25
  from '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/seo/views/seo_rules/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f21e57f7053_30257202',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '919f16c973df3b472e76c356d4cfb386f9f1afa2' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/seo/views/seo_rules/manage.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/save_cancel.tpl' => 1,
    'tygh:common/pagination.tpl' => 2,
    'tygh:common/check_items.tpl' => 1,
    'tygh:common/context_menu_wrapper.tpl' => 1,
    'tygh:buttons/save.tpl' => 1,
    'tygh:common/popupbox.tpl' => 1,
    'tygh:common/saved_search.tpl' => 1,
    'tygh:addons/seo/views/seo_rules/components/search_form.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_666f21e57f7053_30257202 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('seo_name','url_dispatch_part','controller_description','dispatch_value','seo_name','dispatch_value','seo_name','tools','delete','no_data','new_rule','add_new','seo_add_rule','seo_rules'));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "add_seo_rule", null, null);?>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="rule_add_var" class="form-horizontal form-edit">
<input type="hidden" name="page" value="<?php echo htmlspecialchars((string) $_REQUEST['page'], ENT_QUOTES, 'UTF-8');?>
" />

<div class="control-group">
    <label class="control-label cm-required" for="rule_name"><?php echo $_smarty_tpl->__("seo_name");?>
:</label>
    <div class="controls">
        <input type="text" name="rule_data[name]" id="rule_name" value="" class="span9" />
    </div>
</div>
<div class="control-group">
    <label class="control-label cm-required" for="rule_params"><?php echo $_smarty_tpl->__("url_dispatch_part");?>
</label>
    <div class="controls">
        <input type="text" name="rule_data[rule_params]" id="rule_params" value="" class="span9" />
        <p class="muted description"><?php echo $_smarty_tpl->__("controller_description");?>
</p>
    </div>
</div>

<div class="buttons-container">
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[seo_rules.update]",'cancel_action'=>"close"), 0, false);
?>
</div>
</form>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<?php $_smarty_tpl->_assignInScope('has_permission', fn_check_permissions("seo_rules","delete","admin","POST"));?>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="seo_form" class="form-horizontal form-edit">

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('save_current_page'=>true,'save_current_url'=>true), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['seo_data']->value) {?>
    <input type="hidden" name="page" value="<?php echo htmlspecialchars((string) $_REQUEST['page'], ENT_QUOTES, 'UTF-8');?>
" />

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "seo_rules_table", null, null);?>
        <div class="table-responsive-wrapper longtap-selection">
            <table width="100%" class="table table-middle table--relative table-responsive">
            <thead 
                data-ca-bulkedit-default-object="true"
                data-ca-bulkedit-component="defaultObject"
            >
            <tr>
                <th width="6%" class="mobile-hide">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('is_check_all_shown'=>true,'is_check_disabled'=>!$_smarty_tpl->tpl_vars['has_permission']->value), 0, false);
?>

                    <input type="checkbox"
                        class="bulkedit-toggler hide"
                        data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]" 
                        data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                    />
                </th>
                <th width="30%"><?php echo $_smarty_tpl->__("dispatch_value");?>
</th>
                <th width="50%"><?php echo $_smarty_tpl->__("seo_name");?>
</th>
                <th width="8%">&nbsp;</th>
            </tr>
            </thead>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['seo_data']->value, 'var', false, 'key');
$_smarty_tpl->tpl_vars['var']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['var']->value) {
$_smarty_tpl->tpl_vars['var']->do_else = false;
?>
            <tr class="cm-longtap-target"
                <?php if ($_smarty_tpl->tpl_vars['has_permission']->value) {?>
                    data-ca-longtap-action="setCheckBox"
                    data-ca-longtap-target="input.cm-item"
                    data-ca-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
                <?php }?>
            >
                <td width="6%" class="mobile-hide">
                    <input type="checkbox" name="dispatches[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['dispatch'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item hide" />
                </td>
                <td width="30%" data-th="<?php echo $_smarty_tpl->__("dispatch_value");?>
">
                    <input type="hidden" name="seo_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][rule_params]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['dispatch'], ENT_QUOTES, 'UTF-8');?>
" />
                    <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['dispatch'], ENT_QUOTES, 'UTF-8');?>
</span></td>
                <td width="50%" data-th="<?php echo $_smarty_tpl->__("seo_name");?>
">
                    <input type="text" name="seo_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][name]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['name'], ENT_QUOTES, 'UTF-8');?>
" class="input-hidden input-large" /></td>
                <td width="8%" class="nowrap" data-th="<?php echo $_smarty_tpl->__("tools");?>
">
                    <div class="hidden-tools">
                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                            <?php $_smarty_tpl->_assignInScope('_dispatch', rawurlencode((string)((string)$_smarty_tpl->tpl_vars['var']->value['dispatch'])));?>
                            <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('class'=>"cm-confirm",'type'=>"list",'text'=>$_smarty_tpl->__("delete"),'href'=>"seo_rules.delete?rule_params=".((string)$_smarty_tpl->tpl_vars['_dispatch']->value),'method'=>"POST"), true);?>
</li>
                        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

                    </div>
                </td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        </div>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"seo_form",'object'=>"seo_rules",'is_check_all_shown'=>true,'items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'seo_rules_table'),'has_permissions'=>$_smarty_tpl->tpl_vars['has_permission']->value), 0, false);
} else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</form>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['seo_data']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[seo_rules.m_update]",'but_role'=>"action",'but_target_form'=>"seo_form",'but_meta'=>"cm-submit"), 0, false);
?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['has_permission']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"add_seo_rule",'text'=>$_smarty_tpl->__("new_rule"),'title'=>$_smarty_tpl->__("add_new"),'link_text'=>$_smarty_tpl->__("seo_add_rule"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_seo_rule'),'act'=>"general",'icon'=>"icon-plus",'link_class'=>"btn-primary"), 0, false);
?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sidebar", null, null);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>"seo_rules.manage",'view_type'=>"seo_rules"), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/seo/views/seo_rules/components/search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>"seo_rules.manage"), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("seo_rules"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'title_extra'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'title_extra'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons'),'sidebar'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar'),'select_languages'=>true), 0, false);
}
}
