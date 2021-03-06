<?php

require_once('modules/PAC/Models/Client.php');

class Vtiger_PACPrices_UIType extends Vtiger_Base_UIType {

    /**
     * Function to get the Template name for the current UI Type object
     * @return <String> - Template Name
     */
    public function getTemplateName() {
        return 'uitypes/PACPrices.tpl';
    }

    /**
     * Function to get the Display Value, for the current field type with given DB Insert Value
     * @param <Object> $value
     * @return <Object>
     */
    public function getDisplayValue($code) {

        $prices = array(1 => "Precio 1", 2 => "Precio 2", 3 => "Precio 3", 4 => "Precio 4", 5 => "Precio Variable");

        return $prices[$code];
    }

    /**
     * Function to get Display value for RelatedList
     * @param <String> $value
     * @return <String>
     */
    public function getRelatedListDisplayValue($value) {
        return $value;
    }
    
    /**
     * Function to return all PAC vendedors
     * @return <Array> vendedors[code]=[name]
     */
    public function getPACPrices() {
      
        return array(1 => "Precio 1", 2 => "Precio 2", 3 => "Precio 3", 4 => "Precio 4", 5 => "Precio Variable");
    }

}
