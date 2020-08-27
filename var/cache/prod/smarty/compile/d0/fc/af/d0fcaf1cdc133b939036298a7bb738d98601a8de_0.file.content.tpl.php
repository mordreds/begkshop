<?php
/* Smarty version 3.1.33, created on 2020-08-27 05:27:21
  from 'C:\laragon\www\begkshop\admin\themes\default\template\controllers\cms_content\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f474439ba3d90_13385229',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0fcaf1cdc133b939036298a7bb738d98601a8de' => 
    array (
      0 => 'C:\\laragon\\www\\begkshop\\admin\\themes\\default\\template\\controllers\\cms_content\\content.tpl',
      1 => 1598505979,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f474439ba3d90_13385229 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (isset($_smarty_tpl->tpl_vars['cms_breadcrumb']->value)) {?>
	<ul class="breadcrumb cat_bar">
		<?php echo $_smarty_tpl->tpl_vars['cms_breadcrumb']->value;?>

	</ul>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>


<?php if (isset($_smarty_tpl->tpl_vars['url_prev']->value)) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function () {
		var re = /url_preview=(.*)/;
		var url = re.exec(window.location.href);
		if (typeof url !== 'undefined' && url !== null && typeof url[1] !== 'undefined' && url[1] === "1")
			window.open("<?php echo $_smarty_tpl->tpl_vars['url_prev']->value;?>
", "_blank");
	});
	<?php echo '</script'; ?>
>
<?php }
}
}
