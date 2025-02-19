{capture name="mainbox"}

    {capture name="tabsbox"}

        <div id="content_languages">

            {capture name="add_language"}
                {include file="views/languages/update.tpl" lang_data=[]}
            {/capture}

            {* FIXME: HARDCODE checking permissions. We need to divide these two forms by different modes *}
            <form action="{""|fn_url}" method="post" id="languages_form" name="languages_form" class="{if $runtime.company_id}cm-hide-inputs{/if}">
                <input type="hidden" name="page" value="{$smarty.request.page}" />
                <input type="hidden" name="selected_section" value="{$smarty.request.selected_section}" />

                {$language_statuses = ""|fn_get_default_statuses:true}
                {$is_not_only_default_lang = $langs|count > 1}

                {capture name="languages_table"}
                    <div class="table-responsive-wrapper longtap-selection">
                        <table class="table table-middle table--relative table-responsive">
                        <thead data-ca-bulkedit-default-object="true">
                            <tr class="cm-first-sibling">
                                <th width="6%" class="left" data-th="">
                                    {include file="common/check_items.tpl"
                                        check_statuses=($is_allow_update_languages && $is_not_only_default_lang) ? $language_statuses : ''
                                        is_check_disabled=!$is_not_only_default_lang || !$is_allow_update_languages
                                    }

                                    <input type="checkbox"
                                        class="bulkedit-toggler hide"
                                        data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                                        data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                                    />
                                </th>
                                <th width="15%">{__("language_code")}</th>
                                <th width="20%">{__("name")}</th>
                                <th width="20%">{__("country")}</th>

                                {hook name="languages:manage_header"}{/hook}

                                <th width="8%">&nbsp;</th>
                                <th width="10%" class="right">{__("status")}</th>
                            </tr>
                        </thead>
                        {if $langs|count == 1}
                            {assign var="disable_change" value=true}
                        {/if}
                        <tbody>
                        {foreach from=$langs item="language"}
                        <tr class="cm-longtap-target cm-row-status-{$language.status|lower}"
                            {if $is_allow_update_languages && $is_not_only_default_lang}
                                data-ca-longtap-action="setCheckBox"
                                data-ca-longtap-target="input.cm-item"
                                data-ca-id="{$language.lang_id}"
                                data-ca-bulkedit-dispatch-parameter="lang_ids[]"
                            {/if}
                        >
                            <td width="6%" class="left" data-th="">
                                <input type="checkbox" name="lang_ids[]" value="{$language.lang_id}" class="cm-item cm-item-status-{$language.status|lower} hide"></td>
                            <td width="15%" data-th="{__("language_code")}">
                                <input type="hidden" name="update_language[{$language.lang_id}][lang_code]" value="{$language.lang_code}">
                                {btn type="dialog"
                                    text=$language.lang_code
                                    href="languages.update?lang_id=`$language.lang_id`"
                                    target_id="content_group`$language.lang_id`"
                                    prefix=$language.lang_id
                                    class="link--monochrome"
                                }
                            </td>
                            <td width="20%" data-th="{__("name")}">
                                {$language.name} {if $language.lang_code == $smarty.const.DEFAULT_LANGUAGE}({__("Default")}){/if}
                            </td>
                            <td width="20%" data-th="{__("country")}">
                                {include_ext file="common/icon_deprecated.tpl"
                                    class="flag flag-`$language.country_code|strtolower`"
                                }{$countries[$language.country_code]}
                            </td>

                            {hook name="languages:manage_data"}{/hook}

                            <td width="8%" class="nowrap right" data-th="{__("tools")}">
                                <div class="hidden-tools">
                                    {capture name="tools_list"}
                                        {hook name="languages:list_extra_links"}
                                            <li>{btn type="dialog" text=__("edit") href="languages.update?lang_id=`$language.lang_id`" id="opener_group_`$language.lang_id`" target_id="content_group`$language.lang_id`" prefix=$language.lang_id}</li>

                                            {if $language.lang_code != $smarty.const.DEFAULT_LANGUAGE}
                                                <li>{btn type="list" class="cm-confirm" text=__("delete") href="languages.delete_language?lang_id=`$language.lang_id`" method="POST"}</li>
                                            {/if}

                                            <li>{btn type="list" class="cm-language-name" text=__("clone") href="languages.clone_language?lang_id=`$language.lang_id`" method="POST"}</li>
                                            <li>{btn type="list" text=__("export") href="languages.export_language?lang_id=`$language.lang_id`" method="POST"}</li>
                                            {if !$runtime.company_id}
                                                <li>{btn type="dialog" text=__("update_translation") title=__("update_translation") href="languages.update_translation?lang_id=`$language.lang_id`" id="opener_group_`$language.lang_id`_variables" target_id="content_group`$language.lang_id`_variables" class="cm-dialog-auto-size" prefix="`$language.lang_id`_variables"}</li>
                                            {/if}
                                        {/hook}
                                    {/capture}
                                    {dropdown content=$smarty.capture.tools_list}
                                </div>

                            </td>
                            {capture name="popups"}
                                {$smarty.capture.popups nofilter}
                                <div id="content_group{$language.lang_id}" class="hidden" title={$language.name}></div>
                            {/capture}

                            <td width="10%" class="right" data-th="{__("status")}">
                                {assign var="lang_id" value=$language.lang_id}
                                {include file="common/select_popup.tpl" type="languages" id=$lang_id prefix="lng" status=$language.status hidden="Y" object_id_name="lang_id" table="languages" update_controller="languages" st_result_ids="content_languages" non_editable=$runtime.company_id}
                            </td>

                        </tr>
                        {/foreach}
                        </tbody>
                        </table>
                    </div>
                {/capture}

                {include file="common/context_menu_wrapper.tpl"
                    has_permission=$is_allow_update_languages && $is_not_only_default_lang
                    form="languages_form"
                    object="languages"
                    items=$smarty.capture.languages_table
                }
            </form>
        <!--content_languages--></div>

        {if !$runtime.company_id}
            <div class="hidden" id="content_available_languages"></div>
        {/if}

        {$smarty.capture.popups nofilter}

    {/capture}

    {include file="common/tabsbox.tpl" content=$smarty.capture.tabsbox group_name=$runtime.controller active_tab=$smarty.request.selected_section track=true}
{/capture}

