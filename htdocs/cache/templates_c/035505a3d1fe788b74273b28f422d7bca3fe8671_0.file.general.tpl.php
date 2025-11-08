<?php
/* Smarty version 4.3.4, created on 2025-11-05 18:10:15
  from '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/templates/Cobalt/template_settings/settings_pages/general.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_690b84f7386d07_85527146',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '035505a3d1fe788b74273b28f422d7bca3fe8671' => 
    array (
      0 => '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/templates/Cobalt/template_settings/settings_pages/general.tpl',
      1 => 1762362223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./parts/switch.tpl' => 3,
    'file:./parts/image_uploader.tpl' => 1,
  ),
),false)) {
function content_690b84f7386d07_85527146 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./parts/switch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>'serve_lib_cdn','right'=>$_smarty_tpl->tpl_vars['SERVE_LIB_CDN_2']->value,'last'=>'no'), 0, false);
?>

<label><?php echo $_smarty_tpl->tpl_vars['P_COLOR']->value;?>
</label>
<div class="input-group color">
    <span class="input-group-prepend">
        <span class="input-group-text colorpicker-input-addon"><i></i></span>
    </span>
    <input type="text" name="p_color" value="<?php echo $_smarty_tpl->tpl_vars['P_COLOR_VALUE']->value;?>
" class="form-control" />
</div>
<br />

<label><?php echo $_smarty_tpl->tpl_vars['WEBP_COMPRESSION']->value;?>
</label><br />
<div class="card img-card">
    <i class="fas fa-info-circle"></i> <b><?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
</b><br />
    <?php echo $_smarty_tpl->tpl_vars['WEBP_COMPRESSION_2']->value;?>
<br />
    <br />
    <b><?php echo $_smarty_tpl->tpl_vars['NOTE']->value;?>
</b> <?php echo $_smarty_tpl->tpl_vars['WEBP_COMPRESSION_3']->value;?>

</div>
<input type="text" name="webp_compression" value="<?php echo $_smarty_tpl->tpl_vars['WEBP_COMPRESSION_VALUE']->value;?>
" class="form-control" /><br />

<?php $_smarty_tpl->_subTemplateRender("file:./parts/image_uploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>'home_seo_image'), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./parts/switch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>'full_body_avatars','right'=>'no','last'=>'no'), 0, true);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./parts/switch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>'winter','right'=>'no','last'=>'yes'), 0, true);
}
}
