<?php

require_once('modules/PAC/Models/Client.php');
class Vtiger_PACPaymentCondition_UIType extends Vtiger_Base_UIType {

    public function getTemplateName() {
        return 'uitypes/PACPaymentCondition.tpl';
    }


    public function getDisplayValue($code) {
        $client = PAC_Client_Model::getInstance();
        
        return $client->getPACComboElementName($code, "72");
    }

    public function getRelatedListDisplayValue($value) {
        return $value;
    }

    public function getPACPaymentCondition() {
        $client = PAC_Client_Model::getInstance();
        
        return $client->getPACComboElements("72");
    }

}
