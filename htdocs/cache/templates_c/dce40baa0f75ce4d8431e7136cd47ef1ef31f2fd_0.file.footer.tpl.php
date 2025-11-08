<?php
/* Smarty version 4.3.4, created on 2025-11-05 18:02:44
  from '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/panel_templates/Default/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_690b8334571a74_64551018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dce40baa0f75ce4d8431e7136cd47ef1ef31f2fd' => 
    array (
      0 => '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/panel_templates/Default/footer.tpl',
      1 => 1762361945,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_690b8334571a74_64551018 (Smarty_Internal_Template $_smarty_tpl) {
?><footer class="sticky-footer bg-white">
    <div class="footer">
        <div class="d-flex">
            <div class="col-sm-5 mb-0">
                <span><?php echo date('Y');?>
 &copy; <a href="https://namelessmc.com/" target="_blank">NamelessMC</a></span>
            </div>
            <div class="col-sm-2 text-center mb-0">
                <span class="font-size-sa"><?php echo $_smarty_tpl->tpl_vars['PAGE_LOAD_TIME']->value;?>
</span>
            </div>
            <div class="col-sm-5 mb-0">
                <div class="float-right">
                    <a class="ml-1" href="https://github.com/NamelessMC/Nameless" target="_blank" data-toggle="tooltip"
                        data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['SOURCE']->value;?>
"><i class="fab fa-github fa-fw text-github"></i></a>
                    <a class="ml-1" href="https://discord.gg/nameless" target="_blank" data-toggle="tooltip"
                        data-placement="top" title="Discord"><i class="fab fa-discord fa-fw text-discord"></i></a>
                    <a class="ml-1" href="https://docs.namelessmc.com/en/faq" target="_blank" data-toggle="tooltip"
                        data-placement="top" title="FAQ"><i class="fas fa-info-circle fa-fw text-info"></i></a>
                    <a class="ml-1" href="https://namelessmc.com" target="_blank" data-toggle="tooltip"
                        data-placement="top" title="Website"><i class="fas fa-globe fa-fw text-primary"></i></a>
                    <a class="ml-1" href="https://translate.namelessmc.com" target="_blank" data-toggle="tooltip"
                       data-placement="top" title="Translate"><i class="fas fa-language fa-fw text-warning"></i></a>
                    <a class="ml-1" href="https://namelessmc.com/donate" target="_blank" data-toggle="tooltip"
                        data-placement="top" title="Donate"><i class="fas fa-heart fa-fw text-danger"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php }
}
