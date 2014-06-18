<?php /* Smarty version Smarty-3.1.7, created on 2014-06-06 16:39:42
         compiled from "C:\xampp\htdocs\crm\includes\runtime/../../layouts/vlayout\modules\Vtiger\uitypes\StringDetailView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2965391eecec13366-46525711%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a275fd8638d49ce8716df1f463325594f61e3e47' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\uitypes\\StringDetailView.tpl',
      1 => 1401218526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2965391eecec13366-46525711',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'RECORD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5391eecec5592',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5391eecec5592')) {function content_5391eecec5592($_smarty_tpl) {?>



<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId(),$_smarty_tpl->tpl_vars['RECORD']->value);?>
<?php }} ?>