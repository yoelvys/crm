<?php /* Smarty version Smarty-3.1.7, created on 2014-06-17 16:25:32
         compiled from "C:\xampp\htdocs\crm\includes\runtime/../../layouts/vlayout\modules\Vtiger\PopupContentsAccountCountable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76953a05fa8e970e4-81340128%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '882022c22111868998bd21dba2f2d7ed5d79e2fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\PopupContentsAccountCountable.tpl',
      1 => 1403022328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76953a05fa8e970e4-81340128',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_53a05fa901b37',
  'variables' => 
  array (
    'CURRENT_USER_MODEL' => 0,
    'MULTI_SELECT' => 0,
    'WIDTHTYPE' => 0,
    'LISTVIEW_ENTRIES' => 0,
    'LISTVIEW_ENTRY' => 0,
    'GETURL' => 0,
    'MODULE' => 0,
    'LISTVIEW_ENTIRES_COUNT' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a05fa901b37')) {function content_53a05fa901b37($_smarty_tpl) {?>
<div class="popupEntriesDiv"><?php $_smarty_tpl->tpl_vars['WIDTHTYPE'] = new Smarty_variable($_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('rowheight'), null, 0);?><table class="table table-bordered listViewEntriesTable"><thead><tr class="listViewHeaders"><?php if ($_smarty_tpl->tpl_vars['MULTI_SELECT']->value){?><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><input type="checkbox"  class="selectAllInCurrentPage" /></td><?php }?><th class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
">Código</th><th class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
">Cuenta contable</th></tr></thead><?php echo var_dump($_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES']->value);?>
<?php  $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['popupListView']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->key => $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['popupListView']['index']++;
?><tr class="listViewEntries" data-id="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
" data-name='<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getName();?>
' data-info='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getRawData());?>
'<?php if ($_smarty_tpl->tpl_vars['GETURL']->value!=''){?> data-url='<?php $_tmp1=$_smarty_tpl->tpl_vars['GETURL']->value;?><?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->$_tmp1();?>
' <?php }?>  id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_popUpListView_row_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['popupListView']['index']+1;?>
"><td class="listViewEntryValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES']->value[];?>
</td></tr><?php } ?></table><!--added this div for Temporarily --><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ENTIRES_COUNT']->value=='0'){?><div class="row-fluid"><div class="emptyRecordsDiv"><?php echo vtranslate('LBL_NO',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo vtranslate('LBL_FOUND',$_smarty_tpl->tpl_vars['MODULE']->value);?>
.</div></div><?php }?></div>
<?php }} ?>