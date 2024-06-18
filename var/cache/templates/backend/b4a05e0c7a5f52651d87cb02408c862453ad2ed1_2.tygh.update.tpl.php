<?php
/* Smarty version 4.3.0, created on 2024-06-16 16:00:03
  from '/var/www/cs_cart_multi_vendor/design/backend/templates/views/shippings/update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_666f6e73e9f268_09211124',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4a05e0c7a5f52651d87cb02408c862453ad2ed1' => 
    array (
      0 => '/var/www/cs_cart_multi_vendor/design/backend/templates/views/shippings/update.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 2,
    'tygh:common/select_status.tpl' => 1,
    'tygh:common/attach_images.tpl' => 1,
    'tygh:common/select_usergroups.tpl' => 1,
    'tygh:views/localizations/components/select.tpl' => 1,
    'tygh:views/companies/components/company_field.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 2,
    'tygh:views/shippings/components/rates.tpl' => 1,
    'tygh:views/shippings/additional_settings.tpl' => 1,
    'tygh:views/shippings/calculate_cost.tpl' => 1,
    'tygh:pickers/storefronts/picker.tpl' => 1,
    'tygh:common/tabsbox.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_666f6e73e9f268_09211124 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/cs_cart_multi_vendor/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),1=>array('file'=>'/var/www/cs_cart_multi_vendor/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/var/www/cs_cart_multi_vendor/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('information','rate_calculation','rate_calculation_manual_by_rate_area','rate_calculation_by_customer_address','store_locator.pickup_from_store','rate_calculation_realtime_automatic','tools_addons_additional_shipping_methods_msg','shipping_service','name','icon','delivery_time','tt_views_shippings_update_delivery_time','description','availability','usergroups','owner','weight_limit','use_for_all_new_vendors','add_shipping_method','shipping_methods','apply_shipping_for_all_vendors','apply_shipping_for_all_vendors_confirm','delete','add_storefronts','all_storefronts','new_shipping_method'));
if ($_smarty_tpl->tpl_vars['shipping']->value) {?>
    <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['shipping']->value['shipping_id']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('id', 0);
}?>

<?php $_smarty_tpl->_assignInScope('storefront_owner_id', false);
if ($_smarty_tpl->tpl_vars['shipping']->value['storefront_owner_id']) {?>
    <?php $_smarty_tpl->_assignInScope('storefront_owner_id', $_smarty_tpl->tpl_vars['shipping']->value['storefront_owner_id']);
}?>

<?php $_smarty_tpl->_assignInScope('allow_save', fn_allow_save_object($_smarty_tpl->tpl_vars['shipping']->value,"shippings"));
$_smarty_tpl->_assignInScope('manual', "M");
$_smarty_tpl->_assignInScope('realtime', "R");?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
(function(_, $) {

        var services_data = <?php echo json_encode(array_values($_smarty_tpl->tpl_vars['services']->value));?>
;
    var service_id = <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['shipping']->value['service_id'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
;

    $(document).ready(function() {

        $('#elm_carrier').on('change', function() {
            var self = $(this);

            var services = $('#elm_service');
            var option = self.find('option:selected');
            var options = '';

            if (option.data('caShippingModule') === '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['manual']->value, ENT_QUOTES, 'UTF-8');?>
') {
                $('#elm_service_group').addClass('hidden');
                $('#input_elm_rate_calculation').val('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['manual']->value, ENT_QUOTES, 'UTF-8');?>
');
                $('#configure').hide();
            } else if (option.data('caShippingModule') === 'store_locator') {
                $('#elm_service_group').addClass('hidden');
                $('#input_elm_rate_calculation').val('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['realtime']->value, ENT_QUOTES, 'UTF-8');?>
');
            } else {
                $('#elm_service_group').removeClass('hidden');
                $('#input_elm_rate_calculation').val('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['realtime']->value, ENT_QUOTES, 'UTF-8');?>
');
            }

            services.prop('length', 0);
            for (var k in services_data) {
                if (services_data[k]['module'] === option.data('caShippingModule')) {
                    options += '<option data-ca-shipping-code="' + services_data[k]['code'] +'" data-ca-shipping-module="' + services_data[k]['module'] + '" value="' + services_data[k]['service_id'] + '" ' + (services_data[k]['service_id'] == service_id ? 'selected="selected"' : '') + '>' + services_data[k]['description'] + '</option>';
                }
            }
            services.append(options);
            services.trigger('change');
        });

        $('#elm_service').on('change', function() {
            var self = $(this);
            var option = self.find('option:selected');
            var tabReload = {
                isRequired: true,
            };

            $.ceEvent('trigger', 'ce.shippings.service_changed', [self, option, tabReload]);

            if (tabReload.isRequired === false) {
                return;
            }

            var href = fn_url('shippings.configure?shipping_id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
&module=' + option.data('caShippingModule') + '&code=' + option.data('caShippingCode'));
            var tab = $('#configure');

            if (tab.find('a').prop('href') !== href) {

                // Check if configure is active tab.
                if($('[name="selected_section"]').val() === 'configure') {
                    setTimeout(function() {
                        $('#configure a').click();
                    }, 100);
                }

                $('#content_configure').remove();
                tab.find('a').prop('href', href);
            }

            if ($('#input_elm_rate_calculation').val() === "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['realtime']->value, ENT_QUOTES, 'UTF-8');?>
") {
                tab.show();
            }
        });

        if ($('#available_for_new_vendors').length !== 0) {
            var shippingId = $('[name="shipping_id"]').val();

            $(_.doc).on('change', '#shipping_data_' + shippingId, function() {
                var companyId = + $(this).val();

                $('#available_for_new_vendors').prop('disabled', companyId !== 0);
            });
        }

    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="shippings_form" enctype="multipart/form-data" class="form-horizontal form-edit">
<input type="hidden" name="shipping_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />

<?php if ($_smarty_tpl->tpl_vars['id']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tabsbox", null, null);?>
<div class="hidden<?php if (!$_smarty_tpl->tpl_vars['allow_save']->value) {?> cm-hide-inputs<?php }?>" id="content_general">
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("information"),'target'=>"#acc_information"), 0, false);
?>
<fieldset id="acc_information" class="collapse-visible collapse in">
<input name="shipping_data[rate_calculation]"
    id="input_elm_rate_calculation"
    type="hidden"
    <?php if ($_smarty_tpl->tpl_vars['shipping']->value['rate_calculation'] === $_smarty_tpl->tpl_vars['manual']->value || !$_smarty_tpl->tpl_vars['shipping']->value['rate_calculation']) {?>
        value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['manual']->value, ENT_QUOTES, 'UTF-8');?>
"
    <?php } else { ?>
        value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['realtime']->value, ENT_QUOTES, 'UTF-8');?>
"
    <?php }?>
/>

<div id="elm_rate_calculation">
    <?php if (!$_smarty_tpl->tpl_vars['allow_save']->value) {?>
        <input type="hidden" class="cm-no-hide-input" name="shipping_data[service_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['service_id'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php }?>
    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("rate_calculation");?>
:</label>
        <div class="controls">
        <select name="shipping_data[carrier]" id="elm_carrier">
           <optgroup label="<?php echo $_smarty_tpl->__("rate_calculation_manual_by_rate_area");?>
">
                <option data-ca-shipping-module="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['manual']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['rate_calculation'] === $_smarty_tpl->tpl_vars['manual']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("rate_calculation_by_customer_address");?>
</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['carriers']->value, 'carrier', false, 'carrier_key');
$_smarty_tpl->tpl_vars['carrier']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['carrier_key']->value => $_smarty_tpl->tpl_vars['carrier']->value) {
$_smarty_tpl->tpl_vars['carrier']->do_else = false;
?>
                    <?php if (($_smarty_tpl->tpl_vars['carrier_key']->value === "store_locator")) {?>
                        <option data-ca-shipping-module="store_locator"
                            <?php if ($_smarty_tpl->tpl_vars['id']->value && $_smarty_tpl->tpl_vars['services']->value[$_smarty_tpl->tpl_vars['shipping']->value['service_id']]['module'] === "store_locator") {?>selected="selected"<?php }?>
                        >
                            <?php echo $_smarty_tpl->__("store_locator.pickup_from_store");?>

                        </option>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </optgroup>
            <optgroup label="<?php echo $_smarty_tpl->__("rate_calculation_realtime_automatic");?>
">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['carriers']->value, 'carrier', false, 'carrier_key');
$_smarty_tpl->tpl_vars['carrier']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['carrier_key']->value => $_smarty_tpl->tpl_vars['carrier']->value) {
$_smarty_tpl->tpl_vars['carrier']->do_else = false;
?>
                    <?php if (($_smarty_tpl->tpl_vars['carrier_key']->value !== "store_locator")) {?>
                        <option data-ca-shipping-module="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['carrier_key']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['id']->value && $_smarty_tpl->tpl_vars['services']->value[$_smarty_tpl->tpl_vars['shipping']->value['service_id']]['module'] === $_smarty_tpl->tpl_vars['carrier_key']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['carrier']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </optgroup>
        </select>
        <?php if (fn_check_permissions("addons","manage","admin")) {?>
            <div class="well well-small help-block">
                <?php echo $_smarty_tpl->__("tools_addons_additional_shipping_methods_msg",array("[url]"=>fn_url("addons.manage?type=not_installed")));?>

            </div>
        <?php }?>
        </div>
    </div>

    <div class="control-group <?php if ($_smarty_tpl->tpl_vars['shipping']->value['rate_calculation'] === $_smarty_tpl->tpl_vars['manual']->value || !$_smarty_tpl->tpl_vars['shipping']->value['rate_calculation'] || ($_smarty_tpl->tpl_vars['id']->value && $_smarty_tpl->tpl_vars['services']->value[$_smarty_tpl->tpl_vars['shipping']->value['service_id']]['module'] === "store_locator")) {?>hidden<?php }?>" id="elm_service_group">
        <label class="control-label"><?php echo $_smarty_tpl->__("shipping_service");?>
:</label>
        <div class="controls">
            <select name="shipping_data[service_id]" id="elm_service">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['services']->value, 'service');
$_smarty_tpl->tpl_vars['service']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['service']->value) {
$_smarty_tpl->tpl_vars['service']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['service']->value['module'] === $_smarty_tpl->tpl_vars['services']->value[$_smarty_tpl->tpl_vars['shipping']->value['service_id']]['module']) {?>
                        <option data-ca-shipping-code="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['service']->value['code'], ENT_QUOTES, 'UTF-8');?>
"
                            data-ca-shipping-module="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['service']->value['module'], ENT_QUOTES, 'UTF-8');?>
"
                            value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['service']->value['service_id'], ENT_QUOTES, 'UTF-8');?>
"
                            <?php if ($_smarty_tpl->tpl_vars['service']->value['service_id'] === $_smarty_tpl->tpl_vars['shipping']->value['service_id']) {?> selected="selected"<?php }?>
                        >
                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['service']->value['description'], ENT_QUOTES, 'UTF-8');?>

                        </option>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
    </div>
</div>

<div class="control-group">
    <label class="control-label cm-required" for="ship_descr_shipping"><?php echo $_smarty_tpl->__("name");?>
:</label>
    <div class="controls">
        <input type="text" name="shipping_data[shipping]" id="ship_descr_shipping" size="30" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');?>
" class="input-large" />
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"shipping_data[status]",'id'=>"elm_shipping_status",'obj'=>$_smarty_tpl->tpl_vars['shipping']->value), 0, false);
?>

<div class="control-group">
    <label class="control-label"><?php echo $_smarty_tpl->__("icon");?>
:</label>
    <div class="controls">
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_name'=>"shipping",'image_object_type'=>"shipping",'image_pair'=>$_smarty_tpl->tpl_vars['shipping']->value['icon'],'no_detailed'=>"Y",'hide_titles'=>"Y",'image_object_id'=>$_smarty_tpl->tpl_vars['id']->value), 0, false);
?>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="elm_delivery_time"><?php echo $_smarty_tpl->__("delivery_time");?>
:</label>
    <div class="controls">
        <input type="text" class="input-medium" name="shipping_data[delivery_time]" id="elm_delivery_time" size="30" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['delivery_time'], ENT_QUOTES, 'UTF-8');?>
" />
        <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_shippings_update_delivery_time");?>
</p>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="elm_payment_instructions_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("description");?>
:</label>
    <div class="controls">
        <textarea id="elm_payment_instructions_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="shipping_data[description]" cols="55" rows="8" class="cm-wysiwyg input-textarea-long"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
    </div>
</div>

</fieldset>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("availability"),'target'=>"#acc_availability"), 0, true);
?>
<fieldset id="acc_availability" class="collapse in">

<div class="control-group">
    <label class="control-label"><?php echo $_smarty_tpl->__("usergroups");?>
:</label>
    <div class="controls">
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_usergroups.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"elm_ship_data_usergroup_id",'name'=>"shipping_data[usergroup_ids]",'usergroups'=>$_smarty_tpl->tpl_vars['usergroups']->value,'usergroup_ids'=>$_smarty_tpl->tpl_vars['shipping']->value['usergroup_ids'],'input_extra'=>'','list_mode'=>false), 0, false);
?>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("tygh:views/localizations/components/select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data_name'=>"shipping_data[localization]",'data_from'=>$_smarty_tpl->tpl_vars['shipping']->value['localization']), 0, false);
?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"shippings:update_shipping_vendor"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"shippings:update_shipping_vendor"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
    <?php if (fn_allowed_for("MULTIVENDOR")) {?>
        <?php $_smarty_tpl->_assignInScope('zero_company_id_name_lang_var', "marketplace");?>
        <?php $_smarty_tpl->_assignInScope('company_field_name', $_smarty_tpl->__("owner"));?>
    <?php }?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/company_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>"shipping_data[company_id]",'id'=>"shipping_data_".((string)$_smarty_tpl->tpl_vars['id']->value),'selected'=>$_smarty_tpl->tpl_vars['shipping']->value['company_id'],'company_field_name'=>$_smarty_tpl->tpl_vars['company_field_name']->value,'zero_company_id_name_lang_var'=>$_smarty_tpl->tpl_vars['zero_company_id_name_lang_var']->value), 0, false);
}
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"shippings:update_shipping_vendor"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<div class="control-group">
    <label class="control-label" for="elm_min_weight"><?php echo $_smarty_tpl->__("weight_limit");?>
&nbsp;(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['General']['weight_symbol'], ENT_QUOTES, 'UTF-8');?>
):</label>
    <div class="controls">
        <input type="text" name="shipping_data[min_weight]" id="elm_min_weight" size="4" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['min_weight'], ENT_QUOTES, 'UTF-8');?>
" class="input-mini" />&nbsp;-&nbsp;<input type="text" name="shipping_data[max_weight]" size="4" value="<?php if ($_smarty_tpl->tpl_vars['shipping']->value['max_weight'] != "0.00") {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['max_weight'], ENT_QUOTES, 'UTF-8');
}?>" class="input-mini right" />
    </div>
</div>

<?php if (fn_allowed_for("MULTIVENDOR") && $_smarty_tpl->tpl_vars['allow_save']->value && $_smarty_tpl->tpl_vars['auth']->value['user_type'] === smarty_modifier_enum("UserTypes::ADMIN")) {?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"shippings:available_for_new_vendors"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"shippings:available_for_new_vendors"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <div class="control-group">
            <label class="control-label" for="available_for_new_vendors"><?php echo $_smarty_tpl->__("use_for_all_new_vendors");?>
:</label>
            <div class="controls">
                <input type="hidden" name="shipping_data[available_for_new_vendors]" value=<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
 />
                <input 
                    type="checkbox" 
                    name="shipping_data[available_for_new_vendors]" 
                    id="available_for_new_vendors" 
                    value=<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
 
                    <?php if ($_smarty_tpl->tpl_vars['shipping']->value['available_for_new_vendors'] === smarty_modifier_enum("YesNo::YES")) {?>checked="checked"<?php }?> 
                    <?php if ($_smarty_tpl->tpl_vars['shipping']->value['company_id']) {?>disabled <?php }?>
                />
            </div>
        </div>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"shippings:available_for_new_vendors"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"shippings:update"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"shippings:update"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"shippings:update"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"shippings:update_tools_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"shippings:update_tools_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("add_shipping_method"),'href'=>"shippings.add"), true);?>
</li>
                <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("shipping_methods"),'href'=>"shippings.manage"), true);?>
</li>
                <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
                    <?php if ($_smarty_tpl->tpl_vars['is_allow_apply_shippings_to_vendors']->value && fn_allowed_for("MULTIVENDOR") && !$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
                        <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("apply_shipping_for_all_vendors"),'href'=>"shippings.apply_to_vendors?shipping_id=".((string)$_smarty_tpl->tpl_vars['id']->value),'class'=>"cm-confirm cm-post",'data'=>array('data-ca-confirm-text'=>$_smarty_tpl->__("apply_shipping_for_all_vendors_confirm"))), true);?>
</li>
                    <?php }?>
                    <li class="divider"></li>
                    <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'class'=>"cm-confirm",'href'=>"shippings.delete?shipping_id=".((string)$_smarty_tpl->tpl_vars['id']->value),'method'=>"POST"), true);?>
</li>
                <?php }?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"shippings:update_tools_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['hide_for_vendor']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[shippings.update]",'but_target_form'=>"shippings_form",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0, false);
?>
    <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[shippings.update]",'hide_first_button'=>true,'hide_second_button'=>true,'but_target_form'=>"shippings_form",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0, true);
?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
    <input type="hidden" name="selected_section" value="general" />
    <!--content_general--></div>

    <div class="hidden <?php if (!$_smarty_tpl->tpl_vars['allow_save']->value) {?> cm-hide-inputs<?php }?>" id="content_configure">
    <!--content_configure--></div>

    <div class="hidden <?php if (!$_smarty_tpl->tpl_vars['allow_save']->value) {?> cm-hide-inputs<?php }?>" id="content_shipping_charges">
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/shippings/components/rates.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'shipping'=>$_smarty_tpl->tpl_vars['shipping']->value,'view_only'=>!$_smarty_tpl->tpl_vars['allow_save']->value), 0, false);
?>
    <!--content_shipping_charges--></div>

    <div class="hidden <?php if (!$_smarty_tpl->tpl_vars['allow_save']->value) {?> cm-hide-inputs<?php }?>" id="content_additional_settings">
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/shippings/additional_settings.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <!--content_additional_settings--></div>

    <div class="hidden" id="content_rate_calculation">
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/shippings/calculate_cost.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <!--content_rate_calculation--></div>

    <?php if (fn_allowed_for("MULTIVENDOR:ULTIMATE") || $_smarty_tpl->tpl_vars['is_sharing_enabled']->value) {?>
        <div class="hidden <?php if (!$_smarty_tpl->tpl_vars['allow_save']->value) {?> cm-hide-inputs<?php }?>" id="content_storefronts">
            <?php $_smarty_tpl->_assignInScope('add_storefront_text', $_smarty_tpl->__("add_storefronts"));?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/storefronts/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('multiple'=>true,'input_name'=>"shipping_data[storefront_ids]",'item_ids'=>$_smarty_tpl->tpl_vars['shipping']->value['storefront_ids'],'data_id'=>"storefront_ids",'but_meta'=>"pull-right",'no_item_text'=>$_smarty_tpl->__("all_storefronts"),'but_text'=>$_smarty_tpl->tpl_vars['add_storefront_text']->value,'view_only'=>($_smarty_tpl->tpl_vars['is_sharing_enabled']->value && $_smarty_tpl->tpl_vars['runtime']->value['company_id'])), 0, false);
?>
        <!--content_storefronts--></div>
    <?php }?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"shippings:tabs_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"shippings:tabs_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"shippings:tabs_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox'),'active_tab'=>$_REQUEST['selected_section'],'track'=>true), 0, false);
}?>

</form>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['id']->value ? $_smarty_tpl->tpl_vars['shipping']->value['shipping'] : $_smarty_tpl->__("new_shipping_method"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'select_languages'=>true), 0, false);
}
}
