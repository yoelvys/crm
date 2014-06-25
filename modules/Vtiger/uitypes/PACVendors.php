<?php

require_once('modules/PAC/Models/Client.php');

class Vtiger_PACVendors_UIType extends Vtiger_Base_UIType {


    public function getTemplateName() {
        return 'uitypes/PACVendors.tpl';
    }

    public function getDisplayValue($code) {
        $client = PAC_Client_Model::getInstance();
        
        return $client->getPACComboElementName($code,"73");
    }


    public function getRelatedListDisplayValue($value) {
        return $value;
    }


    public function getPACVendors() {
        $client = PAC_Client_Model::getInstance();
        
        return $client->getPACComboElements("73");
    }

}
