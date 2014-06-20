{strip}
<div class="popupEntriesDiv">
	<input type="hidden" value="{$ORDER_BY}" id="orderBy">
	<input type="hidden" value="{$SORT_ORDER}" id="sortOrder">
	{if $SOURCE_MODULE eq "Emails"}
		<input type="hidden" value="Vtiger_EmailsRelatedModule_Popup_Js" id="popUpClassName"/>
	{/if}
	{assign var=WIDTHTYPE value=$CURRENT_USER_MODEL->get('rowheight')}
	<table id='tableContent' class="table table-bordered listViewEntriesTable">
            <thead>
                    <tr class="listViewHeaders">
                        <th>Código</th>
                        <th>Cuenta contable</th>	
                    </tr>
            </thead>
            {foreach key=KEY item=LISTVIEW_ENTRY from=$LISTVIEW_ENTRIES name=popupListView}
                <tr class="listViewEntries" data-id="{$KEY}" data-name='{$LISTVIEW_ENTRY}' data-code="{$KEY}">
                    <td>
                        {$KEY}
                    </td>
                    <td class="value">
                        {$LISTVIEW_ENTRY}
                    </td>
                </tr>
            {/foreach}
	</table>

	<!--added this div for Temporarily -->
{if count($LISTVIEW_ENTRIES) eq '0'}
    <div class="row-fluid">
            <div class="emptyRecordsDiv">Cuenta contable no encontrada</div>
    </div>
{/if}
<div class="row-fluid" id="emptyResult">
            <div class="emptyRecordsDiv">Cuenta contable no encontrada</div>
    </div>
</div>
{/strip}
