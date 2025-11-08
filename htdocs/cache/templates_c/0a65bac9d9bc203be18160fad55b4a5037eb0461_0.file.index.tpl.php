<?php
/* Smarty version 4.3.4, created on 2025-11-05 18:06:36
  from '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/panel_templates/Default/tebex/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_690b841c863b06_74506169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a65bac9d9bc203be18160fad55b4a5037eb0461' => 
    array (
      0 => '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/panel_templates/Default/tebex/index.tpl',
      1 => 1762362302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:sidebar.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:includes/update.tpl' => 1,
    'file:includes/alerts.tpl' => 1,
    'file:footer.tpl' => 1,
    'file:scripts.tpl' => 1,
  ),
),false)) {
function content_690b841c863b06_74506169 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body id="page-top">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <?php $_smarty_tpl->_subTemplateRender('file:sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main content -->
        <div id="content">

            <!-- Topbar -->
            <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['BUYCRAFT']->value;?>
</h1>
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['BUYCRAFT']->value;?>
</li>
                    </ol>
                </div>

                <!-- Update Notification -->
                <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <div class="card shadow mb-4">
                    <div class="card-body">
                        <!-- Success and Error Alerts -->
                        <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <form action="" method="post">
                            <div class="form-group">
                                <label for="inputSecretKey"><?php echo $_smarty_tpl->tpl_vars['SERVER_KEY']->value;?>
</label>
                                <span class="badge badge-info" data-html="true" data-toggle="popover" title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
" data-content="<?php echo $_smarty_tpl->tpl_vars['SERVER_KEY_INFO']->value;?>
"><i class="fas fa-question-circle"></i></span>
                                <input id="inputSecretKey" name="server_key" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['SERVER_KEY']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['SERVER_KEY_VALUE']->value;?>
">
                            </div>

                            <div class="form-group">
                                <label for="inputCurrencyFormat"><?php echo $_smarty_tpl->tpl_vars['CURRENCY_FORMAT']->value;?>
</label>
                                <span class="badge badge-info" data-html="true" data-toggle="popover" title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
" data-content="<?php echo $_smarty_tpl->tpl_vars['CURRENCY_FORMAT_INFO']->value;?>
"><i class="fas fa-question-circle"></i></span>
                                <input type="text" class="form-control" id="inputCurrencyFormat" name="currency_format" placeholder="<?php echo $_smarty_tpl->tpl_vars['CURRENCY_FORMAT']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['CURRENCY_FORMAT_VALUE']->value;?>
">
                            </div>

                            <div class="form-group custom-control custom-switch">
                                <input type="checkbox" name="allow_guests" id="inputAllowGuests" class="custom-control-input" <?php if ($_smarty_tpl->tpl_vars['ALLOW_GUESTS_VALUE']->value) {?> checked<?php }?> />
                                <label for="inputAllowGuests" class="custom-control-label"><?php echo $_smarty_tpl->tpl_vars['ALLOW_GUESTS']->value;?>
</label>
                            </div>

                            <div class="form-group custom-control custom-switch">
                                <input type="checkbox" name="home_tab" id="inputHomeTab" class="custom-control-input" <?php if ($_smarty_tpl->tpl_vars['HOME_TAB_VALUE']->value) {?> checked<?php }?> />
                                <label for="inputHomeTab" class="custom-control-label"><?php echo $_smarty_tpl->tpl_vars['HOME_TAB']->value;?>
</label>
                            </div>

                            <div class="form-group">
                                <label for="inputStorePath"><?php echo $_smarty_tpl->tpl_vars['STORE_PATH']->value;?>
</label>
                                <input type="text" class="form-control" id="inputStorePath" name="store_path" placeholder="<?php echo $_smarty_tpl->tpl_vars['STORE_PATH']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['STORE_PATH_VALUE']->value;?>
">
                            </div>

                            <div class="form-group">
                                <label for="inputStoreContent"><?php echo $_smarty_tpl->tpl_vars['STORE_INDEX_CONTENT']->value;?>
</label>
                                <textarea id="inputStoreContent" name="store_content"><?php echo $_smarty_tpl->tpl_vars['STORE_INDEX_CONTENT_VALUE']->value;?>
</textarea>
                            </div>

                            <div class="form-group">
                                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
" class="btn btn-primary">
                            </div>
                        </form>

                    </div>
                </div>

                <!-- Spacing -->
                <div style="height:1rem;"></div>

                <!-- End Page Content -->
            </div>

            <!-- End Main Content -->
        </div>

        <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html>
<?php }
}
