<?php
/* Smarty version 4.3.4, created on 2025-11-05 20:00:40
  from '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/templates/Cobalt/suggestions/new.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_690b9ed8e50389_83454284',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '969aaf5baa6e560e3e8bc84a2376b50491b325ae' => 
    array (
      0 => '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/templates/Cobalt/suggestions/new.tpl',
      1 => 1762362226,
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
function content_690b9ed8e50389_83454284 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">

    <div class="card">
        <div class="card-header header-theme">
            <?php echo $_smarty_tpl->tpl_vars['NEW_SUGGESTION']->value;?>

            <a class="btn btn-secondary float-right" href="<?php echo $_smarty_tpl->tpl_vars['BACK_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['BACK']->value;?>
</a>
        </div>
        <div class="card-body">

            <?php if ((isset($_smarty_tpl->tpl_vars['ERRORS']->value))) {?>
                <div class="alert alert-danger" role="alert">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ERRORS']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
                        <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<br />
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            <?php }?>

            <form action="" method="post">
                <div class="form-group">
                    <label for="titleLabel"><?php echo $_smarty_tpl->tpl_vars['SUGGESTION_TITLE']->value;?>
</label>
                    <input class="form-control" type="text" name="title" placeholder="Title" value="<?php echo $_smarty_tpl->tpl_vars['TITLE_VALUE']->value;?>
">

                </div>
                <div class="form-group">
                    <label for="categoryLabel"><?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value;?>
</label>
                    <select class="form-control" name="category" id="category">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIES']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['CATEGORY_VALUE']->value == $_smarty_tpl->tpl_vars['item']->value['id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="contentLabel"><?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>
</label>
                    <textarea class="form-control" style="width:100%" name="content" placeholder="Content" id="editor"
                        rows="10"><?php echo $_smarty_tpl->tpl_vars['CONTENT_VALUE']->value;?>
</textarea>
                </div>
                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                <button type="submit" class="btn btn-theme"><?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
</button>
            </form>

        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
