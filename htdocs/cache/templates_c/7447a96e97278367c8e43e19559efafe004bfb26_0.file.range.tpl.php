<?php
/* Smarty version 4.3.4, created on 2025-11-05 18:10:15
  from '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/templates/Cobalt/template_settings/settings_pages/parts/range.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_690b84f73db504_07691960',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7447a96e97278367c8e43e19559efafe004bfb26' => 
    array (
      0 => '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/templates/Cobalt/template_settings/settings_pages/parts/range.tpl',
      1 => 1762362224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_690b84f73db504_07691960 (Smarty_Internal_Template $_smarty_tpl) {
?><label><?php echo $_smarty_tpl->tpl_vars[''.(mb_strtoupper((string) $_smarty_tpl->tpl_vars['name']->value ?? '', 'UTF-8'))]->value;?>
</label><?php if ($_smarty_tpl->tpl_vars['right']->value !== "no") {?><span class="float-right"><?php echo $_smarty_tpl->tpl_vars['right']->value;?>
</span><?php }?><br />
<input type="range" name='<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
' value="<?php echo $_smarty_tpl->tpl_vars[''.(mb_strtoupper((string) $_smarty_tpl->tpl_vars['name']->value ?? '', 'UTF-8')).'_VALUE']->value;?>
" min="0" max="1" step="0.05" oninput="this.nextElementSibling.value = this.value">
<output><?php echo $_smarty_tpl->tpl_vars[''.(mb_strtoupper((string) $_smarty_tpl->tpl_vars['name']->value ?? '', 'UTF-8')).'_VALUE']->value;?>
</output>
<?php if ($_smarty_tpl->tpl_vars['last']->value !== "yes") {?><br /><br /><?php }
}
}
