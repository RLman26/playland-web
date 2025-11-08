<?php
/* Smarty version 4.3.4, created on 2025-11-05 20:43:43
  from '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/panel_templates/Default/forms/forms.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_690ba8ef8bb1b9_39994004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '169cb042b7dbaa59214694bf2d55067ab6b46fb2' => 
    array (
      0 => '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/panel_templates/Default/forms/forms.tpl',
      1 => 1762371604,
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
function content_690ba8ef8bb1b9_39994004 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['FORMS']->value;?>
</h1>
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['FORMS']->value;?>
</li>
                    </ol>
                </div>

                <!-- Update Notification -->
                <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <div class="card shadow mb-4">
                    <div class="card-body">
                        <h3 style="display:inline;"><?php echo $_smarty_tpl->tpl_vars['FORMS']->value;?>
</h3>
                        <span class="float-md-right"><a href="<?php echo $_smarty_tpl->tpl_vars['NEW_FORM_LINK']->value;?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['NEW_FORM']->value;?>
</a></span>
                        <hr>
                        
                        <!-- Success and Error Alerts -->
                        <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <b><?php echo $_smarty_tpl->tpl_vars['FORM']->value;?>
</b>
                            </div>
                            <div class="col-md-6">
                                <span class="float-md-right"><b><?php echo $_smarty_tpl->tpl_vars['ACTION']->value;?>
</b></span>
                            </div>
                        </div>
                        <?php if (count($_smarty_tpl->tpl_vars['FORMS_LIST']->value)) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FORMS_LIST']->value, 'form');
$_smarty_tpl->tpl_vars['form']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['form']->value) {
$_smarty_tpl->tpl_vars['form']->do_else = false;
?>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['form']->value['edit_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['form']->value['name'];?>
</a>
                                </div>
                                <div class="col-md-6">
                                    <div class="float-md-right">
                                        <a class="btn btn-warning btn-sm" href="<?php echo $_smarty_tpl->tpl_vars['form']->value['edit_link'];?>
"><i class="fas fa-edit fa-fw"></i></a>
                                        <button class="btn btn-danger btn-sm" type="button" onclick="showDeleteModal('<?php echo $_smarty_tpl->tpl_vars['form']->value['delete_link'];?>
')"><i class="fas fa-trash fa-fw"></i></button>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['NONE_FORMS_DEFINED']->value;?>

                        <?php }?>
                    </div>
                </div>
                </br>
                <div class="card">
                    <div class="card-body">
                        <h3 style="display:inline;"><?php echo $_smarty_tpl->tpl_vars['STATUSES']->value;?>
</h3>
                        <span class="float-md-right"><a href="<?php echo $_smarty_tpl->tpl_vars['NEW_STATUS_LINK']->value;?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['NEW_STATUS']->value;?>
</a></span>
                        <hr>
                        
                        <div class="row">
                            <div class="col-md-4">
                                <b><?php echo $_smarty_tpl->tpl_vars['STATUS']->value;?>
</b>
                            </div>
                            <div class="col-md-4">
                                <b><?php echo $_smarty_tpl->tpl_vars['MARKED_AS_OPEN']->value;?>
</b>
                            </div>
                            <div class="col-md-4">
                                <span class="float-md-right"><b><?php echo $_smarty_tpl->tpl_vars['ACTION']->value;?>
</b></span>
                            </div>
                        </div>
                        <?php if (count($_smarty_tpl->tpl_vars['STATUS_LIST']->value)) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['STATUS_LIST']->value, 'status');
$_smarty_tpl->tpl_vars['status']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['status']->value) {
$_smarty_tpl->tpl_vars['status']->do_else = false;
?>
                            <div class="row">
                                <div class="col-md-4">
                                    <?php echo $_smarty_tpl->tpl_vars['status']->value['html'];?>

                                </div>
                                <div class="col-md-4">
                                    <?php if ($_smarty_tpl->tpl_vars['status']->value['open'] == 1) {?><i class="fa fa-check-circle text-success"></i><?php } else { ?><i class="fa fa-times-circle text-danger"></i><?php }?>
                                </div>
                                <div class="col-md-4">
                                    <div class="float-md-right">
                                        <a class="btn btn-warning btn-sm" href="<?php echo $_smarty_tpl->tpl_vars['status']->value['edit_link'];?>
"><i class="fas fa-edit fa-fw"></i></a>
                                        <?php if ($_smarty_tpl->tpl_vars['status']->value['id'] != 1 && $_smarty_tpl->tpl_vars['status']->value['id'] != 2) {?><button class="btn btn-danger btn-sm" type="button" onclick="showDeleteStatusModal('<?php echo $_smarty_tpl->tpl_vars['status']->value['delete_link'];?>
')"><i class="fas fa-trash fa-fw"></i></button><?php } else { ?><button class="btn btn-danger btn-sm" type="button"><i class="fa fa-lock fa-fw"></i></button><?php }?>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['NONE_FORMS_DEFINED']->value;?>

                        <?php }?>

                        <?php if (!(isset($_smarty_tpl->tpl_vars['PDS']->value))) {?>
                            <center>
                                <p>Forms Module by <a href="https://partydragen.com/" target="_blank">Partydragen</a> and my <a href="https://partydragen.com/supporters/" target="_blank">Sponsors</a></br>Support on <a href="https://discord.gg/TtH6tpp" target="_blank">Discord</a></br>
                                    <a class="ml-1" href="https://partydragen.com/suggestions/" target="_blank" data-toggle="tooltip"
                                       data-placement="top" title="You can submit suggestions here"><i class="fa-solid fa-thumbs-up text-warning"></i></a>
                                    <a class="ml-1" href="https://discord.gg/TtH6tpp" target="_blank" data-toggle="tooltip"
                                       data-placement="top" title="Discord"><i class="fab fa-discord fa-fw text-discord"></i></a>
                                    <a class="ml-1" href="https://partydragen.com/" target="_blank" data-toggle="tooltip"
                                       data-placement="top" title="Website"><i class="fas fa-globe fa-fw text-primary"></i></a>
                                    <a class="ml-1" href="https://www.patreon.com/partydragen" target="_blank" data-toggle="tooltip"
                                       data-placement="top" title="Support the development on Patreon"><i class="fas fa-heart fa-fw text-danger"></i></a>
                                </p>
                            </center>
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

        <!-- End Content Wrapper -->
    </div>

    <!-- End Wrapper -->
</div>

    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['ARE_YOU_SURE']->value;?>
</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo $_smarty_tpl->tpl_vars['CONFIRM_DELETE_FORM']->value;?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['NO']->value;?>
</button>
                    <a href="#" id="deleteLink" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['YES']->value;?>
</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="deleteStatusModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['ARE_YOU_SURE']->value;?>
</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo $_smarty_tpl->tpl_vars['CONFIRM_DELETE_STATUS']->value;?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['NO']->value;?>
</button>
                    <a href="#" id="deleteStatusLink" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['YES']->value;?>
</a>
                </div>
            </div>
        </div>
    </div>

<?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript">
    function showDeleteModal(id){
        $('#deleteLink').attr('href', id);
        $('#deleteModal').modal().show();
    }
    function showDeleteStatusModal(id){
        $('#deleteStatusLink').attr('href', id);
        $('#deleteStatusModal').modal().show();
    }
<?php echo '</script'; ?>
>

</body>
</html><?php }
}
