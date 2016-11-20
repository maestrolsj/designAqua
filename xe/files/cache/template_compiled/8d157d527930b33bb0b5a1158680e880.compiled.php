<?php if(!defined("__XE__"))exit;?>	</div>
	<div class="footer">
		<p class="power">
			Powered by <strong><a href="<?php echo _XE_LOCATION_SITE_ ?>" target="_blank">XE</a></strong>. <span class="vr">|</span>  
			<strong>Your version</strong>: <?php echo __XE_VERSION__ ?> <span class="vr">|</span> 
			<?php if(isset($__Context->latestVersion)){ ?><strong>Latest version</strong>: <a href="<?php echo $__Context->latestVersion->url ?>" target="_blank" title="<?php echo zdate($__Context->latestVersion->date, 'Y-m-d') ?>"><?php echo $__Context->latestVersion->title ?></a><?php } ?>
		</p>
		<p class="cache">
			<button type="button" class="text" onclick="doResetAdminMenu();"><?php echo $__Context->lang->cmd_admin_menu_reset ?></button> <span class="vr">|</span>  
			<button type="button" class="text" onclick="doRecompileCacheFile();"><?php echo $__Context->lang->cmd_remake_cache ?></button> <span class="vr">|</span> 
			<button type="button" class="text" onclick="doClearSession();"><?php echo $__Context->lang->cmd_clear_session ?></button> <span class="vr">|</span> 
			<a href="http://code.google.com/p/xe-core/issues/entry" target="_blank"><?php echo $__Context->lang->bug_report ?></a>
		</p>
	</div>
</div>
<script type="text/javascript">
xe.current_lang = '<?php echo $__Context->lang_type ?>';
xe.lang.confirm_run = '<?php echo $__Context->lang->confirm_run ?>';
xe.lang.confirm_reset_admin_menu = '<?php echo $__Context->lang->confirm_reset_admin_menu ?>';
admin_menu_srl = '<?php echo $__Context->admin_menu_srl ?>';
</script>

<!--#Meta:modules/admin/tpl/js/config.js--><?php $__tmp=array('modules/admin/tpl/js/config.js','','','');Context::loadFile($__tmp,'true','','');unset($__tmp); ?>
<!--#Meta:modules/session/tpl/js/session.js--><?php $__tmp=array('modules/session/tpl/js/session.js','','','');Context::loadFile($__tmp,'true','','');unset($__tmp); ?>
