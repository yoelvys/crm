<?php /* Smarty version Smarty-3.1.7, created on 2014-06-20 16:21:37
         compiled from "/var/www/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/uitypes/PACPersonType.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19615619645399ff2d8b8301-15736327%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac09a2232670fbe4a7f9dd15e4b23d4b2d27b481' => 
    array (
      0 => '/var/www/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/uitypes/PACPersonType.tpl',
      1 => 1403281274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19615619645399ff2d8b8301-15736327',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5399ff2d8e722',
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'FIELD_VALUE' => 0,
    'FIELD_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5399ff2d8e722')) {function content_5399ff2d8e722($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars["FIELD_INFO"] = new Smarty_variable(Vtiger_Util_Helper::toSafeHTML(Zend_Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo())), null, 0);?><?php $_smarty_tpl->tpl_vars["SPECIAL_VALIDATOR"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator(), null, 0);?><?php $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name'), null, 0);?><?php $_smarty_tpl->tpl_vars['FIELD_VALUE'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'), null, 0);?><?php if ($_smarty_tpl->tpl_vars['FIELD_VALUE']->value==''){?><select class="chzn-select <?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" name = '<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
'><option value="Natural">Natural</option><option value="Jurídica">Jurídica</option></select><?php }else{ ?><input value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue');?>
" type="hidden" class="fieldname" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
"/><span name ="pac_tipo_persona"><?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
</span><?php }?><?php }} ?>