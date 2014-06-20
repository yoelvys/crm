<?php

require_once('modules/PAC/Models/Client.php');
class Vtiger_PACCivilStatus_UIType extends Vtiger_Base_UIType {

    /**
     * Function to get the Template name for the current UI Type object
     * @return <String> - Template Name
     */
    public function getTemplateName() {
        return 'uitypes/PACCivilStatus.tpl';
    }

    /**
     * Function to get the Display Value, for the current field type with given DB Insert Value
     * @param <Object> $value
     * @return <Object>
     */
    public function getDisplayValue($code) {
        $client = PAC_Client_Model::getInstance();
        return $client->getPACComboElementName($code, "26");
    }

    /**
     * Function to get Display value for RelatedList
     * @param <String> $value
     * @return <String>
     */
    public function getRelatedListDisplayValue($value) {
        return $value;
    }

    /**
     * Function to return all PAC vendedors
     * @return <Array> vendedors[code]=[name]
     */
    public function getPACCivilStatus() {
        $client = PAC_Client_Model::getInstance();
        
        return $client->getPACComboElements("26");
    }

}
