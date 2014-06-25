<?php
$Vtiger_Utils_Log = true;
include_once('vtlib/Vtiger/Menu.php');
include_once('vtlib/Vtiger/Module.php');

$module = Vtiger_Module::getInstance('Accounts');
$block = Vtiger_Block::getInstance('LBL_ACCOUNT_INFORMATION',$module);

$blockPersonType = new Vtiger_Block();
$blockPersonType->label = 'LBL_PERSON_TYPE';
$module->addBlock($blockPersonType);



/*--- DATOS SOPORTE TECNICO  ------*/
$blockTechnicalSupportData = new Vtiger_Block();
$blockTechnicalSupportData->label = 'LBL_TECHNICAL_SUPPORT_DATA';
$module->addBlock($blockTechnicalSupportData);

$field59 = new Vtiger_Field();
$field59->label = 'Estado de Soporte';
$field59->name = 'pac_estado_soporte';
$field59->table = 'vtiger_contactdetails';
$field59->column = 'pac_estado_soporte';
$field59->columntype = 'VARCHAR(4)';
$field59->uitype = 1059;
$field59->presence = 2;
$field59->typeofdata = 'V~O';
$blockTechnicalSupportData->addField($field59);

$field60 = new Vtiger_Field();
$field60->label = 'Número de Ticket';
$field60->name = 'pac_numero_ticket';
$field60->table = 'vtiger_contactdetails';
$field60->column = 'pac_numero_ticket';
$field60->columntype = 'VARCHAR(10)';
$field60->uitype = 1;
$field60->presence = 2;
$field60->typeofdata = 'V~O';
$blockTechnicalSupportData->addField($field60);
/*--- FIN DATOS SOPORTE TECNICO  ------*/