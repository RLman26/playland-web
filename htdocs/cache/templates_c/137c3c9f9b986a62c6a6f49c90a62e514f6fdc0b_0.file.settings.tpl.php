<?php
/* Smarty version 4.3.4, created on 2025-11-05 18:21:04
  from '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/templates/DefaultRevamp/template_settings/settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_690b87809372b0_10265138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '137c3c9f9b986a62c6a6f49c90a62e514f6fdc0b' => 
    array (
      0 => '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/templates/DefaultRevamp/template_settings/settings.tpl',
      1 => 1762361944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_690b87809372b0_10265138 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="" method="post">
    <div class="form-group">
        <label for="inputDarkMode"><?php echo $_smarty_tpl->tpl_vars['DARK_MODE']->value;?>
</label>
        <select name="darkMode" class="form-control" id="inputDarkMode">
            <option value="0" <?php if ($_smarty_tpl->tpl_vars['DARK_MODE_VALUE']->value == '0') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['DISABLED']->value;?>
</option>
            <option value="1" <?php if ($_smarty_tpl->tpl_vars['DARK_MODE_VALUE']->value == '1') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['ENABLED']->value;?>
</option>
        </select>
    </div>
    <div class="form-group">
        <label for="inputNavbarColour"><?php echo $_smarty_tpl->tpl_vars['NAVBAR_COLOUR']->value;?>
</label>
        <select name="navbarColour" class="form-control" id="inputNavbarColour">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NAVBAR_COLOURS']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['selected']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    </div>
    <div class="form-group">
        <label for="inputHomeCustomContent"><?php echo $_smarty_tpl->tpl_vars['HOME_CUSTOM_CONTENT']->value;?>
</label>
        <textarea name="home_custom_content" id="inputHomeCustomContent"></textarea>
    </div>
    <div class="form-group">
        <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
        <input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
">
    </div>
</form><?php }
}
