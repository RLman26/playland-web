<?php
/* Smarty version 4.3.4, created on 2025-11-05 18:06:12
  from '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/templates/Cobalt/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_690b840443ada0_08289637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f35d89351f8f0308158e62ef9c98d195c68c3deb' => 
    array (
      0 => '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/templates/Cobalt/header.tpl',
      1 => 1762362217,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header-top.tpl' => 1,
  ),
),false)) {
function content_690b840443ada0_08289637 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </head>
	<body>
    <?php if (((isset($_smarty_tpl->tpl_vars['THEME_LOADING_ANIMATION']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_LOADING_ANIMATION']->value, $tmp) > 2)) {?>
        <div class="load-wrapper"><div class="loader"><div class="loader-inner line-scale"><div></div><div></div><div></div><div></div><div></div></div></div></div>
    <?php }
}
}
