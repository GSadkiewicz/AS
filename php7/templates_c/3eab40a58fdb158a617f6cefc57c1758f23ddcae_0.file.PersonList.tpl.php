<?php
/* Smarty version 3.1.30, created on 2022-11-29 16:55:06
  from "D:\xampp\htdocs\php7\app\views\PersonList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63862b5a70c782_92696619',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3eab40a58fdb158a617f6cefc57c1758f23ddcae' => 
    array (
      0 => 'D:\\xampp\\htdocs\\php7\\app\\views\\PersonList.tpl',
      1 => 1669737299,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_63862b5a70c782_92696619 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122754283863862b5a69a2c5_93142813', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7725240963862b5a70bdf9_11236053', 'bottom');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_122754283863862b5a69a2c5_93142813 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'top'} */
/* {block 'bottom'} */
class Block_7725240963862b5a70bdf9_11236053 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
<a class="pure-button button-success" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personNew">+ Oblicz ratę</a>
</div>	

<table id="tab_people" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>Kwota</th>
		<th>Procent</th>
		<th>Lata</th>
		<th>Miesięczna rata</th>
	</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['people']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['p']->value["kwota"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["procent"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["lata"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["wynik"];?>
</td><td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personEdit&id=<?php echo $_smarty_tpl->tpl_vars['p']->value['id_wynik'];?>
">Edytuj</a>&nbsp;<a class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personDelete&id=<?php echo $_smarty_tpl->tpl_vars['p']->value['id_wynik'];?>
">Usuń</a></td></tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</tbody>
</table>

<?php
}
}
/* {/block 'bottom'} */
}
