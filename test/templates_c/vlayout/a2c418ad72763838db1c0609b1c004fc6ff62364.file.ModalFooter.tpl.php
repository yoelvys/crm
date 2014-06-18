<?php /* Smarty version Smarty-3.1.7, created on 2014-05-28 16:19:04
         compiled from "/var/www/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/ModalFooter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180883684653860c78f03391-69484727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2c418ad72763838db1c0609b1c004fc6ff62364' => 
    array (
      0 => '/var/www/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/ModalFooter.tpl',
      1 => 1401218526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180883684653860c78f03391-69484727',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_53860c7900250',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53860c7900250')) {function content_53860c7900250($_smarty_tpl) {?>
<div class="modal-footer"><div class=" pull-right cancelLinkContainer"><a class="cancelLink" type="reset" data-dismiss="modal"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div><button class="btn btn-success" type="submit" name="saveButton"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div><?php }} ?>