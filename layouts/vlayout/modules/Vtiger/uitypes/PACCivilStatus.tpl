
{strip}
{assign var="FIELD_INFO" value=Vtiger_Util_Helper::toSafeHTML(Zend_Json::encode($FIELD_MODEL->getFieldInfo()))}
{assign var="SPECIAL_VALIDATOR" value=$FIELD_MODEL->getValidator()}
{assign var=FIELD_NAME value=$FIELD_MODEL->get('name')}
{assign var=FIELD_VALUE value=$FIELD_MODEL->get('fieldvalue')}
{assign var=CIVILSTATUS value=Vtiger_PACCivilStatus_UIType::getPACCivilStatus()}
	<select class="chzn-select {$FIELD_NAME}" data-validation-engine="validate[{if $FIELD_MODEL->isMandatory() eq true} required,{/if}funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" data-name="{$FIELD_NAME}" name="{$FIELD_NAME}" data-fieldinfo='{$FIELD_INFO}' {if !empty($SPECIAL_VALIDATOR)}data-validator={Zend_Json::encode($SPECIAL_VALIDATOR)}{/if}>
            <option value="">{vtranslate('LBL_SELECT_OPTION','Vtiger')}</option>  
            {foreach key=CIVILSTATUS_ID item=CIVILSTATUS_NAME from=$CIVILSTATUS}
                    <option value="{$CIVILSTATUS_ID}"  {if $FIELD_VALUE eq $CIVILSTATUS_ID} selected {/if}>
                        {$CIVILSTATUS_NAME}
                    </option>
		{/foreach}
	</select>
{/strip}