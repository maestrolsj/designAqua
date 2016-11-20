<?php if(!defined("__XE__"))exit;?><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/member/skins/default','common_header.html') ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/member/skins/default/filter','openid_login.xml');$__xmlFilter->compile(); ?>
<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<h1 class="h1"><?php echo $__Context->lang->cmd_login ?></h1>
<?php Context::addJsFile("./files/ruleset/login.xml", false, "", 0, "head", true, "") ?><form  action="./" method="post" id="fo_member_login" class="form"><input type="hidden" name="error_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="@login" />
	<input type="hidden" name="success_return_url" value="<?php echo getUrl('act', '') ?>" />
	<input type="hidden" name="act" value="procMemberLogin" />
	<ul>
		<li>
			<p class="q"><label for="uid"><?php echo $__Context->lang->user_id ?></label></p>
			<p class="a"><input type="text" name="user_id" id="uid" value="" /></p>
		</li>
		<li>
			<p class="q"><label for="upw"><?php echo $__Context->lang->password ?></label></p>
			<p class="a"><input type="password" name="password" id="upw" value="" /></p>
		</li>
	</ul>	
	<p style="margin:1em 0">
		<input type="checkbox" name="keep_signed" id="keepid_opt" value="Y" />
		<label for="keepid_opt"><?php echo $__Context->lang->keep_signed ?></label>
	</p>
	<div class="message info" id="keep_msg">
		<p><?php echo $__Context->lang->about_keep_warning ?></p>
	</div>
	<div class="btnArea">
		<span class="btn"><input type="submit" value="<?php echo $__Context->lang->cmd_login ?>" /></span>
		<span class="etc">
			<a href="<?php echo getUrl('act','dispMemberFindAccount') ?>"><span><?php echo $__Context->lang->cmd_find_member_account ?></span></a> |
			<a href="<?php echo getUrl('act','dispMemberSignUpForm') ?>"><span><?php echo $__Context->lang->cmd_signup ?></span></a>
		</span>
	</div>
</form>
<script type="text/javascript">
jQuery(function($){
	var keep_msg = $('#keep_msg');
	keep_msg.hide();
	$('#keepid_opt').change(function(){
		if($(this).is(':checked')){
			keep_msg.slideDown(200);
		} else {
			keep_msg.slideUp(200);
		}
	});
});
</script>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/member/skins/default','common_footer.html') ?>
