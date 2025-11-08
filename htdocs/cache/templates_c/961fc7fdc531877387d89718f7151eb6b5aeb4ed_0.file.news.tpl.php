<?php
/* Smarty version 4.3.4, created on 2025-11-05 18:10:15
  from '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/templates/Cobalt/template_settings/settings_pages/news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_690b84f73e87f8_17987066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '961fc7fdc531877387d89718f7151eb6b5aeb4ed' => 
    array (
      0 => '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/templates/Cobalt/template_settings/settings_pages/news.tpl',
      1 => 1762362224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./parts/switch.tpl' => 1,
  ),
),false)) {
function content_690b84f73e87f8_17987066 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./parts/switch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>'news_btn','right'=>'no','last'=>'no'), 0, false);
?>
<label><?php echo $_smarty_tpl->tpl_vars['NEWS_LINK']->value;?>
</label>
<input type='text' name='news_link' value='<?php echo $_smarty_tpl->tpl_vars['NEWS_LINK_VALUE']->value;?>
' class='form-control'><?php }
}
