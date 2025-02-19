{capture name="add_seo_rule"}

<form action="{""|fn_url}" method="post" name="rule_add_var" class="form-horizontal form-edit">
<input type="hidden" name="page" value="{$smarty.request.page}" />

<div class="control-group">
    <label class="control-label cm-required" for="rule_name">{__("seo_name")}:</label>
    <div class="controls">
        <input type="text" name="rule_data[name]" id="rule_name" value="" class="span9" />
    </div>
</div>
<div class="control-group">
    <label class="control-label cm-required" for="rule_params">{__("url_dispatch_part")}</label>
    <div class="controls">
        <input type="text" name="rule_data[rule_params]" id="rule_params" value="" class="span9" />
        <p class="muted description">{__("controller_description") nofilter}</p>
    </div>
</div>

<div class="buttons-container">
    {include file="buttons/save_cancel.tpl" but_name="dispatch[seo_rules.update]" cancel_action="close"}
</div>
</form>

{/capture}

{capture name="mainbox"}

{$has_permission = fn_check_permissions("seo_rules", "delete", "admin", "POST")}

<form action="{""|fn_url}" method="post" name="seo_form" class="form-horizontal form-edit">

{include file="common/pagination.tpl" save_current_page=true save_current_url=true}

{if $seo_data}
    <input type="hidden" name="page" value="{$smarty.request.page}" />

    {capture name="seo_rules_table"}
        <div class="table-responsive-wrapper longtap-selection">
            <table width="100%" class="table table-middle table--relative table-responsive">
            <thead 
                data-ca-bulkedit-default-object="true"
                data-ca-bulkedit-component="defaultObject"
            >
            <tr>
                <th width="6%" class="mobile-hide">
                    {include file="common/check_items.tpl" is_check_all_shown=true is_check_disabled=!$has_permission}

                    <input type="checkbox"
                        class="bulkedit-toggler hide"
                        data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]" 
                        data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                    />
                </th>
                <th width="30%">{__("dispatch_value")}</th>
                <th width="50%">{__("seo_name")}</th>
                <th width="8%">&nbsp;</th>
            </tr>
            </thead>
            {foreach from=$seo_data item="var" key="key"}
            <tr class="cm-longtap-target"
                {if $has_permission}
                    data-ca-longtap-action="setCheckBox"
                    data-ca-longtap-target="input.cm-item"
                    data-ca-id="{$var.name}"
                {/if}
            >
                <td width="6%" class="mobile-hide">
                    <input type="checkbox" name="dispatches[]" value="{$var.dispatch}" class="cm-item hide" />
                </td>
                <td width="30%" data-th="{__("dispatch_value")}">
                    <input type="hidden" name="seo_data[{$key}][rule_params]" value="{$var.dispatch}" />
                    <span>{$var.dispatch}</span></td>
                <td width="50%" data-th="{__("seo_name")}">
                    <input type="text" name="seo_data[{$key}][name]" value="{$var.name}" class="input-hidden input-large" /></td>
                <td width="8%" class="nowrap" data-th="{__("tools")}">
                    <div class="hidden-tools">
                        {capture name="tools_list"}
                            {assign var="_dispatch" value="`$var.dispatch`"|escape:url}
                            <li>{btn class="cm-confirm" type="list" text=__("delete") href="seo_rules.delete?rule_params=`$_dispatch`" method="POST"}</li>
                        {/capture}
                        {dropdown content=$smarty.capture.tools_list}
                    </div>
                </td>
            </tr>
            {/foreach}
            </table>
        </div>
    {/capture}

    {include file="common/context_menu_wrapper.tpl"
        form="seo_form"
        object="seo_rules"
        is_check_all_shown=true
        items=$smarty.capture.seo_rules_table
        has_permissions=$has_permission
    }
{else}
    <p class="no-items">{__("no_data")}</p>
{/if}

{include file="common/pagination.tpl"}
</form>
{/capture}

{capture name="buttons"}
    {if $seo_data}
        {include file="buttons/save.tpl" but_name="dispatch[seo_rules.m_update]" but_role="action" but_target_form="seo_form" but_meta="cm-submit"}
    {/if}
{/capture}

{if $has_permission}
    {capture name="adv_buttons"}
        {include file="common/popupbox.tpl"
            id="add_seo_rule"
            text=__("new_rule")
            title=__("add_new")
            link_text=__("seo_add_rule")
            content=$smarty.capture.add_seo_rule
            act="general"
            icon="icon-plus"
            link_class="btn-primary"
        }
    {/capture}
{/if}

{capture name="sidebar"}
    {include file="common/saved_search.tpl" dispatch="seo_rules.manage" view_type="seo_rules"}
    {include file="addons/seo/views/seo_rules/components/search_form.tpl" dispatch="seo_rules.manage"}
{/capture}

{include file="common/mainbox.tpl" title=__("seo_rules") content=$smarty.capture.mainbox title_extra=$smarty.capture.title_extra buttons=$smarty.capture.buttons  adv_buttons=$smarty.capture.adv_buttons sidebar=$smarty.capture.sidebar select_languages=true}