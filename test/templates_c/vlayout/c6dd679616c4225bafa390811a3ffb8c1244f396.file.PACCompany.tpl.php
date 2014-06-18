<?php /* Smarty version Smarty-3.1.7, created on 2014-06-12 14:24:24
         compiled from "/var/www/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/uitypes/PACCompany.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4176400115399b8181c4cc3-75271500%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6dd679616c4225bafa390811a3ffb8c1244f396' => 
    array (
      0 => '/var/www/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/uitypes/PACCompany.tpl',
      1 => 1402582979,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4176400115399b8181c4cc3-75271500',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'FIELD_NAME' => 0,
    'FIELD_INFO' => 0,
    'SPECIAL_VALIDATOR' => 0,
    'COMPANIES' => 0,
    'COMPANY_ID' => 0,
    'FIELD_VALUE' => 0,
    'COMPANY_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5399b81831b1b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5399b81831b1b')) {function content_5399b81831b1b($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars["FIELD_INFO"] = new Smarty_variable(Vtiger_Util_Helper::toSafeHTML(Zend_Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo())), null, 0);?><?php $_smarty_tpl->tpl_vars["SPECIAL_VALIDATOR"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator(), null, 0);?><?php $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name'), null, 0);?><?php $_smarty_tpl->tpl_vars['FIELD_VALUE'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'), null, 0);?><?php $_smarty_tpl->tpl_vars['COMPANIES'] = new Smarty_variable(Vtiger_PACCompany_UIType::getPACCompanies(), null, 0);?><select class="chzn-select <?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory()==true){?> required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" data-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' <?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)){?>data-validator=<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);?>
<?php }?>><option value=""><?php echo vtranslate('LBL_SELECT_OPTION','Vtiger');?>
</option><?php  $_smarty_tpl->tpl_vars['COMPANY_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['COMPANY_NAME']->_loop = false;
 $_smarty_tpl->tpl_vars['COMPANY_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['COMPANIES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['COMPANY_NAME']->key => $_smarty_tpl->tpl_vars['COMPANY_NAME']->value){
$_smarty_tpl->tpl_vars['COMPANY_NAME']->_loop = true;
 $_smarty_tpl->tpl_vars['COMPANY_ID']->value = $_smarty_tpl->tpl_vars['COMPANY_NAME']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['COMPANY_ID']->value;?>
"  <?php if ($_smarty_tpl->tpl_vars['FIELD_VALUE']->value==$_smarty_tpl->tpl_vars['COMPANY_ID']->value){?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['COMPANY_NAME']->value;?>
</option><?php } ?></select><?php }} ?>