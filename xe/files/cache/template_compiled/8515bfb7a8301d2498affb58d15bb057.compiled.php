<?php if(!defined("__XE__"))exit;?><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_board_extended','header.html') ?>

<div class="smallBox w268">

    <div class="header">
        <h3><?php echo $__Context->lang->confirm_delete ?></h3>
    </div>

    <form action="./" method="get" onsubmit="return procFilter(this, delete_document)"><input type="hidden" name="error_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
    <input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
    <input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
    <input type="hidden" name="document_srl" value="<?php echo $__Context->document_srl ?>" />

        <div class="inputPassword tCenter">
            <span class="button <?php echo $__Context->btn_class ?>"><input type="submit" value="<?php echo $__Context->lang->cmd_delete ?>" accesskey="s" /></span>
            <a href="<?php echo getUrl('act','') ?>" class="button <?php echo $__Context->btn_class ?>"><span><?php echo $__Context->lang->cmd_cancel ?></span></a>
        </div>

    </form>
</div>

<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_board_extended','footer.html') ?>
