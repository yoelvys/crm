<?php

require_once('modules/PAC/Models/Client.php');
class Vtiger_PACPromotions_UIType extends Vtiger_Base_UIType {


    public function getTemplateName() {
        return 'uitypes/PACPromotions.tpl';
    }

    public function getDisplayValue($code) {
        $client = PAC_Client_Model::getInstance();
        
        return $client->getPACComboPromotionName($code);
    }

    public function getRelatedListDisplayValue($value) {
        return $value;
    }

    public function getPACPromotions() {
        $client = PAC_Client_Model::getInstance();
        
        return $client->getPACComboPromotions();
    }

}
