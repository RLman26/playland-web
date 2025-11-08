<?php
/* Smarty version 4.3.4, created on 2025-11-05 20:04:59
  from '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/panel_templates/Default/suggestions/categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_690b9fdbd9ca59_08364444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1024df16e99ac2dbd3d3ad327ec410f25cd5dd72' => 
    array (
      0 => '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/panel_templates/Default/suggestions/categories.tpl',
      1 => 1762367984,
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
function content_690b9fdbd9ca59_08364444 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['SUGGESTIONS']->value;?>
</h1>
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                        <li class="breadcrumb-item"><?php echo $_smarty_tpl->tpl_vars['SUGGESTIONS']->value;?>
</li>
							<li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['CATEGORIES']->value;?>
</li>
                    </ol>
                </div>

                <!-- Update Notification -->
                <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <div class="card shadow mb-4">
                    <div class="card-body">
						<h3 style="display:inline;"><?php echo $_smarty_tpl->tpl_vars['CATEGORIES']->value;?>
</h3>
						<span class="float-md-right"><a href="<?php echo $_smarty_tpl->tpl_vars['NEW_CATEGORY_LINK']->value;?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['NEW_CATEGORY']->value;?>
</a></span>
						<hr>
						
                        <!-- Success and Error Alerts -->
                        <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
						
						<?php if (count($_smarty_tpl->tpl_vars['CATEGORIES_LIST']->value)) {?>
							<div class="table-responsive">
								<table class="table table-striped" style="width:100%">
									<thead>
									</thead>
									<tbody>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIES_LIST']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
										<tr>
											<td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
											<td>
												<div class="float-md-right">
													<a class="btn btn-warning btn-sm" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['edit_link'];?>
"><i class="fas fa-edit fa-fw"></i></a>
													<button class="btn btn-danger btn-sm" type="button" onclick="showDeleteModal('<?php echo $_smarty_tpl->tpl_vars['item']->value['delete_link'];?>
')"><i class="fas fa-trash fa-fw"></i></button>
												</div>
											</td>
										</tr>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</tbody>
								</table>
                            </div>
						<?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['NONE_CATEGORIES_DEFINED']->value;?>

                        <?php }?>
                        
                        <?php if (!$_smarty_tpl->tpl_vars['PREMIUM']->value) {?>
                            <center><p>Suggestion Module by <a href="https://partydragen.com/" target="_blank">Partydragen</a></p></center>
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
                <?php echo $_smarty_tpl->tpl_vars['CONFIRM_DELETE_CATEGORY']->value;?>

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
