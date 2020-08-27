<?php
/* Smarty version 3.1.33, created on 2020-08-27 05:27:19
  from 'C:\laragon\www\begkshop\themes\classic\templates\checkout\_partials\steps\unreachable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f474437f0a1f2_83663363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71263a940e68150e8570ad6434d11678241c0998' => 
    array (
      0 => 'C:\\laragon\\www\\begkshop\\themes\\classic\\templates\\checkout\\_partials\\steps\\unreachable.tpl',
      1 => 1598505983,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f474437f0a1f2_83663363 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3314514335f474437f08327_02105386', 'step');
?>

<?php }
/* {block 'step'} */
class Block_3314514335f474437f08327_02105386 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'step' => 
  array (
    0 => 'Block_3314514335f474437f08327_02105386',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section class="checkout-step -unreachable" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
">
    <h1 class="step-title h3">
      <span class="step-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

    </h1>
  </section>
<?php
}
}
/* {/block 'step'} */
}
