<?php /* Smarty version Smarty-3.1.7, created on 2014-05-29 16:34:26
         compiled from "/var/www/crm/includes/runtime/../../layouts/vlayout/modules/Settings/SharingAccess/Index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:207251759953876192148034-09318139%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30487bc8122aaf0b860376ff52ed529e40a596b2' => 
    array (
      0 => '/var/www/crm/includes/runtime/../../layouts/vlayout/modules/Settings/SharingAccess/Index.tpl',
      1 => 1401218526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207251759953876192148034-09318139',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DEPENDENT_MODULES' => 0,
    'QUALIFIED_MODULE' => 0,
    'ALL_ACTIONS' => 0,
    'ACTION_MODEL' => 0,
    'ALL_MODULES' => 0,
    'MODULE_MODEL' => 0,
    'TABID' => 0,
    'ACTION_ID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_538761921ffaf',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538761921ffaf')) {function content_538761921ffaf($_smarty_tpl) {?>
<div class="container-fluid" id="sharingAccessContainer"><div class="contents"><form name="EditSharingAccess" action="index.php" method="post" class="form-horizontal" id="EditSharingAccess"><input type="hidden" name="module" value="SharingAccess" /><input type="hidden" name="action" value="SaveAjax" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" class="dependentModules" value='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['DEPENDENT_MODULES']->value);?>
' /><div><div class="widget_header row-fluid"><div class="span8"><h3><?php echo vtranslate('LBL_SHARING_ACCESS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></div><div class="span4"><button class="btn btn-success pull-right hide" type="submit" name="saveButton"><strong><?php echo vtranslate('LBL_APPLY_NEW_SHARING_RULES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div></div><hr></div><table class="table table-bordered table-condensed equalSplit sharingAccessDetails"><thead><tr class="blockHeader"><th><?php echo vtranslate('LBL_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><?php  $_smarty_tpl->tpl_vars['ACTION_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ACTION_MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['ACTION_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ALL_ACTIONS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ACTION_MODEL']->key => $_smarty_tpl->tpl_vars['ACTION_MODEL']->value){
$_smarty_tpl->tpl_vars['ACTION_MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['ACTION_ID']->value = $_smarty_tpl->tpl_vars['ACTION_MODEL']->key;
?><th><?php echo vtranslate($_smarty_tpl->tpl_vars['ACTION_MODEL']->value->getName(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><?php } ?><th nowrap="nowrap"><?php echo vtranslate('LBL_ADVANCED_SHARING_RULES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th></tr></thead><tbody><tr data-module-name="Calendar"><td><?php echo vtranslate('SINGLE_Calendar','Calendar');?>
</td><td class="row-fluid"><div><input type="radio" style="margin-left: 25%" disabled="disabled" /></div></td><td class="row-fluid"><div><input type="radio" style="margin-left: 25%" disabled="disabled" /></div></td><td class="row-fluid"><div><input type="radio" style="margin-left: 25%" disabled="disabled" /></div></td><td class="row-fluid"><div><input type="radio" style="margin-left: 25%" checked="true" disabled="disabled" /></div></td><td><div class="row-fluid"><div class="span3">&nbsp;</div><div class="span6"><button type="button" class="btn btn-mini vtButton arrowDown row-fluid" disabled="disabled" ><img src="layouts/vlayout/skins/images/Arrow-down.png"></img></button></div><div class="span3">&nbsp;</div></div></td></tr><?php  $_smarty_tpl->tpl_vars['MODULE_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MODULE_MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['TABID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ALL_MODULES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_MODEL']->key => $_smarty_tpl->tpl_vars['MODULE_MODEL']->value){
$_smarty_tpl->tpl_vars['MODULE_MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['TABID']->value = $_smarty_tpl->tpl_vars['MODULE_MODEL']->key;
?><tr data-module-name="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name');?>
"><td><?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName()=='Accounts'){?><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php }else{ ?><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName());?>
<?php }?></td><?php  $_smarty_tpl->tpl_vars['ACTION_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ACTION_MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['ACTION_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ALL_ACTIONS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ACTION_MODEL']->key => $_smarty_tpl->tpl_vars['ACTION_MODEL']->value){
$_smarty_tpl->tpl_vars['ACTION_MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['ACTION_ID']->value = $_smarty_tpl->tpl_vars['ACTION_MODEL']->key;
?><td class="row-fluid"><?php if ($_smarty_tpl->tpl_vars['ACTION_MODEL']->value->isModuleEnabled($_smarty_tpl->tpl_vars['MODULE_MODEL']->value)){?><div><input style="margin-left: 25%" type="radio" name="permissions[<?php echo $_smarty_tpl->tpl_vars['TABID']->value;?>
]" data-action-state="<?php echo $_smarty_tpl->tpl_vars['ACTION_MODEL']->value->getName();?>
" value="<?php echo $_smarty_tpl->tpl_vars['ACTION_ID']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getPermissionValue()==$_smarty_tpl->tpl_vars['ACTION_ID']->value){?>checked="true"<?php }?>></div><?php }?></td><?php } ?><td class="triggerCustomSharingAccess"><div class="row-fluid"><div class="span3">&nbsp;</div><div class="span6"><button type="button" class="btn btn-mini vtButton arrowDown row-fluid" data-handlerfor="fields" data-togglehandler="<?php echo $_smarty_tpl->tpl_vars['TABID']->value;?>
-rules"><img src="layouts/vlayout/skins/images/Arrow-down.png"></img></button><button type="button" class="btn btn-mini vtButton arrowUp row-fluid hide" data-handlerfor="fields" data-togglehandler="<?php echo $_smarty_tpl->tpl_vars['TABID']->value;?>
-rules"><img src="layouts/vlayout/skins/images/Arrow-up.png"></img></button></div><div class="span3">&nbsp;</div></div></td></tr><?php } ?></tbody></table><div><div class="pull-right"><button class="btn btn-success hide" type="submit" name="saveButton"><strong><?php echo vtranslate('LBL_APPLY_NEW_SHARING_RULES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div></div></form></div></div><?php }} ?>