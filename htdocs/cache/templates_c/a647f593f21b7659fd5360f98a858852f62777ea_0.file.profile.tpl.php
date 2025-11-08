<?php
/* Smarty version 4.3.4, created on 2025-11-06 20:44:09
  from '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/templates/Cobalt/profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_690cfa89439be9_50496550',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a647f593f21b7659fd5360f98a858852f62777ea' => 
    array (
      0 => '/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/custom/templates/Cobalt/profile.tpl',
      1 => 1762362218,
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
function content_690cfa89439be9_50496550 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/vol2_8/infinityfree.com/if0_40282779/mcplayland.eu/htdocs/vendor/smarty/smarty/libs/plugins/modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <?php if (!(isset($_smarty_tpl->tpl_vars['CAN_VIEW']->value)) || ((isset($_smarty_tpl->tpl_vars['CAN_VIEW']->value)) && $_smarty_tpl->tpl_vars['CAN_VIEW']->value == true)) {?> <?php if ((isset($_smarty_tpl->tpl_vars['LOGGED_IN']->value))) {?> <?php if ((isset($_smarty_tpl->tpl_vars['ERROR']->value))) {?>
    <div class="alert alert-danger">
        <?php echo $_smarty_tpl->tpl_vars['ERROR']->value;?>

    </div>
    <?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['SUCCESS']->value))) {?>
    <div class="alert alert-success">
        <?php echo $_smarty_tpl->tpl_vars['SUCCESS']->value;?>

    </div>
    <?php }?> <?php }?>
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

        <div class="<?php if (count($_smarty_tpl->tpl_vars['WIDGETS_LEFT']->value) && count($_smarty_tpl->tpl_vars['WIDGETS_RIGHT']->value)) {?>col-lg-6<?php } elseif (count($_smarty_tpl->tpl_vars['WIDGETS_LEFT']->value) || count($_smarty_tpl->tpl_vars['WIDGETS_RIGHT']->value)) {?>col-lg-9<?php } else { ?>col-lg-12<?php }?>">
            <div class="profile-header" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['BANNER']->value;?>
');">

            <div class="mobile_only mobile_profile_box">
            
                <?php if ((isset($_smarty_tpl->tpl_vars['LOGGED_IN']->value))) {?>
                    <?php if (!(isset($_smarty_tpl->tpl_vars['SELF']->value))) {?>
                        <div class="btn-group">
                            <?php if ($_smarty_tpl->tpl_vars['MOD_OR_ADMIN']->value != true) {?><a href="#" data-toggle="modal"
                                data-target="#blockModal" class="btn btn-danger"><i class="fa-solid fa-ban"></i></a><?php }?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['MESSAGE_LINK']->value;?>
" class="btn btn-success" rel="tooltip"
                                data-title="Message <?php echo $_smarty_tpl->tpl_vars['NICKNAME']->value;?>
"><i class="fa-solid fa-envelope"></i></a>
                            <?php if ((isset($_smarty_tpl->tpl_vars['RESET_PROFILE_BANNER']->value))) {?>
                            
                            <form class="d-inline-block" action="<?php echo $_smarty_tpl->tpl_vars['RESET_PROFILE_BANNER_LINK']->value;?>
" method="post">
                                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
" />
                                <button class="btn btn-danger"
                                rel="tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['RESET_PROFILE_BANNER']->value;?>
">
                                    <i class="fa-solid fa-image"></i>
                                </button>
                            </form>
                            <?php }?>
                        </div>
                    <?php } else { ?>
                        <div class="btn-group">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['SETTINGS_LINK']->value;?>
" class="btn btn-secondary"><i class="fa-solid fa-gear"></i></a>
                            <button type="button" class="btn btn-theme" onclick="showBannerSelect()"><i class="fa-solid fa-image"></i></button>
                        </div>
                    <?php }?>
                <?php }?>
            
        </div>


                <div class="profile-header-bottom">
                    <img class="avatar-img" style="height:40px;width:40px;" src="<?php echo $_smarty_tpl->tpl_vars['AVATAR']->value;?>
" />
                    <span class="profile-header-username"<?php if ($_smarty_tpl->tpl_vars['USERNAME_COLOUR']->value != false) {?> style="<?php echo $_smarty_tpl->tpl_vars['USERNAME_COLOUR']->value;?>
" <?php }?>><?php echo $_smarty_tpl->tpl_vars['NICKNAME']->value;?>
 </span>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GROUPS']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
echo $_smarty_tpl->tpl_vars['group']->value;?>
 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <span class="float-right web_only">
                        
                            <?php if ((isset($_smarty_tpl->tpl_vars['LOGGED_IN']->value))) {?>
                                <?php if (!(isset($_smarty_tpl->tpl_vars['SELF']->value))) {?>
                                    <div class="btn-group">
                                        <?php if ($_smarty_tpl->tpl_vars['MOD_OR_ADMIN']->value != true) {?><a href="#" data-toggle="modal"
                                            data-target="#blockModal" class="btn btn-danger"><i class="fa-solid fa-ban"></i></a><?php }?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['MESSAGE_LINK']->value;?>
" class="btn btn-success" rel="tooltip"
                                            data-title="Message <?php echo $_smarty_tpl->tpl_vars['NICKNAME']->value;?>
"><i class="fa-solid fa-envelope"></i></a>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['RESET_PROFILE_BANNER']->value))) {?>
                                        
                                        <form class="d-inline-block" action="<?php echo $_smarty_tpl->tpl_vars['RESET_PROFILE_BANNER_LINK']->value;?>
" method="post">
                                            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
" />
                                            <button class="btn btn-danger"
                                            rel="tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['RESET_PROFILE_BANNER']->value;?>
">
                                                <i class="fa-solid fa-image"></i>
                                            </button>
                                        </form>
                                        <?php }?>
                                    </div>
                                <?php } else { ?>
                                    <div class="btn-group">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['SETTINGS_LINK']->value;?>
" class="btn btn-secondary"><i class="fa-solid fa-gear"></i></a>
                                        <button type="button" class="btn btn-theme" onclick="showBannerSelect()"><i class="fa-solid fa-image"></i></button>
                                    </div>
                                <?php }?>
                            <?php }?>
                        
                    </span>
                    <div>
                    <ul class="nav nav-tabs profile-tabs-new" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="profile-nav-link active" id="user-tab" data-toggle="tab" href="#user" role="tab"
                            aria-controls="user" aria-selected="true"><i class="fa-solid fa-comment-dots"></i><span class="web_only"> <?php echo $_smarty_tpl->tpl_vars['FEED']->value;?>
</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="profile-nav-link" id="about-tab" data-toggle="tab" href="#about" role="tab"
                            aria-controls="about" aria-selected="false"><i class="fa-solid fa-circle-info"></i><span class="web_only"> <?php echo $_smarty_tpl->tpl_vars['ABOUT']->value;?>
</span></a>
                    </li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TABS']->value, 'tab', false, 'key');
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
?>
                    <li class="nav-item">
                        <a class="profile-nav-link" id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
-tab" data-toggle="tab" href="#<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" role="tab" aria-controls="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" aria-selected="false">
                            <?php if ($_smarty_tpl->tpl_vars['key']->value == "friends") {?>
                                <i class="fa-solid fa-users"></i>
                            <?php } elseif ($_smarty_tpl->tpl_vars['key']->value == "forum") {?>
                                <i class="fa-solid fa-comments"></i>
                            <?php } elseif ($_smarty_tpl->tpl_vars['key']->value == "Badges") {?>
                                <i class="fa-solid fa-award"></i>
                            <?php } elseif ($_smarty_tpl->tpl_vars['key']->value == "trophies") {?>
                                <i class="fa-solid fa-trophy"></i>
                            <?php } elseif ($_smarty_tpl->tpl_vars['key']->value == "mcstatistics") {?>
                                <i class="fa-solid fa-chart-column"></i>
                            <?php }?>
                            <span class="web_only"> <?php echo $_smarty_tpl->tpl_vars['tab']->value['title'];?>
</span>
                        </a>
                    </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
                    </div>
                </div>
            </div>
            <div class="card profile-card">
                <div class="card-body main-card-body">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="user" role="tabpanel" aria-labelledby="user-tab">
                        
                            <?php if ((isset($_smarty_tpl->tpl_vars['LOGGED_IN']->value))) {?>
                            <form action="" method="post">
                                <div class="form-group">
                                    <textarea name="post" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['POST_ON_WALL']->value;?>
"></textarea>
                                </div>
                                <input type="hidden" name="action" value="new_post">
                                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                <button type="submit" class="btn btn-theme"><?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
</button>
                            </form>
                            <br />
                            <?php }?> 
                            <?php if (count($_smarty_tpl->tpl_vars['WALL_POSTS']->value)) {?>
                            <div class="timeline">
                                <div class="line"></div>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WALL_POSTS']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>

                                <article class="panel panel-theme" id="post-id-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">
                                    <div class="panel-heading icon">
                                        <img class="avatar-img" style="height:40px; width:40px;" src="<?php echo $_smarty_tpl->tpl_vars['post']->value['avatar'];?>
" />
                                    </div>
                                    <div class="panel-heading">
                                        <a class="username" href="<?php echo $_smarty_tpl->tpl_vars['post']->value['profile'];?>
"style="<?php echo $_smarty_tpl->tpl_vars['post']->value['user_style'];?>
" data-poload="<?php echo $_smarty_tpl->tpl_vars['USER_INFO_URL']->value;
echo $_smarty_tpl->tpl_vars['post']->value['user_id'];?>
"
                                                data-html="true" data-placement="top"><?php echo $_smarty_tpl->tpl_vars['post']->value['nickname'];?>
</a>
                                        <span class="pull-right" rel="tooltip"
                                            data-original-title="<?php echo $_smarty_tpl->tpl_vars['post']->value['date'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['date_rough'];?>
</span>
                                    </div>
                                    <div class="panel-body">
                                        <div class="forum_post">
                                            <?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>

                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <a href="<?php if ($_smarty_tpl->tpl_vars['post']->value['reactions_link'] != "#") {
echo $_smarty_tpl->tpl_vars['post']->value['reactions_link'];
} else { ?>#<?php }?>" class="grey-link" data-content='<?php if ((isset($_smarty_tpl->tpl_vars['post']->value['reactions']['reactions']))) {?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['post']->value['reactions']['reactions'], 'reaction', false, NULL, 'reactions', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['reaction']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['reaction']->value) {
$_smarty_tpl->tpl_vars['reaction']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_reactions']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_reactions']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_reactions']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_reactions']->value['total'];
?><a href="<?php echo $_smarty_tpl->tpl_vars['reaction']->value['profile'];?>
" style="<?php echo $_smarty_tpl->tpl_vars['reaction']->value['style'];?>
"><img class="avatar-img" src="<?php echo $_smarty_tpl->tpl_vars['reaction']->value['avatar'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['reaction']->value['username'];?>
" style="max-height:30px; max-width:30px;" /> <?php echo $_smarty_tpl->tpl_vars['reaction']->value['nickname'];?>
</a><?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_reactions']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_reactions']->value['last'] : null)) {?><br /><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> <?php } else {
echo $_smarty_tpl->tpl_vars['post']->value['reactions']['count'];
}?>'>
                                            <i class="fa-solid fa-thumbs-up"></i> <?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['post']->value['reactions']['count'],'/[^0-9]+/','');?>
  </a>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['LOGGED_IN']->value))) {?><a class="grey-link" href="#" data-toggle="modal" data-target="#replyModal<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
"><i class="fa-solid fa-comments"></i>
                                            <?php echo $_smarty_tpl->tpl_vars['REPLY']->value;?>
</a><?php }?>
                                        <span class="float-right">
                                            <?php if (((isset($_smarty_tpl->tpl_vars['CAN_MODERATE']->value)) && $_smarty_tpl->tpl_vars['CAN_MODERATE']->value == 1) || $_smarty_tpl->tpl_vars['post']->value['self'] == 1) {?>
                                            <form action="" method="post" id="delete<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" style="display:none">
                                                <input type="hidden" name="post_id" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">
                                                <input type="hidden" name="action" value="delete">
                                                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                            </form>
                                            <a class="grey-link" href="#" data-toggle="modal" data-target="#editModal<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
"><i class="fa-solid fa-pencil"></i> <span class="web_only"><?php echo $_smarty_tpl->tpl_vars['EDIT']->value;?>
</span></a>
                                            <a class="grey-link" href="#" onclick="deletePost(<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
)"><i class="fa-solid fa-trash"></i> <span class="web_only"><?php echo $_smarty_tpl->tpl_vars['DELETE']->value;?>
</span></a>
                                            <?php }?>
                                        </span>
                                    </div>
                                </article>

                                <?php if ((isset($_smarty_tpl->tpl_vars['post']->value['replies']['replies']))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['post']->value['replies']['replies'], 'reply', false, NULL, 'replies', array (
));
$_smarty_tpl->tpl_vars['reply']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['reply']->value) {
$_smarty_tpl->tpl_vars['reply']->do_else = false;
?>
                                <div class="reply-line"></div>
                                <article class="panel panel-theme reply-panel" id="reply-id-<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
">
                                    <div class="panel-heading icon">
                                        <img class="avatar-img" style="height:40px; width:40px;" src="<?php echo $_smarty_tpl->tpl_vars['reply']->value['avatar'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['reply']->value['username'];?>
" />
                                    </div>
                                    <div class="panel-heading">
                                        <a class="username" href="<?php echo $_smarty_tpl->tpl_vars['reply']->value['profile'];?>
"style="<?php echo $_smarty_tpl->tpl_vars['reply']->value['style'];?>
" data-poload="<?php echo $_smarty_tpl->tpl_vars['USER_INFO_URL']->value;
echo $_smarty_tpl->tpl_vars['reply']->value['user_id'];?>
"
                                                data-html="true" data-placement="top"><?php echo $_smarty_tpl->tpl_vars['reply']->value['nickname'];?>
</a>
                                        <span class="pull-right" rel="tooltip"
                                            data-original-title="<?php echo $_smarty_tpl->tpl_vars['reply']->value['time_full'];?>
"><?php echo $_smarty_tpl->tpl_vars['reply']->value['time_friendly'];?>
</span>
                                    </div>
                                    <div class="panel-body">
                                        <div class="forum_post">
                                            <?php echo $_smarty_tpl->tpl_vars['reply']->value['content'];?>

                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <div class="text-right">
                                            <?php if (((isset($_smarty_tpl->tpl_vars['CAN_MODERATE']->value)) && $_smarty_tpl->tpl_vars['CAN_MODERATE']->value == 1) || $_smarty_tpl->tpl_vars['reply']->value['self'] == 1) {?>
                                            <form action="" method="post" id="deleteReply<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
">
                                                <input type="hidden" name="post_id" value="<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
">
                                                <input type="hidden" name="action" value="deleteReply">
                                                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                            </form>
                                            <a class="grey-link" href="#" onclick="deleteReply(<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
)"><?php echo $_smarty_tpl->tpl_vars['DELETE']->value;?>
</a>
                                            <?php }?>
                                        </div>
                                    </div>
                                </article>

                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> <?php }?>
                                
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                            <?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>
 <?php } else { ?>
                            <div class="alert alert-info"><?php echo $_smarty_tpl->tpl_vars['NO_WALL_POSTS']->value;?>
</div><?php }?>
                        </div>
                        <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">

                        <div class="row">
                            <div class="col-md-4 justify-content-center">
                                <div class="profile-about-box-new">
                                    <div class="icon">
                                        <i class="fa-regular fa-id-card"></i>
                                    </div>
                                    <div class="text">
                                        <div><?php echo $_smarty_tpl->tpl_vars['ABOUT_FIELDS']->value['registered']['title'];?>
</div>
                                        <span rel="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['ABOUT_FIELDS']->value['registered']['tooltip'];?>
"><?php echo $_smarty_tpl->tpl_vars['ABOUT_FIELDS']->value['registered']['value'];?>
</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="profile-about-box-new">
                                    <div class="icon">
                                        <i class="fa-solid fa-street-view"></i>
                                    </div>
                                    <div class="text">
                                        <div><?php echo $_smarty_tpl->tpl_vars['ABOUT_FIELDS']->value['last_seen']['title'];?>
</div>
                                        <span rel="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['ABOUT_FIELDS']->value['last_seen']['tooltip'];?>
"><?php echo $_smarty_tpl->tpl_vars['ABOUT_FIELDS']->value['last_seen']['value'];?>
</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="profile-about-box-new">
                                    <div class="icon">
                                        <i class="fa-solid fa-eye"></i>
                                    </div>
                                    <div class="text">
                                        <div><?php echo $_smarty_tpl->tpl_vars['ABOUT_FIELDS']->value['profile_views']['title'];?>
</div>
                                        <span class="about-title"><?php echo $_smarty_tpl->tpl_vars['ABOUT_FIELDS']->value['profile_views']['value'];?>
</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="color: #FFF; font-size: 1.2rem; font-weight: 500; margin-bottom: .75rem"><?php echo $_smarty_tpl->tpl_vars['ABOUT']->value;?>
</div>

                            <?php if (!(isset($_smarty_tpl->tpl_vars['NO_ABOUT_FIELDS']->value))) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ABOUT_FIELDS']->value, 'field', false, 'key', 'about_foreach', array (
));
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
                            <?php if (is_numeric($_smarty_tpl->tpl_vars['key']->value)) {?>
                                <span style="font-weight: 500"><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
:</span> <?php echo $_smarty_tpl->tpl_vars['field']->value['value'];?>
<br />
                            <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php } else { ?>
                            <div class="alert alert-info mb-0"><?php echo $_smarty_tpl->tpl_vars['NO_ABOUT_FIELDS']->value;?>
</div>
                            <?php }?>
                        </div>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TABS']->value, 'tab', false, 'key');
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
?>
                        <div class="tab-pane fade" id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" role="tabpanel" aria-labelledby="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
-tab"><?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['tab']->value['include'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
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
<?php } else { ?>
<div class="alert alert-danger" role="alert">
    <?php echo $_smarty_tpl->tpl_vars['PRIVATE_PROFILE']->value;?>

</div>
<?php }
if ((isset($_smarty_tpl->tpl_vars['LOGGED_IN']->value))) {
if ((isset($_smarty_tpl->tpl_vars['SELF']->value))) {?>
<div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-title" id="imageModalLabel"><?php echo $_smarty_tpl->tpl_vars['CHANGE_BANNER']->value;?>
</span>
            </div>
            <div class="modal-body">
                <form class="inline-form" action="" name="updateBanner" method="post">
                    <select name="banner" class="image-picker show-html">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BANNERS']->value, 'banner');
$_smarty_tpl->tpl_vars['banner']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['banner']->value) {
$_smarty_tpl->tpl_vars['banner']->do_else = false;
?>
                        <option data-img-src="<?php echo $_smarty_tpl->tpl_vars['banner']->value['src'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['banner']->value['name'];?>
" <?php if ($_smarty_tpl->tpl_vars['banner']->value['active'] == true) {?>
                            selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['banner']->value['name'];?>
 </option> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> </select> <input type="hidden"
                            name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                            <input type="hidden" name="action" value="banner">
                </form>
                <?php if ((isset($_smarty_tpl->tpl_vars['PROFILE_BANNER']->value))) {?>
                    <form action="<?php echo $_smarty_tpl->tpl_vars['UPLOAD_BANNER_URL']->value;?>
" method="post" enctype="multipart/form-data">
                    <div class="profile-bg-image-change d-flex">
                        <div>
                            <span><?php echo $_smarty_tpl->tpl_vars['UPLOAD_PROFILE_BANNER']->value;?>
</span>
                        </div>
                        <div class="flex-grow-1 text-right">
                            <label class="btn btn-secondary mt-2"><?php echo $_smarty_tpl->tpl_vars['BROWSE']->value;?>
<input type="file" name="file" hidden /></label>
                            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                            <input type="hidden" name="type" value="profile_banner">
                            <button type="submit" class="btn btn-theme"><?php echo $_smarty_tpl->tpl_vars['UPLOAD']->value;?>
</button>
                        </div>
                    </div>
                    </form>
                <?php }?>
                <button type="button" onclick="document.updateBanner.submit()" class="btn btn-theme"><?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</button>
            </div>
        </div>
    </div>
</div>
<?php } else {
if ($_smarty_tpl->tpl_vars['MOD_OR_ADMIN']->value != true) {?>
<!-- Block user modal -->
<div class="modal fade" id="blockModal" tabindex="-1" role="dialog" aria-labelledby="blockModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-title" id="blockModalLabel"><?php if ((isset($_smarty_tpl->tpl_vars['BLOCK_USER']->value))) {
echo $_smarty_tpl->tpl_vars['BLOCK_USER']->value;
} else {
echo $_smarty_tpl->tpl_vars['UNBLOCK_USER']->value;
}?></span>
            </div>
            <form class="inline-form" action="" method="post">
                <div class="modal-body">
                    <p><?php if ((isset($_smarty_tpl->tpl_vars['CONFIRM_BLOCK_USER']->value))) {
echo $_smarty_tpl->tpl_vars['CONFIRM_BLOCK_USER']->value;
} else {
echo $_smarty_tpl->tpl_vars['CONFIRM_UNBLOCK_USER']->value;
}?></p>
                    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                    <input type="hidden" name="action" value="block">
                    <button type="submit" class="btn btn-theme"><?php echo $_smarty_tpl->tpl_vars['CONFIRM']->value;?>
</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php }
}
}?>

                            <?php if (count($_smarty_tpl->tpl_vars['WALL_POSTS']->value)) {?>
                            
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WALL_POSTS']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>

                                <?php if (((isset($_smarty_tpl->tpl_vars['CAN_MODERATE']->value)) && $_smarty_tpl->tpl_vars['CAN_MODERATE']->value == 1) || $_smarty_tpl->tpl_vars['post']->value['self'] == 1) {?>
                                <!-- Post editing modal -->
                                <div class="modal fade" id="editModal<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" tabindex="-1" role="dialog"
                                    aria-labelledby="editModal<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
Label" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <span class="modal-title"
                                                    id="editModal<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
Label"><?php echo $_smarty_tpl->tpl_vars['EDIT_POST']->value;?>
</span>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" method="post">
                                                    <div class="form-group">
                                                        <textarea class="form-control"
                                                            name="content"><?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>
</textarea>
                                                    </div>
                                                    <div class="form-group mb-0">
                                                        <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                                        <input type="hidden" name="post_id" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">
                                                        <input type="hidden" name="action" value="edit">
                                                        <button type="submit" class="btn btn-theme"><?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
</button>
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['CLOSE']->value;?>
</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php }?> <?php if ($_smarty_tpl->tpl_vars['post']->value['reactions_link'] != "#") {?>
                                <!-- Reaction modal -->
                                <div class="modal fade" id="reactModal<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" tabindex="-1" role="dialog"
                                    aria-labelledby="reactModal<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
Label" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <span class="modal-title"
                                                    id="reactModal<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
Label"><?php echo $_smarty_tpl->tpl_vars['REACTIONS_TITLE']->value;?>
</span>
                                            </div>
                                            <div class="modal-body">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['CLOSE']->value;?>
</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php }?>

                                <!-- Replies modal -->
                                        <div class="modal fade" id="replyModal<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" tabindex="-1" role="dialog" aria-labelledby="replyModal<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
Label" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <span class="modal-title" id="replyModal<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
Label"><?php echo $_smarty_tpl->tpl_vars['NEW_REPLY']->value;?>
</span>
                                                    </div>
                                                    <div class="modal-body">
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['LOGGED_IN']->value))) {?>
                                                        <form action="" method="post">
                                                            <div class="form-group">
                                                                <textarea class="form-control" name="reply" placeholder="<?php echo $_smarty_tpl->tpl_vars['NEW_REPLY']->value;?>
"></textarea>
                                                            </div>
                                                            <div class="form-group mb-0">
                                                                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                                                <input type="hidden" name="post" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">
                                                                <input type="hidden" name="action" value="reply">
                                                                <button type="submit" class="btn btn-theme"><?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
</button>
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['CLOSE']->value;?>
</button>
                                                            </div>
                                                        </form>
                                                    <?php }?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }
$_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ((isset($_smarty_tpl->tpl_vars['LOGGED_IN']->value))) {
echo '<script'; ?>
 type="text/javascript">
    function deletePost(post) {
        if (confirm("<?php echo $_smarty_tpl->tpl_vars['CONFIRM_DELETE']->value;?>
")) {
            document.getElementById("delete" + post).submit();
        }
    }
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    function deleteReply(post) {
        if (confirm("<?php echo $_smarty_tpl->tpl_vars['CONFIRM_DELETE']->value;?>
")) {
            document.getElementById("deleteReply" + post).submit();
        }
    }
<?php echo '</script'; ?>
>
<?php }
}
}
