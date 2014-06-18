<?php /* Smarty version Smarty-3.1.7, created on 2014-06-11 16:36:24
         compiled from "/var/www/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/uitypes/PACClientType.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118695326053988588dc6435-78581254%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e093f530f25f9d666634bc1e50429645ff8c295b' => 
    array (
      0 => '/var/www/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/uitypes/PACClientType.tpl',
      1 => 1402504581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118695326053988588dc6435-78581254',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'FIELD_NAME' => 0,
    'FIELD_INFO' => 0,
    'SPECIAL_VALIDATOR' => 0,
    'CLIENTTYPE' => 0,
    'CLIENTTYPE_ID' => 0,
    'FIELD_VALUE' => 0,
    'CLIENTTYPE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_53988588f235f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53988588f235f')) {function content_53988588f235f($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars["FIELD_INFO"] = new Smarty_variable(Vtiger_Util_Helper::toSafeHTML(Zend_Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo())), null, 0);?><?php $_smarty_tpl->tpl_vars["SPECIAL_VALIDATOR"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator(), null, 0);?><?php $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name'), null, 0);?><?php $_smarty_tpl->tpl_vars['FIELD_VALUE'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'), null, 0);?><?php $_smarty_tpl->tpl_vars['CLIENTTYPE'] = new Smarty_variable(Vtiger_PACClientType_UIType::getPACClientType(), null, 0);?><select class="chzn-select <?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory()==true){?> required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" data-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' <?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)){?>data-validator=<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);?>
<?php }?>><option value=""><?php echo vtranslate('LBL_SELECT_OPTION','Vtiger');?>
</option><?php  $_smarty_tpl->tpl_vars['CLIENTTYPE_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['CLIENTTYPE_NAME']->_loop = false;
 $_smarty_tpl->tpl_vars['CLIENTTYPE_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CLIENTTYPE']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['CLIENTTYPE_NAME']->key => $_smarty_tpl->tpl_vars['CLIENTTYPE_NAME']->value){
$_smarty_tpl->tpl_vars['CLIENTTYPE_NAME']->_loop = true;
 $_smarty_tpl->tpl_vars['CLIENTTYPE_ID']->value = $_smarty_tpl->tpl_vars['CLIENTTYPE_NAME']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['CLIENTTYPE_ID']->value;?>
"  <?php if ($_smarty_tpl->tpl_vars['FIELD_VALUE']->value==$_smarty_tpl->tpl_vars['CLIENTTYPE_ID']->value){?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['CLIENTTYPE_NAME']->value;?>
</option><?php } ?></select><?php }} ?>