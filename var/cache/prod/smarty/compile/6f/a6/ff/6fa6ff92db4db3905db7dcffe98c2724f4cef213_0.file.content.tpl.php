<?php
/* Smarty version 3.1.33, created on 2020-08-27 05:27:23
  from 'C:\laragon\www\begkshop\admin\themes\default\template\controllers\shop\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f47443b48c285_41508335',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fa6ff92db4db3905db7dcffe98c2724f4cef213' => 
    array (
      0 => 'C:\\laragon\\www\\begkshop\\admin\\themes\\default\\template\\controllers\\shop\\content.tpl',
      1 => 1598505979,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f47443b48c285_41508335 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['shops_tree']->value;?>

	</div>
	<div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div>
<?php }
}
