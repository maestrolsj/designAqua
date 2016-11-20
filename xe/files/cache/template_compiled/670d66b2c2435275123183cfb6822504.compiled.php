<?php if(!defined("__XE__"))exit;?><div class="boardRead">

	<div class="boardReadHeader">

		<h3 class="title"><a href="<?php echo $__Context->oDocument->getPermanentUrl() ?>"><?php echo $__Context->oDocument->getTitle() ?></a></h3>

		<?php if($__Context->module_info->display_author!='N'){ ?>
		<em>
			<?php if(!$__Context->oDocument->getMemberSrl()){ ?>
				<?php if($__Context->oDocument->isExistsHomepage()){ ?>
					<a href="<?php echo $__Context->oDocument->getHomepageUrl() ?>" onclick="window.open(this.href);return false;"><?php echo $__Context->oDocument->getNickName() ?></a>
				<?php }else{ ?>
					<?php echo $__Context->oDocument->getNickName() ?>
				<?php } ?>
			<?php }else{ ?>
				<a href="#popup_menu_area" class="member_<?php echo $__Context->oDocument->get('member_srl') ?>" onclick="return false"><?php echo $__Context->oDocument->getNickName() ?></a>
			<?php } ?>
		</em>
		<?php } ?>

	</div>

	<?php if($__Context->oDocument->isExtraVarsExists() && (!$__Context->oDocument->isSecret() || $__Context->oDocument->isGranted()) ){ ?>
    <table border="1" cellspacing="0" summary="Extra Form" class="extraVarsList">
    <?php if($__Context->oDocument->getExtraVars()&&count($__Context->oDocument->getExtraVars()))foreach($__Context->oDocument->getExtraVars() as $__Context->key => $__Context->val){ ?>
    <tr>
        <th><?php echo $__Context->val->name ?> :</th>
        <td><?php echo $__Context->val->getValueHTML() ?></td>
    </tr>
    <?php } ?>
	</table>
	<?php } ?>

	<div class="boardReadBody">
		<?php if($__Context->oDocument->isSecret() && !$__Context->oDocument->isGranted()){ ?>
			<form action="./" method="get" onsubmit="return procFilter(this, input_password)" class="secretMessage"><input type="hidden" name="error_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
			<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
			<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
			<input type="hidden" name="document_srl" value="<?php echo $__Context->oDocument->document_srl ?>" />

				<p>&quot;<?php echo $__Context->lang->msg_is_secret ?>&quot;</p>
				<dl>
					<dt><label for="cpw"><?php echo $__Context->lang->password ?></label> :</dt>
					<dd><input type="password" name="password" id="cpw" class="iText" /><span class="btn"><input type="submit" value="<?php echo $__Context->lang->cmd_input ?>" /></span></dd>
				</dl>

			</form>
		<?php }else{ ?>
			<?php echo $__Context->oDocument->getContent() ?>
		<?php } ?>

        <?php if($__Context->module_info->display_sign != 'N' && ($__Context->oDocument->getProfileImage() || $__Context->oDocument->getSignature())){ ?>
			<div class="memberSignature">
			<?php if($__Context->oDocument->getProfileImage()){ ?>
				<img src="<?php echo $__Context->oDocument->getProfileImage() ?>" alt="profile" class="profile" />
			<?php } ?>
			<?php if($__Context->oDocument->getSignature()){ ?>
				<div class="signature"><?php echo $__Context->oDocument->getSignature() ?></div>
			<?php } ?>
			</div>
		<?php } ?>
	</div>

	<div class="boardReadFooter">

		<div class="footerLeft">
		
			<?php if($__Context->module_info->use_category == "Y" && $__Context->oDocument->get('category_srl')){ ?>
			<dl>
				<dt><?php echo $__Context->lang->category ?> :</dt>
				<dd title="<?php echo $__Context->lang->category ?>"><a href="<?php echo getUrl('category',$__Context->oDocument->get('category_srl'), 'document_srl', '') ?>"><?php echo $__Context->category_list[$__Context->oDocument->get('category_srl')]->title ?></a></dd>
			</dl>
			<?php } ?>

		
			<?php  $__Context->tag_list = $__Context->oDocument->get('tag_list')  ?>
			<?php if(count($__Context->tag_list)){ ?>
			<dl class="tag">
				<dt><?php echo $__Context->lang->tag ?> :</dt>
				<?php for($__Context->i=0;$__Context->i<count($__Context->tag_list);$__Context->i++){ ?>
					<?php  $__Context->tag = $__Context->tag_list[$__Context->i];  ?>
					<dd><a href="<?php echo getUrl('search_target','tag','search_keyword',$__Context->tag,'document_srl','') ?>" rel="tag"><?php echo htmlspecialchars($__Context->tag) ?></a></dd>
				<?php } ?>
			</dl>
			<?php } ?>

			<?php if($__Context->oDocument->hasUploadedFiles()){ ?>
			<dl class="attachedFile">
				<dt><?php echo $__Context->lang->uploaded_file ?> :</dt>
				<?php  $__Context->uploaded_list = $__Context->oDocument->getUploadedFiles()  ?>
				<?php if($__Context->uploaded_list&&count($__Context->uploaded_list))foreach($__Context->uploaded_list as $__Context->key => $__Context->file){ ?>
				<dd><a href="<?php echo getUrl('') ?><?php echo $__Context->file->download_url ?>"><?php echo $__Context->file->source_filename ?> <span class="bubble">[File Size:<?php echo FileHandler::filesize($__Context->file->file_size) ?>/Download:<?php echo number_format($__Context->file->download_count) ?>]</span></a></dd>
				<?php } ?>
			</dl>
			<?php } ?>
		</div>

		<div class="footerRight">

			<dl>
				<dt><?php echo $__Context->lang->readed_count ?> :</dt>
				<dd title="<?php echo $__Context->lang->readed_count ?>"><?php echo $__Context->oDocument->get('readed_count') ?></dd>
				<?php if($__Context->oDocument->get('voted_count')!=0 || $__Context->oDocument->get('blamed_count')!=0){ ?>
				<dt><?php echo $__Context->lang->voted_count ?> :</dt>
				<dd title="<?php echo $__Context->lang->voted_count ?>"><a href="#layer_voted_member" class="voted_member_<?php echo $__Context->oDocument->document_srl ?> document votedup"><?php echo $__Context->oDocument->get('voted_count') ?></a> / <a href="#layer_voted_member" class="voted_member_<?php echo $__Context->oDocument->document_srl ?> document voteddown"><?php echo $__Context->oDocument->get('blamed_count') ?></a></dd>
				<?php } ?>
				<dt><?php echo $__Context->lang->regdate ?> :</dt>
				<dd title="<?php echo $__Context->lang->regdate ?>"><?php echo $__Context->oDocument->getRegdate('Y.m.d') ?></dd>
				<dd><?php echo $__Context->oDocument->getRegdate('H:i:s') ?> <?php if($__Context->grant->manager || $__Context->module_info->display_ip_address!='N'){ ?>(<?php echo $__Context->oDocument->getIpaddress() ?>)<?php } ?></dd>
			</dl>
			
			<dl>
				<dt><?php echo $__Context->lang->trackback ?> :</dt>
				<dd><a href="<?php echo $__Context->oDocument->getTrackbackUrl() ?>" onclick="return false;"><?php echo $__Context->oDocument->getTrackbackUrl() ?></a></dd>
			</dl>
			
			<dl>
				<dt><?php echo $__Context->lang->document_url ?> :</dt>
				<dd title="<?php echo $__Context->lang->document_url ?>"><a href="<?php echo $__Context->oDocument->getPermanentUrl() ?>"><?php echo $__Context->oDocument->getPermanentUrl() ?></a></dd>
			</dl>

		</div>
		
	</div>

    <div class="btnArea">
        <?php if($__Context->oDocument->isEditable()){ ?>
		<span class="btn"><a href="<?php echo getUrl('act','dispBoardWrite','document_srl',$__Context->oDocument->document_srl,'comment_srl','') ?>"><?php echo $__Context->lang->cmd_modify ?>...</a></span>
		<span class="btn"><a href="<?php echo getUrl('act','dispBoardDelete','document_srl',$__Context->oDocument->document_srl,'comment_srl','') ?>"><?php echo $__Context->lang->cmd_delete ?></a></span>
        <?php } ?>
		<?php if($__Context->module_info->default_style != 'blog' || ($__Context->module_info->default_style == 'blog' && Context::get('document_srl'))){ ?>
        <span class="etc">
			<span class="btn"><a href="<?php echo getUrl('document_srl','') ?>"><?php if($__Context->module_info->default_style != 'blog'){ ?><?php echo $__Context->lang->cmd_list ?><?php }else{ ?><?php echo $__Context->lang->cmd_view_all ?><?php } ?></a></span>
		</span>
        <?php } ?>
		
    </div>

