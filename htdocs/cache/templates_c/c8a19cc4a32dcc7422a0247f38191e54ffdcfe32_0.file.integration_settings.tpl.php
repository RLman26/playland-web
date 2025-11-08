<?php
/* Smarty version 4.3.4, created on 2025-11-05 20:48:44
  from '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/panel_templates/Default/integrations/discord/integration_settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_690baa1c8f3e68_56016247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8a19cc4a32dcc7422a0247f38191e54ffdcfe32' => 
    array (
      0 => '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/panel_templates/Default/integrations/discord/integration_settings.tpl',
      1 => 1762361945,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_690baa1c8f3e68_56016247 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="" method="post">
    <div class="form-group">
        <label for="inputLinkMethod"><?php echo $_smarty_tpl->tpl_vars['LINK_METHOD']->value;?>
</label>
        <select name="link_method" class="form-control" id="inputLinkMethod">
            <option value="bot" <?php if ($_smarty_tpl->tpl_vars['LINK_METHOD_VALUE']->value == "bot") {?>
                selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['DISCORD_BOT']->value;?>
</option>
            <option value="oauth" <?php if ($_smarty_tpl->tpl_vars['LINK_METHOD_VALUE']->value == "oauth") {?>
                selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['OAUTH']->value;?>
</option>
        </select>
    </div>
    <div class="form-group">
        <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
        <input type="hidden" name="action" value="integration_settings">
        <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
" class="btn btn-primary">
    </div>
</form><?php }
}
