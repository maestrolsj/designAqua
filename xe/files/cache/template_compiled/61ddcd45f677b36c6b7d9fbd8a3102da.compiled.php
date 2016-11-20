<?php if(!defined("__XE__"))exit;?><?php if($__Context->oDocument->getCommentCount()){ ?>
<div class="feedbackList" id="reply">

	<a name="<?php echo $__Context->oDocument->get('document_srl') ?>_comment"></a>
	<h3 class="feedbackHeader">
		<?php if($__Context->grant->write_comment && $__Context->oDocument->allowComment()) { ?>
			<a href="#reply" title="<?php echo $__Context->lang->comment ?>"><strong>'<?php echo $__Context->oDocument->getCommentcount() ?>'</strong> <?php echo $__Context->lang->comment ?></a>
		<?php } ?>
	</h3>
	
	<div class="replyList">

		<?php  $__Context->_comment_list = $__Context->oDocument->getComments()  ?>
		<?php if($__Context->_comment_list&&count($__Context->_comment_list))foreach($__Context->_comment_list as $__Context->key => $__Context->comment){ ?>
				<div class="item <?php if($__Context->comment->get('depth')){ ?>reply<?php } ?>" id="comment_<?php echo $__Context->comment->comment_srl ?>">
					<div class="indent" <?php if($__Context->comment->get('depth')){ ?> style="margin-left:<?php echo ($__Context->comment->get('depth'))*15 ?>px" <?php } ?>>
	
					<h4 class="author">
					<?php if(!$__Context->comment->member_srl){ ?>
						<?php if($__Context->comment->homepage){ ?>
							<a href="<?php echo $__Context->comment->homepage ?>" onclick="window.open(this.href);return false;"><?php echo $__Context->comment->getNickName() ?></a>
						<?php }else{ ?>
							<?php echo $__Context->comment->getNickName() ?>
						<?php } ?>
					<?php }else{ ?>
						<a href="#popup_menu_area" class="member_<?php echo $__Context->comment->member_srl ?>" onclick="return false"><?php echo $__Context->comment->getNickName() ?></a>
					<?php } ?>
					</h4>

					<dl class="time">
						<dd>
                            <?php echo $__Context->comment->getRegdate('Y.m.d') ?> 
						</dd>
						<dd>
							<?php echo $__Context->comment->getRegdate('H:i:s') ?>
						</dd>
                        <?php if($__Context->grant->manager || $__Context->module_info->display_ip_address!='N'){ ?>
						<dd>
                            (<?php echo $__Context->comment->getIpaddress() ?>)
						</dd>
                        <?php } ?>
					</dl>
	
                    <a name="comment_<?php echo $__Context->comment->get('comment_srl') ?>"></a>
                    <div class="itemContent">
					<?php if(!$__Context->comment->isAccessible()){ ?>
						<form action="./" method="get" onsubmit="return procFilter(this, input_password)" class="secretMessage"><input type="hidden" name="error_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
						<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
						<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
						<input type="hidden" name="document_srl" value="<?php echo $__Context->comment->get('document_srl') ?>" />
						<input type="hidden" name="comment_srl" value="<?php echo $__Context->comment->get('comment_srl') ?>" />
							<p>&quot;<?php echo $__Context->lang->msg_is_secret ?>&quot;</p>
							<dl>
								<dt><label for="cpw"><?php echo $__Context->lang->password ?></label> :</dt>
								<dd><input type="password" id="cpw" name="password" class="iText" /><span class="btn"><input type="submit" value="<?php echo $__Context->lang->cmd_input ?>" /></span></dd>
							</dl>
						</form>
					<?php }else{ ?>

                        <?php if($__Context->comment->getProfileImage()){ ?>
                            <img src="<?php echo $__Context->comment->getProfileImage() ?>" alt="profile" class="commentProfileImage" />
                        <?php } ?>
						<?php echo $__Context->comment->getContent(true) ?>
					<?php } ?>
                    </div>
					
					<?php if($__Context->comment->hasUploadedFIles()){ ?>
					<dl class="attachedFile">
						<dt><?php echo $__Context->lang->uploaded_file ?> :</dt>
						<?php  $__Context->_uploaded_files = $__Context->comment->getUploadedFiles()  ?>
						<?php if($__Context->_uploaded_files&&count($__Context->_uploaded_files))foreach($__Context->_uploaded_files as $__Context->key => $__Context->file){ ?>
						<dd><a href="<?php echo getUrl('') ?><?php echo $__Context->file->download_url ?>"><?php echo $__Context->file->source_filename ?> <span class="bubble">[File Size:<?php echo FileHandler::filesize($__Context->file->file_size) ?>/Download<?php echo number_format($__Context->file->download_count) ?>]</span></a></dd>
						<?php } ?>
					</dl>
					<?php } ?>
		
					<div class="btnArea">
						<?php if($__Context->comment->isGranted() || !$__Context->comment->get('member_srl')){ ?>
						<span class="btn"><a href="<?php echo getUrl('act','dispBoardDeleteComment','comment_srl',$__Context->comment->comment_srl) ?>"><?php echo $__Context->lang->cmd_delete ?></a></span>
						<span class="btn"><a href="<?php echo getUrl('act','dispBoardModifyComment','comment_srl',$__Context->comment->comment_srl) ?>"><?php echo $__Context->lang->cmd_modify ?>...</a></span> 
						<?php } ?>
						<span class="btn"><?php if($__Context->oDocument->allowComment()){ ?><a href="<?php echo getUrl('act','dispBoardReplyComment','comment_srl',$__Context->comment->comment_srl) ?>"><?php echo $__Context->lang->cmd_reply ?></a><?php } ?></span> 
					</div>
		
					<?php if($__Context->comment->get('voted_count')!=0 || $__Context->comment->get('blamed_count') != 0){ ?>
					<div class="voted">
						(<?php echo $__Context->lang->voted_count ?>:
						<a href="#layer_voted_member" class="voted_member_<?php echo $__Context->comment->comment_srl ?> comment votedup"><?php echo $__Context->comment->get('voted_count')?$__Context->comment->get('voted_count'):0 ?></a> / <a href="#layer_voted_member" class="voted_member_<?php echo $__Context->comment->comment_srl ?> comment voteddown"><?php echo $__Context->comment->get('blamed_count')?$__Context->comment->get('blamed_count'):0 ?></a>)
					</div>
					<?php } ?>
		
				</div>
				<?php if($__Context->comment->get('depth')){ ?>
			<?php } ?>
			
		</div>
		<?php } ?>

</div>

    <?php if($__Context->oDocument->comment_page_navigation){ ?>
	<?php 
		$__Context->cpageStr = sprintf('%d_cpage', $__Context->oDocument->get('document_srl'));
		$__Context->cpage = Context::get($__Context->cpageStr);
	 ?>
    <div class="pagination a1">
        <a href="<?php echo getUrl($__Context->cpageStr,1) ?>#<?php echo $__Context->oDocument->get('document_srl') ?>_comment" class="prevEnd"><?php echo $__Context->lang->first_page ?></a> 
        <?php while($__Context->page_no = $__Context->oDocument->comment_page_navigation->getNextPage()){ ?>
            <?php if($__Context->cpage == $__Context->page_no){ ?>
                <strong><?php echo $__Context->page_no ?></strong> 
            <?php }else{ ?>
                <a href="<?php echo getUrl($__Context->cpageStr,$__Context->page_no) ?>#<?php echo $__Context->oDocument->get('document_srl') ?>_comment"><?php echo $__Context->page_no ?></a>
            <?php } ?>
        <?php } ?>
        <a href="<?php echo getUrl($__Context->cpageStr,$__Context->oDocument->comment_page_navigation->last_page) ?>#<?php echo $__Context->oDocument->get('document_srl') ?>_comment" class="nextEnd"><?php echo $__Context->lang->last_page ?></a>
    </div>
    <?php } ?>

</div>
<?php } ?>
