<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/point/tpl/js/point_admin.js--><?php $__tmp=array('modules/point/tpl/js/point_admin.js','','','');Context::loadFile($__tmp,'true','','');unset($__tmp); ?>
<h1 class="h1"><?php echo $__Context->lang->point ?> <?php echo $__Context->lang->cmd_management ?></h1>
<?php if($__Context->module=='admin'){ ?>
<div class="cnb">
    <ul>
        <li <?php if($__Context->act=='dispPointAdminConfig'){ ?>class="active"<?php } ?>><a href="<?php echo getUrl('act','dispPointAdminConfig') ?>"><?php echo $__Context->lang->cmd_point_config ?></a></li>
        <li <?php if($__Context->act=='dispPointAdminModuleConfig'){ ?>class="active"<?php } ?>><a href="<?php echo getUrl('act','dispPointAdminModuleConfig') ?>"><?php echo $__Context->lang->cmd_point_module_config ?></a></li>
        <li <?php if($__Context->act=='dispPointAdminPointList'){ ?>class="active"<?php } ?>><a href="<?php echo getUrl('act','dispPointAdminPointList') ?>"><?php echo $__Context->lang->cmd_point_member_list ?></a></li>
    </ul>
</div>
<?php } ?>
