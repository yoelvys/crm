<?php /* Smarty version Smarty-3.1.7, created on 2014-06-18 20:58:55
         compiled from "/var/www/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/uitypes/PACStateSupport.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10473686925398bddceaf016-41447348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96833169965e843f293898633eb0a012da7d3e58' => 
    array (
      0 => '/var/www/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/uitypes/PACStateSupport.tpl',
      1 => 1403124778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10473686925398bddceaf016-41447348',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5398bddcf17d3',
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'FIELD_NAME' => 0,
    'FIELD_INFO' => 0,
    'SPECIAL_VALIDATOR' => 0,
    'STATESUPPORT' => 0,
    'STATESUPPORT_ID' => 0,
    'FIELD_VALUE' => 0,
    'STATESUPPORT_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5398bddcf17d3')) {function content_5398bddcf17d3($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars["FIELD_INFO"] = new Smarty_variable(Vtiger_Util_Helper::toSafeHTML(Zend_Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo())), null, 0);?><?php $_smarty_tpl->tpl_vars["SPECIAL_VALIDATOR"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator(), null, 0);?><?php $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name'), null, 0);?><?php $_smarty_tpl->tpl_vars['FIELD_VALUE'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'), null, 0);?><?php $_smarty_tpl->tpl_vars['STATESUPPORT'] = new Smarty_variable(Vtiger_PACStateSupport_UIType::getPACStateSupport(), null, 0);?><select class="chzn-select <?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory()==true){?> required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" data-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' <?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)){?>data-validator=<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);?>
<?php }?>><option value=""><?php echo vtranslate('LBL_SELECT_OPTION','Vtiger');?>
</option><?php  $_smarty_tpl->tpl_vars['STATESUPPORT_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['STATESUPPORT_NAME']->_loop = false;
 $_smarty_tpl->tpl_vars['STATESUPPORT_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['STATESUPPORT']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['STATESUPPORT_NAME']->key => $_smarty_tpl->tpl_vars['STATESUPPORT_NAME']->value){
$_smarty_tpl->tpl_vars['STATESUPPORT_NAME']->_loop = true;
 $_smarty_tpl->tpl_vars['STATESUPPORT_ID']->value = $_smarty_tpl->tpl_vars['STATESUPPORT_NAME']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['STATESUPPORT_ID']->value;?>
"  <?php if ($_smarty_tpl->tpl_vars['FIELD_VALUE']->value==$_smarty_tpl->tpl_vars['STATESUPPORT_ID']->value){?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['STATESUPPORT_NAME']->value;?>
</option><?php } ?></select><?php }} ?>