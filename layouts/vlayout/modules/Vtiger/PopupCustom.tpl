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
<div id="popupPageContainer" class="popupBackgroundColor">
	<div class="paddingLeftRight10px">{include file='PopupSearchCustom.tpl'|vtemplate_path:$MODULE}</div>
	<div id="PopupContents" class="paddingLeftRight10px">{include file='PopupContentsCustom.tpl'|vtemplate_path:$MODULE_NAME}</div>
	<input type="hidden" class="triggerEventName" value="{$smarty.request.triggerEventName}"/>
</div>
</div>
{/strip}