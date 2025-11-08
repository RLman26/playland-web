<?php
/* Smarty version 4.3.4, created on 2025-11-05 20:43:14
  from '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/templates/Cobalt/404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_690ba8d29fe5d9_06043836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71e67057e702627d1e48e6a3bef71c8168392044' => 
    array (
      0 => '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/templates/Cobalt/404.tpl',
      1 => 1762362216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header-top.tpl' => 1,
    'file:scripts.tpl' => 1,
  ),
),false)) {
function content_690ba8d29fe5d9_06043836 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<meta name="robots" content="noindex">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card error-card text-center">
                    <div class="card-body">
                        <span class="error-title">404</span>
                        <br />
                        <span><?php echo $_smarty_tpl->tpl_vars['404_TITLE']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>
</span>
                        <br /><br />
                        <div class="row">
                            <div class="col-6">
                                <button class="btn btn-theme float-right"
                                    onclick="javascript:history.go(-1)"><?php echo $_smarty_tpl->tpl_vars['BACK']->value;?>
</button>
                            </div>
                            <div class="col-6">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['SITE_HOME']->value;?>
" class="btn btn-theme float-left"><?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
</a>
                            </div>
                        </div>
                        <br /><?php echo $_smarty_tpl->tpl_vars['ERROR']->value;?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if (!(isset($_smarty_tpl->tpl_vars['EXCLUDE_END_BODY']->value))) {?>
  </body>
  </html>
<?php }
}
}
