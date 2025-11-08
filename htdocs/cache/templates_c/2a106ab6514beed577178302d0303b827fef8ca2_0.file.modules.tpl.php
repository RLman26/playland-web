<?php
/* Smarty version 4.3.4, created on 2025-11-05 18:10:15
  from '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/templates/Cobalt/template_settings/settings_pages/modules.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_690b84f73f6248_25614396',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a106ab6514beed577178302d0303b827fef8ca2' => 
    array (
      0 => '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/templates/Cobalt/template_settings/settings_pages/modules.tpl',
      1 => 1762362223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./parts/image_uploader.tpl' => 1,
    'file:./parts/switch.tpl' => 1,
  ),
),false)) {
function content_690b84f73f6248_25614396 (Smarty_Internal_Template $_smarty_tpl) {
?><ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="pills-mvote-tab" data-toggle="pill" href="#pills-mvote" role="tab" aria-controls="pills-mvote" aria-selected="true"><?php echo $_smarty_tpl->tpl_vars['VOTE']->value;?>
</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="pills-mrules-tab" data-toggle="pill" href="#pills-mrules" role="tab" aria-controls="pills-mrules" aria-selected="false"><?php echo $_smarty_tpl->tpl_vars['RULES']->value;?>
</a>
    </li>
</ul>
<div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-mvote" role="tabpanel" aria-labelledby="pills-mvote-tab">

        <?php $_smarty_tpl->_subTemplateRender("file:./parts/image_uploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>'vote_rewards_icon'), 0, false);
?>
                            
        <label><?php echo $_smarty_tpl->tpl_vars['VOTE_REWARDS']->value;?>
</label><span class="float-right"><?php echo $_smarty_tpl->tpl_vars['BLANK']->value;?>
</span>
        <input type='text' name='vote_rewards' value='<?php echo $_smarty_tpl->tpl_vars['VOTE_REWARDS_VALUE']->value;?>
' class='form-control'>
    </div>
    <div class="tab-pane fade" id="pills-mrules" role="tabpanel" aria-labelledby="pills-mrules-tab">
        <?php $_smarty_tpl->_subTemplateRender("file:./parts/switch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>'rules_fa_icons','right'=>'no','last'=>'no'), 0, false);
?>

        <label><?php echo $_smarty_tpl->tpl_vars['RULES_HOME_ICON']->value;?>
</label>
        <input type='text' name='rules_home_icon' value='<?php echo $_smarty_tpl->tpl_vars['RULES_HOME_ICON_VALUE']->value;?>
' class='form-control'>
    </div>
</div><?php }
}
