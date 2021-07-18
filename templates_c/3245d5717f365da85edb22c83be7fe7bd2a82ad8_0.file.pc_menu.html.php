<?php
/* Smarty version 3.1.33, created on 2021-02-09 00:25:05
  from '/home/grupo20sa/agenda3c/templates/pc_menu.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6021d661de0e84_39097244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3245d5717f365da85edb22c83be7fe7bd2a82ad8' => 
    array (
      0 => '/home/grupo20sa/agenda3c/templates/pc_menu.html',
      1 => 1612829694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6021d661de0e84_39097244 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13213873796021d661dda633_85568674', 'contenido');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.html");
}
/* {block 'contenido'} */
class Block_13213873796021d661dda633_85568674 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenido' => 
  array (
    0 => 'Block_13213873796021d661dda633_85568674',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h3><?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
</h3>
<?php echo $_smarty_tpl->tpl_vars['contenido']->value;?>


<?php
}
}
/* {/block 'contenido'} */
}
