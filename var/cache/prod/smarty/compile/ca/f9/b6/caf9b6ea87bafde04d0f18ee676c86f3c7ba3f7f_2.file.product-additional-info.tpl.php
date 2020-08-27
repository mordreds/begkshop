<?php
/* Smarty version 3.1.33, created on 2020-08-27 05:27:19
  from 'C:\laragon\www\begkshop\themes\classic\templates\catalog\_partials\product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f47443753e432_51027330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'caf9b6ea87bafde04d0f18ee676c86f3c7ba3f7f' => 
    array (
      0 => 'C:\\laragon\\www\\begkshop\\themes\\classic\\templates\\catalog\\_partials\\product-additional-info.tpl',
      1 => 1598505983,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f47443753e432_51027330 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
