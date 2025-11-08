<?php
/* Smarty version 4.3.4, created on 2025-11-05 20:43:22
  from '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/templates/Cobalt/forms/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_690ba8da9dd6c2_76237069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6913e0f45573e212e17067f14999e612964f3b5' => 
    array (
      0 => '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/templates/Cobalt/forms/form.tpl',
      1 => 1762362234,
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
function content_690ba8da9dd6c2_76237069 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <?php if ((isset($_smarty_tpl->tpl_vars['SUCCESS']->value))) {?>
        <div class="alert alert-success">
            <?php echo $_smarty_tpl->tpl_vars['SUCCESS']->value;?>

        </div>
        <?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['ERRORS']->value))) {?>
        <div class="alert alert-danger">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ERRORS']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?> <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            <br /> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    <?php }?>
    <div class="row">
        <?php if (count($_smarty_tpl->tpl_vars['WIDGETS_LEFT']->value)) {?>
            <div class="col-lg-3">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WIDGETS_LEFT']->value, 'widget');
$_smarty_tpl->tpl_vars['widget']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->do_else = false;
?>
                    <?php echo $_smarty_tpl->tpl_vars['widget']->value;?>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        <?php }?>

        <div
            class="<?php if (count($_smarty_tpl->tpl_vars['WIDGETS_LEFT']->value) && count($_smarty_tpl->tpl_vars['WIDGETS_RIGHT']->value)) {?>col-lg-6<?php } elseif (count($_smarty_tpl->tpl_vars['WIDGETS_LEFT']->value) || count($_smarty_tpl->tpl_vars['WIDGETS_RIGHT']->value)) {?>col-lg-9<?php } else { ?>col-lg-12<?php }?>">
            <div class="card">
                <div class="card-header header-theme"><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
</div>
                <div class="card-body">
                    <?php if ((isset($_smarty_tpl->tpl_vars['CONTENT']->value))) {?>
                        <div class="card">
                            <div class="card-body d-flex p-3">
                                <div>
                                    <i class="fa-solid fa-circle-info fa-2x"></i>
                                </div>
                                <div class="ml-3 mt-1 flex-grow-1">
                                    <?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>

                                </div>
                            </div>
                        </div>
                    <?php }?>
                    <form action="" method="post" id="forms" enctype="multipart/form-data">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value, 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
                            <div class="form-group">
                                <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 5) {?>
                                    <hr />
                                <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 4) {?>
                                    <?php echo implode(', ',$_smarty_tpl->tpl_vars['field']->value['options']);?>

                                <?php } else { ?>
                                    <label for="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
 <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?> <span class="text-danger"><strong>*</strong></span><?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['field']->value['info']) {?>
                                            <div class="d-inline-block ml-1" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['field']->value['info'];?>
">
                                                <i class="fa-solid fa-circle-question"></i>
                                            </div>
                                        <?php }?>
                                    </label>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == "1") {?>
                                    <input class="form-control" type="text" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['value'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
"<?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?> required<?php }?>>
                                <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == "2") {?>
                                    <select class="form-control"  name="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?> required<?php }?>>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['options'], 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['option']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['option']->value == $_smarty_tpl->tpl_vars['field']->value['value']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['option']->value;?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == "3") {?>
                                    <textarea class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['value'];?>
"<?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?> required<?php }?>></textarea>
                                <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == "6") {?>
                                    <input type="number" class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['value'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
"<?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?> required<?php }?>>
                                <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == "7") {?>
                                    <input type="email" class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['value'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
"<?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?> required<?php }?>>

                                <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == "8") {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['options'], 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['option']->value;?>
" id="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['option']->value,' ','');?>
"<?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?> required<?php }?>>
                                            <label class="form-check-label" for="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['option']->value,' ','');?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value;?>
</label>
                                        </div>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == "9") {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['options'], 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['option']->value;?>
" id="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['option']->value,' ','');?>
">
                                            <label class="form-check-label" for="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['option']->value,' ','');?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value;?>
</label>
                                        </div>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == "10") {?>
                                    <div class="form-group">
                                          <input type="file" class="inputFile" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
" id="uploadFileButton<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['value'];?>
" hidden onchange="$('#fileName<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
').html(this.files[0].name);" />
                                          <label class="btn btn-theme" for="uploadFileButton<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
">
                                            <i class="fa-solid fa-cloud-arrow-up"></i> <span id="fileName<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['CHOOSE_FILE']->value;?>
</span>
                                          </label>
                                    </div>
                                
                                <?php }?>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php if ($_smarty_tpl->tpl_vars['CAPTCHA']->value) {?>
                            <div class="form-group">
                              <?php echo $_smarty_tpl->tpl_vars['CAPTCHA']->value;?>

                            </div>
                        <?php }?>
                        <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                        <button type="submit" class="btn btn-theme"><?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
</button>
                    </form>
                </div>
            </div>
        </div>

        <?php if (count($_smarty_tpl->tpl_vars['WIDGETS_RIGHT']->value)) {?>
            <div class="col-lg-3">
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
            </div>
        <?php }?>

    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
