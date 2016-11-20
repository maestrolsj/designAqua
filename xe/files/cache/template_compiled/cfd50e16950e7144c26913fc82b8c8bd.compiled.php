<?php if(!defined("__XE__"))exit;?><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_default','_header.html') ?>
<form action="./" method="get" onsubmit="return procFilter(this, delete_document)"><input type="hidden" name="error_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
	<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
	<input type="hidden" name="document_srl" value="<?php echo $__Context->document_srl ?>" />
	<h3><?php echo $__Context->lang->confirm_delete ?></h3>
	<span class="btn"><input type="submit" value="<?php echo $__Context->lang->cmd_delete ?>" /></span>
	<span class="btn"><a href="<?php echo getUrl('act','') ?>"><?php echo $__Context->lang->cmd_cancel ?></a></span>
</form>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_default','_footer.html') ?>
