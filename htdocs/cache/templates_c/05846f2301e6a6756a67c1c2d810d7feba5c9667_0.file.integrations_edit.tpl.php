<?php
/* Smarty version 4.3.4, created on 2025-11-05 20:48:44
  from '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/panel_templates/Default/core/integrations_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_690baa1c8caab6_61765104',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05846f2301e6a6756a67c1c2d810d7feba5c9667' => 
    array (
      0 => '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/panel_templates/Default/core/integrations_edit.tpl',
      1 => 1762361944,
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
function content_690baa1c8caab6_61765104 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['INTEGRATIONS']->value;?>
</h1>
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['INTEGRATIONS']->value;?>
</li>
                        </ol>
                    </div>

                    <!-- Update Notification -->
                    <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <div class="card shadow mb-4">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-9">
                                    <h5 style="margin-top: 7px; margin-bottom: 7px;"><?php echo $_smarty_tpl->tpl_vars['EDITING_INTEGRATION']->value;?>
</h5>
                                </div>
                                <div class="col-md-3">
                                    <span class="float-md-right">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['BACK_LINK']->value;?>
" class="btn btn-warning"><?php echo $_smarty_tpl->tpl_vars['BACK']->value;?>
</a>
                                    </span>
                                </div>
                            </div>
                            <hr />

                            <!-- Success and Error Alerts -->
                            <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                            <form role="form" action="" method="post">
                                <div class="form-group custom-control custom-switch">
                                    <input type="hidden" name="enabled" value="0">
                                    <input type="checkbox" name="enabled" class="custom-control-input" id="InputEnabled"
                                        value="1" <?php if ($_smarty_tpl->tpl_vars['ENABLED_VALUE']->value) {?> checked<?php }?>>
                                    <label class="custom-control-label" for="InputEnabled"><?php echo $_smarty_tpl->tpl_vars['ENABLED']->value;?>
</label>
                                </div>
                                <div class="form-group custom-control custom-switch">
                                    <input type="hidden" name="can_unlink" value="0">
                                    <input type="checkbox" name="can_unlink" class="custom-control-input"
                                        id="InputCanUnlink" value="1" <?php if ($_smarty_tpl->tpl_vars['CAN_UNLINK_VALUE']->value) {?> checked<?php }?>>
                                    <label class="custom-control-label"
                                        for="InputCanUnlink"><?php echo $_smarty_tpl->tpl_vars['CAN_UNLINK_INTEGRATION']->value;?>
</label>
                                </div>
                                <div class="form-group custom-control custom-switch">
                                    <input type="hidden" name="required" value="0">
                                    <input type="checkbox" name="required" class="custom-control-input"
                                        id="InputRequired" value="1" <?php if ($_smarty_tpl->tpl_vars['REQUIRED_VALUE']->value) {?> checked<?php }?>>
                                    <label class="custom-control-label"
                                        for="InputRequired"><?php echo $_smarty_tpl->tpl_vars['REQUIRE_INTEGRATION']->value;?>
</label>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                    <input type="hidden" name="action" value="general_settings">
                                    <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>

                    <?php if ((isset($_smarty_tpl->tpl_vars['SETTINGS_TEMPLATE']->value))) {?>
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['SETTINGS_TEMPLATE']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                            </div>
                        </div>
                    <?php }?>

                    <!-- Spacing -->
                    <div style="height:1rem;"></div>

                    <!-- End Page Content -->
                </div>

                <!-- End Main Content -->
            </div>

            <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <!-- End Content Wrapper -->
        </div>

        <!-- End Wrapper -->
    </div>

    <?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>

</html><?php }
}
