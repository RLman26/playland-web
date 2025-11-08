<?php
/* Smarty version 4.3.4, created on 2025-11-05 18:02:44
  from '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/panel_templates/Default/collections/dashboard_stats/total_users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_690b83344c15f9_92925868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61dd08e938449aa9bd04121929020da90b610daf' => 
    array (
      0 => '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/panel_templates/Default/collections/dashboard_stats/total_users.tpl',
      1 => 1762361945,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_690b83344c15f9_92925868 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card stats-card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-users fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
