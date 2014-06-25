<?php

require_once('modules/PAC/Models/Client.php');

class Vtiger_PACPersonType_UIType extends Vtiger_Base_UIType {

    public function getTemplateName() {
        return 'uitypes/PACPersonType.tpl';
    }

  
    public function getDisplayValue($code) {

        return $code;
    }


    public function getRelatedListDisplayValue($value) {
        return $value;
    }

}
