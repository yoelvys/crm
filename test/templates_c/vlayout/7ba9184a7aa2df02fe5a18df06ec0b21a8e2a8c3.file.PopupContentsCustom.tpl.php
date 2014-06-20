<?php /* Smarty version Smarty-3.1.7, created on 2014-06-20 20:54:05
         compiled from "/var/www/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/PopupContentsCustom.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18595583353a2013a1d7aa8-54938443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ba9184a7aa2df02fe5a18df06ec0b21a8e2a8c3' => 
    array (
      0 => '/var/www/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/PopupContentsCustom.tpl',
      1 => 1403297491,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18595583353a2013a1d7aa8-54938443',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_53a2013a20f2e',
  'variables' => 
  array (
    'ORDER_BY' => 0,
    'SORT_ORDER' => 0,
    'SOURCE_MODULE' => 0,
    'CURRENT_USER_MODEL' => 0,
    'LISTVIEW_ENTRIES' => 0,
    'KEY' => 0,
    'LISTVIEW_ENTRY' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a2013a20f2e')) {function content_53a2013a20f2e($_smarty_tpl) {?><div class="popupEntriesDiv"><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ORDER_BY']->value;?>
" id="orderBy"><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['SORT_ORDER']->value;?>
" id="sortOrder"><?php if ($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value=="Emails"){?><input type="hidden" value="Vtiger_EmailsRelatedModule_Popup_Js" id="popUpClassName"/><?php }?><?php $_smarty_tpl->tpl_vars['WIDTHTYPE'] = new Smarty_variable($_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('rowheight'), null, 0);?><table id='tableContent' class="table table-bordered listViewEntriesTable"><thead><tr class="listViewHeaders"><th>Código</th><th>Cuenta contable</th></tr></thead><?php  $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->_loop = false;
 $_smarty_tpl->tpl_vars['KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->key => $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->_loop = true;
 $_smarty_tpl->tpl_vars['KEY']->value = $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->key;
?><tr class="listViewEntries" data-id="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
" data-name='<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value;?>
' data-code="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
"><td><?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
</td><td class="value"><?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value;?>
</td></tr><?php } ?></table><!--added this div for Temporarily --><?php if (count($_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES']->value)=='0'){?><div class="row-fluid"><div class="emptyRecordsDiv">Cuenta contable no encontrada</div></div><?php }?><div class="row-fluid" id="emptyResult"><div class="emptyRecordsDiv">Cuenta contable no encontrada</div></div></div>
<?php }} ?>