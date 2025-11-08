<?php
/* Smarty version 4.3.4, created on 2025-11-05 20:43:48
  from '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/panel_templates/Default/forms/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_690ba8f4005223_30774939',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f0259384f65803aa55ad44f806fde1ab2b1fe42' => 
    array (
      0 => '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/panel_templates/Default/forms/form.tpl',
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
function content_690ba8f4005223_30774939 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <h5 style="display:inline"><?php echo $_smarty_tpl->tpl_vars['EDITING_FORM']->value;?>
</h5>
                        <div class="float-md-right">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['BACK_LINK']->value;?>
" class="btn btn-warning"><?php echo $_smarty_tpl->tpl_vars['BACK']->value;?>
</a>
                        </div>
                        <hr>

                        <ul class="nav nav-tabs">
                          <li class="nav-item">
                            <a class="nav-link active"><?php echo $_smarty_tpl->tpl_vars['GENERAL_SETTINGS']->value;?>
</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['FIELDS_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['FIELDS']->value;?>
</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PERMISSIONS_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['PERMISSIONS']->value;?>
</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['STATUSES_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['STATUSES']->value;?>
</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['LIMITS_AND_REQUIREMENTS_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LIMITS_AND_REQUIREMENTS']->value;?>
</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['ADVANCED_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['ADVANCED']->value;?>
</a>
                          </li>
                        </ul>
                        
                        </br>
                        
                        <!-- Success and Error Alerts -->
                        <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        
                        <form role="form" action="" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="InputName"><?php echo $_smarty_tpl->tpl_vars['FORM_NAME']->value;?>
</label>
                                        <input type="text" name="form_name" class="form-control" id="InputName" placeholder="<?php echo $_smarty_tpl->tpl_vars['FORM_NAME']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['FORM_NAME_VALUE']->value;?>
">
                                    </div>
                                    <div class="form-group">
                                        <label for="InputUrl"><?php echo $_smarty_tpl->tpl_vars['FORM_URL']->value;?>
</label>
                                        <input type="text" name="form_url" class="form-control" id="InputURL" placeholder="<?php echo $_smarty_tpl->tpl_vars['FORM_URL']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['FORM_URL_VALUE']->value;?>
">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="InputUrl"><?php echo $_smarty_tpl->tpl_vars['FORM_ICON']->value;?>
</label>
                                        <input type="text" name="form_icon" class="form-control" id="InputIcon" placeholder="<?php echo $_smarty_tpl->tpl_vars['FORM_ICON']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['FORM_ICON_VALUE']->value;?>
">
                                    </div>
                                    <div class="form-group">
                                        <label for="link_location"><?php echo $_smarty_tpl->tpl_vars['FORM_LINK_LOCATION']->value;?>
</label>
                                        <select class="form-control" id="link_location" name="link_location">
                                            <option value="1"<?php if ($_smarty_tpl->tpl_vars['LINK_LOCATION_VALUE']->value == 1) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LINK_NAVBAR']->value;?>
</option>
                                            <option value="2"<?php if ($_smarty_tpl->tpl_vars['LINK_LOCATION_VALUE']->value == 2) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LINK_MORE']->value;?>
</option>
                                            <option value="3"<?php if ($_smarty_tpl->tpl_vars['LINK_LOCATION_VALUE']->value == 3) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LINK_FOOTER']->value;?>
</option>
                                            <option value="4"<?php if ($_smarty_tpl->tpl_vars['LINK_LOCATION_VALUE']->value == 4) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LINK_NONE']->value;?>
</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                      <label for="inputContent"><?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>
</label>
                                      <textarea name="content" id="inputContent"><?php echo $_smarty_tpl->tpl_vars['CONTENT_VALUE']->value;?>
</textarea>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group custom-control custom-switch">
                                        <input id="inputCaptcha" name="captcha" type="checkbox" class="custom-control-input"<?php if ($_smarty_tpl->tpl_vars['ENABLE_CAPTCHA_VALUE']->value == 1) {?> checked<?php }?> />
                                        <label class="custom-control-label" for="inputCaptcha">
                                            <?php echo $_smarty_tpl->tpl_vars['ENABLE_CAPTCHA']->value;?>

                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                <input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
">
                            </div>
                        </form>
                        
                        </br>
                        
                        <h5 style="display:inline"><?php echo $_smarty_tpl->tpl_vars['FIELDS']->value;?>
</h5>
                        <div class="float-md-right">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['NEW_FIELD_LINK']->value;?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['NEW_FIELD']->value;?>
</a>
                        </div>
                        <hr>
                        <?php if (count($_smarty_tpl->tpl_vars['FIELDS_LIST']->value)) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS_LIST']->value, 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
                            <div class="row">
                                <div class="col-md-4">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['field']->value['edit_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
</a>
                                </div>
                                <div class="col-md-4">
                                    <?php echo $_smarty_tpl->tpl_vars['field']->value['type'];?>

                                </div>
                                <div class="col-md-4">
                                    <div class="float-md-right">
                                        <a class="btn btn-warning btn-sm" href="<?php echo $_smarty_tpl->tpl_vars['field']->value['edit_link'];?>
"><i class="fas fa-edit fa-fw"></i></a>
                                        <button class="btn btn-danger btn-sm" type="button" onclick="showDeleteModal('<?php echo $_smarty_tpl->tpl_vars['field']->value['delete_link'];?>
')"><i class="fas fa-trash fa-fw"></i></button>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['NONE_FIELDS_DEFINED']->value;?>

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
                    <?php echo $_smarty_tpl->tpl_vars['CONFIRM_DELETE_FIELD']->value;?>

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

<?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript">
    function showDeleteModal(id){
        $('#deleteLink').attr('href', id);
        $('#deleteModal').modal().show();
    }
<?php echo '</script'; ?>
>

</body>
</html><?php }
}
