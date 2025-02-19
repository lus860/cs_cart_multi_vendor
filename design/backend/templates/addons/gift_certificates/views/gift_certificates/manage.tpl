{script src="js/addons/gift_certificates/bulk_edit.js"}

{capture name="mainbox"}

<form action="{""|fn_url}" method="post" enctype="multipart/form-data" name="gift_cert_list_form" id="gift_cert_list_form">

{include file="common/pagination.tpl" save_current_url=true}

{$c_url=$config.current_url|fn_query_remove:"sort_by":"sort_order"}
{include_ext file="common/icon.tpl" class="icon-`$search.sort_order_rev`" assign=c_icon}
{include_ext file="common/icon.tpl" class="icon-dummy" assign=c_dummy}

{if $gift_certificates}
    {capture name="gift_cert_list_table"}
        <div class="table-responsive-wrapper longtap-selection">
            <table class="table table-middle table--relative table-responsive sortable">
                <thead
                        data-ca-bulkedit-default-object="true"
                        data-ca-bulkedit-component="defaultObject"
                >
                    <tr>
                        <th class="center" width="6%">
                            {include file="common/check_items.tpl"}

                            <input type="checkbox"
                                   class="bulkedit-toggler hide"
                                   data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                                   data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                            />
                        </th>
                        <th width="15%"><a class="cm-ajax{if $search.sort_by == "gift_cert_code"} sort-link-{$search.sort_order_rev}{/if}" href="{"`$c_url`&sort_by=gift_cert_code&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id="pagination_contents">{__("code")}{if $search.sort_by === "gift_cert_code"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
                        <th>
                            <a class="cm-ajax{if $search.sort_by === "sender"} sort-link-{$search.sort_order_rev}{/if}" href="{"`$c_url`&sort_by=sender&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id="pagination_contents">{__("gift_cert_from")}{if $search.sort_by === "sender"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a>
                             / <a class="cm-ajax{if $search.sort_by === "recipient"} sort-link-{$search.sort_order_rev}{/if}" href="{"`$c_url`&sort_by=recipient&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id="pagination_contents">{__("gift_cert_to")}{if $search.sort_by === "recipient"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a>
                             / <a class="cm-ajax{if $search.sort_by === "send_via"} sort-link-{$search.sort_order_rev}{/if}" href="{"`$c_url`&sort_by=send_via&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id="pagination_contents">{__("type")}{if $search.sort_by === "send_via"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a>
                        </th>
                        <th width="15%"><a class="cm-ajax{if $search.sort_by === "timestamp"} sort-link-{$search.sort_order_rev}{/if}" href="{"`$c_url`&sort_by=timestamp&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id="pagination_contents">{__("date")}{if $search.sort_by === "timestamp"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
                        <th width="15%">{__("current_amount")}</th>
                        <th width="10%">&nbsp;</th>
                        <th width="10%" class="right"><a class="cm-ajax{if $search.sort_by === "status"} sort-link-{$search.sort_order_rev}{/if}" href="{"`$c_url`&sort_by=status&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id="pagination_contents">{__("status")}{if $search.sort_by === "status"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
                    </tr>
                </thead>
                {$gift_status_descr=$smarty.const.STATUSES_GIFT_CERTIFICATE|fn_get_simple_statuses}
                <tbody>
                    {foreach $gift_certificates as $gift}
                        <tr class="cm-row-status-{$gift.status|lower} cm-longtap-target"
                            data-ca-longtap-action="setCheckBox"
                            data-ca-longtap-target="input.cm-item"
                            data-ca-id="{$gift.gift_cert_id}"
                        >
                            <td width="6%" class="left mobile-hide">
                                <input type="checkbox" name="gift_cert_ids[]" value="{$gift.gift_cert_id}" class="cm-item cm-item-status-{$gift.status|lower} hide" />
                            </td>
                            <td width="15%" data-th="{__("code")}">
                                <a href="{"gift_certificates.update?gift_cert_id=`$gift.gift_cert_id`"|fn_url}" class="nowrap row-status link--monochrome">{$gift.gift_cert_code}</a>
                                {include file="views/companies/components/company_name.tpl" object=$gift}
                            </td>
                            <td data-th="{__("gift_cert_from")} / {__("gift_cert_to")} / {__("type")}" class="row-status">
                                <div>{$gift.sender}</div>
                                <div>{$gift.recipient}</div>
                                <div><span class="nowrap">{if $gift.send_via === "P"}{__("mail")}</span>{else}{__("email")}</span> ({$gift.email}){/if}</div>
                            </td>
                            <td width="15%" data-th="{__("date")}" class="row-status"><a href="{"gift_certificates.update?gift_cert_id=`$gift.gift_cert_id`"|fn_url}" class="underlined link--monochrome">{$gift.timestamp|date_format:"`$settings.Appearance.date_format`, `$settings.Appearance.time_format`"}</a></td>
                            <td width="15%" data-th="{__("current_amount")}" class="row-status">{include file="common/price.tpl" value=$gift.debit}</td>
                            <td width="10%" data-th="&nbsp;" class="nowrap">
                                <div class="hidden-tools">
                                    {capture name="tools_list"}
                                        <li>{btn type="list" text=__("edit") href="gift_certificates.update?gift_cert_id=`$gift.gift_cert_id`"}</li>
                                        <li>{btn type="list" class="cm-confirm" text=__("delete") href="gift_certificates.delete?gift_cert_id=`$gift.gift_cert_id`" method="POST"}</li>
                                    {/capture}
                                    {dropdown content=$smarty.capture.tools_list}
                                </div>
                            </td>
                            <td width="10%" data-th="{__("status")}" class="right nowrap">
                                {include file="common/select_popup.tpl"
                                         type="gift_certificates"
                                         id=$gift.gift_cert_id
                                         status=$gift.status
                                         items_status=$gift_status_descr
                                         update_controller="gift_certificates"
                                         notify=true
                                         popup_additional_class="dropleft"
                                }
                            </td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    {/capture}

    {include file="common/context_menu_wrapper.tpl"
        form="gift_cert_list_form"
        object="gift_certificates"
        items=$smarty.capture.gift_cert_list_table
    }
{else}
    <p class="no-items">{__("no_data")}</p>
{/if}

{include file="common/pagination.tpl"}

{capture name="sidebar"}
    {include file="common/saved_search.tpl" dispatch="gift_certificates.manage" view_type="gift_certs"}
    {include file="addons/gift_certificates/views/gift_certificates/components/gift_certificates_search_form.tpl"}
{/capture}

{capture name="adv_buttons"}
    {include file="common/tools.tpl"
        tool_href="gift_certificates.add"
        tool_override_meta="btn btn-primary"
        prefix="top"
        hide_tools=true
        title=__("add_gift_certificate")
        link_text=__("add_gift_certificate")
        icon="icon-plus"
    }
{/capture}

</form>

{/capture}
{include file="common/mainbox.tpl" title=__("gift_certificates") content=$smarty.capture.mainbox title_extra=$smarty.capture.title_extra tools=$smarty.capture.tools sidebar=$smarty.capture.sidebar adv_buttons=$smarty.capture.adv_buttons}
