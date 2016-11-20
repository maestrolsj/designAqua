<?php if(!defined("__XE__"))exit;?><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/member/skins/default','common_header.html') ?>
<h1 class="h1"><?php echo $__Context->lang->member_info ?></h1>
<div class="table even">
	<table width="100%" border="1" cellspacing="0">
		<?php if($__Context->member_config->signupForm&&count($__Context->member_config->signupForm))foreach($__Context->member_config->signupForm as $__Context->no=>$__Context->formInfo){ ?>
		<?php if($__Context->formInfo->isUse && ($__Context->formInfo->name != 'password' && $__Context->formInfo->name != 'find_account_question')){ ?>
		<?php if($__Context->formInfo->isDefaultForm){ ?>
<?php $__Context->title = Context::getLang($__Context->formInfo->name) ?>
<?php $__Context->value = $__Context->memberInfo[$__Context->formInfo->name] ?>
			<?php if($__Context->formInfo->name == 'profile_image' && $__Context->memberInfo['profile_image']){ ?>
<?php $__Context->target = $__Context->memberInfo['profile_image'] ?>
<?php $__Context->value = '<img src="/xe/modules/member/skins/default/'.$__Context->target->src.'" />' ?>
			<?php }elseif($__Context->formInfo->name == 'image_name' && $__Context->memberInfo['image_name']){ ?>
<?php $__Context->target = $__Context->memberInfo['image_name'] ?>
<?php $__Context->value = '<img src="/xe/modules/member/skins/default/'.$__Context->target->src.'" />' ?>
			<?php }elseif($__Context->formInfo->name == 'image_mark' && $__Context->memberInfo['image_mark']){ ?>
<?php $__Context->target = $__Context->memberInfo['image_mark'] ?>
<?php $__Context->value = '<img src="/xe/modules/member/skins/default/'.$__Context->target->src.'" />' ?>
			<?php } ?>
		<?php }else{ ?>
<?php $__Context->title = $__Context->extend_form_list[$__Context->formInfo->member_join_form_srl]->column_title ?>
<?php $__Context->orgValue = $__Context->extend_form_list[$__Context->formInfo->member_join_form_srl]->value ?>
			<?php if($__Context->formInfo->type=='tel'){ ?>
				<?php $__Context->value = $__Context->orgValue[0] ?>
					<?php if($__Context->orgValue[1]){ ?>-<?php } ?>
				<?php $__Context->value .= $__Context->orgValue[1] ?>
					<?php if($__Context->orgValue[2]){ ?>-<?php } ?>
				<?php $__Context->value .= $__Context->orgValue[2] ?>
			<?php }elseif($__Context->formInfo->type=='kr_zip'){ ?>
				<?php $__Context->value = $__Context->orgValue[0] ?><?php if($__Context->orgValue[1]&&$__Context->orgValue[0]){ ?><br /><?php } ?><?php $__Context->value .= $__Context->orgValue[1] ?>
			<?php }elseif($__Context->formInfo->type=='checkbox' && is_array($__Context->orgValue)){ ?>
				<?php $__Context->value = implode(", ",$__Context->orgValue) ?>
			<?php }elseif($__Context->formInfo->type=='date'){ ?>
				<?php $__Context->value = zdate($__Context->orgValue, "Y-m-d") ?>
			<?php }else{ ?>
				<?php $__Context->value = nl2br($__Context->orgValue) ?>
			<?php } ?>
		<?php } ?>

		<tr>
			<th scope="row" ><?php echo $__Context->title ?> <?php if($__Context->formInfo->required || $__Context->formInfo->mustRequired){ ?><em>*</em><?php } ?></th>
			<td class="text"><?php echo $__Context->value ?></td>
		</tr>
		<?php } ?>
		<?php } ?>
		<tr>
			<th scope="row"><?php echo $__Context->lang->member_group ?></th>
			<td class="text"><?php echo implode(', ', $__Context->memberInfo['group_list']) ?></td>
		</tr>
		<tr>
			<th><?php echo $__Context->lang->signup_date ?></th>
			<td><?php echo zdate($__Context->memberInfo[regdate],"Y-m-d") ?></td>
		</tr>
		<?php if($__Context->memberInfo[member_srl] == $__Context->logged_info->member_srl || $__Context->logged_info->is_admin == 'Y' ){ ?>
		<tr>
			<th><?php echo $__Context->lang->last_login ?></th>
			<td><?php echo zdate($__Context->memberInfo[last_login],"Y-m-d") ?></td>
		</tr>
		<?php } ?>
    </table>
</div>
<?php if($__Context->memberInfo['member_srl'] == $__Context->logged_info->member_srl){ ?><div class="btnArea">
	<?php if($__Context->member_config->identifier == 'email_address'){ ?><span class="btn"><a href="<?php echo getUrl('act', 'dispMemberModifyEmailAddress') ?>"><?php echo $__Context->lang->cmd_modify_member_email_address ?></a></span><?php } ?>
	<span class="btn"><a href="<?php echo getUrl('act','dispMemberModifyInfo','member_srl','') ?>"><?php echo $__Context->lang->cmd_modify_member_info ?></a></span>
	<span class="btn"><a href="<?php echo getUrl('act','dispMemberModifyPassword','member_srl','') ?>"><?php echo $__Context->lang->cmd_modify_member_password ?></a></span>
	<span class="btn"><a href="<?php echo getUrl('act','dispMemberLeave','member_srl','') ?>"><?php echo $__Context->lang->cmd_leave ?></a></span>
</div><?php } ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/member/skins/default','common_footer.html') ?>
