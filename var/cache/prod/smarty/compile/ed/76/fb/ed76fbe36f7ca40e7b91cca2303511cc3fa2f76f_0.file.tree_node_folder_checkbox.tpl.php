<?php
/* Smarty version 3.1.33, created on 2020-08-27 05:27:24
  from 'C:\laragon\www\begkshop\admin\themes\default\template\helpers\tree\tree_node_folder_checkbox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f47443cc34fb9_88993945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed76fbe36f7ca40e7b91cca2303511cc3fa2f76f' => 
    array (
      0 => 'C:\\laragon\\www\\begkshop\\admin\\themes\\default\\template\\helpers\\tree\\tree_node_folder_checkbox.tpl',
      1 => 1598505980,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f47443cc34fb9_88993945 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="tree-folder">
	<span class="tree-folder-name<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled']) && $_smarty_tpl->tpl_vars['node']->value['disabled'] == true) {?> tree-folder-name-disable<?php }?>">
		<?php if (isset($_smarty_tpl->tpl_vars['node']->value['id_category']) && $_smarty_tpl->tpl_vars['node']->value['id_category'] != $_smarty_tpl->tpl_vars['root_category']->value) {?>
		<input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled']) && $_smarty_tpl->tpl_vars['node']->value['disabled'] == true) {?> disabled="disabled"<?php }?> />
		<?php }?>
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php if (isset($_smarty_tpl->tpl_vars['node']->value['name'])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['node']->value['name'],'html','UTF-8' ));
}
if (isset($_smarty_tpl->tpl_vars['node']->value['selected_childs']) && (int)$_smarty_tpl->tpl_vars['node']->value['selected_childs'] > 0) {?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(%s selected)','sprintf'=>array($_smarty_tpl->tpl_vars['node']->value['selected_childs'])),$_smarty_tpl ) );
}?></label>
	</span>
	<ul class="tree">
		<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['children']->value,'UTF-8' ));?>

	</ul>
</li>
<?php }
}
