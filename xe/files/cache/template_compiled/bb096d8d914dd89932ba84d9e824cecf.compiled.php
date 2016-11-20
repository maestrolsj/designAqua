<?php if(!defined("__XE__"))exit;?><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/point/tpl','header.html') ?>
<p><?php echo $__Context->lang->about_point_module ?></p>
<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<?php Context::addJsFile("modules/point/ruleset/insertConfig.xml", false, "", 0, "head", true, "") ?><form  action="./" method="post" class="form"><input type="hidden" name="error_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertConfig" />
	<input type="hidden" name="module" value="point" />
	<input type="hidden" name="act" value="procPointAdminInsertConfig" />
	<fieldset>
		<h2 class="h2"><?php echo $__Context->lang->is_default ?></h2>
		<ul>
			<li>
				<p class="q"><label for="max_level"><?php echo $__Context->lang->max_level ?></label></p>
				<p class="a">
					<input type="text" value="<?php echo $__Context->config->max_level ?>" name="max_level" id="max_level" style="width:30px" />
					<span class="desc"><?php echo $__Context->lang->about_max_level ?></span>
				</p>
			</li>
			<li>
				<p class="q"><label for="point_name"><?php echo $__Context->lang->point_name ?></label></p>
				<p class="a">
					<input type="text" value="<?php echo $__Context->config->point_name ?>" name="point_name" id="point_name" style="width:30px" />
					<span class="desc"><?php echo $__Context->lang->about_point_name ?></span>
				</p>
			</li>
			<li>
				<p class="q"><label><?php echo $__Context->lang->give_point ?></label></p>
				<p class="a">
					<input type="text" value="<?php echo $__Context->config->signup_point ?>" name="signup_point" id="signup_point" style="width:30px" /> : 
					<label for="signup_point"><?php echo $__Context->lang->point_signup ?></label>
					<br />
					<input type="text" value="<?php echo $__Context->config->login_point ?>" name="login_point" id="login_point" style="width:30px" /> :
					<label for="login_point"><?php echo $__Context->lang->cmd_login ?></label>
					<br />
					<input type="text" name="insert_document" value="<?php echo $__Context->config->insert_document ?>" id="insert_document" style="width:30px" /> :
					<label for="insert_document"><?php echo $__Context->lang->point_insert_document ?></label>
					<br />
					<input type="text" name="insert_comment" value="<?php echo $__Context->config->insert_comment ?>" id="insert_comment" style="width:30px" /> :
					<label for="insert_comment"><?php echo $__Context->lang->point_insert_comment ?></label>
					<br />
					<input type="text" name="upload_file" value="<?php echo $__Context->config->upload_file ?>" id="upload_file" style="width:30px" /> :
					<label for="upload_file"><?php echo $__Context->lang->point_upload_file ?></label>
					<br />
					<input type="text" name="download_file" value="<?php echo $__Context->config->download_file ?>" id="download_file" style="width:30px" /> :
					<label for="download_file"><?php echo $__Context->lang->point_download_file ?></label>
					<br />
					<input type="text" name="read_document" value="<?php echo $__Context->config->read_document ?>" id="read_document" style="width:30px" /> :
					<label for="read_document"><?php echo $__Context->lang->point_read_document ?></label>
					<br />
					<input type="text" name="voted" value="<?php echo $__Context->config->voted ?>" style="width:30px" id="voted" /> :
					<label for="voted"><?php echo $__Context->lang->point_voted ?></label>
					<br />
					<input type="text" name="blamed" value="<?php echo $__Context->config->blamed ?>" id="blamed" style="width:30px" /> :
					<label for="blamed"><?php echo $__Context->lang->point_blamed ?></label>
				</p>
			</li>
			<li>
				<p class="q"><label for="level_icon"><?php echo $__Context->lang->level_icon ?></label></p>
				<p class="a">
					<select name="level_icon" id="level_icon">
						<?php if($__Context->level_icon_list&&count($__Context->level_icon_list))foreach($__Context->level_icon_list as $__Context->key => $__Context->val){ ?>
						<option value="<?php echo $__Context->val ?>"<?php if($__Context->config->level_icon == $__Context->val){ ?> selected="selected"<?php } ?>><?php echo $__Context->val ?></option>
						<?php } ?>
					</select>
					<span class="desc"><?php echo $__Context->lang->about_level_icon ?></span>
				</p>
			</li>
			<li>
				<p class="q"><label for="disable_download"><?php echo $__Context->lang->disable_download ?></label></p>
				<p class="a">
					<input type="checkbox" name="disable_download" id="disable_download" value="Y"<?php if($__Context->config->disable_download=='Y'){ ?> checked="checked"<?php } ?> />
					<span class="desc"><?php echo $__Context->lang->about_disable_download ?></span>
				</p>
			</li>
			<li>
				<p class="q"><label for="disable_read_document"><?php echo $__Context->lang->disable_read_document ?></label></p>
				<p class="a">
					<input type="checkbox" name="disable_read_document" id="disable_read_document" value="Y"<?php if($__Context->config->disable_read_document=='Y'){ ?> checked="checked"<?php } ?> />
					<span class="desc"><?php echo $__Context->lang->about_disable_read_document ?></span>
				</p>
			</li>
		</ul>
		<div class="btnArea">
			<span class="btn medium"><input type="submit" value="<?php echo $__Context->lang->cmd_save ?>" /></span>
		</div>
	</fieldset>
	<fieldset>
		<h2 class="h2"><?php echo $__Context->lang->point_link_group ?></h2>
		<div class="table even">
			<table width="100%" border="1" cellspacing="0">
				<caption>
					<?php echo $__Context->lang->about_point_link_group ?>
					<span class="side">
						<input type="radio" name="group_reset" id="group_reset_y" value="Y"<?php if($__Context->config->group_reset != 'N'){ ?> checked="checked"<?php } ?> /> 
						<label for="group_reset_y"><?php echo $__Context->lang->point_group_reset_and_add ?></label>
						<input type="radio" name="group_reset" id="group_reset_n" value="N"<?php if($__Context->config->group_reset == 'N'){ ?> checked="checked"<?php } ?> /> 
						<label for="group_reset_n"><?php echo $__Context->lang->point_group_add_only ?></label>
					</span>
				</caption>
				<thead>
					<tr>
						<th><?php echo $__Context->lang->member_group ?></th>
						<th><?php echo $__Context->lang->level ?></th>
					</tr>
				</thead>
				<tbody>
					<?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->key=>$__Context->val){ ?><tr>
						<td><label for="point_group_<?php echo $__Context->key ?>"><?php echo $__Context->val->title ?></label></td>
						<td><input type="text" value="<?php echo $__Context->config->point_group[$__Context->key] ?>" name="point_group_<?php echo $__Context->key ?>" id="point_group_<?php echo $__Context->key ?>" style="width:30px" /></td>
					</tr><?php } ?>
				</tbody>
			</table>
		</div>
		<div class="btnArea">
			<span class="btn medium"><input type="submit" value="<?php echo $__Context->lang->cmd_save ?>" /></span>
		</div>
	</fieldset>
	<fieldset>
