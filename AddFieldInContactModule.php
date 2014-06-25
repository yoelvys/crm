<?php
$Vtiger_Utils_Log = true;
include_once('vtlib/Vtiger/Menu.php');
include_once('vtlib/Vtiger/Module.php');

$module = Vtiger_Module::getInstance('Accounts');
$block = Vtiger_Block::getInstance('LBL_ACCOUNT_INFORMATION',$module);

$blockPersonType = new Vtiger_Block();
$blockPersonType->label = 'LBL_PERSON_TYPE';
$module->addBlock($blockPersonType);

$field = new Vtiger_Field();
$field->label = 'Tipo Persona';
$field->name = 'pac_tipo_persona';
$field->table = 'vtiger_account';
$field->column = 'pac_tipo_persona';
$field->columntype = 'VARCHAR(20)';
$field->uitype = 1000;
$field->presence = 0;
$field->typeofdata = 'V~O';
$blockPersonType->addField($field);

$field2 = new Vtiger_Field();
$field2->label = 'Cedula/RUC';
$field2->name = 'pac_cedula';
$field2->table = 'vtiger_account';
$field2->column = 'pac_cedula';
$field2->columntype = 'VARCHAR(15)';
$field2->uitype = 1002;
$field2->presence = 0;
$field2->typeofdata = 'V~M';
$block->addField($field2);

$field3 = new Vtiger_Field();
$field3->label = 'Código';
$field3->name = 'pac_codigo';
$field3->table = 'vtiger_account';
$field3->column = 'pac_codido';
$field3->columntype = 'VARCHAR(20)';
$field3->uitype = 1003;
$field3->presence = 0;
$field3->typeofdata = 'V~M';
$block->addField($field3);

$field4 = new Vtiger_Field();
$field4->label = 'Categoría';
$field4->name = 'pac_categoria';
$field4->table = 'vtiger_account';
$field4->column = 'pac_categoria';
$field4->columntype = 'VARCHAR(20)';
$field4->uitype = 1004;
$field4->presence = 0;
$field4->typeofdata = 'V~M';
$block->addField($field4);

$field5 = new Vtiger_Field();
$field5->label = 'Tipo de Cliente';
$field5->name = 'pac_tipo_cliente';
$field5->table = 'vtiger_account';
$field5->column = 'pac_tipo_cliente';
$field5->columntype = 'VARCHAR(20)';
$field5->uitype = 1005;
$field5->presence = 0;
$field5->typeofdata = 'V~M';
$block->addField($field5);

$field65 = new Vtiger_Field();
$field65->label = 'Nombre Comercial';
$field65->name = 'pac_nombre_comercial';
$field65->table = 'vtiger_account';
$field65->column = 'pac_nombre_comercial';
$field65->columntype = 'VARCHAR(50)';
$field65->uitype = 1;
$field65->presence = 2;
$field65->typeofdata = 'V~O';
$block->addField($field65);

$field7 = new Vtiger_Field();
$field7->label = 'Sexo';
$field7->name = 'pac_sexo';
$field7->table = 'vtiger_account';
$field7->column = 'pac_sexo';
$field7->columntype = 'CHAR(1)';
$field7->uitype = 16;
$field7->presence = 2;
$field7->typeofdata = 'V~O';
$block->addField($field7);
$field7->setPicklistValues( Array ('F', 'M') );

$field8 = new Vtiger_Field();
$field8->label = 'Estado Civil';
$field8->name = 'pac_estado_civil';
$field8->table = 'vtiger_account';
$field8->column = 'pac_estado_civil';
$field8->columntype = 'VARCHAR(30)';
$field8->uitype = 1008;
$field8->presence = 2;
$field8->typeofdata = 'V~O';
$block->addField($field8);

