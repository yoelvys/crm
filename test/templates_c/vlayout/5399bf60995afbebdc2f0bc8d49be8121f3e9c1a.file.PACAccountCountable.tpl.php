<?php /* Smarty version Smarty-3.1.7, created on 2014-06-20 21:14:33
         compiled from "/var/www/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/uitypes/PACAccountCountable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160061667653a1fd8f787130-43287399%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5399bf60995afbebdc2f0bc8d49be8121f3e9c1a' => 
    array (
      0 => '/var/www/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/uitypes/PACAccountCountable.tpl',
      1 => 1403298869,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160061667653a1fd8f787130-43287399',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_53a1fd8f81ec0',
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'REFERENCE_LIST_COUNT' => 0,
    'FIELD_INFO' => 0,
    'FIELD_NAME' => 0,
    'SPECIAL_VALIDATOR' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a1fd8f81ec0')) {function content_53a1fd8f81ec0($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars["FIELD_INFO"] = new Smarty_variable(Vtiger_Util_Helper::toSafeHTML(Zend_Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo())), null, 0);?><?php $_smarty_tpl->tpl_vars["SPECIAL_VALIDATOR"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator(), null, 0);?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['REFERENCE_LIST_COUNT']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1==1){?><input name="popupReferenceModule" type="hidden" value="Contacts" /><?php }?><input name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue');?>
" class="sourceField" data-displayvalue='<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'));?>
' data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' data-code='<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'));?>
' /><input id="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
_display" class="input-large" data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory()==true){?> required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
_display"value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue');?>
"  data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' <?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)){?>data-validator=<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);?>
<?php }?> /><span class="add-on relatedPopupCustom cursorPointer"><i id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
_select" class="icon-search relatedPopupCustom" title="<?php echo vtranslate('LBL_SELECT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" ></i></span>

<?php }} ?>