<?php $__Context->point_group = @array_flip($__Context->config->point_group) ?>
		<h2 class="h2"><?php echo $__Context->lang->level_point ?></h2>
		<div class="table">
			<table width="100%" border="1" cellspacing="0">
				<caption>
					<span class="side">
						<label for=""><?php echo $__Context->lang->expression ?></label>
						<input value="<?php echo $__Context->config->expression ?>" size="30" class="level_expression" />
						<button type="button" class="calc_point"><?php echo $__Context->lang->level_point_calc ?></button> 
						<button type="button" class="calc_point _reset"><?php echo $__Context->lang->cmd_exp_reset ?></button>
					</span>
				</caption>
				<tr>
					<th scope="col"><?php echo $__Context->lang->level ?></th>
					<th scope="col"><?php echo $__Context->lang->level_icon ?></th>
					<th scope="col"><?php echo $__Context->lang->point ?></th>
					<th scope="col"><?php echo $__Context->lang->member_group ?></th>
				</tr>
				<tr>
					<td>1</td>
					<td><img src="<?php echo getUrl() ?>/modules/point/icons/<?php echo $__Context->config->level_icon ?>/1.gif" alt="" /></td>
					<td><input type="text" name="level_step_1" value="<?php echo $__Context->config->level_step[1] ?>" style="width:40px;text-align:right" /> <?php echo $__Context->config->point_name ?></td>
<?php $__Context->point_group_item = $__Context->point_group[1] ?>
<?php $__Context->title=array() ?>
<?php if($__Context->point_group_item){ ?>
	<?php if($__Context->config->group_reset != 'N'){ ?>
	<?php $__Context->title[0] = $__Context->group_list[$__Context->point_group_item.'']->title ?>
	<?php }else{ ?>
	<?php $__Context->title[] = $__Context->group_list[$__Context->point_group_item.'']->title ?>
	<?php } ?>
<?php } ?>
					<td><?php echo implode(', ', $__Context->title) ?></td>
				</tr>
				<?php for($__Context->i=2;$__Context->i<=$__Context->config->max_level;$__Context->i++){ ?>
<?php $__Context->point_group_item = $__Context->point_group[$__Context->i] ?>
<?php if($__Context->point_group_item){ ?>
	<?php if($__Context->config->group_reset != 'N'){ ?>
	<?php $__Context->title[0] = $__Context->group_list[$__Context->point_group_item.'']->title ?>
	<?php }else{ ?>
	<?php $__Context->title[] = $__Context->group_list[$__Context->point_group_item.'']->title ?>
	<?php } ?>
<?php } ?>
				<tr class="row<?php echo (($__Context->i-1)%2+1) ?>">
					<td><?php echo $__Context->i ?></td>
					<td><img src="<?php echo getUrl() ?>/modules/point/icons/<?php echo $__Context->config->level_icon ?>/<?php echo $__Context->i ?>.gif" alt="" /></td>
					<td><input type="text" id="level_step_<?php echo $__Context->i ?>" name="level_step_<?php echo $__Context->i ?>" value="<?php echo $__Context->config->level_step[$__Context->i] ?>" style="width:40px;text-align:right" /> <?php echo $__Context->config->point_name ?></td>
					<td><?php echo implode(', ', $__Context->title) ?></td>
				</tr>
				<?php } ?>
			</table>
		</div>
		<div class="btnArea">
			<span class="btn medium"><input type="submit" value="<?php echo $__Context->lang->cmd_save ?>" /></span>
		</div>
	</fieldset>
	<fieldset>
		<h2 class="h2"><?php echo $__Context->lang->cmd_point_recal ?></h2>
		<p><?php echo $__Context->lang->about_cmd_point_recal ?></p>
		<p id="pointReCal"></p>
		<div class="btnArea">
			<span class="btn medium"><input type="button" value="<?php echo $__Context->lang->cmd_point_recal ?>" onclick="doPointRecal(); return false;"/></span>
		</div>
	</fieldset>
</form>