</div>

<?php if($__Context->oDocument->allowTrackback()){ ?>
    <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_default','trackback.html') ?>
<?php } ?>
<a name="comment"></a>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_default','comment.html') ?>

<?php if($__Context->oDocument->allowComment()){ ?>
    <?php if($__Context->grant->write_comment && $__Context->oDocument->isEnableComment() ){ ?>
        <form action="./" method="post" onsubmit="return procFilter(this, insert_comment)" class="boardEditor" ><input type="hidden" name="error_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
        <input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
        <input type="hidden" name="document_srl" value="<?php echo $__Context->oDocument->document_srl ?>" />
        <input type="hidden" name="comment_srl" value="" />
        <input type="hidden" name="content" value="" />
            <div class="boardWrite commentEditor">
                <div class="editor"><?php echo $__Context->oDocument->getCommentEditor() ?></div>

                <dl class="editorOption">
                    <dt><?php echo $__Context->lang->cmd_option ?> : </dt>
                    <?php if($__Context->is_logged){ ?>
                    <dd>
                        <input type="checkbox" name="notify_message" value="Y" id="notify_message" />
                        <label for="notify_message"><?php echo $__Context->lang->notify ?></label>
                    </dd>
                    <?php } ?>
                    <dd>
                        <input type="checkbox" name="is_secret" value="Y" id="is_secret" />
                        <label for="is_secret"><?php echo $__Context->lang->secret ?></label>
                    </dd>
                </dl>
        
                <?php if(!$__Context->is_logged){ ?>
                <div class="userNameAndPw">
                    <dl>
                        <dt><label for="userName"><?php echo $__Context->lang->writer ?></label> :</dt>
                        <dd class="userName"><input type="text" name="nick_name" value="" class="iText" id="userName"/></dd>
                    </dl>
                    <dl>
                        <dt><label for="userPw"><?php echo $__Context->lang->password ?></label> :</dt>
                        <dd class="userPw"><input type="password" name="password" value="" id="userPw" class="iText" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="emailAddress"><?php echo $__Context->lang->email_address ?></label> :</dt>
                        <dd class="emailAddress"><input type="text" name="email_address" value="" id="emailAddress" class="iText"/></dd>
                    </dl>
                    <dl>
                        <dt><label for="homePage"><?php echo $__Context->lang->homepage ?></label> :</dt>
                        <dd class="homePage"><input type="text" name="homepage" value="" id="homePage" class="iText"/></dd>
                    </dl>
                </div>
                <?php } ?>

                <div class="boardNavigation">
                    <span class="btn"><input type="submit" value="<?php echo $__Context->lang->cmd_comment_registration ?>" /></span>
                </div>

            </div>

        </form>
    <?php } ?>
<?php } ?>

