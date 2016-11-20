<?php if(!defined("__XE__"))exit;?><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_board_extended','header.html') ?>

<!-- 게시물 작성 폼 -->
<form action="./" method="post" onsubmit="return procFilter(this, insert)" id="fo_write"><input type="hidden" name="error_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
<input type="hidden" name="content" value="<?php echo $__Context->oDocument->getContentText() ?>" />
<input type="hidden" name="document_srl" value="<?php echo $__Context->document_srl ?>" />

<div class="boardWrite">
    <?php if(!$__Context->is_logged){ ?>
    <div class="userNameAndPw">
        <label for="userName"><?php echo $__Context->lang->writer ?></label>
        <input type="text" name="nick_name" value="<?php echo $__Context->oDocument->getNickName() ?>" class="userName inputTypeText" id="userName"/>

        <label for="userPw"><?php echo $__Context->lang->password ?></label>
        <input type="password" name="password" value="" id="userPw" class="userPw inputTypeText" />

        <label for="emailAddress"><?php echo $__Context->lang->email_address ?></label>
        <input type="text" name="email_address" value="<?php echo htmlspecialchars($__Context->oDocument->get('email_address')) ?>" id="emailAddress" class="emailAddress inputTypeText"/>

        <label for="homePage"><?php echo $__Context->lang->homepage ?></label>
        <input type="text" name="homepage" value="<?php echo htmlspecialchars($__Context->oDocument->get('homepage')) ?>" id="homePage" class="homePage inputTypeText"/>
    </div>
    <?php } ?>

    <div class="title">
        <?php if($__Context->module_info->use_category=="Y"){ ?>
        <select name="category_srl" class="category">
            <option value=""><?php echo $__Context->lang->category ?></option>
            <?php if($__Context->category_list&&count($__Context->category_list))foreach($__Context->category_list as $__Context->val){ ?>
            <option <?php if(!$__Context->val->grant){ ?>disabled="disabled"<?php } ?> value="<?php echo $__Context->val->category_srl ?>" <?php if($__Context->val->grant&&$__Context->val->selected||$__Context->val->category_srl==$__Context->oDocument->get('category_srl')){ ?>selected="selected"<?php } ?>>
                <?php echo str_repeat("&nbsp;&nbsp;",$__Context->val->depth) ?> <?php echo $__Context->val->title ?> (<?php echo $__Context->val->document_count ?>)
            </option>
            <?php } ?>
        </select>
        <?php }else{ ?>
        <label class="title"><?php echo $__Context->lang->title ?></label>
        <?php } ?>
        <input type="text" name="title" class="title inputTypeText" value="<?php echo htmlspecialchars($__Context->oDocument->getTitleText()) ?>" />
    </div>

    <dl class="option">
        <?php if($__Context->grant->manager){ ?>
        <?php  $__Context->_color = array('555555','222288','226622','2266EE','8866CC','88AA66','EE2222','EE6622','EEAA22','EEEE22')  ?>
        <dd><select name="title_color" id="title_color" <?php if($__Context->oDocument->get('title_color')){ ?>style="background-color:#<?php echo $__Context->oDocument->get('title_color') ?>;"<?php } ?> onchange="this.style.backgroundColor=this.options[this.selectedIndex].style.backgroundColor;">
                <option value="" style="background-color:#FFFFFF;"><?php echo $__Context->lang->title_color ?></option>
                <?php if($__Context->_color&&count($__Context->_color))foreach($__Context->_color as $__Context->_col){ ?>
                <option value="<?php echo $__Context->_col ?>" style="background-color:#<?php echo $__Context->_col ?>" <?php if($__Context->oDocument->get('title_color')==$__Context->_col){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->title_color ?></option>
                <?php } ?>
            </select></dd>
        <dd>
            <input type="checkbox" name="title_bold" id="title_bold" value="Y" <?php if($__Context->oDocument->get('title_bold')=='Y'){ ?>checked="checked"<?php } ?> />
            <label for="title_bold"><?php echo $__Context->lang->title_bold ?></label>
        </dd>
        <dd>
            <input type="checkbox" name="is_notice" value="Y" <?php if($__Context->oDocument->isNotice()){ ?>checked="checked"<?php } ?> id="is_notice" />
            <label for="is_notice"><?php echo $__Context->lang->notice ?></label>
        </dd>
        <dd>
            <input type="checkbox" name="lock_comment" value="Y" <?php if($__Context->oDocument->isLocked()){ ?>checked="checked"<?php } ?> id="lock_comment" />
            <label for="lock_comment"><?php echo $__Context->lang->lock_comment ?></label>
        </dd>
        <?php } ?>
        <?php if($__Context->module_info->secret=="Y"){ ?>
        <dd>
            <input type="checkbox" name="is_secret" value="Y" <?php if($__Context->oDocument->isSecret()){ ?>checked="checked"<?php } ?> id="is_secret" />
            <label for="is_secret"><?php echo $__Context->lang->secret ?></label>
        </dd>
        <?php } ?>
        <dd>
            <input type="checkbox" name="allow_comment" value="Y" <?php if($__Context->oDocument->allowComment()){ ?>checked="checked"<?php } ?> id="allow_comment" />
            <label for="allow_comment"><?php echo $__Context->lang->allow_comment ?></label>
        </dd>
        <dd>
            <input type="checkbox" name="allow_trackback" value="Y" <?php if($__Context->oDocument->allowTrackback()){ ?>checked="checked"<?php } ?> id="allow_trackback" />
            <label for="allow_trackback"><?php echo $__Context->lang->allow_trackback ?></label>
        </dd>
        <?php if($__Context->is_logged){ ?>
        <dd>
            <input type="checkbox" name="notify_message" value="Y" <?php if($__Context->oDocument->useNotify()){ ?>checked="checked"<?php } ?> id="notify_message" />
            <label for="notify_message"><?php echo $__Context->lang->notify ?></label>
        </dd>
        <?php } ?>
    </dl>

    <?php if(count($__Context->extra_keys)){ ?>
    <table cellspacing="0" summary="" class="extraVarsList">
    <col width="150" />
    <col />
    <?php if($__Context->extra_keys&&count($__Context->extra_keys))foreach($__Context->extra_keys as $__Context->key => $__Context->val){ ?>
    <tr>
        <th scope="row"><?php echo $__Context->val->name ?> <?php if($__Context->val->is_required=='Y'){ ?>*<?php } ?></th>
        <td><?php echo $__Context->val->getFormHTML() ?></td>
    </tr>
    <?php } ?>
    </table>
    <?php } ?>

    <div class="editor"><?php echo $__Context->oDocument->getEditor() ?></div>

    <div class="tag">
        <input type="text" name="tags" value="<?php echo htmlspecialchars($__Context->oDocument->get('tags')) ?>" class="inputTypeText" />
        <p class="info"><?php echo $__Context->lang->about_tag ?></p>
    </div>
</div>

        <div class="fl gap1">
            <?php if($__Context->is_logged){ ?>
            <span class="button <?php echo $__Context->btn_class ?>"><input type="button" value="<?php echo $__Context->lang->cmd_temp_save ?>"  onclick="doDocumentSave(this); return false;" /></span>
            <span class="button <?php echo $__Context->btn_class ?>"><input type="button" value="<?php echo $__Context->lang->cmd_load ?>"  onclick="doDocumentLoad(this); return false;" /></span>
            <span class="button <?php echo $__Context->btn_class ?>"><input type="button" value="<?php echo $__Context->lang->cmd_back ?>" onclick="location.href='<?php echo getUrl('act','') ?>'" /></span>
            <?php } ?>
        </div>

        <div class="fr gap1">
            <span class="button <?php echo $__Context->btn_class ?>"><input type="button" value="<?php echo $__Context->lang->cmd_preview ?>" onclick="doDocumentPreview(this); return false;" /></span>
            <span class="button <?php echo $__Context->btn_class ?>"><input type="submit" value="<?php echo $__Context->lang->cmd_registration ?>" accesskey="s" /></span>
        </div>

        <div class="clear"></div>
    </form>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_board_extended','footer.html') ?>
