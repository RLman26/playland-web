<?php
/* Smarty version 4.3.4, created on 2025-11-05 18:02:36
  from '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/panel_templates/Default/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_690b832cf235f2_73277175',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3fc886f8045f3a6acdd3fa6fe175cf49f435eef' => 
    array (
      0 => '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/panel_templates/Default/header.tpl',
      1 => 1762361945,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_690b832cf235f2_73277175 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html<?php if (defined("HTML_CLASS")) {?> <?php echo (defined('HTML_CLASS') ? constant('HTML_CLASS') : null);
}?> lang="<?php if (defined("
    HTML_LANG")) {
echo (defined('HTML_LANG') ? constant('HTML_LANG') : null);
} else { ?>en<?php }?>" <?php if (defined("HTML_RTL") && (defined('HTML_RTL') ? constant('HTML_RTL') : null) == true) {?> dir="rtl" <?php }?>>

    <head>
        <!-- Standard Meta -->
        <meta charset="<?php if (defined(" LANG_CHARSET")) {
echo (defined('LANG_CHARSET') ? constant('LANG_CHARSET') : null);
} else { ?>utf-8<?php }?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

        <title><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
 &bull; <?php echo (defined('SITE_NAME') ? constant('SITE_NAME') : null);?>
</title>

        <?php if ((isset($_smarty_tpl->tpl_vars['FAVICON']->value))) {?>
        <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['FAVICON']->value;?>
" type="image/x-icon" />
        <?php }?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TEMPLATE_CSS']->value, 'css');
$_smarty_tpl->tpl_vars['css']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['css']->value) {
$_smarty_tpl->tpl_vars['css']->do_else = false;
?>
        <?php echo $_smarty_tpl->tpl_vars['css']->value;?>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <?php if ((isset($_smarty_tpl->tpl_vars['DEBUGBAR_JS']->value))) {?>
        <?php echo $_smarty_tpl->tpl_vars['DEBUGBAR_JS']->value;?>

        <?php }?>

    </head>
<?php }
}
