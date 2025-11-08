<?php
/* Smarty version 4.3.4, created on 2025-11-05 18:09:56
  from '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/templates/Cobalt/tebex/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_690b84e4dcf3f0_12453181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c250d84dad89f98046f55a0b3b1231d6e91f29ca' => 
    array (
      0 => '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/templates/Cobalt/tebex/index.tpl',
      1 => 1762362225,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_690b84e4dcf3f0_12453181 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <div class="user-nav">
                <?php if ($_smarty_tpl->tpl_vars['SHOW_HOME_TAB']->value == '1') {?><a href="<?php echo $_smarty_tpl->tpl_vars['HOME_URL']->value;?>
" class="user-nav-link active"><?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
</a><?php }?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIES']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['category']->value['subcategories'])) && count($_smarty_tpl->tpl_vars['category']->value['subcategories'])) {?>
                        <div class="dropdown">
                            <a class="user-nav-link dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <?php echo $_smarty_tpl->tpl_vars['category']->value['title'];?>

                            </a>
                            <div class="dropdown-menu ml-3" aria-labelledby="dropdownMenuButton">
                                <?php if (!$_smarty_tpl->tpl_vars['category']->value['only_subcategories']) {?>
                                    <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['category']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['title'];?>
</a>
                                <?php }?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value['subcategories'], 'subcategory');
$_smarty_tpl->tpl_vars['subcategory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subcategory']->value) {
$_smarty_tpl->tpl_vars['subcategory']->do_else = false;
?>
                                <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['subcategory']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['subcategory']->value['title'];?>
</a> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        </div>
                    <?php } else { ?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['category']->value['url'];?>
" class="user-nav-link"><?php echo $_smarty_tpl->tpl_vars['category']->value['title'];?>
</a> <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <a class="btn btn-theme d-block mt-3 ml-3 mr-3" href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
"
                    target="_blank"><?php echo $_smarty_tpl->tpl_vars['VIEW_FULL_STORE']->value;?>
</a>
            </div>
            <?php if (count($_smarty_tpl->tpl_vars['WIDGETS_RIGHT']->value)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WIDGETS_RIGHT']->value, 'widget');
$_smarty_tpl->tpl_vars['widget']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->do_else = false;
?>
                    <?php echo $_smarty_tpl->tpl_vars['widget']->value;?>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </div>
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header header-theme"><?php echo $_smarty_tpl->tpl_vars['STORE']->value;?>
</div>
                <div class="card-body"><?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>
</div>
            </div>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
