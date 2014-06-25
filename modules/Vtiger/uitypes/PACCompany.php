<?php

require_once('modules/PAC/Models/Client.php');
class Vtiger_PACCompany_UIType extends Vtiger_Base_UIType {

    public function getTemplateName() {
        return 'uitypes/PACCompany.tpl';
    }

 
    public function getDisplayValue($code) {               
        $client = PAC_Client_Model::getInstance();

        return $client->getPACComboCompanyName($code);
    }


    public function getRelatedListDisplayValue($value) {
        return $value;
    }

 
    public function getPACCompanies() {
        $client = PAC_Client_Model::getInstance();
        
        return $client->getPACComboCompanies();
    }

}
