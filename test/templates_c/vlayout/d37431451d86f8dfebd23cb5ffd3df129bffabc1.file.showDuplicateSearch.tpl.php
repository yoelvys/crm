<?php /* Smarty version Smarty-3.1.7, created on 2014-06-02 21:00:19
         compiled from "/var/www/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/showDuplicateSearch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2027247183538ce5e3cb8cc8-87900322%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd37431451d86f8dfebd23cb5ffd3df129bffabc1' => 
    array (
      0 => '/var/www/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/showDuplicateSearch.tpl',
      1 => 1401218526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2027247183538ce5e3cb8cc8-87900322',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'FIELDS' => 0,
    'FIELD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_538ce5e3dda88',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538ce5e3dda88')) {function content_538ce5e3dda88($_smarty_tpl) {?>
<div class='modelContainer'><div class="modal-header contentsBackground"><button data-dismiss="modal" class="close" title="<?php echo vtranslate('LBL_CLOSE');?>
">&times;</button><h3><?php echo vtranslate('LBL_MERGING_CRITERIA_SELECTION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h3></div><form class="form-horizontal" id="findDuplicate" action="index.php"><input type='hidden' name='module' value='<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
' /><input type='hidden' name='view' value='FindDuplicates' /><br><div class="control-group"><span class="control-label"><?php echo vtranslate('LBL_AVAILABLE_FIELDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span><div class="controls"><div class="row-fluid"><span class="span6"><select id="fieldList" class="select2 row-fluid" multiple="true" name="fields[]"data-validation-engine="validate[required]"><?php  $_smarty_tpl->tpl_vars['FIELD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD']->key => $_smarty_tpl->tpl_vars['FIELD']->value){
$_smarty_tpl->tpl_vars['FIELD']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['FIELD']->value->isViewableInDetailView()){?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getName();?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php }?><?php } ?></select></span></div><div class="row-fluid"><label><input type="checkbox" name="ignoreEmpty" checked /><span class="alignMiddle">&nbsp;<?php echo vtranslate('LBL_IGNORE_EMPTY_VALUES',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></label</div></div></div><div class="modal-footer"><div class="pull-right cancelLinkContainer"><a class="cancelLink" type="reset" data-dismiss="modal" data-dismiss="modal"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div><button class="btn btn-success" type="submit" disabled="true"><strong><?php echo vtranslate('LBL_FIND_DUPLICATES',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div></form></div><?php }} ?>