<?php
/* Smarty version 4.3.4, created on 2025-11-07 20:17:20
  from '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/panel_templates/Default/forms/status_new.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_690e45c07db3d1_29336186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23ab0b02386d64e8cafddd3cbaa2d629f09986a0' => 
    array (
      0 => '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/panel_templates/Default/forms/status_new.tpl',
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
function content_690e45c07db3d1_29336186 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['STATUSES']->value;?>
</li>
                    </ol>
                </div>

                <!-- Update Notification -->
                <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <div class="card shadow mb-4">
                    <div class="card-body">
                        <h5 style="display:inline"><?php echo $_smarty_tpl->tpl_vars['CREATING_STATUS']->value;?>
</h5>
                        <div class="float-md-right">
                          <button class="btn btn-warning" onclick="showCancelModal()" type="button"><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</button>
                        </div>
                        <hr />

                        <!-- Success and Error Alerts -->
                        <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <form action="" method="post">
                          <div class="form-group">
                            <label for="status_html"><?php echo $_smarty_tpl->tpl_vars['STATUS_HTML']->value;?>
</label>
                            <input type="text" name="status_html" placeholder="<?php echo $_smarty_tpl->tpl_vars['STATUS_HTML']->value;?>
" id="status_html" class="form-control">
                          </div>
                          <div class="form-group">
                            <label for="InputColour"><?php echo $_smarty_tpl->tpl_vars['STATUS_COLOUR']->value;?>
</label>
                            <div class="input-group">
                              <input type="text" name="color" class="form-control" id="InputColour"
                                value="<?php echo $_smarty_tpl->tpl_vars['STATUS_COLOUR_VALUE']->value;?>
">
                              <span class="input-group-append statusColour">
                                <span class="input-group-text colorpicker-input-addon"><i></i></span>
                              </span>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="status_forms"><?php echo $_smarty_tpl->tpl_vars['STATUS_FORMS']->value;?>
</label>
                            <select name="status_forms[]" id="inputForms" class="form-control" multiple>
                              <?php if (count($_smarty_tpl->tpl_vars['ALL_FORMS']->value)) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_FORMS']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                  <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['item']->value['selected']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                              <?php }?>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="status_groups"><?php echo $_smarty_tpl->tpl_vars['STATUS_GROUPS']->value;?>
</label>
                            <select name="status_groups[]" id="inputGroups" class="form-control" multiple>
                              <?php if (count($_smarty_tpl->tpl_vars['ALL_GROUPS']->value)) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_GROUPS']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                  <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['item']->value['selected']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                              <?php }?>
                            </select>
                          </div>
                          <div class="form-group custom-control custom-switch">
                            <input id="inputOpen" name="open" type="checkbox" class="custom-control-input" />
                            <label class="custom-control-label" for="inputOpen"><?php echo $_smarty_tpl->tpl_vars['MARKED_AS_OPEN']->value;?>
</label>
                          </div>
                          <div class="form-group">
                            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                            <input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
">
                          </div>
                        </form>

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

    <div class="modal fade" id="cancelModal" tabindex="-1" role="dialog">
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
                    <?php echo $_smarty_tpl->tpl_vars['CONFIRM_CANCEL']->value;?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['NO']->value;?>
</button>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['CANCEL_LINK']->value;?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['YES']->value;?>
</a>
                </div>
            </div>
        </div>
    </div>

<?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 type="text/javascript">
    function showCancelModal(){
        $('#cancelModal').modal().show();
    }
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(() => {
        $('#inputForms').select2({ placeholder: "No forms selected" });
    })

    $(document).ready(() => {
        $('#inputGroups').select2({ placeholder: "No groups selected" });
    })

    $(function () {
        $('.statusColour').colorpicker({
            format: 'hex',
            'color': '<?php echo $_smarty_tpl->tpl_vars['STATUS_COLOUR_VALUE']->value;?>
'
        });

        $('.statusColour').on('colorpickerChange', function (event) {
            $('#InputColour').val(event.color.toString());
        });

        $('#InputColour').change(function () {
            $('.statusColour').colorpicker('setValue', $(this).val());
        });
    });
<?php echo '</script'; ?>
>

</body>
</html><?php }
}
