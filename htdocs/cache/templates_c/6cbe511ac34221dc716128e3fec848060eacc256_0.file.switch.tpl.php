<?php
/* Smarty version 4.3.4, created on 2025-11-05 18:10:15
  from '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/templates/Cobalt/template_settings/settings_pages/parts/switch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_690b84f7376285_28134686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6cbe511ac34221dc716128e3fec848060eacc256' => 
    array (
      0 => '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/templates/Cobalt/template_settings/settings_pages/parts/switch.tpl',
      1 => 1762362224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_690b84f7376285_28134686 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-group custom-control custom-switch">
    <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="no">
    <input id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" type="checkbox" class="custom-control-input" value="yes" <?php if ($_smarty_tpl->tpl_vars[''.(mb_strtoupper((string) $_smarty_tpl->tpl_vars['name']->value ?? '', 'UTF-8')).'_VALUE']->value == 'yes') {?>checked<?php }?>>
    <label class="custom-control-label" for="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars[''.(mb_strtoupper((string) $_smarty_tpl->tpl_vars['name']->value ?? '', 'UTF-8'))]->value;?>
</label>

    <?php if ($_smarty_tpl->tpl_vars['right']->value !== "no") {?><span class="float-right"><?php echo $_smarty_tpl->tpl_vars['right']->value;?>
</span><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['last']->value !== "yes") {?><br /><?php }?>
</div><?php }
}
