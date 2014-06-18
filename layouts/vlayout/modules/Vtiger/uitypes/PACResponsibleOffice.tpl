
{strip}
{assign var="FIELD_INFO" value=Vtiger_Util_Helper::toSafeHTML(Zend_Json::encode($FIELD_MODEL->getFieldInfo()))}
{assign var="SPECIAL_VALIDATOR" value=$FIELD_MODEL->getValidator()}
{assign var=FIELD_NAME value=$FIELD_MODEL->get('name')}
{assign var=FIELD_VALUE value=$FIELD_MODEL->get('fieldvalue')}
{assign var=RESPONSIBLEOFFICES value=Vtiger_PACResponsibleOffice_UIType::getPACResponsibleOffices()}
	<select class="chzn-select {$FIELD_NAME}" data-validation-engine="validate[{if $FIELD_MODEL->isMandatory() eq true} required,{/if}funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" data-name="{$FIELD_NAME}" name="{$FIELD_NAME}" data-fieldinfo='{$FIELD_INFO}' {if !empty($SPECIAL_VALIDATOR)}data-validator={Zend_Json::encode($SPECIAL_VALIDATOR)}{/if}>
            <option value="">{vtranslate('LBL_SELECT_OPTION','Vtiger')}</option>     
            {foreach key=RESPONSIBLEOFFICE_ID item=RESPONSIBLEOFFICE_NAME from=$RESPONSIBLEOFFICES}
                    <option value="{$RESPONSIBLEOFFICE_ID}"  {if $FIELD_VALUE eq $RESPONSIBLEOFFICE_ID} selected {/if}>
                        {$RESPONSIBLEOFFICE_NAME}
                    </option>
		{/foreach}
	</select>
{/strip}