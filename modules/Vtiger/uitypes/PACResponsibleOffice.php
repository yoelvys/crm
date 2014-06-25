<?php

require_once('modules/PAC/Models/Client.php');
class Vtiger_PACResponsibleOffice_UIType extends Vtiger_Base_UIType {


    public function getTemplateName() {
        return 'uitypes/PACResponsibleOffice.tpl';
    }

    public function getDisplayValue($code) {
        $client = PAC_Client_Model::getInstance();
        
        return $client->getPACComboElementName($code, "74");
    }


    public function getRelatedListDisplayValue($value) {
        return $value;
    }

    public function getPACResponsibleOffices() {
        $client = PAC_Client_Model::getInstance();
        
        return $client->getPACComboElements("74");
    }

}
