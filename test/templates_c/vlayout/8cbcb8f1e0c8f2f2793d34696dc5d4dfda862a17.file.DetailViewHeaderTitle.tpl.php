<?php /* Smarty version Smarty-3.1.7, created on 2014-06-25 14:24:53
         compiled from "C:\xampp\htdocs\crm\includes\runtime/../../layouts/vlayout\modules\Accounts\DetailViewHeaderTitle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3029753aadbb5d1f9c7-19283324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cbcb8f1e0c8f2f2793d34696dc5d4dfda862a17' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\includes\\runtime/../../layouts/vlayout\\modules\\Accounts\\DetailViewHeaderTitle.tpl',
      1 => 1403126416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3029753aadbb5d1f9c7-19283324',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECORD' => 0,
    'MODULE_MODEL' => 0,
    'NAME_FIELD' => 0,
    'FIELD_MODEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_53aadbb5d9612',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53aadbb5d9612')) {function content_53aadbb5d9612($_smarty_tpl) {?>
<span class="span2"><img src="<?php echo vimage_path('summary_organizations.png');?>
" class="summaryImg" /></span><span class="span8 margin0px"><span class="row-fluid"><span class="recordLabel font-x-x-large textOverflowEllipsis span8 pushDown" title="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getName();?>
"><?php  $_smarty_tpl->tpl_vars['NAME_FIELD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['NAME_FIELD']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getNameFields(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['NAME_FIELD']->key => $_smarty_tpl->tpl_vars['NAME_FIELD']->value){
$_smarty_tpl->tpl_vars['NAME_FIELD']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getField($_smarty_tpl->tpl_vars['NAME_FIELD']->value), null, 0);?><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getPermissions()){?><span class="<?php echo $_smarty_tpl->tpl_vars['NAME_FIELD']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get($_smarty_tpl->tpl_vars['NAME_FIELD']->value);?>
</span>&nbsp;<?php }?><?php } ?></span></span></span><?php }} ?>