{capture name="adv_buttons"}
    {hook name="languages:adv_buttons"}
    {if
        $is_allow_update_languages
        && !$runtime.company_id
    }
        {include file="common/popupbox.tpl"
            id="add_language"
            text=__("new_language")
            title=__("add_language")
            link_text=__("add_language")
            content=$smarty.capture.add_language
            act="general"
            icon="icon-plus"
            link_class="btn-primary cm-dialog-auto-size"
        }
    {/if}
    {/hook}
{/capture}

{capture name="buttons"}
    {capture name="tools_list"}
        {hook name="languages:manage_tools_list"}
            <li>{btn type="list" text=__("on_site_live_editing") href="customization.update_mode?type=live_editor&status=enable"|fn_url target="_blank" method="POST"}</li>
        {/hook}
    {/capture}
    {dropdown content=$smarty.capture.tools_list}

    {$smarty.capture.add_button nofilter}
{/capture}

{capture name="sidebar"}
    {capture name="important"}
        {hook name="languages:important_text"}
            <p>{__('important_language_text', ['[link]' => 'settings.manage?section_id=Appearance'|fn_url]) nofilter}</p>
        {/hook}
    {/capture}
    {include file="common/sidebox.tpl" content=$smarty.capture.important title=__('important')}
    <div class="sidebar-row marketplace">
        <h6>{__("more_languages")}</h6>
        <p>{__("languages_find_more", ["[href]" => $config.resources.translate]) nofilter}</p>
    </div>
{/capture}

{include file="common/mainbox.tpl"
    title=__("languages")
    content=$smarty.capture.mainbox
    buttons=$smarty.capture.buttons
    adv_buttons=$smarty.capture.adv_buttons
    sidebar=$smarty.capture.sidebar
}

<script>
    (function($, _){
        $(document).ready(function(){
            $('.cm-language-name').click(function(){
                var lang_code = prompt(_.tr('enter_new_lang_code'));

                if (lang_code == null || lang_code.length == 0) {
                    // Customer hit Cancel button or did not enter lang_code
                    return false;
                }

                var href = $.attachToUrl($(this).attr('href'), 'lang_code=' + lang_code);
                $(this).attr('href', href);
            });
        });
    }(Tygh.$, Tygh));
</script>
