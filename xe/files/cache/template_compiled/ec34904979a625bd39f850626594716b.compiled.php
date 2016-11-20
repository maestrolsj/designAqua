<?php if(!defined("__XE__"))exit;?><?php if($__Context->oDocument->getTrackbackCount()){ ?>
<div class="feedbackList" id="trackback">

	<h3 class="feedbackHeader">
		<?php if($__Context->oDocument->allowTrackback() && $__Context->oDocument->getTrackbackCount() ){ ?>
			<a href="#trackback" title="<?php echo $__Context->lang->trackback ?>"><strong>'<?php echo $__Context->oDocument->getTrackbackCount() ?>'</strong> Trackbacks</a>
		<?php } ?>
	</h3>

	<div class="trackbackList">
	
		<?php if($__Context->oDocument->getTrackbackCount()){ ?>
			<?php if($__Context->oDocument->getTrackbacks()&&count($__Context->oDocument->getTrackbacks()))foreach($__Context->oDocument->getTrackbacks() as $__Context->key => $__Context->val){ ?>
			<div class="item">
				<a name="trackback_<?php echo $__Context->val->trackback_srl ?>"></a>
				<h4 class="author"><a href="<?php echo $__Context->val->url ?>" onclick="winopen(this.href);return false;"><?php echo htmlspecialchars($__Context->val->title) ?> - <?php echo htmlspecialchars($__Context->val->blog_name) ?></a></h4>
				<dl class="time">
					<dt>Time :</dt>
					<dd><?php echo zdate($__Context->val->regdate, "Y.m.d H:i") ?></dd>
					<dd>(<?php echo $__Context->val->ipaddress ?>)</dd>
				</dl>
				<p class="itemContent">
					<?php echo $__Context->val->excerpt ?>
				</p>
				<div class="btnArea">
					<span class="btn"><a href="<?php echo getUrl('act','dispBoardDeleteTrackback','trackback_srl',$__Context->val->trackback_srl) ?>"><?php echo $__Context->lang->cmd_delete ?></a></span>
				</div>
			</div>
			<?php } ?>
		<?php } ?>
	
	</div>
	
</div>
<?php } ?>
