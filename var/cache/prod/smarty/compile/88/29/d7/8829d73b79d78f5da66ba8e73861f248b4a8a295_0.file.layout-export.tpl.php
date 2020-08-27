<?php
/* Smarty version 3.1.33, created on 2020-08-27 05:27:25
  from 'C:\laragon\www\begkshop\admin\themes\default\template\layout-export.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f47443d036c21_74706421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8829d73b79d78f5da66ba8e73861f248b4a8a295' => 
    array (
      0 => 'C:\\laragon\\www\\begkshop\\admin\\themes\\default\\template\\layout-export.tpl',
      1 => 1598505979,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f47443d036c21_74706421 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['export_precontent']->value;
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['export_headers']->value, 'header');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['header']->value) {
echo $_smarty_tpl->tpl_vars['text_delimiter']->value;
echo $_smarty_tpl->tpl_vars['header']->value;
echo $_smarty_tpl->tpl_vars['text_delimiter']->value;?>
;<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['export_content']->value, 'line');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['line']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['line']->value, 'content');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['content']->value) {
echo $_smarty_tpl->tpl_vars['text_delimiter']->value;
echo $_smarty_tpl->tpl_vars['content']->value;
echo $_smarty_tpl->tpl_vars['text_delimiter']->value;?>
;<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
