<?php
/* Smarty version 3.1.33, created on 2020-08-27 05:27:23
  from 'C:\laragon\www\begkshop\admin\themes\default\template\controllers\shop\helpers\tree\shop_tree_node_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f47443b607719_92490894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dca7cde93318e50ba4188559902e6b02061eefdb' => 
    array (
      0 => 'C:\\laragon\\www\\begkshop\\admin\\themes\\default\\template\\controllers\\shop\\helpers\\tree\\shop_tree_node_item.tpl',
      1 => 1598505979,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f47443b607719_92490894 (Smarty_Internal_Template $_smarty_tpl) {
?>
<li class="tree-item">
	<label class="tree-item-name">
		<i class="tree-dot"></i>
		<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url_shop']->value,'html','UTF-8' ));?>
&amp;shop_id=<?php echo $_smarty_tpl->tpl_vars['node']->value['id_shop'];?>
"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</a>
	</label>
	<?php if (isset($_smarty_tpl->tpl_vars['node']->value['urls'])) {?>
		<ul class="tree">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['node']->value['urls'], 'url');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['url']->value) {
?>
			<li class="tree-item">
				<label class="tree-item-name">
					<i class="tree-dot"></i>
					<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url_shop_url']->value,'html','UTF-8' ));?>
&amp;id_shop_url=<?php echo $_smarty_tpl->tpl_vars['url']->value['id_shop_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['url']->value['name'];?>
</a>
				</label>
			</li>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	<?php }?>
</li>
<?php }
}
