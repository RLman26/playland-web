<?php
/* Smarty version 4.3.4, created on 2025-11-05 18:10:15
  from '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/templates/Cobalt/template_settings/settings_pages/store-box.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_690b84f7405858_74592765',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ad165bbdd664a9d47ab38e87926ff82e46f3eb2' => 
    array (
      0 => '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/templates/Cobalt/template_settings/settings_pages/store-box.tpl',
      1 => 1762362224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./parts/switch.tpl' => 1,
    'file:./parts/image_uploader.tpl' => 1,
  ),
),false)) {
function content_690b84f7405858_74592765 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card img-card">
<i class="fas fa-info-circle"></i> <b><?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
</b><br>
<?php echo $_smarty_tpl->tpl_vars['STORE_BOX_NOTE']->value;?>

</div>

<?php $_smarty_tpl->_subTemplateRender("file:./parts/switch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>'store_box_enable','right'=>'no','last'=>'no'), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./parts/image_uploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>'store_box_img'), 0, false);
?>

<label><?php echo $_smarty_tpl->tpl_vars['STORE_BOX_TITLE']->value;?>
</label>
<input type='text' name='store_box_title' value='<?php echo $_smarty_tpl->tpl_vars['STORE_BOX_TITLE_VALUE']->value;?>
' class='form-control'><br />

<label><?php echo $_smarty_tpl->tpl_vars['STORE_BOX_SUBTITLE']->value;?>
</label>
<input type='text' name='store_box_subtitle' value='<?php echo $_smarty_tpl->tpl_vars['STORE_BOX_SUBTITLE_VALUE']->value;?>
' class='form-control'><br />

<label><?php echo $_smarty_tpl->tpl_vars['STORE_BOX_ICON']->value;?>
</label>
<input type='text' name='store_box_icon' value='<?php echo $_smarty_tpl->tpl_vars['STORE_BOX_ICON_VALUE']->value;?>
' class='form-control'><br />

<label><?php echo $_smarty_tpl->tpl_vars['STORE_BOX_LINK']->value;?>
</label>
<input type='text' name='store_box_link' value='<?php echo $_smarty_tpl->tpl_vars['STORE_BOX_LINK_VALUE']->value;?>
' class='form-control'><?php }
}
