<?php
/* Smarty version 4.3.4, created on 2025-11-05 18:02:36
  from '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/panel_templates/Default/scripts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_690b832cf3c124_70689790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a3307560f08606c223d36275b56e3c8956f96fa' => 
    array (
      0 => '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/panel_templates/Default/scripts.tpl',
      1 => 1762361944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_690b832cf3c124_70689790 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TEMPLATE_JS']->value, 'script');
$_smarty_tpl->tpl_vars['script']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['script']->value) {
$_smarty_tpl->tpl_vars['script']->do_else = false;
echo $_smarty_tpl->tpl_vars['script']->value;?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php if ((isset($_smarty_tpl->tpl_vars['NEW_UPDATE']->value))) {
if ($_smarty_tpl->tpl_vars['NEW_UPDATE_URGENT']->value != true) {
echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function () {
        $('#closeUpdate').click(function (event) {
            event.preventDefault();

            let expiry = new Date();
            let length = 3600000;
            expiry.setTime(expiry.getTime() + length);

            $.cookie('update-alert-closed', 'true', { path: '/', expires: expiry });
        });

        if ($.cookie('update-alert-closed') === 'true') {
            $('#updateAlert').hide();
        }
    });
<?php echo '</script'; ?>
>
<?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['DEBUGBAR_HTML']->value))) {
echo $_smarty_tpl->tpl_vars['DEBUGBAR_HTML']->value;?>

<?php }
}
}
