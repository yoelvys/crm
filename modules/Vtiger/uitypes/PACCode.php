<?php

require_once('modules/PAC/Models/Client.php');

class Vtiger_PACCode_UIType extends Vtiger_Base_UIType {

  
    public function getTemplateName() {
        return 'uitypes/PACCode.tpl';
    }


    public function getDisplayValue($code) {
        return $code;
    }

    public function getRelatedListDisplayValue($value) {
        return $value;
    }

}
