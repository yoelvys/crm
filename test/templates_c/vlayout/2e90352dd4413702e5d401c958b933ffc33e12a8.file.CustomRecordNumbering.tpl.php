<?php /* Smarty version Smarty-3.1.7, created on 2014-06-23 17:30:48
         compiled from "/var/www/crm/includes/runtime/../../layouts/vlayout/modules/Settings/Vtiger/CustomRecordNumbering.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1826905753879b3cb8be48-30725664%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e90352dd4413702e5d401c958b933ffc33e12a8' => 
    array (
      0 => '/var/www/crm/includes/runtime/../../layouts/vlayout/modules/Settings/Vtiger/CustomRecordNumbering.tpl',
      1 => 1403124778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1826905753879b3cb8be48-30725664',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_53879b3cc2dd6',
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'DEFAULT_MODULE_MODEL' => 0,
    'SUPPORTED_MODULES' => 0,
    'MODULE_MODEL' => 0,
    'MODULE_NAME' => 0,
    'DEFAULT_MODULE_NAME' => 0,
    'DEFAULT_MODULE_DATA' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53879b3cc2dd6')) {function content_53879b3cc2dd6($_smarty_tpl) {?>
<div class="container-fluid"><form id="EditView"><div class="row-fluid"><span class="widget_header row-fluid"><div class="row-fluid"><h3><?php echo vtranslate('LBL_CUSTOMIZE_RECORD_NUMBERING',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></div></span></div><hr><div class="row-fluid"><div class="span12"><table id="customRecordNumbering" class="table table-bordered"><?php $_smarty_tpl->tpl_vars['DEFAULT_MODULE_DATA'] = new Smarty_variable($_smarty_tpl->tpl_vars['DEFAULT_MODULE_MODEL']->value->getModuleCustomNumberingData(), null, 0);?><?php $_smarty_tpl->tpl_vars['DEFAULT_MODULE_NAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['DEFAULT_MODULE_MODEL']->value->getName(), null, 0);?><thead><tr><th width="30%"><strong><?php echo vtranslate('LBL_CUSTOMIZE_RECORD_NUMBERING',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th><th width="70%"><span class="pull-right"><button type="button" class="btn" name="updateRecordWithSequenceNumber"><b><?php echo vtranslate('LBL_UPDATE_MISSING_RECORD_SEQUENCE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b></button></span></th></tr></thead><tbody><tr><td class="fieldLabel"><label class="pull-right marginRight10px"><b><?php echo vtranslate('LBL_SELECT_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b></label></td><td class="fieldValue"><select class="chzn-select" name="sourceModule"><?php  $_smarty_tpl->tpl_vars['MODULE_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MODULE_MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SUPPORTED_MODULES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_MODEL']->key => $_smarty_tpl->tpl_vars['MODULE_MODEL']->value){
$_smarty_tpl->tpl_vars['MODULE_MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['MODULE_MODEL']->key;
?><?php $_smarty_tpl->tpl_vars['MODULE_NAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name'), null, 0);?><option value=<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['MODULE_NAME']->value==$_smarty_tpl->tpl_vars['DEFAULT_MODULE_NAME']->value){?> selected <?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option><?php } ?></select></td></tr><tr><td class="fieldLabel"><label class="pull-right marginRight10px"><b><?php echo vtranslate('LBL_USE_PREFIX',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b></label></td><td class="fieldValue"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['DEFAULT_MODULE_DATA']->value['prefix'];?>
" data-old-prefix="<?php echo $_smarty_tpl->tpl_vars['DEFAULT_MODULE_DATA']->value['prefix'];?>
" name="prefix" data-validation-engine="validate[funcCall[Vtiger_AlphaNumeric_Validator_Js.invokeValidation]]"/></td></tr><tr><td class="fieldLabel"><label class="pull-right marginRight10px"><b><?php echo vtranslate('LBL_START_SEQUENCE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b><span class="redColor">*</span></label></td><td class="fieldValue"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['DEFAULT_MODULE_DATA']->value['sequenceNumber'];?>
"data-old-sequence-number="<?php echo $_smarty_tpl->tpl_vars['DEFAULT_MODULE_DATA']->value['sequenceNumber'];?>
" name="sequenceNumber"data-validation-engine="validate[required,funcCall[Vtiger_WholeNumber_Validator_Js.invokeValidation]]"/></td></tr></tbody></table></div></div><br><div class="row-fluid"><div class="span12"><span class="pull-right"><button class="btn btn-success saveButton" type="submit" disabled="disabled"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><a class="cancelLink" type="reset" onclick="javascript:window.history.back();"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></span></div></div></form></div><?php }} ?>