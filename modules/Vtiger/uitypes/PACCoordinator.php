<?php

require_once('modules/PAC/Models/Client.php');
class Vtiger_PACCoordinator_UIType extends Vtiger_Base_UIType {


    public function getTemplateName() {
        return 'uitypes/PACCoordinator.tpl';
    }


    public function getDisplayValue($code) {
        $client = PAC_Client_Model::getInstance();
        
        return $client->getPACComboElementName($code, "77");
    }

    public function getRelatedListDisplayValue($value) {
        return $value;
    }

    public function getPACCoordinators() {
        $client = PAC_Client_Model::getInstance();
        
        return $client->getPACComboElements("77");
    }

}
