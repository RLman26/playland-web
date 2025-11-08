<?php
/* Smarty version 4.3.4, created on 2025-11-05 20:42:15
  from '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/panel_templates/Default/ghost/post_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_690ba897747e45_92539895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95835de24e9ebfad8837527cebb7d83dfc1878ea' => 
    array (
      0 => '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/panel_templates/Default/ghost/post_edit.tpl',
      1 => 1762371702,
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
function content_690ba897747e45_92539895 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['GHOST']->value;?>
</h1>
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['GHOST']->value;?>
</li>
                        </ol>
                    </div>

                    <!-- Update Notification -->
                    <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <h5 style="display:inline"><?php echo $_smarty_tpl->tpl_vars['EDIT_POST']->value;?>
</h5>
                            <div class="float-md-right">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['BACK_LINK']->value;?>
" class="btn btn-warning"><?php echo $_smarty_tpl->tpl_vars['BACK']->value;?>
</a>
                            </div>
                            <hr />
                            <!-- Success and Error Alerts -->
                            <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="InputPostName"><?php echo $_smarty_tpl->tpl_vars['GHOST_POST_NAME']->value;?>
</label>
                                    <input type="text" id="InputPostName" placeholder="<?php echo $_smarty_tpl->tpl_vars['GHOST_POST_NAME']->value;?>
"
                                        name="ghost_post_name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['GHOST_POST_NAME_VALUE']->value;?>
">
                                </div>
                                <div class="form-group">
                                    <label for="InputPostDate"><?php echo $_smarty_tpl->tpl_vars['GHOST_POST_DATE']->value;?>
</label>
                                    <br /><input type="datetime-local" id="InputPostDate" name="ghost_post_date" value="<?php echo $_smarty_tpl->tpl_vars['GHOST_POST_DATE_VALUE']->value;?>
">
                                </div>
                                <div class="form-group">
                                    <label for="InputPostImage"><?php echo $_smarty_tpl->tpl_vars['GHOST_POST_IMAGE']->value;?>
</label>
                                    <input type="text" id="InputPostImage" placeholder="<?php echo $_smarty_tpl->tpl_vars['GHOST_POST_IMAGE']->value;?>
"
                                        name="ghost_post_image" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['GHOST_POST_IMAGE_VALUE']->value;?>
">
                                </div>
                                <div class="form-group">
                                    <label for="InputPostRules"><?php echo $_smarty_tpl->tpl_vars['GHOST_POST_CONTENT']->value;?>
</label>
                                    <textarea name="ghost_post_content" rows="3" id="InputPostContent"
                                        class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['GHOST_POST_CONTENT']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['GHOST_POST_CONTENT_VALUE']->value;?>
</textarea>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                    <input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
">
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

            <!-- End Content Wrapper -->
        </div>

        <!-- End Wrapper -->
    </div>

    <?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>

</html><?php }
}
