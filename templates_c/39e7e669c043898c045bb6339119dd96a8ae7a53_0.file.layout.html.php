<?php
/* Smarty version 3.1.33, created on 2021-02-09 00:06:23
  from '/home/grupo20sa/agenda3c/templates/layout.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6021d1ff3b0095_87041989',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39e7e669c043898c045bb6339119dd96a8ae7a53' => 
    array (
      0 => '/home/grupo20sa/agenda3c/templates/layout.html',
      1 => 1612828950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6021d1ff3b0095_87041989 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/usr/share/php/Smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang=es>
<head>
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
    <style type="text/css">
        .active{
            text-decoration:none;
            color:blue;
        }
        header{
            height:30px;
            width:100%;
            color:black;
            background-color: buttonface;         
        }
        footer{
            height:30px;
            width:100%;
            color:black;
            background-color: buttonface;         
        }       
    </style>
</head>
<body>
    <header>      
        <nav>   
        <?php
$__section_pos_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['menu']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_pos_0_total = $__section_pos_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_pos'] = new Smarty_Variable(array());
if ($__section_pos_0_total !== 0) {
for ($__section_pos_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index'] = 0; $__section_pos_0_iteration <= $__section_pos_0_total; $__section_pos_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index']++){
?>
            <?php if ($_smarty_tpl->tpl_vars['path']->value == $_smarty_tpl->tpl_vars['path']->value[$_smarty_tpl->tpl_vars['menu']->value][(isset($_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index'] : null)]['url']) {?>
               <a  class='active' href=<?php echo $_smarty_tpl->tpl_vars['path']->value;
echo $_smarty_tpl->tpl_vars['menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index'] : null)]['url'];?>
><?php echo $_smarty_tpl->tpl_vars['menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index'] : null)]['name'];?>
</a>   
            <?php } else { ?>
                <a  href=<?php echo $_smarty_tpl->tpl_vars['path']->value;
echo $_smarty_tpl->tpl_vars['menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index'] : null)]['url'];?>
><?php echo $_smarty_tpl->tpl_vars['menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index'] : null)]['name'];?>
</a>
            <?php }?>
           
        <?php
}
}
?>               
        </nav>
    </header>
   
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13208824386021d1ff355e91_69688514', 'contenido');
?>

   
    <footer>
    Copyrigth (c) <?php echo smarty_modifier_date_format(time(),'%Y');?>

    </footer>
</body>
</html><?php }
/* {block 'contenido'} */
class Block_13208824386021d1ff355e91_69688514 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenido' => 
  array (
    0 => 'Block_13208824386021d1ff355e91_69688514',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'contenido'} */
}
