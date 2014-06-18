<?php

require_once('modules/PAC/ConnectionPAC.php');

Class PAC_Client_Model {

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

    public function process(Vtiger_Request $request) {

        $bd = ConnectionPAC::getInstance();
        $name = $request->get('firstname') . " " . $request->get('lastname');
        $cedulaRuc = $request->get('cedule');
        $code = $request->get('code');
        $category = $request->get('pac_categoria');
        $clientType = $request->get('pac_tipo_cliente');
        $birthday = $request->get('birthday');
        $sex = ($request->get('pac_sexo') == 'M' ? 1 : 0);
        $civilStatus = $request->get('pac_estado_civil');
        $children = $request->get('pac_numero_hijos');
        $address = $request->get('mailingstreet') . "." . $request->get('mailingcity');
        $addressGestion = $request->get('pac_direccion_gestion');
        $dateAdmission = $request->get('pac_fecha_ingreso');
        $officePhone = $request->get('pac_telefono_oficina');
        $homePhone = $request->get('homephone');
        $mobile = $request->get('mobile');
        $email = $request->get('email');
        $alternativeEmail = $request->get('secondaryemail');
        $webSite = $request->get('pac_sitio_web');
        $longitude = $request->get('pac_longitud');
        $latitude = $request->get('pac_latitud');
        $location = $request->get('pac_localidad');
        $counter = $request->get('pac_pagador_contador');

        $responsibleOffice = $request->get('pac_oficina_encargada');
        $vendor = $request->get('pac_vendedor');
        $billCollector = $request->get('pac_cobrador');
        $coordinator = $request->get('pac_cordinador');
        
        $price = $request->get('pac_precios');
        $paymentCondition = $request->get('pac_precios');
        $creditLimit = $request->get('pac_limite_credito');
        $expiredQuota = $request->get('pac_cuotas_vencida');
        $expiredDay = $request->get('pac_cuotas_vencida');
        

        $recordId = $request->get('record');

        if (empty($recordId)) {
            $sql = "INSERT INTO maecte (codcte01,nomcte01,dircte01,telcte01,cascte01,emailcte01) VALUES ('" . $code . "','" . $name . "','" . $address . "','" . $homePhone . "','" . $cedulaRuc . "','" . $email . "') ;";
        } else {
            $sql = "UPDATE maecte SET nomcte01 = '" . $name . "', dircte01 = '" . $address . "', telcte01 =  '" . $homePhone . "', cascte01 = '" . $cedulaRuc . "', emailcte01 = '" . $email . "' WHERE codcte01 = '" . $code . "';";
        }
        $bd->execute($sql);
    }

    public function updateAjax($clientJSONData) {
        $bd = ConnectionPAC::getInstance();
        $code = $clientJSONData['code']['value'];
        $name = $clientJSONData['firstname']['value'];
        $address = $clientJSONData['mailingstreet']['value'] . "." . $clientJSONData['mailingcity']['value'];
        $cedulaRuc = $clientJSONData['cedule']['value'];
        $homePhone = $clientJSONData['homephone']['value'];
        $email = $clientJSONData['homephone']['email'];

        $sql = "UPDATE maecte SET nomcte01 = '" . $name . "', dircte01 = '" . $address . "', telcte01 =  '" . $homePhone . "', cascte01 = '" . $cedulaRuc . "', emailcte01 = '" . $email . "' WHERE codcte01 = '" . $code . "';";
        $bd->execute($sql);
    }

    public function getPACComboElements($tableNumber) {
        $sql = "SELECT codtab,nomtab FROM `maetab` WHERE numtab='" . $tableNumber . "' and codtab<>'' order by nomtab ASC;";

        return $this->getPACComboData($sql);
    }

    public function getPACComboElementName($code, $tableNumber) {
        $sql = "SELECT nomtab FROM `maetab` WHERE numtab='" . $tableNumber . "' and codtab='" . $code . "';";

        return $this->getPACComboElement($sql);
    }

    public function getPACComboCategory() {
        $sql = "SELECT codcate,desccate  FROM `categorias` WHERE `tipocate` = '03' AND codcatep IN (0, 1) AND codcatep NOT IN ('') order by codcate;";

        return $this->getPACComboData($sql);
    }

    public function getPACComboCategoryName($code) {
        $sql = "SELECT desccate  FROM `categorias` WHERE `tipocate` = '03' AND codcatep IN (0, 1) AND codcate ='" . $code . "' ;";

        return $this->getPACComboElement($sql);
    }

    public function getPACComboPromotions() {
        $sql = "select codpromo,despromo from promocion order by despromo desc;";

        return $this->getPACComboData($sql);
    }

    public function getPACComboPromotionName($code) {
        $sql = "select despromo from promocion WHERE codpromo ='" . $code . "' ;";

        return $this->getPACComboElement($sql);
    }

    public function getPACComboCompanies() {
        $bd = ConnectionPAC::getInstance();
        $bd->setDataBaseToInfosac();
        $sql = "select idemp,nombre from empresa order by nombre desc";
        $bd->execute($sql);
        while ($row = $bd->fetchArray()) {
            $comboElements[$row[0]] = $row[1];
        }
        $bd->setDataBaseToPAC();

        return $comboElements;
    }

    public function getPACComboCompanyName($code) {
        $bd = ConnectionPAC::getInstance();
        $bd->setDataBaseToInfosac();
        $sql = "select nombre from empresa where idemp = '" . $code . "';";
        $bd->execute($sql);
        $elementName = "No encontrado";
        while ($row = $bd->fetchArray()) {
            $elementName = $row[0];
        }
        $bd->setDataBaseToPAC();

        return $elementName;
    }
    
    public function getAccountNameByCatCode($code) {
        $sql = "SELECT cta1cate  FROM `categorias` WHERE `tipocate` = '03' AND codcatep IN (0, 1) AND codcatep NOT IN ('') AND codcate = '". $code ."';";   
        $accountCode = $this->getPACComboElement($sql);
        $sqlAccount = "SELECT nomcta FROM `maecon` WHERE `ctamaecon` = '". $accountCode ."' ;";
        $result = $this->getPACComboElement($sqlAccount);
        if ($result == 'No encontrado') {
            return '';
        } 
        return $result;
    }

    private function getPACComboData($sql) {
        $comboElements = array();
        $bd = ConnectionPAC::getInstance();
        $bd->execute($sql);
        while ($row = $bd->fetchArray()) {
            $comboElements[$row[0]] = $row[1];
        }
        return $comboElements;
    }

    private function getPACComboElement($sql) {
        $bd = ConnectionPAC::getInstance();
        $bd->execute($sql);
        $elementName = "No encontrado";
        while ($row = $bd->fetchArray()) {
            $elementName = $row[0];
        }
        return $elementName;
    }
    public function getPACAccountCountableAll() {
        $sql = "SELECT ctamaecon,nomcta FROM maecon order by nomcta;";

        return $this->getPACComboData($sql);
    }

}
