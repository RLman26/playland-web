<?php
/* Smarty version 4.3.4, created on 2025-11-05 18:02:44
  from '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/panel_templates/Default/includes/update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_690b83344b3ab6_05300555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ea53be4fb3a1eceea0fa5e1680e9aa6b6db270a' => 
    array (
      0 => '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/panel_templates/Default/includes/update.tpl',
      1 => 1762361945,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_690b83344b3ab6_05300555 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['NEW_UPDATE']->value))) {?>
    <?php if ($_smarty_tpl->tpl_vars['NEW_UPDATE_URGENT']->value == true) {?>
        <div class="alert bg-danger text-white">
    <?php } else { ?>
        <div class="alert bg-primary text-white alert-dismissible" id="updateAlert">
        <button type="button" class="close" id="closeUpdate" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['NEW_UPDATE']->value;?>
<br />
    <a href="<?php echo $_smarty_tpl->tpl_vars['NAMELESS_UPDATE_LINK']->value;?>
" class="btn btn-info"><?php echo $_smarty_tpl->tpl_vars['NAMELESS_UPDATE']->value;?>
</a>
    <hr style="border-color: rgba(0,0,0,.1)" /> <?php echo $_smarty_tpl->tpl_vars['CURRENT_VERSION']->value;?>

    <br /><?php echo $_smarty_tpl->tpl_vars['NEW_VERSION']->value;?>

    </div>
<?php }
}
}
