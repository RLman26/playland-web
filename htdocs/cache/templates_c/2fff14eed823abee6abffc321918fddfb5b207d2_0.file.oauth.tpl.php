<?php
/* Smarty version 4.3.4, created on 2025-11-07 20:41:22
  from '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/templates/Cobalt/user/oauth.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_690e4b622d9e88_77159879',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fff14eed823abee6abffc321918fddfb5b207d2' => 
    array (
      0 => '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/templates/Cobalt/user/oauth.tpl',
      1 => 1762362221,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:user/navigation.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_690e4b622d9e88_77159879 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <?php $_smarty_tpl->_subTemplateRender('file:user/navigation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div class="col-lg-9">
            <?php if ((isset($_smarty_tpl->tpl_vars['SUCCESS_MESSAGE']->value))) {?>
            <div class="alert alert-success">
                <?php echo $_smarty_tpl->tpl_vars['SUCCESS_MESSAGE']->value;?>

            </div>
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['ERROR_MESSAGE']->value))) {?>
            <div class="alert alert-danger">
                <?php echo $_smarty_tpl->tpl_vars['ERROR_MESSAGE']->value;?>

            </div>
            <?php }?>
            <div class="card">
                <div class="card-header header-theme"><?php echo $_smarty_tpl->tpl_vars['OAUTH']->value;?>
</div>
                <div class="card-body">
                   
                
                <?php if (count($_smarty_tpl->tpl_vars['OAUTH_PROVIDERS']->value)) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['OAUTH_PROVIDERS']->value, 'provider_data', false, 'provider_name');
$_smarty_tpl->tpl_vars['provider_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['provider_name']->value => $_smarty_tpl->tpl_vars['provider_data']->value) {
$_smarty_tpl->tpl_vars['provider_data']->do_else = false;
?>
                        <div class="card">
                            <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3" style="font-size: 1.2rem; margin-top: 0.3rem">
                                            <?php if ($_smarty_tpl->tpl_vars['provider_data']->value['icon']) {?>
                                            <i class="<?php echo $_smarty_tpl->tpl_vars['provider_data']->value['icon'];?>
 fa-lg">&nbsp;</i>
                                            <?php }?>
                                            <?php echo ucfirst($_smarty_tpl->tpl_vars['provider_name']->value);?>

                                        </div>
                                        <div class="col-md-6">
                                            <?php if ((isset($_smarty_tpl->tpl_vars['USER_OAUTH_PROVIDERS']->value[$_smarty_tpl->tpl_vars['provider_name']->value]))) {?>
                                            <div class="float-right">
                                                <code><?php echo $_smarty_tpl->tpl_vars['USER_OAUTH_PROVIDERS']->value[$_smarty_tpl->tpl_vars['provider_name']->value]->provider_id;?>
</code>
                                            </div>
                                            <?php }?>
                                        </div>
                                        <div class="col-md-3">
                                            <?php if ((isset($_smarty_tpl->tpl_vars['USER_OAUTH_PROVIDERS']->value[$_smarty_tpl->tpl_vars['provider_name']->value]))) {?>
                                            <a class="btn btn-secondary float-right" href="#" data-toggle="modal"
                                                data-target="#modal-unlink-<?php echo $_smarty_tpl->tpl_vars['provider_name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['UNLINK']->value;?>
</a>
                                            <?php } else { ?>
                                            <a class="btn btn-theme float-right" href="#" data-toggle="modal"
                                                data-target="#modal-link-<?php echo $_smarty_tpl->tpl_vars['provider_name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LINK']->value;?>
</a>
                                            <?php }?>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php } else { ?>
                <div class="alert alert-info">
                    <?php echo $_smarty_tpl->tpl_vars['NO_PROVIDERS']->value;?>

                </div>
                <?php }?>
                


                </div>
            </div>
        </div>
    </div>
</div>


<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['OAUTH_PROVIDERS']->value, 'provider_data', false, 'provider_name');
$_smarty_tpl->tpl_vars['provider_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['provider_name']->value => $_smarty_tpl->tpl_vars['provider_data']->value) {
$_smarty_tpl->tpl_vars['provider_data']->do_else = false;
?>
    <div class="modal fade" id="modal-unlink-<?php echo $_smarty_tpl->tpl_vars['provider_name']->value;?>
" tabindex="-1" role="dialog" aria-labelledby="modal-unlink-<?php echo $_smarty_tpl->tpl_vars['provider_name']->value;?>
Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-title" id="modal-unlink-<?php echo $_smarty_tpl->tpl_vars['provider_name']->value;?>
Label"><?php echo $_smarty_tpl->tpl_vars['UNLINK']->value;?>
 <?php echo ucfirst($_smarty_tpl->tpl_vars['provider_name']->value);?>
</span>
            </div>
            <div class="modal-body">
                <?php echo $_smarty_tpl->tpl_vars['OAUTH_MESSAGES']->value[$_smarty_tpl->tpl_vars['provider_name']->value]['unlink_confirm'];?>

			    <button class="btn btn-secondary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['NO']->value;?>
</button>
                <form class="form" action="" method="post" style="display: inline">
                    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                    <input type="hidden" name="action" value="unlink">
                    <input type="hidden" name="provider" value="<?php echo $_smarty_tpl->tpl_vars['provider_name']->value;?>
">
                    <button type="submit" class="btn btn-theme"><?php echo $_smarty_tpl->tpl_vars['YES']->value;?>
</button>
                </form>
            </div>
        </div>
    </div>
    </div>

    <div class="modal fade" id="modal-link-<?php echo $_smarty_tpl->tpl_vars['provider_name']->value;?>
" tabindex="-1" role="dialog" aria-labelledby="modal-link-<?php echo $_smarty_tpl->tpl_vars['provider_name']->value;?>
Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-title" id="modal-link-<?php echo $_smarty_tpl->tpl_vars['provider_name']->value;?>
Label"><?php echo $_smarty_tpl->tpl_vars['LINK']->value;?>
 <?php echo ucfirst($_smarty_tpl->tpl_vars['provider_name']->value);?>
</span>
            </div>
            <div class="modal-body">
                <?php echo $_smarty_tpl->tpl_vars['OAUTH_MESSAGES']->value[$_smarty_tpl->tpl_vars['provider_name']->value]['link_confirm'];?>

			    <button class="btn btn-secondary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['NO']->value;?>
</button>
                <a class="btn btn-theme" href="<?php echo $_smarty_tpl->tpl_vars['provider_data']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['CONFIRM']->value;?>
</a>
            </div>
        </div>
    </div>
    </div>


<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
