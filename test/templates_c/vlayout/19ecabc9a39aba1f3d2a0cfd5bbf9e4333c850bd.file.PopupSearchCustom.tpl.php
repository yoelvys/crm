<?php /* Smarty version Smarty-3.1.7, created on 2014-06-17 21:47:19
         compiled from "C:\xampp\htdocs\crm\includes\runtime/../../layouts/vlayout\modules\Vtiger\PopupSearchCustom.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2442553a05f124e8ef6-01337479%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19ecabc9a39aba1f3d2a0cfd5bbf9e4333c850bd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\PopupSearchCustom.tpl',
      1 => 1403041633,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2442553a05f124e8ef6-01337479',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_53a05f1255a96',
  'variables' => 
  array (
    'SOURCE_MODULE' => 0,
    'MODULE' => 0,
    'PARENT_MODULE' => 0,
    'SOURCE_RECORD' => 0,
    'SOURCE_FIELD' => 0,
    'GETURL' => 0,
    'MULTI_SELECT' => 0,
    'CURRENCY_ID' => 0,
    'RELATED_PARENT_MODULE' => 0,
    'RELATED_PARENT_ID' => 0,
    'COMPANY_LOGO' => 0,
    'LISTVIEW_ENTRIES' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a05f1255a96')) {function content_53a05f1255a96($_smarty_tpl) {?>
<input type="hidden" id="parentModule" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
"/><input type="hidden" id="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"/><input type="hidden" id="parent" value="<?php echo $_smarty_tpl->tpl_vars['PARENT_MODULE']->value;?>
"/><input type="hidden" id="sourceRecord" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_RECORD']->value;?>
"/><input type="hidden" id="sourceField" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_FIELD']->value;?>
"/><input type="hidden" id="url" value="<?php echo $_smarty_tpl->tpl_vars['GETURL']->value;?>
" /><input type="hidden" id="multi_select" value="<?php echo $_smarty_tpl->tpl_vars['MULTI_SELECT']->value;?>
" /><input type="hidden" id="currencyId" value="<?php echo $_smarty_tpl->tpl_vars['CURRENCY_ID']->value;?>
" /><input type="hidden" id="relatedParentModule" value="<?php echo $_smarty_tpl->tpl_vars['RELATED_PARENT_MODULE']->value;?>
"/><input type="hidden" id="relatedParentId" value="<?php echo $_smarty_tpl->tpl_vars['RELATED_PARENT_ID']->value;?>
"/><input type="hidden" id="view" value="PopupAjax1"/><div class="popupContainer row-fluid"><div class="span12"><div class="row-fluid"><div class="span6 row-fluid"><span class="logo span5"><img src="<?php echo $_smarty_tpl->tpl_vars['COMPANY_LOGO']->value->get('imagepath');?>
" title="<?php echo $_smarty_tpl->tpl_vars['COMPANY_LOGO']->value->get('title');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['COMPANY_LOGO']->value->get('alt');?>
"/></span></div><div class="span6 pull-right"><?php if ($_smarty_tpl->tpl_vars['SOURCE_FIELD']->value=='pac_cuenta_contable'){?><span class="pull-right"><b>Cuentas contables</b></span><?php }?></div></div></div></div><form class="form-horizontal popupSearchContainer"><div class="control-group margin0px"><span class="paddingLeft10px"><strong><?php echo vtranslate('LBL_SEARCH_FOR');?>
</strong></span><span class="paddingLeft10px"></span><input type="text" placeholder="<?php echo vtranslate('LBL_TYPE_SEARCH');?>
" id="searchvalue"/></div></form><?php if ($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value!='PriceBooks'){?><div class="popupPaging"><div class="row-fluid"><span class="actions span6">&nbsp;<?php if ($_smarty_tpl->tpl_vars['MULTI_SELECT']->value){?><?php if (!empty($_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES']->value)){?><button class="select btn"><strong><?php echo vtranslate('LBL_SELECT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><?php }?><?php }?></span></div></div><?php }?>
<?php }} ?>