{*<!--
/*********************************************************************************
** The contents of this file are subject to the vtiger CRM Public License Version 1.0
* ("License"); You may not use this file except in compliance with the License
* The Original Code is:  vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
*
********************************************************************************/
-->*}
{strip}
    <input type="hidden" id="parentModule" value="{$SOURCE_MODULE}"/>
    <input type="hidden" id="module" value="{$MODULE}"/>
    <input type="hidden" id="parent" value="{$PARENT_MODULE}"/>
    <input type="hidden" id="sourceRecord" value="{$SOURCE_RECORD}"/>
    <input type="hidden" id="sourceField" value="{$SOURCE_FIELD}"/>
    <input type="hidden" id="url" value="{$GETURL}" />
    <input type="hidden" id="multi_select" value="{$MULTI_SELECT}" />
    <input type="hidden" id="currencyId" value="{$CURRENCY_ID}" />
    <input type="hidden" id="relatedParentModule" value="{$RELATED_PARENT_MODULE}"/>
    <input type="hidden" id="relatedParentId" value="{$RELATED_PARENT_ID}"/>
    <input type="hidden" id="view" value="PopupCustomAjax"/>
    <div class="popupContainer row-fluid">
        <div class="span12">
            <div class="row-fluid">
                <div class="span6 row-fluid">
                    <span class="logo span5"><img src="{$COMPANY_LOGO->get('imagepath')}" title="{$COMPANY_LOGO->get('title')}" alt="{$COMPANY_LOGO->get('alt')}"/></span>
                </div>
                <div class="span6 pull-right">
                    {if $SOURCE_FIELD == 'pac_cuenta_contable'}
                        <span class="pull-right"><b>Cuentas contables</b></span>
                    {/if} 
                </div>
            </div>
        </div>
    </div>
    <form class="form-horizontal popupSearchContainer">
        <div class="control-group margin0px">
            <span class="paddingLeft10px"><strong>{vtranslate('LBL_SEARCH_FOR')}</strong></span>
            <span class="paddingLeft10px"></span>
            <input type="text" placeholder="{vtranslate('LBL_TYPE_SEARCH')}" id="searchvalue"/>
        </div>
    </form>
    {if $SOURCE_MODULE neq 'PriceBooks'}
        <div class="popupPaging">
            <div class="row-fluid">
                <span class="actions span6">&nbsp;
                    {if $MULTI_SELECT}
                        {if !empty($LISTVIEW_ENTRIES)}<button class="select btn"><strong>{vtranslate('LBL_SELECT', $MODULE)}</strong></button>{/if}
                    {/if}
                </span> 
            </div>
        </div>
    {/if}
{/strip}
