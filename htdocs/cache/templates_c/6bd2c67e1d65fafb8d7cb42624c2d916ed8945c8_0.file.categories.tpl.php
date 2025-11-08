<?php
/* Smarty version 4.3.4, created on 2025-11-05 18:09:50
  from '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/panel_templates/Default/tebex/categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_690b84deae98f6_61887827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bd2c67e1d65fafb8d7cb42624c2d916ed8945c8' => 
    array (
      0 => '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/panel_templates/Default/tebex/categories.tpl',
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
function content_690b84deae98f6_61887827 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['CATEGORIES']->value;?>
</h1>
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['BUYCRAFT']->value;?>
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
                        <!-- Success and Error Alerts -->
                        <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <?php if ((isset($_smarty_tpl->tpl_vars['NO_CATEGORIES']->value))) {?>
                            <p><?php echo $_smarty_tpl->tpl_vars['NO_CATEGORIES']->value;?>
</p>
                        <?php } else { ?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_CATEGORIES']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                                <div class="card card-default">
                                    <div class="card-header">
                                        <?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>

                                        <?php if ((isset($_smarty_tpl->tpl_vars['category']->value['edit_link']))) {?>
                                            <span class="float-md-right">
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['category']->value['edit_link'];?>
" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                                </span>
                                        <?php }?>
                                    </div>
                                    <div class="card-body">
                                        <?php if ((isset($_smarty_tpl->tpl_vars['category']->value['subcategories'])) && count($_smarty_tpl->tpl_vars['category']->value['subcategories'])) {?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value['subcategories'], 'subcategory', false, NULL, 'categories_loop', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['subcategory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subcategory']->value) {
$_smarty_tpl->tpl_vars['subcategory']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_categories_loop']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_categories_loop']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_categories_loop']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_categories_loop']->value['total'];
?>
                                                <?php echo $_smarty_tpl->tpl_vars['subcategory']->value['name'];?>

                                                <?php if ((isset($_smarty_tpl->tpl_vars['subcategory']->value['edit_link']))) {?>
                                                    <span class="float-md-right">
                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['subcategory']->value['edit_link'];?>
" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                                        </span>
                                                <?php }?>
                                                <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_categories_loop']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_categories_loop']->value['last'] : null)) {?><hr /><?php }?>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <?php } else { ?>
                                            <?php echo $_smarty_tpl->tpl_vars['category']->value['no_subcategories'];?>

                                        <?php }?>
                                    </div>
                                </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
