<?php /* Smarty version Smarty-3.1.7, created on 2014-06-13 15:05:34
         compiled from "C:\xampp\htdocs\crm\includes\runtime/../../layouts/vlayout\modules\Vtiger\uitypes\PACLocation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9081539b133e18c4e0-02537669%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4db98ef24ef8b83b3fc936daa31bd611ae0eb080' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\uitypes\\PACLocation.tpl',
      1 => 1402520617,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9081539b133e18c4e0-02537669',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'FIELD_NAME' => 0,
    'FIELD_INFO' => 0,
    'SPECIAL_VALIDATOR' => 0,
    'LOCATION' => 0,
    'LOCATION_ID' => 0,
    'FIELD_VALUE' => 0,
    'LOCATION_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_539b133e1f8f9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539b133e1f8f9')) {function content_539b133e1f8f9($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars["FIELD_INFO"] = new Smarty_variable(Vtiger_Util_Helper::toSafeHTML(Zend_Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo())), null, 0);?><?php $_smarty_tpl->tpl_vars["SPECIAL_VALIDATOR"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator(), null, 0);?><?php $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name'), null, 0);?><?php $_smarty_tpl->tpl_vars['FIELD_VALUE'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'), null, 0);?><?php $_smarty_tpl->tpl_vars['LOCATION'] = new Smarty_variable(Vtiger_PACLocation_UIType::getPACLocation(), null, 0);?><select class="chzn-select <?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory()==true){?> required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" data-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' <?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)){?>data-validator=<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);?>
<?php }?>><option value=""><?php echo vtranslate('LBL_SELECT_OPTION','Vtiger');?>
</option><?php  $_smarty_tpl->tpl_vars['LOCATION_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LOCATION_NAME']->_loop = false;
 $_smarty_tpl->tpl_vars['LOCATION_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LOCATION']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LOCATION_NAME']->key => $_smarty_tpl->tpl_vars['LOCATION_NAME']->value){
$_smarty_tpl->tpl_vars['LOCATION_NAME']->_loop = true;
 $_smarty_tpl->tpl_vars['LOCATION_ID']->value = $_smarty_tpl->tpl_vars['LOCATION_NAME']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['LOCATION_ID']->value;?>
"  <?php if ($_smarty_tpl->tpl_vars['FIELD_VALUE']->value==$_smarty_tpl->tpl_vars['LOCATION_ID']->value){?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['LOCATION_NAME']->value;?>
</option><?php } ?></select><?php }} ?>