<?php /* Smarty version Smarty-3.1.7, created on 2014-06-20 16:58:14
         compiled from "C:\xampp\htdocs\crm\includes\runtime/../../layouts/vlayout\modules\Vtiger\uitypes\PACPersonType.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10430539b133e3a4cf1-15447818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1cf05f0d5d8f884286cae4dfafca2714eef69289' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\uitypes\\PACPersonType.tpl',
      1 => 1403283414,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10430539b133e3a4cf1-15447818',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_539b133e3d3e3',
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'FIELD_VALUE' => 0,
    'FIELD_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539b133e3d3e3')) {function content_539b133e3d3e3($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars["FIELD_INFO"] = new Smarty_variable(Vtiger_Util_Helper::toSafeHTML(Zend_Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo())), null, 0);?><?php $_smarty_tpl->tpl_vars["SPECIAL_VALIDATOR"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator(), null, 0);?><?php $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name'), null, 0);?><?php $_smarty_tpl->tpl_vars['FIELD_VALUE'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'), null, 0);?><?php if ($_smarty_tpl->tpl_vars['FIELD_VALUE']->value==''){?><select class="chzn-select <?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" name = '<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
'><option value="Natural">Natural</option><option value="Jurídica">Jurídica</option></select><?php }else{ ?><input value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue');?>
" type="hidden" class="fieldname" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
"/><span name ="pac_tipo_persona"><?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
</span><?php }?><?php }} ?>