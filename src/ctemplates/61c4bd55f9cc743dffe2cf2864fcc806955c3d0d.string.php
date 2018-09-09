<?php /* Smarty version Smarty-3.1.19, created on 2018-07-13 19:36:25
         compiled from "61c4bd55f9cc743dffe2cf2864fcc806955c3d0d" */ ?>
<?php /*%%SmartyHeaderCode:10896484985b488eb9cc3be6-18798912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61c4bd55f9cc743dffe2cf2864fcc806955c3d0d' => 
    array (
      0 => '61c4bd55f9cc743dffe2cf2864fcc806955c3d0d',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '10896484985b488eb9cc3be6-18798912',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'namespaces' => 0,
    'className' => 0,
    'fields' => 0,
    'field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b488eb9d69069_35969065',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b488eb9d69069_35969065')) {function content_5b488eb9d69069_35969065($_smarty_tpl) {?><<?php ?>?php
namespace <?php echo $_smarty_tpl->tpl_vars['namespaces']->value;?>
;
use DBModel;
class <?php echo $_smarty_tpl->tpl_vars['className']->value;?>
 extends DBModel{

    public function getFieldList(){
        static $FIELD_LIST=[
            <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>['name'=>'<?php echo $_smarty_tpl->tpl_vars['field']->value['Field'];?>
','type'=><?php if (preg_match('/int/',$_smarty_tpl->tpl_vars['field']->value['Type'])) {?>"int",<?php } else { ?>"string",<?php }?>'key'=><?php echo var_export(!!$_smarty_tpl->tpl_vars['field']->value['Key'],1);?>
,'defalut'=><?php echo var_export($_smarty_tpl->tpl_vars['field']->value['Default'],1);?>
,'null'=><?php if ($_smarty_tpl->tpl_vars['field']->value['Null']=='YES') {?>true<?php } else { ?>false<?php }?>,],
            <?php } ?>
        ];
        return $FIELD_LIST;
    }
}<?php }} ?>
