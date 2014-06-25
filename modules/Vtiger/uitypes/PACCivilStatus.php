<?php

require_once('modules/PAC/Models/Client.php');
class Vtiger_PACCivilStatus_UIType extends Vtiger_Base_UIType {


    public function getTemplateName() {
        return 'uitypes/PACCivilStatus.tpl';
    }


    public function getDisplayValue($code) {
        $client = PAC_Client_Model::getInstance();
        return $client->getPACComboElementName($code, "26");
    }

  
    public function getRelatedListDisplayValue($value) {
        return $value;
    }

    public function getPACCivilStatus() {
        $client = PAC_Client_Model::getInstance();
        
        return $client->getPACComboElements("26");
    }

}
