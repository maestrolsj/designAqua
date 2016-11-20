<?php if(!defined("__XE__"))exit;?>
    <?php if(!$__Context->module_info->colorset){ ?>
        <?php $__Context->module_info->colorset = "white" ?>
    <?php } ?>

    <!--#Meta:modules/board/skins/xe_board_extended/css/common.css--><?php $__tmp=array('modules/board/skins/xe_board_extended/css/common.css','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>

    <?php if($__Context->module_info->colorset == "cyan"){ ?> <!--#Meta:modules/board/skins/xe_board_extended/css/cyan.css--><?php $__tmp=array('modules/board/skins/xe_board_extended/css/cyan.css','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
    <?php }elseif($__Context->module_info->colorset == "red"){ ?> <!--#Meta:modules/board/skins/xe_board_extended/css/red.css--><?php $__tmp=array('modules/board/skins/xe_board_extended/css/red.css','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
    <?php }elseif($__Context->module_info->colorset == "green"){ ?> <!--#Meta:modules/board/skins/xe_board_extended/css/green.css--><?php $__tmp=array('modules/board/skins/xe_board_extended/css/green.css','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
    <?php }elseif($__Context->module_info->colorset == "purple"){ ?> <!--#Meta:modules/board/skins/xe_board_extended/css/purple.css--><?php $__tmp=array('modules/board/skins/xe_board_extended/css/purple.css','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
    <?php }elseif($__Context->module_info->colorset == "black"){ ?> 
        <!--#Meta:modules/board/skins/xe_board_extended/css/black.css--><?php $__tmp=array('modules/board/skins/xe_board_extended/css/black.css','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
        <?php  $__Context->btn_class = "black"  ?>
    <?php }else{ ?> <!--#Meta:modules/board/skins/xe_board_extended/css/white.css--><?php $__tmp=array('modules/board/skins/xe_board_extended/css/white.css','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
    <?php } ?>


    <?php if(!$__Context->module_info->duration_new = (int)$__Context->module_info->duration_new){ ?><?php  $__Context->module_info->duration_new = 12  ?><?php } ?>
    <?php if(!$__Context->module_info->content_cut_size = (int)$__Context->module_info->content_cut_size){ ?><?php  $__Context->module_info->content_cut_size= 240  ?><?php } ?>


    <?php if(!$__Context->module_info->thumbnail_type){ ?><?php  $__Context->module_info->thumbnail_type = 'crop';  ?><?php } ?>
    <?php if(!$__Context->module_info->thumbnail_width){ ?><?php  $__Context->module_info->thumbnail_width = 100;  ?><?php } ?>
    <?php if(!$__Context->module_info->thumbnail_height){ ?><?php  $__Context->module_info->thumbnail_height = 100;  ?><?php } ?>


    <?php if($__Context->order_type == "desc"){ ?>
        <?php  $__Context->order_icon = "buttonDescending.gif"  ?>
        <?php  $__Context->order_type = "asc";  ?>
    <?php }else{ ?>
        <?php  $__Context->order_icon = "buttonAscending.gif"  ?>
        <?php  $__Context->order_type = "desc";  ?>
    <?php } ?>


<?php if($__Context->module_info->default_style != 'forum' && $__Context->module_info->default_style != 'blog'){ ?>
    <?php if($__Context->listStyle=='gallery'){ ?>
        <?php  $__Context->module_info->default_style = 'gallery' ?>
    <?php }elseif($__Context->listStyle=='webzine'){ ?>
        <?php  $__Context->module_info->default_style = 'webzine' ?>
    <?php }elseif($__Context->listStyle=='list'){ ?>
        <?php  $__Context->module_info->default_style = 'list' ?>
    <?php } ?>
<?php } ?>

<?php if(!$__Context->module_info->header_title_format){ ?>
    <?php  $__Context->module_info->header_title_format = 'h3' ?>
<?php } ?>


    <?php echo $__Context->module_info->header_text ?>

<!-- 스킨의 제목/간단한 설명 출력 -->
    <?php if($__Context->module_info->title){ ?>
    <div class="boardHeader">
        <div class="boardHeaderBorder">
            <<?php echo $__Context->module_info->header_title_format ?>><?php echo $__Context->module_info->title ?><?php if($__Context->module_info->sub_title){ ?> - <?php echo $__Context->module_info->sub_title ?><?php } ?></<?php echo $__Context->module_info->header_title_format ?>>
        </div>
    </div>
    <?php } ?>

<!-- 스킨의 상세 설명 -->
    <?php if($__Context->module_info->comment){ ?>
    <div class="boardDescription"><?php echo $__Context->module_info->comment ?></div>
    <?php } ?>

