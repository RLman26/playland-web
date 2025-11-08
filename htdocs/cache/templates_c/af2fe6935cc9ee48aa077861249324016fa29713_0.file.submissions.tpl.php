<?php
/* Smarty version 4.3.4, created on 2025-11-05 21:14:08
  from '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/panel_templates/Default/forms/submissions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_690bb01018b276_92404650',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af2fe6935cc9ee48aa077861249324016fa29713' => 
    array (
      0 => '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/panel_templates/Default/forms/submissions.tpl',
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
    'file:footer.tpl' => 1,
    'file:scripts.tpl' => 1,
  ),
),false)) {
function content_690bb01018b276_92404650 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['SUBMISSIONS']->value;?>
</li>
                    </ol>
                </div>

                <!-- Update Notification -->
                <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <div class="card shadow mb-4">
                    <div class="card-body">
                        <h3 style="display:inline;"><?php echo $_smarty_tpl->tpl_vars['SUBMISSIONS']->value;?>
</h3>
                        <hr>
                        
                        <form action="" method="post">
                          <div class="form-row">
                            <div class="col-2">
                              <label for="form_selection"><?php echo $_smarty_tpl->tpl_vars['FORM']->value;?>
</label>
                            </div>
                            <div class="col-2">
                              <label for="form_selection"><?php echo $_smarty_tpl->tpl_vars['STATUS']->value;?>
</label>
                            </div>
                            <div class="col-2">
                              <label for="form_selection"><?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
</label>
                            </div>
                          </div>
                          
                          <div class="form-row">
                            <div class="col-2">
                              <select class="form-control" id="form_selection" name="form_selection">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FORM_LIST']->value, 'form');
$_smarty_tpl->tpl_vars['form']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['form']->value) {
$_smarty_tpl->tpl_vars['form']->do_else = false;
?>
                                  <option value="<?php echo $_smarty_tpl->tpl_vars['form']->value['id'];?>
" <?php ob_start();
echo $_smarty_tpl->tpl_vars['form']->value['id'];
$_prefixVariable1 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['FORM_SELECTION_VALUE']->value == $_prefixVariable1) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['form']->value['name'];?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                              </select>
                            </div>
                            <div class="col-2">
                              <select class="form-control" id="status_selection" name="status_selection">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['STATUS_LIST']->value, 'status');
$_smarty_tpl->tpl_vars['status']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['status']->value) {
$_smarty_tpl->tpl_vars['status']->do_else = false;
?>
                                  <option value="<?php echo $_smarty_tpl->tpl_vars['status']->value['id'];?>
" <?php ob_start();
echo $_smarty_tpl->tpl_vars['status']->value['id'];
$_prefixVariable2 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['STATUS_SELECTION_VALUE']->value == $_prefixVariable2) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['status']->value['html'];?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                              </select>
                            </div>
                            <div class="col-2">
                                <input type="text" name="user" class="form-control" id="InputUser" value="<?php echo $_smarty_tpl->tpl_vars['USER_VALUE']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['ID_OR_USERNAME']->value;?>
">
                            </div>
                            <div class="col-2">
                              <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                              <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['SORT']->value;?>
" class="btn btn-primary">
                            </div>
                          </div>
                        </form>
                        
                        </br>
                        
                        <?php if (count($_smarty_tpl->tpl_vars['SUBMISSIONS_LIST']->value)) {?>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                      <th><?php echo $_smarty_tpl->tpl_vars['FORM']->value;?>
</th>
                                      <th><?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
</th>
                                      <th><?php echo $_smarty_tpl->tpl_vars['UPDATED_BY']->value;?>
</th>
                                      <th><?php echo $_smarty_tpl->tpl_vars['STATUS']->value;?>
</th>
                                      <th><?php echo $_smarty_tpl->tpl_vars['ACTIONS']->value;?>
</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUBMISSIONS_LIST']->value, 'submission');
$_smarty_tpl->tpl_vars['submission']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['submission']->value) {
$_smarty_tpl->tpl_vars['submission']->do_else = false;
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['submission']->value['form_name'];?>
</td>
                                        <td>
                                          <?php if (!empty($_smarty_tpl->tpl_vars['submission']->value['user_avatar'])) {?>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['submission']->value['user_profile'];?>
" style="<?php echo $_smarty_tpl->tpl_vars['submission']->value['user_style'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['submission']->value['user_avatar'];?>
" style="max-height:25px;max-width:25px;" alt="<?php echo $_smarty_tpl->tpl_vars['submission']->value['user_name'];?>
" class="rounded"> <?php echo $_smarty_tpl->tpl_vars['submission']->value['user_name'];?>
</a>
                                          <?php } else { ?>
                                            <i class="fa fa-user"></i> <?php echo $_smarty_tpl->tpl_vars['submission']->value['user_name'];?>

                                          <?php }?>
                                          <br /><span data-toggle="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['submission']->value['reported_at_full'];?>
"><?php echo $_smarty_tpl->tpl_vars['submission']->value['created_at'];?>
</span>
                                        </td>
                                        <td>
                                          <?php if (!empty($_smarty_tpl->tpl_vars['submission']->value['updated_by_avatar'])) {?>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['submission']->value['updated_by_profile'];?>
" style="<?php echo $_smarty_tpl->tpl_vars['submission']->value['updated_by_style'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['submission']->value['updated_by_avatar'];?>
" style="max-height:25px;max-width:25px;" alt="<?php echo $_smarty_tpl->tpl_vars['submission']->value['updated_by_name'];?>
" class="rounded"> <?php echo $_smarty_tpl->tpl_vars['submission']->value['updated_by_name'];?>
</a>
                                          <?php } else { ?>
                                            <i class="fa fa-user"></i> <?php echo $_smarty_tpl->tpl_vars['submission']->value['updated_by_name'];?>

                                          <?php }?>
                                          <br /><span data-toggle="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['submission']->value['reported_at_full'];?>
"><?php echo $_smarty_tpl->tpl_vars['submission']->value['updated_at'];?>
</span>
                                        </td>
                                        <td><h5><?php echo $_smarty_tpl->tpl_vars['submission']->value['status'];?>
</h5></td>
                                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['submission']->value['link'];?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
 &raquo;</a></td>
                                    </tr>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </tbody>
                            </table>
                        </div>
                        <?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['NO_SUBMISSIONS']->value;?>

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

<?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
