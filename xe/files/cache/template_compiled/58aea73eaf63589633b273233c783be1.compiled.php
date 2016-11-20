<?php if(!defined("__XE__"))exit;?><form action="<?php echo Context::getRequestUri() ?>" method="post" enctype="multipart/form-data" target="hidden_iframe" class="form"><input type="hidden" name="error_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" />
	<input type="hidden" name="module" value="module" />
	<input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
	<input type="hidden" name="act" value="procModuleAdminUpdateSkinInfo" />
	<input type="hidden" name="module_srl" value="<?php echo $__Context->module_info->module_srl ?>" />
	<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
	
    <h2 class="h2"><?php echo $__Context->lang->skin_default_info ?></h2>
	<div class="table">
		<table width="100%" border="1" cellspacing="0">
			<tr>
				<th scope="row"><?php echo $__Context->lang->skin ?></th>
				<td  ><?php echo $__Context->skin_info->title ?></td>
			</tr>
			<tr>
				<th scope="row"><?php echo $__Context->lang->skin_author ?></th>
				<?php if($__Context->skin_info->author&&count($__Context->skin_info->author))foreach($__Context->skin_info->author as $__Context->author){ ?><td>
					<?php echo $__Context->author->name ?>
					<?php if($__Context->author->homepage || $__Context->author->email_address){ ?>
						(<?php if($__Context->author->homepage){ ?><a href="<?php echo $__Context->author->homepage ?>" onclick="window.open(this.href);return false;"><?php echo $__Context->author->homepage ?></a><?php } ?>
						<?php if($__Context->author->homepage && $__Context->author->email_address){ ?>, <?php } ?>
						<?php if($__Context->author->email_address){ ?><a href="mailto:<?php echo $__Context->author->email_address ?>"><?php echo $__Context->author->email_address ?></a><?php } ?>)
					<?php } ?><br />
				</td><?php } ?>
			</tr>
			<?php if($__Context->skin_info->homepage){ ?><tr>
				<th scope="row"><?php echo $__Context->lang->homepage ?></th>
				<td><a href="<?php echo $__Context->skin_info->homepage ?>" onclick="window.open(this.href);return false;"><?php echo $__Context->skin_info->homepage ?></a></td>
			</tr><?php } ?>
			<tr>
				<th scope="row"><?php echo $__Context->lang->date ?></th>
				<td><?php echo zdate($__Context->skin_info->date, 'Y-m-d') ?>&nbsp;</td>
			</tr>
			<?php if($__Context->skin_info->license || $__Context->skin_info->license_link){ ?><tr>
				<th scope="row"><?php echo $__Context->lang->skin_license ?></th>
				<td>
					<?php echo nl2br(trim($__Context->skin_info->license)) ?>
					<?php if($__Context->skin_info->license_link){ ?><p><a href="<?php echo $__Context->skin_info->license_link ?>" onclick="window.close(); return false;"><?php echo $__Context->skin_info->license_link ?></a></p><?php } ?>
				</td>
			</tr><?php } ?>
			<?php if($__Context->skin_info->description){ ?><tr>
				<th scope="row"><?php echo $__Context->lang->description ?></th>
				<td><?php echo nl2br(trim($__Context->skin_info->description)) ?></td>
			</tr><?php } ?>
		</table>
	</div>

    <h2 class="h2"><?php echo $__Context->lang->extra_vars ?></h2>
	<div class="table">
		<table width="100%" border="1" cellspacing="0">
			<?php if($__Context->skin_info->colorset){ ?><tr valign="top">
				<th scope="row"><?php echo $__Context->lang->colorset ?></th>
				<td>
					<?php if($__Context->skin_info->colorset&&count($__Context->skin_info->colorset))foreach($__Context->skin_info->colorset as $__Context->key => $__Context->val){ ?>
					<?php if($__Context->val->screenshot){ ?>
					<?php  $__Context->_img_info = getImageSize($__Context->val->screenshot); $__Context->_height = $__Context->_img_info[1]+40; $__Context->_width = $__Context->_img_info[0]+20; $__Context->_talign = "center";  ?>
					<?php }else{ ?>
					<?php  $__Context->_width = 200; $__Context->_height = 20; $__Context->_talign = "left";  ?>
					<?php } ?>
					<div style="float:left;text-align:<?php echo $__Context->_talign ?>;margin-bottom:1em;width:<?php echo $__Context->_width ?>px;height:<?php echo $__Context->_height ?>px;margin-right:10px;">
						<input type="radio" name="colorset" value="<?php echo $__Context->val->name ?>" id="colorset_<?php echo $__Context->key ?>" <?php if($__Context->skin_vars['colorset']->value==$__Context->val->name){ ?>checked="checked"<?php } ?>/>
						<label for="colorset_<?php echo $__Context->key ?>"><?php echo $__Context->val->title ?></label>
						<?php if($__Context->val->screenshot){ ?>
						<br />
						<img src="/xe/modules/module/<?php echo $__Context->val->screenshot ?>" alt="<?php echo $__Context->val->title ?>" style="border:1px solid #888888;padding:2px;margin:2px;"/>
						<?php } ?>
					</div>
					<?php } ?>
				</td>
			</tr><?php } ?>
			<?php if($__Context->skin_info->extra_vars&&count($__Context->skin_info->extra_vars))foreach($__Context->skin_info->extra_vars as $__Context->key => $__Context->val){ ?>
			
			<?php if($__Context->val->group && ((!$__Context->group) || $__Context->group != $__Context->val->group)){ ?>
			<?php $__Context->group = $__Context->val->group ?>
		</table>
	</div>
    <h2 class="h2"><?php echo $__Context->group ?></h2>
	<div class="table">
		<table width="100%" border="1" cellspacing="0">
			<?php } ?>
			
			<tr>
				<th scope="row"><?php echo $__Context->val->title ?></th>
				<td >
					<?php if($__Context->val->type=="text"){ ?>
					<input type="text" name="<?php echo $__Context->val->name ?>" value="<?php echo $__Context->val->value ?>" id="target<?php echo $__Context->val->name ?>" />
					<a href="<?php echo getUrl('','module','module','act','dispModuleAdminLangcode','target','target'.$__Context->val->name) ?>" onclick="popopen(this.href);return false;" class="buttonSet buttonSetting"><span><?php echo $__Context->lang->cmd_find_langcode ?></span></a>
					
					<?php }elseif($__Context->val->type=="textarea"){ ?>
					<textarea name="<?php echo $__Context->val->name ?>" id="target<?php echo $__Context->val->name ?>" rows="8" cols="42"><?php echo $__Context->val->value ?></textarea>
					<a href="<?php echo getUrl('','module','module','act','dispModuleAdminLangcode','target','target'.$__Context->val->name) ?>" onclick="popopen(this.href);return false;" class="buttonSet buttonSetting"><span><?php echo $__Context->lang->cmd_find_langcode ?></span></a>
					
					<?php }elseif($__Context->val->type=="select"){ ?>
					<select name="<?php echo $__Context->val->name ?>">
						<?php if($__Context->val->options&&count($__Context->val->options))foreach($__Context->val->options as $__Context->k=>$__Context->v){ ?>
						<option value="<?php echo $__Context->v->value ?>"<?php if($__Context->v->value == $__Context->val->value){ ?> selected="selected"<?php } ?>><?php echo $__Context->v->title ?></option>
						<?php } ?>
					</select>
					
					<?php }elseif($__Context->val->type=="checkbox"){ ?>
					<?php if($__Context->val->options&&count($__Context->val->options))foreach($__Context->val->options as $__Context->k=>$__Context->v){ ?>
					<span>
						<input type="checkbox" name="<?php echo $__Context->val->name ?>[]" value="<?php echo $__Context->v->value ?>" id="ch_<?php echo $__Context->key ?>_<?php echo $__Context->k ?>"<?php if(in_array($__Context->v->value, $__Context->val->value)){ ?> checked="checked"<?php } ?> class="checkbox" /> 
						<label for="ch_<?php echo $__Context->key ?>_<?php echo $__Context->k ?>"><?php echo $__Context->v->title ?></label>
					</span>
					<?php } ?>
					
					<?php }elseif($__Context->val->type=="radio"){ ?>
					<?php if($__Context->val->options&&count($__Context->val->options))foreach($__Context->val->options as $__Context->k=>$__Context->v){ ?>
					<span>
						<input type="radio" name="<?php echo $__Context->val->name ?>" value="<?php echo $__Context->v->value ?>" id="ch_<?php echo $__Context->key ?>_<?php echo $__Context->k ?>"<?php if($__Context->v->value==$__Context->val->value){ ?> checked="checked"<?php } ?> /> 
						<label for="ch_<?php echo $__Context->key ?>_<?php echo $__Context->k ?>"><?php echo $__Context->v->title ?></label>
					</span>
					<?php } ?>
					
					<?php }elseif($__Context->val->type=="image"){ ?>
					<?php if($__Context->val->value){ ?>
					<div>
						<img src="<?php echo $__Context->val->value ?>" /><br />
						<input type="checkbox" name="del_<?php echo $__Context->val->name ?>" value="Y" id="del_<?php echo $__Context->val->name ?>" class="checkbox" />
						<label for="del_<?php echo $__Context->val->name ?>"><?php echo $__Context->lang->cmd_delete ?></label>
					</div>
					<?php } ?>
					
					<input type="file" name="<?php echo $__Context->val->name ?>" value="" />
					<?php } ?>
					
					<?php if($__Context->val->description){ ?>
					<p class="desc"><?php echo nl2br(trim($__Context->val->description)) ?></p>
					<?php } ?>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
    <div class="btnArea">
		<span class="btn"><input type="submit" value="<?php echo $__Context->lang->cmd_registration ?>" /></span>
	</div>
</form>

<iframe name="hidden_iframe" frameborder="0" style="display:none"></iframe>
