<?php if(!defined("__XE__"))exit;?><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/widget/tpl','header.html') ?>

<div class="table even easyList dsTg">
	<table width="100%" border="1" cellspacing="0">
		<caption>
			All(<?php echo $__Context->tCount ?>)
			<span class="side"><button type="button" class="text"><span class="hide"><?php echo $__Context->lang->simple_view ?></span><span class="show"><?php echo $__Context->lang->detail_view ?></span></button></span>
		</caption>
		<thead>
			<tr>
				<th scope="col" class="title"><?php echo $__Context->lang->widget_name ?></th>
				<th scope="col" class="nowr"><?php echo $__Context->lang->version ?></th>
				<th scope="col" class="nowr"><?php echo $__Context->lang->author ?></th>
				<th scope="col" class="nowr"><?php echo $__Context->lang->path ?></th>
				<th scope="col" class="nowr"><?php echo $__Context->lang->cmd_generate_code ?></th>
				<th scope="col" class="nowr"><?php echo $__Context->lang->cmd_delete ?></th>
			</tr>
		</thead>
		<tbody>
			<?php if($__Context->widget_list&&count($__Context->widget_list))foreach($__Context->widget_list as $__Context->widget){ ?><tr>
				<td class="title">
					<p><strong><?php echo $__Context->widget->title ?></strong></p>
					<p><?php echo $__Context->widget->description ?></p>
					<?php if($__Context->widget->need_update == 'Y'){ ?><p class="update">
						<?php echo $__Context->lang->msg_avail_easy_update ?> <a href="<?php echo $__Context->widget->update_url ?>&amp;return_url=<?php echo urlencode(getRequestUriByServerEnviroment()) ?>"><?php echo $__Context->lang->msg_do_you_like_update ?></a>
					</p><?php } ?>
				</td>
				<td class="nowr"><?php echo $__Context->widget->version ?></td>
				<td class="nowr">
					<?php if($__Context->widget->author&&count($__Context->widget->author))foreach($__Context->widget->author as $__Context->author){ ?>
						<?php if($__Context->author->homepage){ ?><a href="<?php echo $__Context->author->homepage ?>" target="_blank"><?php echo $__Context->author->name ?></a><?php } ?>
						<?php if(!$__Context->author->homepage){ ?><?php echo $__Context->author->name ?><?php } ?>
					<?php } ?>
				</td>
				<td class="nowr"><?php echo $__Context->widget->path ?></td>
				<td class="nowr"><a href="<?php echo getUrl('act', 'dispWidgetAdminGenerateCode', 'selected_widget', $__Context->widget->widget) ?>"><?php echo $__Context->lang->cmd_generate_code ?></a></td>
				<td class="nowr"><?php if($__Context->widget->remove_url){ ?><a href="<?php echo $__Context->widget->remove_url ?>&amp;return_url=<?php echo urlencode(getRequestUriByServerEnviroment()) ?>"><?php echo $__Context->lang->cmd_delete ?></a><?php } ?></td>
			</tr><?php } ?>
		</tbody>
	</table>
</div>
