
{strip}
{assign var="FIELD_INFO" value=Vtiger_Util_Helper::toSafeHTML(Zend_Json::encode($FIELD_MODEL->getFieldInfo()))}
{assign var="SPECIAL_VALIDATOR" value=$FIELD_MODEL->getValidator()}
{assign var=FIELD_NAME value=$FIELD_MODEL->get('name')}
{assign var=FIELD_VALUE value=$FIELD_MODEL->get('fieldvalue')}
<select class="chzn-select {$FIELD_NAME}">  
    <option value="Natural"  {if $FIELD_VALUE eq "Natural"} selected {/if}>
        Natural
    </option>
    <option value="Juridica"  {if $FIELD_VALUE eq "Juridica"} selected {/if}>
        Jurídica
    </option>
</select>
{/strip}