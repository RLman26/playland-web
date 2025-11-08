<?php
/* Smarty version 4.3.4, created on 2025-11-06 20:44:09
  from '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/templates/Cobalt/forum/profile_tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_690cfa8945e814_17717947',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b934f76121b31ed1791b75ce92e4a50032874dd' => 
    array (
      0 => '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/templates/Cobalt/forum/profile_tab.tpl',
      1 => 1762362233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_690cfa8945e814_17717947 (Smarty_Internal_Template $_smarty_tpl) {
?><div style="color: #FFF; font-size: 1.2rem; font-weight: 500; margin-bottom: 1rem"><?php echo $_smarty_tpl->tpl_vars['PF_LATEST_POSTS_TITLE']->value;?>
</div>
<?php if ((isset($_smarty_tpl->tpl_vars['NO_POSTS']->value))) {?>
    <?php echo $_smarty_tpl->tpl_vars['NO_POSTS']->value;?>

<?php } else { ?> 

<div class="card-columns-profile">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PF_LATEST_POSTS']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
        <div class="card">
            <div class="card-header" style="border-bottom: 3px solid rgba(255,255,255,0.05) !important;"><a class="white-link" href="<?php echo $_smarty_tpl->tpl_vars['post']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</a> <span class="float-right" rel="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['post']->value['date_full'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['date_friendly'];?>
</span></div>
            <div class="card-body">
                <?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>

            </div>
        </div>


<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<?php }
}
}
