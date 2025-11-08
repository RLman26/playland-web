<?php
/* Smarty version 4.3.4, created on 2025-11-07 05:38:16
  from '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/templates/Cobalt/cookies.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_690d77b8de6813_71350508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd761d1b5e4e68f7a97a1b7f34589a25f898c187' => 
    array (
      0 => '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/templates/Cobalt/cookies.tpl',
      1 => 1762362217,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_690d77b8de6813_71350508 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="card">
        <div class="card-header header-theme"><?php echo $_smarty_tpl->tpl_vars['COOKIE_NOTICE_HEADER']->value;?>
</div>
        <div class="card-body">
            <?php echo $_smarty_tpl->tpl_vars['COOKIE_NOTICE']->value;?>
<br />
            <button class="btn btn-theme mt-4 d-inline-block" onclick="configureCookies()"><?php echo $_smarty_tpl->tpl_vars['UPDATE_SETTINGS']->value;?>
</button>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
