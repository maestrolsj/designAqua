<?php if(!defined("__XE__"))exit;?><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/admin/tpl','_spHeader.html') ?>
<div class="content" id="content">
	<?php echo $__Context->content ?>
</div>
<?php if($__Context->parentSrl != 0){ ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/admin/tpl','_spLnb.content.html') ?>
<?php } ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/admin/tpl','_spFooter.html') ?>
