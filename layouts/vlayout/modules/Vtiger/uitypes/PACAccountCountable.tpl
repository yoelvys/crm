
{strip}
{assign var="FIELD_INFO" value=Vtiger_Util_Helper::toSafeHTML(Zend_Json::encode($FIELD_MODEL->getFieldInfo()))}
{assign var="SPECIAL_VALIDATOR" value=$FIELD_MODEL->getValidator()}
{if {$REFERENCE_LIST_COUNT} eq 1}
	<input name="popupReferenceModule" type="hidden" value="Contacts" />
{/if}

<input name="{$FIELD_MODEL->getFieldName()}" type="hidden" value="{$FIELD_MODEL->get('fieldvalue')}" class="sourceField" data-displayvalue='{$FIELD_MODEL->getEditViewDisplayValue($FIELD_MODEL->get('fieldvalue'))}' data-fieldinfo='{$FIELD_INFO}' data-code='{$FIELD_MODEL->getEditViewDisplayValue($FIELD_MODEL->get('fieldvalue'))}' />
    <input id="{$FIELD_NAME}_display" class="input-large" data-validation-engine="validate[{if $FIELD_MODEL->isMandatory() eq true} required,{/if}funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" name="{$FIELD_MODEL->getFieldName()}_display"
           readonly="readonly" value="{Vtiger_PACAccountCountable_UIType::getDisplayValue($FIELD_MODEL->get('fieldvalue'))}"  data-fieldinfo='{$FIELD_INFO}' {if !empty($SPECIAL_VALIDATOR)}data-validator={Zend_Json::encode($SPECIAL_VALIDATOR)}{/if} />
    <span class="add-on relatedPopupCustom cursorPointer">
            <i id="{$MODULE}_editView_fieldName_{$FIELD_NAME}_select" class="icon-search relatedPopupCustom" title="{vtranslate('LBL_SELECT', $MODULE)}" ></i>
    </span>

{/strip}

