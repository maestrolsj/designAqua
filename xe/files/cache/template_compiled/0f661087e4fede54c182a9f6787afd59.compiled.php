<?php if(!defined("__XE__"))exit;?><!-- 목록 출력 -->
<form action="./" method="get"><input type="hidden" name="error_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
    <table cellspacing="0" summary="" class="boardList">
    <thead>
    <tr>
        
        <?php if($__Context->grant->manager){ ?>
            <th scope="col" class="no_line"><input type="checkbox" onclick="XE.checkboxToggleAll({ doClick:true }); return false;" /></th>
        <?php } ?>

    
    <?php  $__Context->_line_idx = 0; ?>
    <?php if($__Context->list_config&&count($__Context->list_config))foreach($__Context->list_config as $__Context->key => $__Context->val){ ?>
        
        <?php if(!$__Context->grant->manager && $__Context->_line_idx==0){ ?>
            <?php $__Context->_lc = 'class="no_line"';$__Context->_l = "no_line" ?>
        <?php }else{ ?>
            <?php $__Context->_lc = $__Context->_l = "" ?>
        <?php } ?>

        
        <?php if($__Context->val->idx == -1){ ?>

            
            <?php if($__Context->val->type == 'no'){ ?>
                <th scope="col" <?php echo $__Context->_lc ?>><div style="color:#<?php echo $__Context->module_info->listcolor ?>"><?php echo $__Context->lang->no ?></div></th>
            <?php }elseif($__Context->val->type == 'title'){ ?>
                <th scope="col" class="<?php if($__Context->module_info->use_category == 'Y'){ ?>category<?php }else{ ?>title<?php } ?> <?php echo $__Context->_l ?>">
                    <div>
                    <?php if($__Context->module_info->use_category == "Y"){ ?>
                    
                            <select name="category" id="board_category">
                                <option value="" style="color:#<?php echo $__Context->module_info->listcolor ?>"><?php echo $__Context->lang->category ?></option>
                                <?php if($__Context->category_list&&count($__Context->category_list))foreach($__Context->category_list as $__Context->val){ ?>
                                <option value="<?php echo $__Context->val->category_srl ?>" <?php if($__Context->category==$__Context->val->category_srl){ ?>selected="selected"<?php } ?>><?php echo str_repeat("&nbsp;&nbsp;",$__Context->val->depth) ?> <?php echo $__Context->val->title ?> <?php if($__Context->val->document_count){ ?>(<?php echo $__Context->val->document_count ?>)<?php } ?></option>
                                <?php } ?>
                            </select>
                            <input type="button" name="go_button" id="go_button" value="GO" onclick="doChangeCategory(); return false;" class="buttonTypeGo" />
                    <?php }else{ ?>
                    <div style="color:#<?php echo $__Context->module_info->listcolor ?>"><?php echo $__Context->lang->title ?></div>
                    <?php } ?>
                    </div>
                </th>
            <?php }elseif($__Context->val->type == 'regdate'){ ?>
                <th scope="col" class="date <?php echo $__Context->_l ?>"><div style="color:#<?php echo $__Context->module_info->listcolor ?>"><a href="<?php echo getUrl('sort_index','regdate','order_type',$__Context->order_type) ?>" style="color:#<?php echo $__Context->module_info->listcolor ?>"><?php echo $__Context->lang->date ?><?php if($__Context->sort_index=='regdate'){ ?><img src="/xe/modules/board/skins/xe_board_extended/images/common/<?php echo $__Context->order_icon ?>" alt="" width="5" height="3" class="sort" /><?php } ?></a></div></th>
            <?php }elseif($__Context->val->type == 'last_update'){ ?>
                <th scope="col" class="date <?php echo $__Context->_l ?>"><div style="color:#<?php echo $__Context->module_info->listcolor ?>"><a href="<?php echo getUrl('sort_index','last_update','order_type',$__Context->order_type) ?>" style="color:#<?php echo $__Context->module_info->listcolor ?>"><?php echo $__Context->lang->last_update ?><?php if($__Context->sort_index=='last_update'){ ?><img src="/xe/modules/board/skins/xe_board_extended/images/common/<?php echo $__Context->order_icon ?>" alt="" width="5" height="3" class="sort" /><?php } ?></a></div></th>
            <?php }elseif($__Context->val->type == 'nick_name'){ ?>
                <th class="author" scope="col" <?php echo $__Context->_lc ?>><div style="color:#<?php echo $__Context->module_info->listcolor ?>"><?php echo $__Context->lang->writer ?></div></th>
            <?php }elseif($__Context->val->type == 'user_id'){ ?>
                <th class="author" scope="col" <?php echo $__Context->_lc ?>><div style="color:#<?php echo $__Context->module_info->listcolor ?>"><?php echo $__Context->lang->user_id ?></div></th>
            <?php }elseif($__Context->val->type == 'user_name'){ ?>
                <th class="author" scope="col" <?php echo $__Context->_lc ?>><div style="color:#<?php echo $__Context->module_info->listcolor ?>"><?php echo $__Context->lang->user_name ?></div></th>
            <?php }elseif($__Context->val->type == 'readed_count'){ ?>
                <th class="reading" scope="col" <?php echo $__Context->_lc ?>><div style="color:#<?php echo $__Context->module_info->listcolor ?>"><a href="<?php echo getUrl('sort_index','readed_count','order_type',$__Context->order_type) ?>" style="color:#<?php echo $__Context->module_info->listcolor ?>"><?php echo $__Context->lang->readed_count ?><?php if($__Context->sort_index=='readed_count'){ ?><img src="/xe/modules/board/skins/xe_board_extended/images/common/<?php echo $__Context->order_icon ?>" alt="" width="5" height="3" class="sort" /><?php } ?></a></div></th>
            <?php }elseif($__Context->val->type == 'voted_count'){ ?>
                <th class="recommend" scope="col" <?php echo $__Context->_lc ?>><div style="color:#<?php echo $__Context->module_info->listcolor ?>"><a href="<?php echo getUrl('sort_index','voted_count','order_type',$__Context->order_type) ?>" style="color:#<?php echo $__Context->module_info->listcolor ?>"><?php echo $__Context->lang->voted_count ?><?php if($__Context->sort_index=='voted_count'){ ?><img src="/xe/modules/board/skins/xe_board_extended/images/common/<?php echo $__Context->order_icon ?>" alt="" width="5" height="3" class="sort" /><?php } ?></a></div></th>
            <?php } ?>

        
        <?php }else{ ?>
                <th scope="col" <?php echo $__Context->_lc ?>><div><?php echo $__Context->val->name ?></div></th>
        <?php } ?>

        <?php  $__Context->_line_idx++; ?>
    <?php } ?>
    </tr>
    </thead>
    <tbody>

    
    <?php if(!$__Context->document_list && !$__Context->notice_list){ ?>
    <tr class="bg0 tCenter">
        <td colspan="<?php if($__Context->grant->manager){ ?><?php echo count($__Context->list_config)+1 ?><?php }else{ ?><?php echo count($__Context->list_config) ?><?php } ?>" class="title">
            <?php echo $__Context->lang->no_documents ?>
        </td>
    </tr>
    <?php }else{ ?>

        
        <?php if($__Context->notice_list&&count($__Context->notice_list))foreach($__Context->notice_list as $__Context->no => $__Context->document){ ?>
        <tr class="notice">

            
            <?php if($__Context->grant->manager){ ?>
                <td class="checkbox"><input type="checkbox" name="cart" value="<?php echo $__Context->document->document_srl ?>" onclick="doAddDocumentCart(this)" <?php if($__Context->document->isCarted()){ ?>checked="checked"<?php } ?> /></td>
            <?php } ?>

            
            <?php if($__Context->list_config&&count($__Context->list_config))foreach($__Context->list_config as $__Context->key => $__Context->val){ ?>

                
                <?php if($__Context->val->idx == -1){ ?>

                    
                    <?php if($__Context->val->type == 'no'){ ?>
                        <td class="notice"><?php if($__Context->document_srl == $__Context->document->document_srl){ ?><img src="/xe/modules/board/skins/xe_board_extended/images/common/iconArrowD8.gif" border="0" alt="" /><?php }else{ ?><?php echo $__Context->lang->notice ?><?php } ?></td>
                    <?php }elseif($__Context->val->type == 'title'){ ?>
                        <td class="title">
                            <?php if($__Context->module_info->use_category == "Y" && $__Context->document->get('category_srl')){ ?>
                            <strong class="category" <?php if($__Context->category_list[$__Context->document->get('category_srl')]->color){ ?>style="color:<?php echo $__Context->category_list[$__Context->document->get('category_srl')]->color ?>;"<?php } ?>><div style="color:#<?php echo $__Context->module_info->listcolor ?>"><?php echo $__Context->category_list[$__Context->document->get('category_srl')]->title ?></div></strong>
                            <?php } ?>

                            <a href="<?php echo getUrl('document_srl',$__Context->document->document_srl, 'listStyle', $__Context->listStyle, 'cpage','') ?>"><?php echo $__Context->document->getTitle($__Context->module_info->subject_cut_size) ?></a>
                            
                            <?php if($__Context->document->getCommentCount()){ ?>
                                <span class="replyAndTrackback" title="Replies"><img src="/xe/modules/board/skins/xe_board_extended/images/<?php echo $__Context->module_info->colorset ?>/iconReply.gif" alt="" width="12" height="12" class="icon" /> <strong><?php echo $__Context->document->getCommentCount() ?></strong></span>
                            <?php } ?>

                            <?php if($__Context->document->getTrackbackCount()){ ?>
                                <span class="replyAndTrackback" title="Trackbacks"><img src="/xe/modules/board/skins/xe_board_extended/images/<?php echo $__Context->module_info->colorset ?>/iconTrackback.gif" alt="" width="12" height="13" class="trackback icon" /> <strong><?php echo $__Context->document->getTrackbackCount() ?></strong></span>
                            <?php } ?>

                            <?php echo $__Context->document->printExtraImages(60*60*$__Context->module_info->duration_new) ?>
                        </td>
                    <?php }elseif($__Context->val->type == 'regdate'){ ?>
                        <td class="date"><div style="color:#<?php echo $__Context->module_info->datecolor ?>"><?php echo $__Context->document->getRegdate('Y-m-d') ?></div></td>
                    <?php }elseif($__Context->val->type == 'last_update'){ ?>
                        <td class="date"><div style="color:#<?php echo $__Context->module_info->namecolor ?>"><?php echo zdate($__Context->document->get('last_update'),'Y-m-d H:i') ?></div></td>
                    <?php }elseif($__Context->val->type == 'nick_name'){ ?>
                        <td class="author"><div class="member_<?php echo $__Context->document->get('member_srl') ?>" style="color:#<?php echo $__Context->module_info->namecolor ?>"><?php echo $__Context->document->getNickName() ?></div></td>
                    <?php }elseif($__Context->val->type == 'user_id'){ ?>
                        <td class="author"><div style="color:#<?php echo $__Context->module_info->namecolor ?>"><?php echo $__Context->document->getUserID() ?></div></td>
                    <?php }elseif($__Context->val->type == 'user_name'){ ?>
                        <td class="author"><div style="color:#<?php echo $__Context->module_info->namecolor ?>"><?php echo $__Context->document->getUserName() ?></div></td>
                    <?php }elseif($__Context->val->type == 'readed_count'){ ?>
                        <td class="reading"><?php echo $__Context->document->get('readed_count')>0?$__Context->document->get('readed_count'):'&nbsp;' ?></td>
                    <?php }elseif($__Context->val->type == 'voted_count'){ ?>
                        <td class="recommend"><?php echo $__Context->document->get('voted_count')!=0?$__Context->document->get('voted_count'):'&nbsp;' ?></td>
                    <?php } ?>

                
                <?php }else{ ?>
                        <td><?php echo $__Context->document->getExtraValueHTML($__Context->val->idx) ?>&nbsp;</td>
                <?php } ?>

            <?php } ?>
        </tr>
        <?php } ?>

        
        <?php if($__Context->document_list&&count($__Context->document_list))foreach($__Context->document_list as $__Context->no => $__Context->document){ ?>
        <tr class="bg<?php echo ($__Context->no+1)%2+1 ?>">
        
            
            <?php if($__Context->grant->manager){ ?>
                <td class="checkbox"><input type="checkbox" name="cart" value="<?php echo $__Context->document->document_srl ?>" onclick="doAddDocumentCart(this)" <?php if($__Context->document->isCarted()){ ?>checked="checked"<?php } ?> /></td>
            <?php } ?>

            
            <?php if($__Context->list_config&&count($__Context->list_config))foreach($__Context->list_config as $__Context->key => $__Context->val){ ?>

                
                <?php if($__Context->val->idx == -1){ ?>

                    
                    <?php if($__Context->val->type == 'no'){ ?>
                        <td class="num"><?php if($__Context->document_srl == $__Context->document->document_srl){ ?><img src="/xe/modules/board/skins/xe_board_extended/images/common/iconArrowD8.gif" border="0" alt="" /><?php }else{ ?><div style="color:#<?php echo $__Context->module_info->numcolor ?>"><?php echo $__Context->no ?></div><?php } ?></td>
                    <?php }elseif($__Context->val->type == 'title'){ ?>
                        <td class="title">
                            <?php if($__Context->module_info->use_category == "Y" && $__Context->document->get('category_srl')){ ?>
                            <strong class="category" <?php if($__Context->category_list[$__Context->document->get('category_srl')]->color){ ?>style="color:<?php echo $__Context->category_list[$__Context->document->get('category_srl')]->color ?>;"<?php } ?>><?php echo $__Context->category_list[$__Context->document->get('category_srl')]->title ?></strong>
                            <?php } ?>
                            <a href="<?php echo getUrl('document_srl',$__Context->document->document_srl, 'listStyle', $__Context->listStyle, 'cpage','') ?>" style="color:#<?php echo $__Context->module_info->titlecolor ?>"><?php echo $__Context->document->getTitle($__Context->module_info->subject_cut_size) ?></a>
                            
                            <?php if($__Context->document->getCommentCount()){ ?>
                                <span class="replyAndTrackback" title="Replies"><img src="/xe/modules/board/skins/xe_board_extended/images/<?php echo $__Context->module_info->colorset ?>/iconReply.gif" alt="" width="12" height="12" class="icon" /> <strong><?php echo $__Context->document->getCommentCount() ?></strong></span>
                            <?php } ?>

                            <?php if($__Context->document->getTrackbackCount()){ ?>
                                <span class="replyAndTrackback" title="Trackbacks"><img src="/xe/modules/board/skins/xe_board_extended/images/<?php echo $__Context->module_info->colorset ?>/iconTrackback.gif" alt="" width="12" height="13" class="trackback icon" /> <strong><?php echo $__Context->document->getTrackbackCount() ?></strong></span>
                            <?php } ?>

                            <?php echo $__Context->document->printExtraImages(60*60*$__Context->module_info->duration_new) ?>
                        </td>
                    <?php }elseif($__Context->val->type == 'regdate'){ ?>
                        <td class="date"><div style="color:#<?php echo $__Context->module_info->datecolor ?>"><?php echo $__Context->document->getRegdate('Y-m-d') ?></div></td>
                    <?php }elseif($__Context->val->type == 'last_update'){ ?>
                        <td class="date"><div style="color:#<?php echo $__Context->module_info->datecolor ?>"><?php echo zdate($__Context->document->get('last_update'),'Y-m-d H:i') ?></div></td>
                    <?php }elseif($__Context->val->type == 'nick_name'){ ?>
                        <td class="author"><div class="member_<?php echo $__Context->document->get('member_srl') ?>" style="color:#<?php echo $__Context->module_info->namecolor ?>"><?php echo $__Context->document->getNickName() ?></div></td>
                    <?php }elseif($__Context->val->type == 'user_id'){ ?>
                        <td class="author"><div style="color:#<?php echo $__Context->module_info->namecolor ?>"><?php echo $__Context->document->getUserID() ?></div></td>
                    <?php }elseif($__Context->val->type == 'user_name'){ ?>
                        <td class="author"><div style="color:#<?php echo $__Context->module_info->namecolor ?>"><?php echo $__Context->document->getUserName() ?></div></td>
                    <?php }elseif($__Context->val->type == 'readed_count'){ ?>
                        <td class="reading"><div style="color:#<?php echo $__Context->module_info->readedcountcolor ?>"><?php echo $__Context->document->get('readed_count')>0?$__Context->document->get('readed_count'):'&nbsp;' ?></div></td>
                    <?php }elseif($__Context->val->type == 'voted_count'){ ?>
                        <td class="recommend"><div style="color:#<?php echo $__Context->module_info->votedcountcolor ?>"><?php echo $__Context->document->get('voted_count')!=0?$__Context->document->get('voted_count'):'&nbsp;' ?></div></td>
                    <?php } ?>

                
                <?php }else{ ?>
                        <td><?php echo $__Context->document->getExtraValueHTML($__Context->val->idx) ?>&nbsp;</td>
                <?php } ?>

            <?php } ?>
        <?php } ?>
        </tr>

    <?php } ?>

    </tbody>
    </table>
</form>
