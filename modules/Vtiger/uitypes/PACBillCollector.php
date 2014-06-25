<?php

require_once('modules/PAC/Models/Client.php');
class Vtiger_PACBillCollector_UIType extends Vtiger_Base_UIType {


    public function getTemplateName() {
        return 'uitypes/PACBillCollector.tpl';
    }

 
    public function getDisplayValue($code) {
        $client = PAC_Client_Model::getInstance();
        
        return $client->getPACComboElementName($code, "75");
    }

    public function getRelatedListDisplayValue($value) {
        return $value;
    }

    public function getPACBillCollectors() {
        $client = PAC_Client_Model::getInstance();
        
        return $client->getPACComboElements("75");
    }

}
