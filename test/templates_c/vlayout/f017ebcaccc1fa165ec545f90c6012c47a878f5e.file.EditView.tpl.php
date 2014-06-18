<?php /* Smarty version Smarty-3.1.7, created on 2014-05-28 16:51:57
         compiled from "/var/www/crm/includes/runtime/../../layouts/vlayout/modules/Settings/Webforms/EditView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1149755735386142dd78f28-16400067%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f017ebcaccc1fa165ec545f90c6012c47a878f5e' => 
    array (
      0 => '/var/www/crm/includes/runtime/../../layouts/vlayout/modules/Settings/Webforms/EditView.tpl',
      1 => 1401221706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1149755735386142dd78f28-16400067',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5386142dde835',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5386142dde835')) {function content_5386142dde835($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("EditViewBlocks.tpl",'Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="targetFieldsTableContainer"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("FieldsEditView.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("EditViewActions.tpl",'Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>