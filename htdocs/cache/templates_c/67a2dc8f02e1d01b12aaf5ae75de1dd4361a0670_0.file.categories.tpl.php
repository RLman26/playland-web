<?php
/* Smarty version 4.3.4, created on 2025-11-05 19:40:49
  from '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/templates/Cobalt/suggestions/categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_690b9a31d3e9c9_64896430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67a2dc8f02e1d01b12aaf5ae75de1dd4361a0670' => 
    array (
      0 => '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/templates/Cobalt/suggestions/categories.tpl',
      1 => 1762362226,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_690b9a31d3e9c9_64896430 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
	<div class="card-header header-theme"><?php echo $_smarty_tpl->tpl_vars['CATEGORIES']->value;?>
</div>
	<div class="card-body">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIES_LIST']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
		  <a class="btn btn-block btn-theme" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
	  	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
</div><?php }
}
