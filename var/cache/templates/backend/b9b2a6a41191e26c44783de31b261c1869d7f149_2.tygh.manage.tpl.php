<?php
/* Smarty version 4.3.0, created on 2024-06-16 10:37:34
  from '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/seo/views/seo_redirects/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f22de5f4ed5_27472806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9b2a6a41191e26c44783de31b261c1869d7f149' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/backend/templates/addons/seo/views/seo_redirects/manage.tpl',
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
    'tygh:addons/seo/views/seo_redirects/components/search_form.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_666f22de5f4ed5_27472806 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/cs_cart_multi_vendor/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),1=>array('file'=>'/var/www/cs_cart_multi_vendor/app/functions/smarty_plugins/modifier.sizeof.php','function'=>'smarty_modifier_sizeof',),));
\Tygh\Languages\Helper::preloadLangVars(array('seo.old_url','tt_addons_seo_views_seo_redirects_manage_seo.old_url','seo.new_url','language','seo.old_url','seo.new_url','type','language','seo.old_url','seo.new_url','type','language','tools','delete','no_data','seo.new_redirect','add_new','seo.add_redirect','seo.redirects_manager'));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "add_seo_redirect", null, null);?>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="rule_add_var" class="form-horizontal form-edit">
<input type="hidden" name="page" value="<?php echo htmlspecialchars((string) $_REQUEST['page'], ENT_QUOTES, 'UTF-8');?>
" />

<div class="control-group">
    <label class="control-label cm-required" for="elm_old_url"><?php echo $_smarty_tpl->__("seo.old_url");?>
:</label>
    <div class="controls">
        <input type="text" name="redirect_data[src]" id="elm_old_url" value="" class="span9" />
        <p class="muted description"><?php echo $_smarty_tpl->__("tt_addons_seo_views_seo_redirects_manage_seo.old_url");?>
</p>
    </div>
</div>

<div class="control-group">
    <label class="control-label cm-required"><?php echo $_smarty_tpl->__("seo.new_url");?>
</label>
    <div class="controls mixed-controls cm-bs-group">

        <?php $_smarty_tpl->_assignInScope('id', "s_new_redirect");?>
        <div class="form-inline clearfix cm-bs-container">
            <label class="radio pull-left">
                <input type="radio" class="cm-bs-trigger" checked="checked" name="redirect_data[type]" value="s" />
                <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['seo_vars']->value['s']['name']);?>
:
            </label>
            <div class="cm-bs-block pull-left disable-overlay-wrap">
                <input type="text" name="redirect_data[dest]" id="s_new_redirect" value="" />
                <div class="disable-overlay cm-bs-off hidden"></div>
            </div>
        </div>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['seo_vars']->value, 'seo_var', false, 'var_type');
$_smarty_tpl->tpl_vars['seo_var']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['var_type']->value => $_smarty_tpl->tpl_vars['seo_var']->value) {
$_smarty_tpl->tpl_vars['seo_var']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['seo_var']->value['picker']) {?>
        <?php $_smarty_tpl->_assignInScope('id', ((string)$_smarty_tpl->tpl_vars['var_type']->value)."_new_redirect");?>

        <div class="form-inline clearfix cm-bs-container">
            <label class="radio pull-left">
                <input type="radio" class="cm-bs-trigger" name="redirect_data[type]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var_type']->value, ENT_QUOTES, 'UTF-8');?>
" />
                <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['seo_var']->value['name']);?>
:
            </label>
            <div class="cm-bs-block pull-left disable-overlay-wrap">
                <?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['seo_var']->value['picker'],'data_id'=>$_smarty_tpl->tpl_vars['id']->value,'input_name'=>"redirect_data[object_id]",'view_mode'=>"links",'params_array'=>$_smarty_tpl->tpl_vars['seo_var']->value['picker_params']),$_smarty_tpl);?>

                <div class="disable-overlay cm-bs-off"></div>
            </div>
        </div>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['addons']->value['seo']['single_url'] != "Y" && smarty_modifier_sizeof($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
<div class="control-group">
    <label class="control-label cm-required" for="elm_lang_code"><?php echo $_smarty_tpl->__("language");?>
:</label>
    <div class="controls">
        <select class="span2" name="redirect_data[lang_code]">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lng');
$_smarty_tpl->tpl_vars['lng']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['lng']->value) {
$_smarty_tpl->tpl_vars['lng']->do_else = false;
?>
        <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['lng']->value['lang_code'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['lng']->value['lang_code'] == (defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null)) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['lng']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    </div>
</div>
<?php } else { ?>
<input type="hidden" name="redirect_data[lang_code]" value="<?php echo htmlspecialchars((string) (defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null), ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<div class="buttons-container">
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[seo_redirects.update]",'cancel_action'=>"close"), 0, false);
?>
</div>
</form>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<?php $_smarty_tpl->_assignInScope('has_permission', fn_check_permissions("seo_redirects","delete","admin","POST"));?>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="seo_redirects_form" class="form-horizontal form-edit">

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('save_current_page'=>true,'save_current_url'=>true), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['seo_redirects']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "seo_redirects_table", null, null);?>
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
                <th width="30%"><?php echo $_smarty_tpl->__("seo.old_url");?>
</th>
                <th width="25%"><?php echo $_smarty_tpl->__("seo.new_url");?>
</th>
                <th width="20%"><?php echo $_smarty_tpl->__("type");?>
</th>
                <?php if ($_smarty_tpl->tpl_vars['addons']->value['seo']['single_url'] != "Y" && smarty_modifier_sizeof($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
                <th width="10%"><?php echo $_smarty_tpl->__("language");?>
</th>
                <?php }?>
                <th width="8%">&nbsp;</th>
            </tr>
            </thead>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['seo_redirects']->value, 'redirect', false, 'key');
$_smarty_tpl->tpl_vars['redirect']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['redirect']->value) {
$_smarty_tpl->tpl_vars['redirect']->do_else = false;
?>
            <tr class="cm-longtap-target"
                <?php if ($_smarty_tpl->tpl_vars['has_permission']->value) {?>
                    data-ca-longtap-action="setCheckBox"
                    data-ca-longtap-target="input.cm-item"
                    data-ca-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['redirect']->value['redirect_id'], ENT_QUOTES, 'UTF-8');?>
"
                <?php }?>
            >
                <td width="6%" class="mobile-hide">
                    <input type="checkbox" name="redirect_ids[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['redirect']->value['redirect_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item hide" /></td>
                <td width="30%" data-th="<?php echo $_smarty_tpl->__("seo.old_url");?>
">
                    <input type="text" class="input-hidden" name="seo_redirects[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][src]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['redirect']->value['src'], ENT_QUOTES, 'UTF-8');?>
" /></td>
                <td width="25%" data-th="<?php echo $_smarty_tpl->__("seo.new_url");?>
">
                    <?php if ($_smarty_tpl->tpl_vars['redirect']->value['type'] == "s") {?>
                    <input type="text" class="input-hidden" name="seo_redirects[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][dest]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['redirect']->value['dest'], ENT_QUOTES, 'UTF-8');?>
" /></td>
                    <?php } else { ?>
                    <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['redirect']->value['parsed_url'], ENT_QUOTES, 'UTF-8');?>
" target="_blank" class="link--monochrome"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['redirect']->value['parsed_url'], ENT_QUOTES, 'UTF-8');?>
</a>
                    <?php }?>
                <td width="20%" data-th="<?php echo $_smarty_tpl->__("type");?>
">
                    <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['seo_vars']->value[$_smarty_tpl->tpl_vars['redirect']->value['type']]['name']);?>

                </td>
                <?php if ($_smarty_tpl->tpl_vars['addons']->value['seo']['single_url'] != "Y" && smarty_modifier_sizeof($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
                <td  width="10%" data-th="<?php echo $_smarty_tpl->__("language");?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->tpl_vars['redirect']->value['lang_code']]['name'], ENT_QUOTES, 'UTF-8');?>
</td>
                <?php }?>    
                <td width="8%" class="nowrap" data-th="<?php echo $_smarty_tpl->__("tools");?>
">

                    <div class="hidden-tools">
                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                            <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'class'=>"cm-confirm",'href'=>"seo_redirects.delete?redirect_id=".((string)$_smarty_tpl->tpl_vars['redirect']->value['redirect_id']),'method'=>"POST"), true);?>
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

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"seo_redirects_form",'object'=>"seo_redirects",'is_check_all_shown'=>true,'items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'seo_redirects_table'),'has_permissions'=>$_smarty_tpl->tpl_vars['has_permission']->value), 0, false);
} else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</form>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['seo_redirects']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[seo_redirects.m_update]",'but_role'=>"action",'but_target_form'=>"seo_redirects_form",'but_meta'=>"cm-submit"), 0, false);
?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['has_permission']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"add_seo_redirect",'text'=>$_smarty_tpl->__("seo.new_redirect"),'title'=>$_smarty_tpl->__("add_new"),'link_text'=>$_smarty_tpl->__("seo.add_redirect"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_seo_redirect'),'act'=>"general",'icon'=>"icon-plus",'link_class'=>"btn-primary"), 0, false);
?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sidebar", null, null);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>"seo_redirects.manage",'view_type'=>"seo_redirects"), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/seo/views/seo_redirects/components/search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>"seo_redirects.manage"), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("seo.redirects_manager"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'title_extra'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'title_extra'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons'),'sidebar'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar')), 0, false);
}
}