$field12 = new Vtiger_Field();
$field12->label = 'Fecha de Ingreso';
$field12->name = 'pac_fecha_ingreso';
$field12->table = 'vtiger_account';
$field12->column = 'pac_fecha_ingreso';
$field12->columntype = 'DATE';
$field12->uitype = 5;
$field12->presence = 2;
$field12->typeofdata = 'D~O';
$block->addField($field12);

$field21 = new Vtiger_Field();
$field21->label = 'Localidad';
$field21->name = 'pac_localidad';
$field21->table = 'vtiger_account';
$field21->column = 'pac_localidad';
$field21->columntype = 'VARCHAR(5)';
$field21->uitype = 1021;
$field21->presence = 0;
$field21->typeofdata = 'V~M';
$block->addField($field21);

$field22 = new Vtiger_Field();
$field22->label = 'Pagador/Contador';
$field22->name = 'pac_pagador_contador';
$field22->table = 'vtiger_account';
$field22->column = 'pac_pagador_contador';
$field22->columntype = 'VARCHAR(255)';
$field22->uitype = 1;
$field22->presence = 2;
$field22->typeofdata = 'V~O';
$block->addField($field22);



///****************bloque RELACION / RESPONSABILIDAD
$blockRelationship = new Vtiger_Block();
$blockRelationship->label = 'LBL_RELATIONSHIP';
$module->addBlock($blockRelationship);

$field23 = new Vtiger_Field();
$field23->label = 'Oficina Encargada';
$field23->name = 'pac_oficina_encargada';
$field23->table = 'vtiger_account';
$field23->column = 'pac_oficina_encargada';
$field23->columntype = 'VARCHAR(4)';
$field23->uitype = 1023;
$field23->presence = 0;
$field23->typeofdata = 'V~M';
$blockRelationship->addField($field23);

$field24 = new Vtiger_Field();
$field24->label = 'Vendedor';
$field24->name = 'pac_vendedor';
$field24->table = 'vtiger_account';
$field24->column = 'pac_vendedor';
$field24->columntype = 'VARCHAR(4)';
$field24->uitype = 1024;
$field24->presence = 0;
$field24->typeofdata = 'V~M';
$blockRelationship->addField($field24);

$field25 = new Vtiger_Field();
$field25->label = 'Cobrador';
$field25->name = 'pac_cobrador';
$field25->table = 'vtiger_account';
$field25->column = 'pac_cobrador';
$field25->columntype = 'VARCHAR(4)';
$field25->uitype = 1025;
$field25->presence = 0;
$field25->typeofdata = 'V~M';
$blockRelationship->addField($field25);

$field26 = new Vtiger_Field();
$field26->label = 'Coordinador';
$field26->name = 'pac_coordinador';
$field26->table = 'vtiger_account';
$field26->column = 'pac_coordinador';
$field26->columntype = 'VARCHAR(4)';
$field26->uitype = 1026;
$field26->presence = 2;
$field26->typeofdata = 'V~O';
$blockRelationship->addField($field26);


/*--- CONDICIONES ESTABLECIDAS ------*/

$blockConditions = new Vtiger_Block();
$blockConditions->label = 'LBL_CONDITIONS';
$module->addBlock($blockConditions);

$field27 = new Vtiger_Field();
$field27->label = 'Precios';
$field27->name = 'pac_precios';
$field27->table = 'vtiger_account';
$field27->column = 'pac_precios';
$field27->columntype = 'VARCHAR(4)';
$field27->uitype = 1027;
$field27->presence = 0;
$field27->typeofdata = 'V~M';
$blockConditions->addField($field27);

$field28 = new Vtiger_Field();
$field28->label = 'Condición de Pago';
$field28->name = 'pac_cond_pago';
$field28->table = 'vtiger_account';
$field28->column = 'pac_cond_pago';
$field28->columntype = 'VARCHAR(4)';
$field28->uitype = 1028;
$field28->presence = 0;
$field28->typeofdata = 'V~M';
$blockConditions->addField($field28);

