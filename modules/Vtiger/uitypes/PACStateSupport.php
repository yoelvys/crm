<?php

require_once('modules/PAC/Models/Client.php');
class Vtiger_PACStateSupport_UIType extends Vtiger_Base_UIType {

   
    public function getTemplateName() {
        return 'uitypes/PACStateSupport.tpl';
    }


    public function getDisplayValue($code) {
        $client = PAC_Client_Model::getInstance();
        
        return $client->getPACComboElementName($code, "94");
    }


    public function getRelatedListDisplayValue($value) {
        return $value;
    }

    public function getPACStateSupport() {
        $client = PAC_Client_Model::getInstance();
        
        return $client->getPACComboElements("94");
    }

}
