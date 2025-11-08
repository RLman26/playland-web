<?php
/* Smarty version 4.3.4, created on 2025-11-05 20:05:19
  from '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/templates/Cobalt/suggestions/category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_690b9fef92ac37_78450925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c550ffa3d56a363da73f7cf4c635f19b09047ef7' => 
    array (
      0 => '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/templates/Cobalt/suggestions/category.tpl',
      1 => 1762362226,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:suggestions/search.tpl' => 1,
    'file:suggestions/categories.tpl' => 1,
    'file:suggestions/recent_activity.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_690b9fef92ac37_78450925 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <div class="row">
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header header-theme">
                    <?php echo $_smarty_tpl->tpl_vars['SUGGESTIONS']->value;?>

                    <?php if ((isset($_smarty_tpl->tpl_vars['CAN_CREATE']->value))) {?>
                        <a class="btn btn-theme float-right" href="<?php echo $_smarty_tpl->tpl_vars['NEW_SUGGESTION_LINK']->value;?>
"><span class="mobile_only"><i class="fa-solid fa-plus"></i></span><span class="web_only"><?php echo $_smarty_tpl->tpl_vars['NEW_SUGGESTION']->value;?>
</span></a>
                    <?php }?>

                    <div class="btn-group float-right" style="margin-right: 10px">
                        <button type="button" class="btn dropdown-toggle btn-theme btn-sm"
                            data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['SORT_BY']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['SORT_BY_VALUE']->value;?>
 <span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a rel="noopener nofollow" class="dropdown-item" style="color:black !important;"
                                    href="<?php echo $_smarty_tpl->tpl_vars['SORT_NEWEST_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['NEWEST']->value;?>
</a></li>
                            <li><a rel="noopener nofollow" class="dropdown-item" style="color:black !important;"
                                    href="<?php echo $_smarty_tpl->tpl_vars['SORT_RECENT_ACTIVITY_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value;?>
</a></li>
                            <li><a rel="noopener nofollow" class="dropdown-item" style="color:black !important;"
                                    href="<?php echo $_smarty_tpl->tpl_vars['SORT_LIKES_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LIKES']->value;?>
</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <?php if ((isset($_smarty_tpl->tpl_vars['SUGGESTIONS_LIST']->value))) {?>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 15%"><?php echo $_smarty_tpl->tpl_vars['STATUS']->value;?>
</th>
                                        <th style="width: 40%"><?php echo $_smarty_tpl->tpl_vars['SUGGESTION_TITLE']->value;?>
</th>
                                        <th style="width: 20%"><?php echo $_smarty_tpl->tpl_vars['STATS']->value;?>
</th>
                                        <th style="width: 25%"><?php echo $_smarty_tpl->tpl_vars['LAST_REPLY']->value;?>
</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUGGESTIONS_LIST']->value, 'suggestion');
$_smarty_tpl->tpl_vars['suggestion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['suggestion']->value) {
$_smarty_tpl->tpl_vars['suggestion']->do_else = false;
?>
                                        <tr>
                                            <td>
                                                <?php echo $_smarty_tpl->tpl_vars['suggestion']->value['status'];?>

                                            </td>
                                            <td>
                                                <a class="white-link" href="<?php echo $_smarty_tpl->tpl_vars['suggestion']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['suggestion']->value['title'];?>
</a><br />
                                                <span data-toggle="tooltip"
                                                    data-content="<?php echo $_smarty_tpl->tpl_vars['suggestion']->value['created'];?>
"><?php echo $_smarty_tpl->tpl_vars['suggestion']->value['created_rough'];?>
</span>
                                                <?php echo $_smarty_tpl->tpl_vars['BY']->value;?>
 <a style="<?php echo $_smarty_tpl->tpl_vars['suggestion']->value['author_style'];?>
"
                                                    href="<?php echo $_smarty_tpl->tpl_vars['suggestion']->value['author_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['suggestion']->value['author_username'];?>
</a>
                                            </td>

                                            <td>
                                                <strong><?php echo $_smarty_tpl->tpl_vars['suggestion']->value['likes'];?>
</strong> <?php echo $_smarty_tpl->tpl_vars['LIKES']->value;?>
<br />
                                                <strong><?php echo $_smarty_tpl->tpl_vars['suggestion']->value['dislikes'];?>
</strong> <?php echo $_smarty_tpl->tpl_vars['DISLIKES']->value;?>

                                            </td>

                                            <td>
                                                <span data-toggle="tooltip"
                                                    data-content="<?php echo $_smarty_tpl->tpl_vars['suggestion']->value['updated'];?>
"><?php echo $_smarty_tpl->tpl_vars['suggestion']->value['updated_rough'];?>
</span>
                                                <?php echo $_smarty_tpl->tpl_vars['BY']->value;?>
 <a style="<?php echo $_smarty_tpl->tpl_vars['suggestion']->value['updated_by_style'];?>
"
                                                    href="<?php echo $_smarty_tpl->tpl_vars['suggestion']->value['updated_by_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['suggestion']->value['updated_by_username'];?>
</a>
                                            </td>
                                        </tr>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </tbody>
                            </table>
                        </div>

                        <?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['NO_SUGGESTIONS']->value;?>

                    <?php }?>

                </div>
            </div>

        </div>

        <div class="col-lg-3">
            <?php $_smarty_tpl->_subTemplateRender('file:suggestions/search.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php $_smarty_tpl->_subTemplateRender('file:suggestions/categories.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php $_smarty_tpl->_subTemplateRender('file:suggestions/recent_activity.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>

    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
