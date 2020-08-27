<?php
/* Smarty version 3.1.33, created on 2020-08-27 05:27:21
  from 'C:\laragon\www\begkshop\admin\themes\default\template\controllers\cms\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f474439b49458_99525702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac824dc1e2e585056c09743b0b148d902ff31302' => 
    array (
      0 => 'C:\\laragon\\www\\begkshop\\admin\\themes\\default\\template\\controllers\\cms\\helpers\\form\\form.tpl',
      1 => 1598505979,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f474439b49458_99525702 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18518763985f474439b3ffa0_13023774', "input");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12589443115f474439b437f7_80347079', "script");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15477508475f474439b445c4_63307485', "leadin");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6809292775f474439b45d32_82341158', "input");
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "input"} */
class Block_18518763985f474439b3ffa0_13023774 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_18518763985f474439b3ffa0_13023774',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == "link_rewrite") {?>
		<?php echo '<script'; ?>
 type="text/javascript">
		<?php if (isset($_smarty_tpl->tpl_vars['PS_ALLOW_ACCENTED_CHARS_URL']->value) && $_smarty_tpl->tpl_vars['PS_ALLOW_ACCENTED_CHARS_URL']->value) {?>
			var PS_ALLOW_ACCENTED_CHARS_URL = 1;
		<?php } else { ?>
			var PS_ALLOW_ACCENTED_CHARS_URL = 0;
		<?php }?>
		<?php echo '</script'; ?>
>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "input"} */
/* {block "script"} */
class Block_12589443115f474439b437f7_80347079 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_12589443115f474439b437f7_80347079',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	$(document).ready(function() {
		$('#active_on').bind('click', function(){
			toggleDraftWarning(false);
		});
		$('#active_off').bind('click', function(){
			toggleDraftWarning(true);
		});
	});
<?php
}
}
/* {/block "script"} */
/* {block "leadin"} */
class Block_15477508475f474439b445c4_63307485 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_15477508475f474439b445c4_63307485',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div style="<?php if ($_smarty_tpl->tpl_vars['active']->value) {?>display:none<?php }?>">
		<p class="alert alert-warning">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your page will be saved as a draft','d'=>'Admin.Design.Notification'),$_smarty_tpl ) );?>

		</p>
	</div>
<?php
}
}
/* {/block "leadin"} */
/* {block "input"} */
class Block_6809292775f474439b45d32_82341158 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_6809292775f474439b45d32_82341158',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'select_category') {?>
		<select name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
">
			<?php echo $_smarty_tpl->tpl_vars['input']->value['options']['html'];?>

		</select>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "input"} */
}
