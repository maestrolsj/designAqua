<?php if(!defined("__XE__"))exit;?><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/member/skins/default','common_header.html') ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/member/skins/default/filter','find_member_account.xml');$__xmlFilter->compile(); ?>
<h1 class="h1"><?php echo $__Context->lang->cmd_find_member_account ?></h1>
<p><?php echo $__Context->lang->about_find_member_account ?></p>
<form action="./" method="get" class="form" onsubmit="return procFilter(this, find_member_account)"><input type="hidden" name="error_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
    <input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
    <input type="hidden" name="document_srl" value="<?php echo $__Context->document_srl ?>" />
    <input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
	<ul>
		<li>
			<p class="q"><label for="cpw"><?php echo $__Context->lang->email_address ?></label></p>
			<p class="a"><input type="text" name="email_address" /></p>
		</li>
	</ul>
	<div class="btnArea">
		<span class="btn"><input type="submit" value="<?php echo $__Context->lang->cmd_find_member_account ?>" /></span>
	</div>
</form>
<?php if(count($__Context->lang->find_account_question_items)>1){ ?>
<h1 class="h1"><?php echo $__Context->lang->cmd_find_member_account ?></h1>
<p><?php echo $__Context->lang->about_find_account_question ?></p>
<?php Context::addJsFile("./files/ruleset/find_member_account_by_question.xml", false, "", 0, "head", true, "") ?><form action="./" method="get" class="form" ><input type="hidden" name="error_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="@find_member_account_by_question" />
	<input type="hidden" name="module" value="member" />
    <input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
    <input type="hidden" name="document_srl" value="<?php echo $__Context->document_srl ?>" />	
	<input type="hidden" name="act" value="procMemberFindAccountByQuestion" />
	<input type="hidden" name="success_return_url" value="<?php echo getUrl('', 'act', 'dispMemberGetTempPassword') ?>" />
    <input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
	<ul>
		<?php if($__Context->identifier == 'user_id'){ ?><li>
			<p class="q"><label for="cpw"><?php echo $__Context->lang->user_id ?></label></p>
			<p class="a"><input type="text" name="user_id" /></p>
		</li><?php } ?>
		<li>
			<p class="q"><label for="cpw"><?php echo $__Context->lang->email_address ?></label></p>
			<p class="a"><input type="text" name="email_address" /></p>
		</li>
		<li>
			<p class="q"><label for="cpw"><?php echo $__Context->lang->find_account_question ?></label></p>
			<p class="a">
				<select name="find_account_question" style="width:290px">
				<?php for($__Context->i=1,$__Context->c=count($__Context->lang->find_account_question_items);$__Context->i<$__Context->c;$__Context->i++){ ?>
					<option value="<?php echo $__Context->i ?>"><?php echo $__Context->lang->find_account_question_items[$__Context->i] ?></option>
				<?php } ?>
				</select>
				<br />
				<input type="text" name="find_account_answer" value="" />
			</p>
		</li>
	</ul>
	<div class="btnArea">
		<span class="btn"><input type="submit" value="<?php echo $__Context->lang->cmd_get_temp_password ?>" /></span>
	</div>
</form>
<?php } ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/member/skins/default','common_footer.html') ?>
