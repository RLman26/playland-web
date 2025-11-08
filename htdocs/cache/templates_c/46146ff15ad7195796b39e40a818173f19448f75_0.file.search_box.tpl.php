<?php
/* Smarty version 4.3.4, created on 2025-11-05 18:14:54
  from '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/templates/Cobalt/forum/search_box.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_690b860eea1f32_23807474',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46146ff15ad7195796b39e40a818173f19448f75' => 
    array (
      0 => '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/templates/Cobalt/forum/search_box.tpl',
      1 => 1762362233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_690b860eea1f32_23807474 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="form-horizontal" role="form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['form_submit']->value;?>
">
    <div class="input-group">
        <input type="text" class="form-control input-sm" name="forum_search" placeholder="<?php echo $_smarty_tpl->tpl_vars['SEARCH']->value;?>
" minlength="3"
            maxlength="128">
        <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
        <span class="input-group-btn">
            <button type="submit" class="btn btn-theme">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </span>
    </div>
</form><?php }
}
