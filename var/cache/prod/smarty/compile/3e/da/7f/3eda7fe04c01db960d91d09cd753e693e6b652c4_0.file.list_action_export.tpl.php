<?php
/* Smarty version 3.1.33, created on 2020-08-27 05:27:23
  from 'C:\laragon\www\begkshop\admin\themes\default\template\controllers\request_sql\list_action_export.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f47443b2d74b9_76969955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3eda7fe04c01db960d91d09cd753e693e6b652c4' => 
    array (
      0 => 'C:\\laragon\\www\\begkshop\\admin\\themes\\default\\template\\controllers\\request_sql\\list_action_export.tpl',
      1 => 1598505980,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f47443b2d74b9_76969955 (Smarty_Internal_Template $_smarty_tpl) {
?>

<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" class="btn btn-default">
	<i class="icon-cloud-upload"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }
}
