<?php
/* Smarty version 4.3.4, created on 2025-11-05 19:40:49
  from '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/templates/Cobalt/suggestions/recent_activity.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_690b9a31d64f93_16335387',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20a12748485d729f420880f8315b6cea7da3758d' => 
    array (
      0 => '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/templates/Cobalt/suggestions/recent_activity.tpl',
      1 => 1762362226,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_690b9a31d64f93_16335387 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
    <div class="card-header header-theme"><?php echo $_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value;?>
</div>
    <div class="card-body">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECENT_ACTIVITY_LIST']->value, 'item', false, NULL, 're', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_re']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_re']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_re']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_re']->value['total'];
?>
            <div class="d-flex">
                <div>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['updated_by_link'];?>
"><img class="avatar-img" style="max-height:50px;max-width:50px;"
                            src="<?php echo $_smarty_tpl->tpl_vars['item']->value['updated_by_avatar'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['updated_by_username'];?>
" /></a>
                </div>
                <div class="flex-grow-1 ml-3">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" class="white-link"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a><br />
                    <span data-toggle="tooltip" data-trigger="hover"
                        data-content="<?php echo $_smarty_tpl->tpl_vars['item']->value['updated'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['updated_rough'];?>
</span><br /><?php echo $_smarty_tpl->tpl_vars['BY']->value;?>
 <a
                        class="<?php echo $_smarty_tpl->tpl_vars['item']->value['updated_by_tag'];?>
 username" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['updated_by_link'];?>
"
                        style="<?php echo $_smarty_tpl->tpl_vars['item']->value['updated_by_style'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['updated_by_username'];?>
</a>
                </div>
            </div>
			<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_re']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_re']->value['last'] : null)) {?><hr /><?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div><?php }
}
