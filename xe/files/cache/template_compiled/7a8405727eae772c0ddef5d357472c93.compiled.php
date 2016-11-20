<?php if(!defined("__XE__"))exit;?><h1 class="h1"><?php echo $__Context->lang->member_info ?></h1>
<div class="table even">
	<table width="100%" border="1" cellspacing="0">
		<?php if($__Context->member_config->signupForm&&count($__Context->member_config->signupForm))foreach($__Context->member_config->signupForm as $__Context->no=>$__Context->formInfo){ ?>
		<?php if($__Context->formInfo->isDefaultForm){ ?>
<?php $__Context->title = Context::getLang($__Context->formInfo->name) ?>
<?php $__Context->value = $__Context->memberInfo[$__Context->formInfo->name] ?>
			<?php if($__Context->formInfo->name == 'find_account_question'){ ?>
<?php $__Context->value = $__Context->lang->find_account_question_items[$__Context->value].' : '.$__Context->memberInfo['find_account_answer'] ?>
			<?php }elseif($__Context->formInfo->name == 'profile_image' && $__Context->memberInfo['profile_image']){ ?>
<?php $__Context->target = $__Context->memberInfo['profile_image'] ?>
<?php $__Context->value = '<img src="/xe/modules/member/tpl/'.$__Context->target->src.'" />' ?>
			<?php }elseif($__Context->formInfo->name == 'image_name' && $__Context->memberInfo['image_name']){ ?>
<?php $__Context->target = $__Context->memberInfo['image_name'] ?>
<?php $__Context->value = '<img src="/xe/modules/member/tpl/'.$__Context->target->src.'" />' ?>
			<?php }elseif($__Context->formInfo->name == 'image_mark' && $__Context->memberInfo['image_mark']){ ?>
<?php $__Context->target = $__Context->memberInfo['image_mark'] ?>
<?php $__Context->value = '<img src="/xe/modules/member/tpl/'.$__Context->target->src.'" />' ?>
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

		<?php if($__Context->formInfo->isUse && $__Context->formInfo->name != 'password'){ ?><tr>
			<th scope="row" ><?php echo $__Context->title ?> <?php if($__Context->formInfo->required || $__Context->formInfo->mustRequired){ ?><em>*</em><?php } ?></th>
			<td class="text"><?php echo $__Context->value ?></td>
		</tr><?php } ?>
		<?php } ?>
		<tr>
			<th scope="row"><?php echo $__Context->lang->allow_mailing ?></th>
			<td class="text"><?php if($__Context->memberInfo['allow_mailing'] == 'Y'){ ?><?php echo $__Context->lang->cmd_yes ?><?php }else{ ?><?php echo $__Context->lang->cmd_no ?><?php } ?></td>
		</tr>
		<tr>
			<th scope="row"><?php echo $__Context->lang->allow_message ?></th>
			<td class="text"><?php echo $__Context->lang->allow_message_type[$__Context->memberInfo['allow_message']] ?></td>
		</tr>
		<tr>
			<th scope="row"><?php echo $__Context->lang->denied ?></th>
			<td class="text"><?php if($__Context->memberInfo['denied'] == 'N'){ ?><?php echo $__Context->lang->cmd_no ?><?php }else{ ?><?php echo $__Context->lang->cmd_yes ?><?php } ?></td>
		</tr>
		<?php if($__Context->memberInfo['limit_date']){ ?><tr>
			<th scope="row"><?php echo $__Context->lang->limit_date ?></th>
			<td class="text"><?php echo zdate($__Context->memberInfo['limit_date'],"Y-m-d H:i") ?></td>
		</tr><?php } ?>
		<?php if($__Context->memberInfo['is_admin'] == 'Y'){ ?><tr>
			<th scope="row"><?php echo $__Context->lang->is_admin ?></th>
			<td class="text"><?php echo $__Context->lang->cmd_yes ?></td>
		</tr><?php } ?>
		<tr>
			<th scope="row"><?php echo $__Context->lang->member_group ?></th>
			<td class="text"><?php echo implode(', ', $__Context->memberInfo['group_list']) ?></td>
		</tr>
		<?php if($__Context->memberInfo['description']){ ?><tr>
			<th scope="row"><div><?php echo $__Context->lang->description ?></div></th>
			<td><?php echo $__Context->memberInfo['description'] ?>&nbsp;</td>
		</tr><?php } ?>
	</table>
</div>
<div class="btnArea">
	<span class="btn medium"><a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispMemberAdminInsert', 'member_srl', $__Context->member_srl) ?>"><?php echo $__Context->lang->cmd_modify ?>...</a></span>
</div>
