<?php
/* Smarty version 4.3.4, created on 2025-11-07 20:17:02
  from '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/panel_templates/Default/forms/field.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_690e45ae8603e3_40052699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c0ed46d6cbb68e2c3ff15568c8484900eebc56c' => 
    array (
      0 => '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/panel_templates/Default/forms/field.tpl',
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
function content_690e45ae8603e3_40052699 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <h5 style="display:inline"><?php echo $_smarty_tpl->tpl_vars['FIELD_TITLE_FOR_X']->value;?>
</h5>
                        <div class="float-md-right">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['BACK_LINK']->value;?>
" class="btn btn-warning"><?php echo $_smarty_tpl->tpl_vars['BACK']->value;?>
</a>
                        </div>
                        <hr>
                        
                        <!-- Success and Error Alerts -->
                        <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        
                        <form role="form" action="" method="post">
                            <div class="form-group">
                                <label for="InputName"><?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
</label>
                                <input type="text" name="field_name" class="form-control" id="InputName" placeholder="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME_VALUE']->value;?>
">
                            </div>
                            <div class="form-group">
                                <label for="type"><?php echo $_smarty_tpl->tpl_vars['TYPE']->value;?>
</label>
                                <select class="form-control" id="type" name="type">
                                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TYPES']->value, 'type');
$_smarty_tpl->tpl_vars['type']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
"<?php ob_start();
echo $_smarty_tpl->tpl_vars['type']->value['id'];
$_prefixVariable1 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['TYPE_VALUE']->value == $_prefixVariable1) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['type']->value['name'];?>
</option>
                                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="InputDefault">Default Value</label>
                                <input type="text" name="default" class="form-control" id="InputDefault" value="<?php echo $_smarty_tpl->tpl_vars['DEFAULT_VALUE']->value;?>
" placeholder="Default field value">
                            </div>
                            <div class="form-group">
                                <label for="InputOptions"><?php echo $_smarty_tpl->tpl_vars['OPTIONS']->value;?>
 / <?php echo $_smarty_tpl->tpl_vars['CHECKBOX']->value;?>
 / <?php echo $_smarty_tpl->tpl_vars['RADIO']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['OPTIONS_HELP']->value;?>
</label>
                                <textarea rows="5" class="form-control" name="options" id="options" placeholder="<?php echo $_smarty_tpl->tpl_vars['OPTIONS']->value;?>
 / <?php echo $_smarty_tpl->tpl_vars['CHECKBOX']->value;?>
 / <?php echo $_smarty_tpl->tpl_vars['RADIO']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['OPTIONS_VALUE']->value;?>
</textarea>
                            </div>
                            <div class="form-group">
                                <label for="InputName"><?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
</label>
                                <textarea rows="2" class="form-control" name="info" id="info" placeholder="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['INFO_VALUE']->value;?>
</textarea>
                            </div>
                            <div class="row">
                              <div class="col-md-4">
                                <div class="form-group">
                                    <label for="InputOrder"><?php echo $_smarty_tpl->tpl_vars['FIELD_ORDER']->value;?>
</label>
                                    <input type="number" min="1" class="form-control" id="InputOrder" name="order" value="<?php echo $_smarty_tpl->tpl_vars['ORDER_VALUE']->value;?>
">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                    <label for="InputMinimum"><?php echo $_smarty_tpl->tpl_vars['MINIMUM_CHARACTERS']->value;?>
</label>
                                    <input type="number" min="0" class="form-control" id="InputMinimum" name="minimum" value="<?php echo $_smarty_tpl->tpl_vars['MINIMUM_CHARACTERS_VALUE']->value;?>
">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                    <label for="InputMaximum"><?php echo $_smarty_tpl->tpl_vars['MAXIMUM_CHARACTERS']->value;?>
</label>
                                    <input type="number" min="0" class="form-control" id="InputMaximum" name="maximum" value="<?php echo $_smarty_tpl->tpl_vars['MAXIMUM_CHARACTERS_VALUE']->value;?>
">
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                                <label for="InputRegex">Regex</label>
                                <input type="text" name="regex" class="form-control" id="InputRegex" value="<?php echo $_smarty_tpl->tpl_vars['REGEX_VALUE']->value;?>
" placeholder="Regex validation">
                            </div>
                            <div class="form-group custom-control custom-switch">
                                <input id="inputRequired" name="required" type="checkbox" class="custom-control-input"<?php if ($_smarty_tpl->tpl_vars['REQUIRED_VALUE']->value == 1) {?> checked<?php }?> />
                                <label class="custom-control-label" for="inputRequired"><?php echo $_smarty_tpl->tpl_vars['REQUIRED']->value;?>
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

<?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
