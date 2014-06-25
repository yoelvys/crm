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
        $name = $request->get('accountname');
        $cedulaRuc = $request->get('pac_cedula');
        $code = $request->get('pac_codigo');
        $category = $request->get('pac_categoria');
        $clientType = $request->get('pac_tipo_cliente');
        $birthday = $request->get('birthday');
        if ($birthday != '') {
            $birthdayAux = DateTime::createFromFormat('m-d-Y', $birthday);
            $birthday = $birthdayAux->format('Y-m-d');
        }
        $sex = ($request->get('pac_sexo') == 'M' ? 1 : ($request->get('pac_sexo') == 'F' ? 0 : 'null') );
        $civilStatus = $request->get('pac_estado_civil');
        $address = $request->get('billstreet');
        $addressGestion = $request->get('shipstreet');
        $dateAdmission = $request->get('pac_fecha_ingreso');
        if ($dateAdmission != '') {
            $dateAdmissionAux = DateTime::createFromFormat('m-d-Y', $dateAdmission);
            $dateAdmission = $dateAdmissionAux->format('Y-m-d');
        }

        $officePhone = $request->get('phone');
        $homePhone = $request->get('otherphone');
        $email = $request->get('email1');
        $alternativeEmail = $request->get('email2');
        $webSite = $request->get('website');

        $location = $request->get('pac_localidad');
        $counter = $request->get('pac_pagador_contador');

        $responsibleOffice = $request->get('pac_oficina_encargada');
        $vendor = $request->get('pac_vendedor');
        $billCollector = $request->get('pac_cobrador');
        $coordinator = $request->get('pac_coordinador');

        $price = $request->get('pac_precios');
        $paymentCondition = $request->get('pac_cond_pago');
        $creditLimit = $request->get('pac_limite_credito') == '' ? 0 : $request->get('pac_limite_credito');
        $expiredQuota = $request->get('pac_cuotas_vencida') == '' ? 0 : $request->get('pac_cuotas_vencida');
        $expiredDay = $request->get('pac_dias_vencidos') == '' ? 0 : $request->get('pac_dias_vencidos');
        $limitedAmount = $request->get('pac_limite_cantidad') == '' ? 0 : $request->get('pac_limite_cantidad');
        $discount = $request->get('pac_descuento') == '' ? 0 : $request->get('pac_descuento');
        $promotions = $request->get('pac_promociones');
        $protestedChecks = $request->get('pac_cheques_protestados') == '' ? 0 : $request->get('pac_cheques_protestados');
        $observations = $request->get('pac_observaciones');
        $allowAccess = $request->get('pac_permitir_acceso') == 'on' ? 'S' : 'N';
        $company = $request->get('pac_empresa') == '' ? 0 : $request->get('pac_empresa');
        $supplierCode = $request->get('pac_cod_provedor');
        $partialClearance = $request->get('pac_despacho_parcial') == 'on' ? 'S' : 'N';
        $withIVA = $request->get('pac_con_iva') == 'on' ? 'S' : 'N';
        $printBarcode = $request->get('pac_imprimir_barcod') == 'on' ? 'S' : 'N';
        $accountCountable = $request->get('pac_cuenta_contable');
        $companyName = $request->get('pac_tipo_persona') == "Natural" ? " " : $request->get('accountname');
       

        $legalRepresentative = $request->get('pac_representante');
        $rucRepresentative = $request->get('pac_ruc_representante');
        $businessTime = $request->get('pac_tiempo_negocio');
        $addressRepresentative = $request->get('pac_direccion_representante');
        $phoneRepresentative = $request->get('pac_telefono_representante');

        $bankReferences = $request->get('pac_referencias_bancarias');
        $tradeReferences = $request->get('pac_referencias_comerciales');
        $creditCards = $request->get('pac_tarjetas_credito');
        

        $holderStatus = $request->get('pac_estado_soporte');
        $ticketNumber = $request->get('pac_numero_ticket');

        $recordId = $request->get('record');

        if (empty($recordId)) {
            $sql = "INSERT INTO maecte (codcte01,nomcte01,dircte01,telcte01,cascte01,emailcte01,emailaltcte01,website,loccte01,pagleg01,ofienccte01,"
                    . "vendcte01,cobrcte01,cordcte01,precte01,condpag01,limcred01,cuotasven01,diasven01,limcant01,desctocte01,promocte01,cheqpro01,"
                    . "obsercte01,acceder,idemp01,codprov01,desppar01,coniva01,cv2cte01,ctacgcte01,razcte01,repleg01,ruc01,timenegocio01,dircliente01,"
                    . "telcte01c,refbanc01,refcom01,tarjcred01,estsop01,notick01,tipcte01,fechanace01,"
                    . "sexo01,estadocivil01,dirgestion01,fecing01,telcte01b,catcte01) "
                    . "VALUES ('" . $code . "',"
                    . "'" . $name . "','" . $address . "','" . $homePhone . "','" . $cedulaRuc . "','" . $email . "','" . $alternativeEmail . "',"
                    . "'" . $webSite . "',"
                    . "'" . $location . "',"
                    . "'" . $counter . "',"
                    . "'" . $responsibleOffice . "',"
                    . "'" . $vendor . "',"
                    . "'" . $billCollector . "',"
                    . "'" . $coordinator . "',"
                    . $price . ","
                    . "'" . $paymentCondition . "',"
                    . $creditLimit . ","
                    . $expiredQuota . ","
                    . $expiredDay . ","
                    . $limitedAmount . ","
                    . $discount . ","
                    . "'" . $promotions . "',"
                    . $protestedChecks . ","
                    . "'" . $observations . "',"
                    . "'" . $allowAccess . "',"
                    . $company . ","
                    . "'" . $supplierCode . "',"
                    . "'" . $partialClearance . "',"
                    . "'" . $withIVA . "',"
                    . "'" . $printBarcode . "',"
                    . "'" . $accountCountable . "',"
                    . "'" . $companyName . "',"
                    . "'" . $legalRepresentative . "',"
                    . "'" . $rucRepresentative . "',"
                    . "'" . $businessTime . "',"
                    . "'" . $addressRepresentative . "',"
                    . "'" . $phoneRepresentative . "',"
                    . "'" . $bankReferences . "',"
                    . "'" . $tradeReferences . "',"
                    . "'" . $creditCards . "',"
                    . "'" . $holderStatus . "',"
                    . "'" . $ticketNumber . "',"
                    . "'" . $clientType . "',"
                    . "'" . $birthday . "',"
                    . $sex . ","
                    . "'" . $civilStatus . "',"
                    . "'" . $addressGestion . "',"
                    . "'" . $dateAdmission . "',"
                    . "'" . $officePhone . "',"
                    . "'" . $category . "') ;";
        } else {
            $sql = "UPDATE maecte SET nomcte01 = '" . $name . "', "
                    . "dircte01 = '" . $address . "', "
                    . "telcte01 =  '" . $homePhone . "', "
                    . "cascte01 = '" . $cedulaRuc . "', "
                    . "emailcte01 = '" . $email . "', "
                    . "emailaltcte01 = '" . $alternativeEmail . "', "
                    . "website = '" . $webSite . "', "
                    . "loccte01 = '" . $location . "', "
                    . "pagleg01 = '" . $counter . "', "
                    . "ofienccte01 = '" . $responsibleOffice . "', "
                    . "vendcte01 = '" . $vendor . "', "
                    . "cobrcte01 = '" . $billCollector . "', "
                    . "cordcte01 = '" . $coordinator . "', "
                    . "precte01 = " . $price . ", "
                    . "condpag01 = '" . $paymentCondition . "', "
                    . "limcred01 = " . $creditLimit . ", "
                    . "cuotasven01 = " . $expiredQuota . ", "
                    . "diasven01 = " . $expiredDay . ", "
                    . "limcant01 = " . $limitedAmount . ", "
                    . "desctocte01 = " . $discount . ", "
                    . "promocte01 = '" . $promotions . "', "
                    . "cheqpro01 = " . $protestedChecks . ", "
                    . "obsercte01 = '" . $observations . "', "
                    . "acceder = '" . $allowAccess . "', "
                    . "idemp01 = " . $company . ", "
                    . "codprov01 = '" . $supplierCode . "', "
                    . "desppar01 = '" . $partialClearance . "', "
                    . "coniva01 = '" . $withIVA . "', "
                    . "cv2cte01 = '" . $printBarcode . "', "
                    . "ctacgcte01 = '" . $accountCountable . "', "
                    . "razcte01 = '" . $companyName . "', "
                    . "repleg01 = '" . $legalRepresentative . "', "
                    . "ruc01 = '" . $rucRepresentative . "', "
                    . "timenegocio01 = '" . $businessTime . "', "
                    . "dircliente01 = '" . $addressRepresentative . "', "
                    . "telcte01c = '" . $phoneRepresentative . "', "
                    . "refbanc01 = '" . $bankReferences . "', "
                    . "refcom01 = '" . $tradeReferences . "', "
                    . "tarjcred01 = '" . $creditCards . "', "
                    . "estsop01 = '" . $holderStatus . "', "
                    . "notick01 = '" . $ticketNumber . "', "
                    . "tipcte01 = '" . $clientType . "', "
                    . "fechanace01 = '" . $birthday . "', "
                    . "sexo01 = " . $sex . ", "
                    . "estadocivil01 = '" . $civilStatus . "', "
                    . "dirgestion01 = '" . $addressGestion . "', "
                    . "fecing01 = '" . $dateAdmission . "', "
                    . "telcte01b = '" . $officePhone . "', "
                    . "catcte01 = '" . $category . "' "
                    . "WHERE codcte01 = '" . $code . "';";
        }
       // var_dump($sql); die();
        $bd->execute($sql);
    }

    public function updateAjax($clientJSONData) {
        $bd = ConnectionPAC::getInstance();
        $name = $clientJSONData['accountname']['value'];
        $cedulaRuc = $clientJSONData['pac_cedula']['value'];
        $code = $category = $clientJSONData['pac_codigo']['value'];
        $category = $clientJSONData['pac_categoria']['value'];
        $clientType = $clientJSONData['pac_tipo_cliente']['value'];
        $birthday = $clientJSONData['birthday']['value'];
        if ($birthday != '') {
            $birthdayAux = DateTime::createFromFormat('m-d-Y', $birthday);
            $birthday = $birthdayAux->format('Y-m-d');
        }
        $sex = ($clientJSONData['pac_sexo']['value'] == 'M' ? 1 : ($clientJSONData['pac_sexo']['value'] == 'F' ? 0 : 'null') );
        $civilStatus = $clientJSONData['pac_estado_civil']['value'];
        $address = $clientJSONData['billstreet']['value'];
        $addressGestion = $clientJSONData['shipstreet']['value'];

        $dateAdmission = $clientJSONData['pac_fecha_ingreso']['value'];
        if ($dateAdmission != '') {
            $dateAdmissionAux = DateTime::createFromFormat('m-d-Y', $dateAdmission);
            $dateAdmission = $dateAdmissionAux->format('Y-m-d');
        }
        
        $officePhone = $clientJSONData['phone']['value'];
        $homePhone = $clientJSONData['otherphone']['value'];
        $email = $clientJSONData['email1']['value'];
        $alternativeEmail = $clientJSONData['email2']['value'];
        $webSite = $clientJSONData['website']['value'];

        $location = $clientJSONData['pac_localidad']['value'];
        $counter = $clientJSONData['pac_pagador_contador']['value'];

        $responsibleOffice = $clientJSONData['pac_oficina_encargada']['value'];
        $vendor = $clientJSONData['pac_vendedor']['value'];
        $billCollector = $clientJSONData['pac_cobrador']['value'];
        $coordinator = $clientJSONData['pac_coordinador']['value'];

        $price = $clientJSONData['pac_precios']['value'];
        $paymentCondition = $clientJSONData['pac_cond_pago']['value'];
        $creditLimit = $clientJSONData['pac_limite_credito']['value'] == '' ? 0 : $clientJSONData['pac_limite_credito']['value'];
        $expiredQuota = $clientJSONData['pac_cuotas_vencida']['value'] == '' ? 0 : $clientJSONData['pac_cuotas_vencida']['value'];
        $expiredDay = $clientJSONData['pac_dias_vencidos']['value'] == '' ? 0 : $clientJSONData['pac_dias_vencidos']['value'];
        $limitedAmount = $clientJSONData['pac_limite_cantidad']['value'] == '' ? 0 : $clientJSONData['pac_limite_cantidad']['value'];
        $discount = $clientJSONData['pac_descuento']['value'] == '' ? 0 : $clientJSONData['pac_descuento']['value'];
        $promotions = $clientJSONData['pac_promociones']['value'];
        $protestedChecks = $clientJSONData['pac_cheques_protestados']['value'] == '' ? 0 : $clientJSONData['pac_cheques_protestados']['value'];
        $observations = $clientJSONData['pac_observaciones']['value'];
        $allowAccess = $clientJSONData['pac_permitir_acceso']['value'] == 'on' ? 'S' : 'N';
        $company = $clientJSONData['pac_empresa']['value'] == '' ? 0 : $clientJSONData['pac_empresa']['value'];
        $supplierCode = $clientJSONData['pac_cod_provedor']['value'];
        $partialClearance = $clientJSONData['pac_despacho_parcial']['value'] == 'on' ? 'S' : 'N';
        $withIVA = $clientJSONData['pac_con_iva']['value'] == 'on' ? 'S' : 'N';
        $printBarcode = $clientJSONData['pac_imprimir_barcod']['value'] == 'on' ? 'S' : 'N';
        $accountCountable = $clientJSONData['pac_cuenta_contable']['value'];
        $companyName = $clientJSONData['pac_tipo_persona']['value'] == "Natural" ? "" : $clientJSONData['accountname']['value'];
        

        $legalRepresentative = $clientJSONData['pac_representante']['value'];
        $rucRepresentative = $clientJSONData['pac_ruc_representante']['value'];
        $businessTime = $clientJSONData['pac_tiempo_negocio']['value'];
        $addressRepresentative = $clientJSONData['pac_direccion_representante']['value'];
        $phoneRepresentative = $clientJSONData['pac_telefono_representante']['value'];

        $bankReferences = $clientJSONData['pac_referencias_bancarias']['value'];
        $tradeReferences = $clientJSONData['pac_referencias_comerciales']['value'];
        $creditCards = $clientJSONData['pac_tarjetas_credito']['value'];

        
        

        $holderStatus = $clientJSONData['pac_estado_soporte']['value'];
        $ticketNumber = $clientJSONData['pac_numero_ticket']['value'];

        $sql = "UPDATE maecte SET nomcte01 = '" . $name . "', "
                . "dircte01 = '" . $address . "', "
                . "telcte01 =  '" . $homePhone . "', "
                . "cascte01 = '" . $cedulaRuc . "', "
                . "emailcte01 = '" . $email . "', "
                . "emailaltcte01 = '" . $alternativeEmail . "', "
                . "website = '" . $webSite . "', "
                . "loccte01 = '" . $location . "', "
                . "pagleg01 = '" . $counter . "', "
                . "ofienccte01 = '" . $responsibleOffice . "', "
                . "vendcte01 = '" . $vendor . "', "
                . "cobrcte01 = '" . $billCollector . "', "
                . "cordcte01 = '" . $coordinator . "', "
                . "precte01 = " . $price . ", "
                . "condpag01 = '" . $paymentCondition . "', "
                . "limcred01 = " . $creditLimit . ", "
                . "cuotasven01 = " . $expiredQuota . ", "
                . "diasven01 = " . $expiredDay . ", "
                . "limcant01 = " . $limitedAmount . ", "
                . "desctocte01 = " . $discount . ", "
                . "promocte01 = '" . $promotions . "', "
                . "cheqpro01 = " . $protestedChecks . ", "
                . "obsercte01 = '" . $observations . "', "
                . "acceder = '" . $allowAccess . "', "
                . "idemp01 = " . $company . ", "
                . "codprov01 = '" . $supplierCode . "', "
                . "desppar01 = '" . $partialClearance . "', "
                . "coniva01 = '" . $withIVA . "', "
                . "cv2cte01 = '" . $printBarcode . "', "
                . "ctacgcte01 = '" . $accountCountable . "', "
                . "razcte01 = '" . $companyName . "', "
                . "repleg01 = '" . $legalRepresentative . "', "
                . "ruc01 = '" . $rucRepresentative . "', "
                . "timenegocio01 = '" . $businessTime . "', "
                . "dircliente01 = '" . $addressRepresentative . "', "
                . "telcte01c = '" . $phoneRepresentative . "', "
                . "refbanc01 = '" . $bankReferences . "', "
                . "refcom01 = '" . $tradeReferences . "', "
                . "tarjcred01 = '" . $creditCards . "', "
                . "estsop01 = '" . $holderStatus . "', "
                . "notick01 = '" . $ticketNumber . "', "
                . "tipcte01 = '" . $clientType . "', "
                . "fechanace01 = '" . $birthday . "', "
                . "sexo01 = " . $sex . ", "
                . "estadocivil01 = '" . $civilStatus . "', "
                . "dirgestion01 = '" . $addressGestion . "', "
                . "fecing01 = '" . $dateAdmission . "', "
                . "telcte01b = '" . $officePhone . "', "
                . "catcte01 = '" . $category . "' "
                . "WHERE codcte01 = '" . $code . "';";

        $bd->execute($sql);
    }

    public function getPACComboElements($tableNumber) {
        $sql = "SELECT codtab,nomtab FROM `maetab` WHERE numtab='" . $tableNumber . "' and codtab<>'' order by nomtab ASC;";

        return $this->getPACComboData($sql);
    }

    public function getPACComboElementName($code, $tableNumber) {
        $sql = "SELECT nomtab FROM `maetab` WHERE numtab='" . $tableNumber . "' and codtab<>'' and codtab='" . $code . "';";

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
        $sql = "SELECT cta1cate  FROM `categorias` WHERE `tipocate` = '03' AND codcatep IN (0, 1) AND codcatep NOT IN ('') AND codcate = '" . $code . "';";
        $accountCode = $this->getPACComboElement($sql);
        $sqlAccount = "SELECT nomcta FROM `maecon` WHERE `ctamaecon` = '". $accountCode ."' ;";
        $nameAccount = $this->getPACComboElement($sqlAccount);
        if ($nameAccount == 'No encontrado') {
            return $resultArray = array('0'=>'', '1'=>'');
        }
        return $resultArray = array('0'=>$accountCode, '1'=>$nameAccount);
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
        $elementName = "";
        while ($row = $bd->fetchArray()) {
            $elementName = $row[0];
        }
        return $elementName;
    }

    public function getPACAccountCountableAll() {
        $sql = "SELECT ctamaecon,nomcta FROM maecon order by nomcta;";

        return $this->getPACComboData($sql);
    }
    public function getAccountCountableName($code){
        $sql = "SELECT nomcta FROM `maecon` WHERE `ctamaecon` = '". $code ."';"; 
        
        return $this->getPACComboElement($sql);
    }

}
