<?php if(!defined("__XE__"))exit;?><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_board','header.html') ?>
<h3><?php echo $__Context->message ?></h3>
<?php if(!$__Context->is_logged){ ?>
<span class="btn"><a href="<?php echo getUrl('act','dispMemberLoginForm') ?>"><?php echo $__Context->lang->cmd_login ?>...</a></span>
<?php } ?>
<span class="btn"><button type="button" onclick="history.back()"><?php echo $__Context->lang->cmd_back ?></button></span>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_board','footer.html') ?>