$field29 = new Vtiger_Field();
$field29->label = 'Límite de Crédito';
$field29->name = 'pac_limite_credito';
$field29->table = 'vtiger_account';
$field29->column = 'pac_limite_credito';
$field29->columntype = 'DOUBLE(18,2)';
$field29->defaultvalue = 0;
$field29->uitype = 1;
$field29->presence = 2;
$field29->typeofdata = 'V~O';
$blockConditions->addField($field29);

$field30 = new Vtiger_Field();
$field30->label = 'Cuotas Vencidas';
$field30->name = 'pac_cuotas_vencidas';
$field30->table = 'vtiger_account';
$field30->column = 'pac_cuotas_vencidas';
$field30->columntype = 'INT(4)';
$field30->defaultvalue = 0;
$field30->uitype = 1;
$field30->presence = 2;
$field30->typeofdata = 'V~O';
$blockConditions->addField($field30);

$field31 = new Vtiger_Field();
$field31->label = 'Días Vencidos';
$field31->name = 'pac_dias_vencidos';
$field31->table = 'vtiger_account';
$field31->column = 'pac_dias_vencidos';
$field31->columntype = 'INT(4)';
$field31->defaultvalue = 0;
$field31->uitype = 1;
$field31->presence = 2;
$field31->typeofdata = 'V~O';
$blockConditions->addField($field31);

$field32 = new Vtiger_Field();
$field32->label = 'Límite Cantidad';
$field32->name = 'pac_limite_cantidad';
$field32->table = 'vtiger_account';
$field32->column = 'pac_limite_cantidad';
$field32->columntype = 'INT(4)';
$field32->defaultvalue = 0;
$field32->uitype = 1;
$field32->presence = 2;
$field32->typeofdata = 'V~O';
$blockConditions->addField($field32);

$field33 = new Vtiger_Field();
$field33->label = 'Descuento';
$field33->name = 'pac_descuento';
$field33->table = 'vtiger_account';
$field33->column = 'pac_descuento';
$field33->columntype = 'DOUBLE(6,2)';
$field33->defaultvalue = 0;
$field33->uitype = 1;
$field33->presence = 2;
$field33->typeofdata = 'V~O';
$blockConditions->addField($field33);

$field34 = new Vtiger_Field();
$field34->label = 'Promociones';
$field34->name = 'pac_promociones';
$field34->table = 'vtiger_account';
$field34->column = 'pac_promociones';
$field34->columntype = 'VARCHAR(20)';
$field34->uitype = 1034;
$field34->presence = 2;
$field34->typeofdata = 'V~O';
$blockConditions->addField($field34);

$field35 = new Vtiger_Field();
$field35->label = 'Cheques Protestados';
$field35->name = 'pac_cheques_protestados';
$field35->table = 'vtiger_account';
$field35->column = 'pac_cheques_protestados';
$field35->columntype = 'INT(4)';
$field35->defaultvalue = 0;
$field35->uitype = 1;
$field35->presence = 2;
$field35->typeofdata = 'V~O';
$blockConditions->addField($field35);

$field36 = new Vtiger_Field();
$field36->label = 'Observaciones';
$field36->name = 'pac_observaciones';
$field36->table = 'vtiger_account';
$field36->column = 'pac_observaciones';
$field36->columntype = 'TEXT';
$field36->uitype = 21;
$field36->presence = 2;
$field36->typeofdata = 'V~O';
$blockConditions->addField($field36);

$field37 = new Vtiger_Field();
$field37->label = 'Permitir Acceso';
$field37->name = 'pac_permitir_acceso';
$field37->table = 'vtiger_account';
$field37->column = 'pac_permitir_acceso';
$field37->columntype = 'VARCHAR(3)';
$field37->uitype = 56;
$field37->presence = 0;
$field37->typeofdata = 'V~O';
$field37->defaultvalue = "yes";
$blockConditions->addField($field37);

