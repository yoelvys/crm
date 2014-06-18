<?php

require_once('modules/PAC/Models/Client.php');

Class SaveAjax {

    static $instance;

    private function __construct() {
        
    }

    private function __clone() {
        
    }

    public static function getInstance() {

        if (!(self::$instance instanceof self)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function process(Vtiger_Request $request, $clientJSONData) {
        switch ($request->getModule()) {
            
            case 'Contacts':
                $client = PAC_Client_Model::getInstance();
                $client->updateAjax($clientJSONData);
                break;
            default :
                break;
        }
    }

}
