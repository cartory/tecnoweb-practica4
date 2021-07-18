<?php
/* Smarty version 3.1.33, created on 2021-02-09 00:06:23
  from '/home/grupo20sa/agenda3c/templates/bienvenido.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6021d1ff270b47_51917330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b4fdb812712b0f2a758428be187af58f116658a' => 
    array (
      0 => '/home/grupo20sa/agenda3c/templates/bienvenido.html',
      1 => 1612828999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6021d1ff270b47_51917330 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15794859286021d1ff26bc67_92669917', 'contenido');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.html");
}
/* {block 'contenido'} */
class Block_15794859286021d1ff26bc67_92669917 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenido' => 
  array (
    0 => 'Block_15794859286021d1ff26bc67_92669917',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php echo $_smarty_tpl->tpl_vars['contenido']->value;?>


<?php
}
}
/* {/block 'contenido'} */
}
