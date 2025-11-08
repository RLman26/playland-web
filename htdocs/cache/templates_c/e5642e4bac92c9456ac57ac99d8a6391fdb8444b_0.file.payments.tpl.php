<?php
/* Smarty version 4.3.4, created on 2025-11-05 18:18:34
  from '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/panel_templates/Default/tebex/payments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_690b86ea8ed357_64144365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5642e4bac92c9456ac57ac99d8a6391fdb8444b' => 
    array (
      0 => '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/panel_templates/Default/tebex/payments.tpl',
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
function content_690b86ea8ed357_64144365 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['PAYMENTS']->value;?>
</h1>
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['BUYCRAFT']->value;?>
</li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['PAYMENTS']->value;?>
</li>
                    </ol>
                </div>

                <!-- Update Notification -->
                <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <div class="card shadow mb-4">
                    <div class="card-body">
                        <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['NEW_PAYMENT_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['NEW_PAYMENT']->value;?>
</a>
                        <hr />

                        <!-- Success and Error Alerts -->
                        <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <?php if ((isset($_smarty_tpl->tpl_vars['NO_PAYMENTS']->value))) {?>
                            <p><?php echo $_smarty_tpl->tpl_vars['NO_PAYMENTS']->value;?>
</p>
                        <?php } else { ?>
                            <div class="table-responsive">
                                <table class="table table-striped dataTables-payments">
                                    <thead>
                                    <tr>
                                        <th><?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
</th>
                                        <th><?php echo $_smarty_tpl->tpl_vars['AMOUNT']->value;?>
</th>
                                        <th><?php echo $_smarty_tpl->tpl_vars['DATE']->value;?>
</th>
                                        <th><?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_PAYMENTS']->value, 'payment');
$_smarty_tpl->tpl_vars['payment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['payment']->value) {
$_smarty_tpl->tpl_vars['payment']->do_else = false;
?>
                                        <tr>
                                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['payment']->value['user_link'];?>
" style="<?php echo $_smarty_tpl->tpl_vars['payment']->value['user_style'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['payment']->value['user_avatar'];?>
" class="rounded" style="max-width:32px;max-height:32px;" alt="<?php echo $_smarty_tpl->tpl_vars['payment']->value['username'];?>
" /> <?php echo $_smarty_tpl->tpl_vars['payment']->value['username'];?>
</a></td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['payment']->value['amount'];?>
</td>
                                            <td data-sort="<?php echo $_smarty_tpl->tpl_vars['payment']->value['date_unix'];?>
"><?php echo $_smarty_tpl->tpl_vars['payment']->value['date'];?>
</td>
                                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['payment']->value['link'];?>
" class="btn btn-primary btn-sm"><?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
</a></td>
                                        </tr>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tbody>
                                </table>
                            </div>
                        <?php }?>

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
