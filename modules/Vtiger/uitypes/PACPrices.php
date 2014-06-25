<?php

require_once('modules/PAC/Models/Client.php');

class Vtiger_PACPrices_UIType extends Vtiger_Base_UIType {

 
    public function getTemplateName() {
        return 'uitypes/PACPrices.tpl';
    }

    public function getDisplayValue($code) {

        $prices = array(1 => "Precio 1", 2 => "Precio 2", 3 => "Precio 3", 4 => "Precio 4", 5 => "Precio Variable");

        return $prices[$code];
    }


    public function getRelatedListDisplayValue($value) {
        return $value;
    }

    public function getPACPrices() {
      
        return array(1 => "Precio 1", 2 => "Precio 2", 3 => "Precio 3", 4 => "Precio 4", 5 => "Precio Variable");
    }

}
