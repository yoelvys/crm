
{strip}
{assign var="FIELD_INFO" value=Vtiger_Util_Helper::toSafeHTML(Zend_Json::encode($FIELD_MODEL->getFieldInfo()))}
{assign var="SPECIAL_VALIDATOR" value=$FIELD_MODEL->getValidator()}
{assign var=FIELD_NAME value=$FIELD_MODEL->get('name')}
{assign var=FIELD_VALUE value=$FIELD_MODEL->get('fieldvalue')}
{if $FIELD_VALUE eq ''}
<select class="chzn-select {$FIELD_NAME}" name = '{$FIELD_NAME}'>  
    <option value="Natural">
        Natural
    </option>
    <option value="Jurídica">
        Jurídica
    </option>
</select>
{else}
    <span name ="pac_tipo_persona">{$FIELD_VALUE}</span>
{/if}
{/strip}