$field38 = new Vtiger_Field();
$field38->label = 'Empresa';
$field38->name = 'pac_empresa';
$field38->table = 'vtiger_account';
$field38->column = 'pac_empresa';
$field38->columntype = 'INT(4)';
$field38->uitype = 1038;
$field38->presence = 2;
$field38->typeofdata = 'V~O';
$blockConditions->addField($field38);

$field39 = new Vtiger_Field();
$field39->label = 'Código provedor';
$field39->name = 'pac_cod_provedor';
$field39->table = 'vtiger_account';
$field39->column = 'pac_cod_provedor';
$field39->columntype = 'VARCHAR(15)';
$field39->uitype = 1;
$field39->presence = 2;
$field39->typeofdata = 'V~O';
$blockConditions->addField($field39);

$field40 = new Vtiger_Field();
$field40->label = 'Despacho parcial';
$field40->name = 'pac_despacho_parcial';
$field40->table = 'vtiger_account';
$field40->column = 'pac_despacho_parcial';
$field40->columntype = 'VARCHAR(3)';
$field40->uitype = 56;
$field40->presence = 0;
$field40->typeofdata = 'V~O';
$blockConditions->addField($field40);

$field41 = new Vtiger_Field();
$field41->label = 'Con IVA';
$field41->name = 'pac_con_iva';
$field41->table = 'vtiger_account';
$field41->column = 'pac_con_iva';
$field41->columntype = 'VARCHAR(3)';
$field41->uitype = 56;
$field41->presence = 0;
$field41->typeofdata = 'V~O';
$field41->defaultvalue = "yes";
$blockConditions->addField($field41);

$field42 = new Vtiger_Field();
$field42->label = 'Imprimir Código de barras';
$field42->name = 'pac_imprimir_barcod';
$field42->table = 'vtiger_account';
$field42->column = 'pac_imprimir_barcod';
$field42->columntype = 'VARCHAR(3)';
$field42->uitype = 56;
$field42->presence = 0;
$field42->typeofdata = 'V~O';
$blockConditions->addField($field42);


$field43 = new Vtiger_Field();
$field43->label = 'Cuenta contable';
$field43->name = 'pac_cuenta_contable';
$field43->table = 'vtiger_account';
$field43->column = 'pac_cuenta_contable';
$field43->columntype = 'VARCHAR(15)';
$field43->uitype = 1043;
$field43->presence = 0;
$field43->typeofdata = 'V~M';
$blockConditions->addField($field43);
 
/*--- FIN CONDICIONES ESTABLECIDAS ------*/

/*--- INFORMACION SOBRE EL NEGOCIO ------*/
$blockBusinessInformation = new Vtiger_Block();
$blockBusinessInformation->label = 'LBL_LEGAL_REPRESENTATIVE_INFORMATION';
$module->addBlock($blockBusinessInformation);

$field46 = new Vtiger_Field();
$field46->label = 'Nombre';
$field46->name = 'pac_representante';
$field46->table = 'vtiger_account';
$field46->column = 'pac_representante';
$field46->columntype = 'VARCHAR(255)';
$field46->uitype = 1;
$field46->presence = 2;
$field46->typeofdata = 'V~O';
$blockBusinessInformation->addField($field46);

$field47 = new Vtiger_Field();
$field47->label = 'RUC';
$field47->name = 'pac_ruc_representante';
$field47->table = 'vtiger_account';
$field47->column = 'pac_ruc_representante';
$field47->columntype = 'VARCHAR(15)';
$field47->uitype = 1047;
$field47->presence = 2;
$field47->typeofdata = 'V~O';
$blockBusinessInformation->addField($field47);

$field48 = new Vtiger_Field();
$field48->label = 'Tiempo de establecido el negocio';
$field48->name = 'pac_tiempo_negocio';
$field48->table = 'vtiger_account';
$field48->column = 'pac_tiempo_negocio';
$field48->columntype = 'VARCHAR(10)';
$field48->uitype = 1;
$field48->presence = 2;
$field48->typeofdata = 'V~O';
$blockBusinessInformation->addField($field48);

