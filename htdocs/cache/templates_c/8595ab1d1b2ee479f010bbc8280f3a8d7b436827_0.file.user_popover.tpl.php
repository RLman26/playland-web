<?php
/* Smarty version 4.3.4, created on 2025-11-06 20:44:08
  from '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/templates/Cobalt/user_popover.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_690cfa887aaeb1_03052834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8595ab1d1b2ee479f010bbc8280f3a8d7b436827' => 
    array (
      0 => '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/templates/Cobalt/user_popover.tpl',
      1 => 1762362219,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_690cfa887aaeb1_03052834 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="popover-flex">
    <div class="popover-avatar">
        <a href="<?php echo $_smarty_tpl->tpl_vars['PROFILE']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['AVATAR']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
" class="avatar-img popover-img"/></a>
    </div>
    <div class="popover-user-info">
        <div class="popover-username">
            <a class="popover-user username" href="<?php echo $_smarty_tpl->tpl_vars['PROFILE']->value;?>
" style="<?php echo $_smarty_tpl->tpl_vars['STYLE']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['NICKNAME']->value;?>
</a>
            <?php if (count($_smarty_tpl->tpl_vars['GROUPS']->value)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GROUPS']->value, 'group_html');
$_smarty_tpl->tpl_vars['group_html']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group_html']->value) {
$_smarty_tpl->tpl_vars['group_html']->do_else = false;
?> <?php echo $_smarty_tpl->tpl_vars['group']->value;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
                <span class="badge badge-secondary"><?php echo $_smarty_tpl->tpl_vars['GUEST']->value;?>
</div>
            <?php }?>
        </div>
        <?php if ((isset($_smarty_tpl->tpl_vars['REGISTERED']->value))) {
echo $_smarty_tpl->tpl_vars['REGISTERED']->value;?>
<br /><?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['LAST_SEEN']->value))) {
echo $_smarty_tpl->tpl_vars['LAST_SEEN']->value;?>
<br /><?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['TOPICS']->value)) && (isset($_smarty_tpl->tpl_vars['POSTS']->value))) {
echo $_smarty_tpl->tpl_vars['TOPICS']->value;?>
 &bull; <?php echo $_smarty_tpl->tpl_vars['POSTS']->value;
}?>
    </div>
</div><?php }
}
