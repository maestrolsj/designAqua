<?php if(!defined("__XE__"))exit;?><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/tpl','header.html') ?>
<!--#Meta:modules/module/tpl/js/multi_order.js--><?php $__tmp=array('modules/module/tpl/js/multi_order.js','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>

<h3 class="h3"><?php echo $__Context->lang->cmd_list_setting ?></h3>
<p><?php echo $__Context->lang->about_list_config ?></p>

<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>

<form class="form" action="./" method="post"><input type="hidden" name="error_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="board" value="board" />
	<input type="hidden" name="act" value="procBoardAdminInsertListConfig" />
	<input type="hidden" name="module_srl" value="<?php echo $__Context->module_srl ?>" />
	<input type="hidden" name="success_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" />

	<?php $__Context->list = array_keys($__Context->list_config) ?>
	<input type="hidden" name="list" value="<?php echo implode(',', $__Context->list) ?>" />
	<select class="multiorder_show" size="8" multiple="multiple" style="width:290px;vertical-align:top">
		<?php if($__Context->extra_vars&&count($__Context->extra_vars))foreach($__Context->extra_vars as $__Context->key=>$__Context->val){ ?><?php if(!$__Context->list_config[$__Context->key]){ ?><option value="<?php echo $__Context->key ?>"><?php echo $__Context->val->name ?></option><?php }} ?>
	</select>
	<button type="button" class="text multiorder_add" style="vertical-align:top"><?php echo $__Context->lang->cmd_insert ?></button>
	<select class="multiorder_selected" size="8" multiple="multiple" style="width:290px;vertical-align:top">
		<?php if($__Context->list_config&&count($__Context->list_config))foreach($__Context->list_config as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"><?php echo $__Context->val->name ?></option><?php } ?>
	</select>
	<button type="button" class="text multiorder_up" style="vertical-align:top"><?php echo $__Context->lang->cmd_move_up ?></button>
	<button type="button" class="text multiorder_down" style="vertical-align:top"><?php echo $__Context->lang->cmd_move_down ?></button>
	<button type="button" class="text multiorder_del" style="vertical-align:top"><?php echo $__Context->lang->cmd_delete ?></button>
	<script type="text/javascript">
		xe.registerApp(new xe.MultiOrderManager('list'));
	</script>

	<div class="btnArea">
		<span class="btn"><input type="submit" value="<?php echo $__Context->lang->cmd_save ?>" /></span>
	</div>

</form>
