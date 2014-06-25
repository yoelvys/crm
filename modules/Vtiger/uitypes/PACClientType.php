<?php

require_once('modules/PAC/Models/Client.php');

class Vtiger_PACClientType_UIType extends Vtiger_Base_UIType {


    public function getTemplateName() {
        return 'uitypes/PACClientType.tpl';
    }

    public function getDisplayValue($code) {
        $client = PAC_Client_Model::getInstance();

        return $client->getPACComboElementName($code, "79");
    }


    public function getRelatedListDisplayValue($value) {
        return $value;
    }


    public function getPACClientType() {
        $client = PAC_Client_Model::getInstance();

        return $client->getPACComboElements("79");
    }

}