$field49 = new Vtiger_Field();
$field49->label = 'Dirección';
$field49->name = 'pac_direccion_representante';
$field49->table = 'vtiger_account';
$field49->column = 'pac_direccion_representante';
$field49->columntype = 'VARCHAR(255)';
$field49->uitype = 1;
$field49->presence = 2;
$field49->typeofdata = 'V~O';
$blockBusinessInformation->addField($field49);

$field50 = new Vtiger_Field();
$field50->label = 'Teléfono';
$field50->name = 'pac_telefono_representante';
$field50->table = 'vtiger_account';
$field50->column = 'pac_telefono_representante';
$field50->columntype = 'VARCHAR(11)';
$field50->uitype = 1;
$field50->presence = 2;
$field50->typeofdata = 'V~O';
$blockBusinessInformation->addField($field50);

/*--- FIN INFORMACION SOBRE EL NEGOCIO ------*/

/*--- DATOS PARA SOLICITUD DE CREDITO  ------*/
$blockCreditData = new Vtiger_Block();
$blockCreditData->label = 'LBL_CREDIT_DATA';
$module->addBlock($blockCreditData);

$field51 = new Vtiger_Field();
$field51->label = 'Referencias bancarias';
$field51->name = 'pac_referencias_bancarias';
$field51->table = 'vtiger_account';
$field51->column = 'pac_referencias_bancarias';
$field51->columntype = 'TEXT';
$field51->uitype =21;
$field51->presence = 2;
$field51->typeofdata = 'V~O';
$blockCreditData->addField($field51);

$field52 = new Vtiger_Field();
$field52->label = 'Referencias comerciales';
$field52->name = 'pac_referencias_comerciales';
$field52->table = 'vtiger_account';
$field52->column = 'pac_referencias_comerciales';
$field52->columntype = 'TEXT';
$field52->uitype = 21;
$field52->presence = 2;
$field52->typeofdata = 'V~O';
$blockCreditData->addField($field52);

$field53 = new Vtiger_Field();
$field53->label = 'Tarjetas de crédito';
$field53->name = 'pac_tarjetas_credito';
$field53->table = 'vtiger_account';
$field53->column = 'pac_tarjetas_credito';
$field53->columntype = 'TEXT';
$field53->uitype = 21;
$field53->presence = 2;
$field53->typeofdata = 'V~O';
$blockCreditData->addField($field53);

/*--- FIN DATOS PARA SOLICITUD DE CREDITO  ------*/


/*--- DATOS SOPORTE TECNICO  ------*/
$blockTechnicalSupportData = new Vtiger_Block();
$blockTechnicalSupportData->label = 'LBL_TECHNICAL_SUPPORT_DATA';
$module->addBlock($blockTechnicalSupportData);

$field59 = new Vtiger_Field();
$field59->label = 'Estado de Soporte';
$field59->name = 'pac_estado_soporte';
$field59->table = 'vtiger_account';
$field59->column = 'pac_estado_soporte';
$field59->columntype = 'VARCHAR(4)';
$field59->uitype = 1059;
$field59->presence = 2;
$field59->typeofdata = 'V~O';
$blockTechnicalSupportData->addField($field59);

$field60 = new Vtiger_Field();
$field60->label = 'Número de Ticket';
$field60->name = 'pac_numero_ticket';
$field60->table = 'vtiger_account';
$field60->column = 'pac_numero_ticket';
$field60->columntype = 'VARCHAR(10)';
$field60->uitype = 1;
$field60->presence = 2;
$field60->typeofdata = 'V~O';
$blockTechnicalSupportData->addField($field60);
/*--- FIN DATOS SOPORTE TECNICO  ------*/