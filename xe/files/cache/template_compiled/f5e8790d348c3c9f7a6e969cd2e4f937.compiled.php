<?php if(!defined("__XE__"))exit;?><script type="text/javascript">
jQuery(function($){
	$('#favicon').change(function(){
		var re_favicon = /[^.]+\.ico$/
		if(re_favicon.test($(this).val()) != true){
			alert('*.ico <?php echo $__Context->lang->msg_possible_only_file ?>');
			return false;
		}
	});
	$('#mobicon').change(function(){
		var re_favicon = /[^.]+\.png$/
		if(re_favicon.test($(this).val()) != true){
			alert('*.png <?php echo $__Context->lang->msg_possible_only_file ?>');
			return false;
		}
	});
});
</script>
<!--#Meta:modules/admin/tpl/js/config.js--><?php $__tmp=array('modules/admin/tpl/js/config.js','','','');Context::loadFile($__tmp,'true','','');unset($__tmp); ?>
<?php Context::loadLang(''); ?>
<!--#Meta:modules/session/tpl/js/session.js--><?php $__tmp=array('modules/session/tpl/js/session.js','','','');Context::loadFile($__tmp,'true','','');unset($__tmp); ?>

<form action="" method="post" id="ftp_form" class="form" enctype="multipart/form-data"><input type="hidden" name="error_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="module" value="install" />
	<input type="hidden" name="act" value="procInstallAdminConfig" />
	<h1 class="h1"><?php echo $__Context->lang->menu_gnb_sub['adminConfigurationGeneral'] ?></h1>
	<fieldset class="section">
		<h2 class="h2"><?php echo $__Context->lang->subtitle_primary ?></h2>
		<ul>
			<li class="modulefinder">
				<p class="q"><?php echo $__Context->lang->about_start_module ?></p>
				<p class="a">
					<input type="hidden" name="index_module_srl" id="index_module_srl" value="<?php echo $__Context->start_module->index_module_srl ?>" />
					<input type="text" name="_target_module" id="_target_module" value="<?php echo $__Context->start_module->browser_title ?> (<?php echo $__Context->start_module->mid ?>)" readonly />
					<a href="#modalWindow" class="modalAnchor" onClick="viewSiteSearch()"><?php echo $__Context->lang->cmd_find ?></a> </p>
					<p class="site_keyword_search" style="display:none">
						<input type="text" name="site_keyword" /> <a href="#suggestion3" class="tgAnchor findsite"><?php echo $__Context->lang->cmd_confirm ?></a>
						<div id="suggestion3" class="tgContent suggestion" >
							<ul></ul>
						</div>
					</p>						
					<p>
						<select class="moduleList" style="width:290px"></select>
					</p>
					<p>
						<select class="moduleIdList" style="width:290px"></select>
						<a href="#" id="sitefind_addBtn" onclick="setStartModule()" style="display:none;"><?php echo $__Context->lang->cmd_select ?></a>
					</p>
				</p>
			</li>
			<li>
				<p class="q"><?php echo $__Context->lang->about_lang_select ?></p>
				<p class="a">
					<?php if($__Context->langs&&count($__Context->langs))foreach($__Context->langs as $__Context->key => $__Context->val){ ?>
					<?php if($__Context->key==$__Context->selected_lang){ ?>
					<input type="hidden" name="selected_lang[]" value="<?php echo $__Context->key ?>" />
					<input type="checkbox" checked="checked" disabled="disabled" />
					<label><?php echo $__Context->val ?></label>
					<?php }else{ ?>
					<input type="checkbox" name="selected_lang[]" id="lang_<?php echo $__Context->key ?>" value="<?php echo $__Context->key ?>" <?php if(isset($__Context->lang_selected[$__Context->key])){ ?>checked="checked" <?php } ?>/>
					<label for="lang_<?php echo $__Context->key ?>"><?php echo $__Context->val ?></label>
					<?php } ?>
					<?php } ?>
				</p>
			</li>
			<li>
				<p class="q"><label for=""><?php echo $__Context->lang->about_default_lang ?></label></p>
				<p class="a">
					<select name="change_lang_type">
						<?php if($__Context->lang_supported&&count($__Context->lang_supported))foreach($__Context->lang_supported as $__Context->key => $__Context->val){ ?>
						<option value="<?php echo $__Context->key ?>" <?php if($__Context->key==$__Context->selected_lang){ ?>selected="selected"<?php } ?>><?php echo $__Context->val ?></option>
						<?php } ?>
					</select>						
				</p>
			</li>
			<li>
				<p class="q"><label for="time_zone"><?php echo $__Context->lang->about_timezone ?></label></p>
				<p class="a">
					<select name="time_zone" id="time_zone">
						<?php if($__Context->time_zone_list&&count($__Context->time_zone_list))foreach($__Context->time_zone_list as $__Context->key => $__Context->val){ ?>
						<option value="<?php echo $__Context->key ?>" <?php if($__Context->time_zone==$__Context->key){ ?>selected="selected"<?php } ?>><?php echo $__Context->val ?></option>
						<?php } ?>
					</select>
				</p>
			</li>
			<li>
				<p class="q"><?php echo $__Context->lang->about_question_mobile_view ?></p>
				<p class="a">
					<input type="radio" name="use_mobile_view" id="use_mobile_view_y" value="Y" <?php if($__Context->use_mobile_view == 'Y'){ ?>checked="checked" <?php } ?>/> <label for="use_mobile_view_y"><?php echo $__Context->lang->cmd_yes ?></label>
					<input type="radio" name="use_mobile_view" id="use_mobile_view_n" value="N" <?php if($__Context->use_mobile_view != 'Y'){ ?>checked="checked" <?php } ?>/> <label for="use_mobile_view_n"><?php echo $__Context->lang->cmd_no ?></label>
				</p>
			</li>
			<li>
				<p class="q"><?php echo $__Context->lang->about_thumbnail_type ?></p>
				<p class="a">
					<input type="radio" name="thumbnail_type" id="thumbnail_type_crop" value="corp" <?php if($__Context->thumbnail_type != 'ratio'){ ?>checked="checked" <?php } ?>/>
					<label for="thumbnail_type_crop"><?php echo $__Context->lang->corp ?></label>
					<input type="radio" name="thumbnail_type" id="thumbnail_type_ratio" value="ratio" <?php if($__Context->thumbnail_type == 'ratio'){ ?>checked="checked" <?php } ?>/>
					<label for="thumbnail_type_ratio"><?php echo $__Context->lang->ratio ?></label>
				</p>
			</li>
			<li>
				<p class="q"><label for="htmlFooter"><?php echo $__Context->lang->input_footer_script ?></label>[<a href="#helpFooter" class="tgAnchor">?</a>]<p>
				<div class="tgContent layer" id="helpFooter">
					<p><?php echo $__Context->lang->detail_input_footer_script ?></p>
				</div>	
				<p class="a">
					<textarea name="htmlFooter" id="htmlFooter" rows="8" cols="42"><?php echo $__Context->htmlFooter ?></textarea>
				</p>
			</li>
			<li>
				<p class="q"><?php echo $__Context->lang->allow_use_favicon ?></p>
				<p class="a faviconPreview">
					<img src="<?php echo $__Context->favicon_url ?>" alt="favicon" width="16" height="16" class="fn1">
					<img src="<?php echo $__Context->favicon_url ?>" alt="favicon Image" width="16" height="16" class="fn2">
					<a href="javascript:deleteIcon('favicon\.ico');"><?php echo $__Context->lang->cmd_delete ?></a>
				</p>
				<p class="a"><input type="file" name="favicon" id="favicon" title="favicon" /> <span class="desc"><?php echo $__Context->lang->about_use_favicon ?></span></p>
			</li>
			<li>
				<p class="q"><?php echo $__Context->lang->allow_use_mobile_icon ?></p>
				<p class="a mobiconPreview">
					<img src="<?php echo $__Context->mobicon_url ?>" alt="Mobile Home Icon" width="32" height="32" />
					<span>www</span>
					<a href="javascript:deleteIcon('mobicon\.png');"><?php echo $__Context->lang->cmd_delete ?></a>
				</p>
				<p class="a"><input type="file" name="mobicon" id="mobicon" title="Mobile Home Icon"/> <span class="desc"><?php echo $__Context->lang->detail_use_mobile_icon ?></span></p>
			</li>
		</ul>
	</fieldset>
	<fieldset class="section">
		<h2 class="h2"><?php echo $__Context->lang->subtitle_advanced ?></h2>
		<ul>
			<li>
				<p class="q"><label for="admin_ip"><?php echo $__Context->lang->about_admin_ip_limit ?></label>[<a href="#helpAdminip" class="tgAnchor">?</a>]</p>
				<div class="tgContent layer" id="helpAdminip">
					<p><?php echo $__Context->lang->detail_about_admin_ip_limit ?></p>
				</div>
				<p class="a">
					<textarea name="admin_ip_list" id="admin_ip_list" rows="8" cols="42"><?php echo $__Context->admin_ip_list ?></textarea>
					<?php echo $__Context->lang->local_ip_address ?> : <?php echo $__Context->IP ?></p>
			</li>
			<li>
				<p class="q"><label for="default_url"><?php echo $__Context->lang->default_url ?></label>[<a href="#helpDefaulturl" class="tgAnchor">?</a>]</p>
				<div class="tgContent layer" id="helpDefaulturl">
					<p><?php echo $__Context->lang->about_default_url ?></p>
				</div>
				<p class="a"><input type="text" name="default_url" id="default_url" value="<?php echo $__Context->default_url ?>"/></p>
			</li>
			<li>
				<p class="q"><label for="use_ssl"><?php echo $__Context->lang->use_ssl ?></label>[<a href="#helpUsessl" class="tgAnchor">?</a>]</p>
				<div class="tgContent layer" id="helpUsessl">
					<p><?php echo $__Context->lang->about_use_ssl ?></p>
				</div>
				<p class="a">
					<?php if($__Context->lang->ssl_options&&count($__Context->lang->ssl_options))foreach($__Context->lang->ssl_options as $__Context->key => $__Context->val){ ?>
					<input type="radio" name="use_ssl" id="ssl_<?php echo $__Context->key ?>" value="<?php echo $__Context->key ?>" <?php if($__Context->use_ssl==$__Context->key){ ?>checked="checked" <?php } ?>/> <label for="ssl_<?php echo $__Context->key ?>"><?php echo $__Context->val ?></label>
					<?php } ?>
				</p>
			</li>
			<li>
				<p class="q"><?php echo $__Context->lang->server_ports ?></p>
				<p class="a">
					<label for="">HTTP:</label> <input type="text" name="http_port" id="http_port" size="5" value="<?php echo $__Context->http_port ?>" style="width:40px" />
					&nbsp;&nbsp;
					<label for="">HTTPS:</label> <input type="text" name="https_port" id="https_port" size="5" value="<?php echo $__Context->https_port ?>" style="width:40px" />
				</p>
			</li>
			<?php if(__XE_CDN_VERSION__!='%__XE_CDN_VERSION__%'){ ?><li>
				<p class="q"><?php echo $__Context->lang->about_cdn ?></p>
				<p class="a">
					<input type="radio" name="use_cdn" id="cdn_y" value="Y" <?php if($__Context->use_cdn=='Y'){ ?>checked="checked" <?php } ?>/> <label for="cdn_y"><?php echo $__Context->lang->cmd_yes ?></label>
					<input type="radio" name="use_cdn" id="cdn_n" value="N" <?php if($__Context->use_cdn!='Y'){ ?>checked="checked" <?php } ?>/> <label for="cdn_n"><?php echo $__Context->lang->cmd_no ?></label>
				</p>
			</li><?php } ?>
			<li>
				<p class="q"><label for=""><?php echo $__Context->lang->about_use_rewrite ?></label></p>
				<p class="a">
					<input type="radio" name="use_rewrite" id="use_rewrite_y" value="Y" <?php if($__Context->use_rewrite == 'Y'){ ?>checked="checked" <?php } ?>/> <label for="use_rewrite_y"><?php echo $__Context->lang->cmd_yes ?></label>
					<input type="radio" name="use_rewrite" id="use_rewrite_n" value="N" <?php if($__Context->use_rewrite != 'Y'){ ?>checked="checked" <?php } ?>/> <label for="use_rewrite_n"><?php echo $__Context->lang->cmd_no ?></label>
				</p>
			</li>
			<li>
				<p class="q"><label for="use_sso"><?php echo $__Context->lang->about_use_sso ?></label>[<a href="#helpUsesso" class="tgAnchor">?</a>]</p>
				<div class="tgContent layer" id="helpUsesso">
					<p><?php echo $__Context->lang->about_sso ?></p>
				</div>
				<p class="a">
					<input type="radio" name="use_sso" id="sso_y" value="Y" <?php if($__Context->use_sso=='Y'){ ?>checked="checked" <?php } ?>/> <label for="sso_y"><?php echo $__Context->lang->cmd_yes ?></label>
					<input type="radio" name="use_sso" id="sso_n" value="N" <?php if($__Context->use_sso!='Y'){ ?>checked="checked" <?php } ?>/> <label for="sso_n"><?php echo $__Context->lang->cmd_no ?></label>
				</p>
			</li>
			<li>
				<p class="q"><label for=""><?php echo $__Context->lang->use_db_session ?></label>[<a href="#helpUsedbSession" class="tgAnchor">?</a>]</p>
				<div class="tgContent layer" id="helpUsedbSession">
					<p><?php echo $__Context->lang->about_db_session ?></p>
				</div>
				<p class="a">
					<input type="radio" name="use_db_session" id="use_db_session_y" value="Y" <?php if($__Context->use_db_session=='Y'){ ?>checked="checked" <?php } ?>/> <label for="use_db_session_y"><?php echo $__Context->lang->cmd_yes ?></label>
					<input type="radio" name="use_db_session" id="use_db_session_n" value="N" <?php if($__Context->use_db_session!='Y'){ ?>checked="checked" <?php } ?>/> <label for="use_db_session_n"><?php echo $__Context->lang->cmd_no ?></label>
				</p>
			</li>
			<li>
				<p class="q"><label for=""><?php echo $__Context->lang->qmail_compatibility ?></label>[<a href="#helpQmail" class="tgAnchor">?</a>]</p>
				<div class="tgContent layer" id="helpQmail">
					<p><?php echo $__Context->lang->about_qmail_compatibility ?></p>
				</div>
				<p class="a">
					<input type="radio" name="qmail_compatibility" id="qmail_compatibility_y" value="Y" <?php if($__Context->qmail_compatibility=='Y'){ ?>checked="checked" <?php } ?>/> <label for="qmail_compatibility_y"><?php echo $__Context->lang->cmd_yes ?></label>
					<input type="radio" name="qmail_compatibility" id="qmail_compatibility_n" value="N" <?php if($__Context->qmail_compatibility!='Y'){ ?>checked="checked" <?php } ?>/> <label for="qmail_compatibility_n"><?php echo $__Context->lang->cmd_no ?></label>
				</p>
			</li>
			<li>
				<p class="q"><?php echo $__Context->lang->about_html_dtd ?></p>
				<p class="a">
					<input type="radio" name="use_html5" id="xhtml" value="N" <?php if($__Context->use_html5 != 'Y'){ ?>checked="checked" <?php } ?>/> <label for="xhtml"><?php echo $__Context->lang->xhtml_transitional ?></label>
					<input type="radio" name="use_html5" id="html5" value="Y"  <?php if($__Context->use_html5 == 'Y'){ ?>checked="checked" <?php } ?>/> <label for="html5"><?php echo $__Context->lang->html5 ?></label>
				</p>
			</li>
		</ul>
	</fieldset>
	<div class="btnArea">
		<span class="btn medium"><input type="submit" value="<?php echo $__Context->lang->cmd_save ?>" /></span>
	</div>
</form>
