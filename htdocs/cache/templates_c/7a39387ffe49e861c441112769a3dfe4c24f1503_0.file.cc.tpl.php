<?php
/* Smarty version 4.3.4, created on 2025-11-05 18:10:15
  from '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/templates/Cobalt/template_settings/settings_pages/cc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_690b84f746c4d1_06723834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a39387ffe49e861c441112769a3dfe4c24f1503' => 
    array (
      0 => '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/templates/Cobalt/template_settings/settings_pages/cc.tpl',
      1 => 1762362223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_690b84f746c4d1_06723834 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['custom_code_settings']->value, 'setting', false, NULL, 'custom_code', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['setting']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['setting']->value) {
$_smarty_tpl->tpl_vars['setting']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_custom_code']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_custom_code']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_custom_code']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_custom_code']->value['total'];
?>
<label><?php echo $_smarty_tpl->tpl_vars[''.(mb_strtoupper((string) $_smarty_tpl->tpl_vars['setting']->value ?? '', 'UTF-8'))]->value;?>
</label><span class="float-right"><?php echo $_smarty_tpl->tpl_vars['BLANK']->value;?>
</span>
<textarea name="<?php echo $_smarty_tpl->tpl_vars['setting']->value;?>
" rows="8" class="form-control"><?php echo $_smarty_tpl->tpl_vars[''.(mb_strtoupper((string) $_smarty_tpl->tpl_vars['setting']->value ?? '', 'UTF-8')).'_VALUE']->value;?>
</textarea>
<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_custom_code']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_custom_code']->value['last'] : null)) {?><br /><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