<!-- 게시판 정보 -->
<?php if($__Context->module_info->display_login_info != 'N' || $__Context->module_info->display_setup_button != 'N'){ ?>
    <div class="boardInformation">

        <!-- 게시물 수 -->
        <?php if($__Context->total_count && $__Context->module_info->default_style != 'blog'){ ?>
        <div class="articleNum"><?php echo $__Context->lang->document_count ?> <strong><?php echo number_format($__Context->total_count) ?></strong></div>
        <?php } ?>

        <!-- 로그인 정보 -->
        <ul class="accountNavigation">

        
        <?php if($__Context->is_logged){ ?>

            
            <?php if($__Context->grant->manager && $__Context->module_info->display_setup_button != 'N'){ ?>
            <li class="setup"><a href="<?php echo getUrl('act','dispBoardAdminBoardInfo') ?>"><?php echo $__Context->lang->cmd_setup ?></a></li>
            <?php } ?>

            
            <?php if($__Context->logged_info->is_admin == 'Y' && $__Context->module_info->display_setup_button != 'N'){ ?>
            <li class="admin"><a href="<?php echo getUrl('','module','admin','act','dispBoardAdminContent') ?>" onclick="window.open(this.href); return false;"><?php echo $__Context->lang->cmd_management ?></a></li>
            <?php } ?>

            
            <?php if($__Context->module_info->display_login_info != 'N'){ ?>
            <li class="myInfo"><a href="<?php echo getUrl('act','dispMemberInfo') ?>"><?php echo $__Context->lang->cmd_view_member_info ?></a></li>
            <li class="loginAndLogout"><a href="<?php echo getUrl('act','dispMemberLogout') ?>"><?php echo $__Context->lang->cmd_logout ?></a></li>
            <?php } ?>

        
        <?php }elseif(!$__Context->is_logged && $__Context->module_info->display_login_info != 'N'){ ?>
            <li class="join"><a href="<?php echo getUrl('act','dispMemberSignUpForm') ?>"><?php echo $__Context->lang->cmd_signup ?></a></li>
            <li class="loginAndLogout"><a href="<?php echo getUrl('act','dispMemberLoginForm') ?>"><?php echo $__Context->lang->cmd_login ?></a></li>
        <?php } ?>

        <?php if($__Context->rss_url){ ?>
            <li class="rss"><a href="<?php echo $__Context->rss_url ?>"><img src="/xe/modules/board/skins/xe_board_extended/images/<?php echo $__Context->module_info->colorset ?>/iconRss.gif" alt="RSS" width="13" height="13" /></a></li>
        <?php } ?>

            <li class="skin_info"><a href="<?php echo getUrl('','module','module','act','dispModuleSkinInfo','selected_module',$__Context->module_info->module, 'skin', $__Context->module_info->skin) ?>" onclick="popopen(this.href,'skinInfo'); return false;"><img src="/xe/modules/board/skins/xe_board_extended/images/<?php echo $__Context->module_info->colorset ?>/buttonHelp.gif" alt="Skin Info" width="13" height="13"/></a></li>

            <li class="tag_info"><a href="<?php echo getUrl('act','dispBoardTagList') ?>"><img src="/xe/modules/board/skins/xe_board_extended/images/<?php echo $__Context->module_info->colorset ?>/iconAllTags.gif" alt="Tag list" width="13" height="13"/></a></li>

        
            <?php if($__Context->module_info->default_style != 'forum' && $__Context->module_info->default_style != 'blog'){ ?>
            <li class="listType"><a href="<?php echo getUrl('listStyle','list','act','','document_srl','') ?>"><img src="/xe/modules/board/skins/xe_board_extended/images/<?php echo $__Context->module_info->colorset ?>/typeList.gif" border="0" width="13" height="13" alt="List" /></a></li>
            <li class="listType"><a href="<?php echo getUrl('listStyle','webzine','act','','document_srl','') ?>"><img src="/xe/modules/board/skins/xe_board_extended/images/<?php echo $__Context->module_info->colorset ?>/typeWebzine.gif" border="0" width="13" height="13" alt="Webzine" /></a></li>
            <li class="listType"><a href="<?php echo getUrl('listStyle','gallery','act','','document_srl','') ?>"><img src="/xe/modules/board/skins/xe_board_extended/images/<?php echo $__Context->module_info->colorset ?>/typeGallery.gif" border="0" width="13" height="13" alt="Gallery" /></a></li>
            <?php } ?>
        </ul>

    </div>
<?php } ?>
