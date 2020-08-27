<?php
/* Smarty version 3.1.33, created on 2020-08-27 05:27:24
  from 'C:\laragon\www\begkshop\admin\themes\default\template\helpers\list\list_action_preview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f47443c50b3a1_37787017',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67a02f1a6f60c8e733f6f8422a493c28b4228a66' => 
    array (
      0 => 'C:\\laragon\\www\\begkshop\\admin\\themes\\default\\template\\helpers\\list\\list_action_preview.tpl',
      1 => 1598505980,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f47443c50b3a1_37787017 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }
}
