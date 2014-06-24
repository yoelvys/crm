<?php

require_once('modules/PAC/Models/Client.php');

class Vtiger_PACCategory_UIType extends Vtiger_Base_UIType {

    public function getTemplateName() {
        return 'uitypes/PACCategory.tpl';
    }

    public function getDisplayValue($code) {
        $client = PAC_Client_Model::getInstance();

        return $client->getPACComboCategoryName($code);
    }

    public function getRelatedListDisplayValue($value) {
        return $value;
    }

    public static function getPACCategoryName($code) {
        $client = PAC_Client_Model::getInstance();

        return $client->getPACComboElementName($code);
    }

    public function getPACCategory() {
        $client = PAC_Client_Model::getInstance();

        return $client->getPACComboCategory();
    }

}
