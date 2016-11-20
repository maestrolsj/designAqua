<?php if(!defined("__XE__"))exit;?><?php Context::addHtmlHeader('<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=yes" />') ?>
<div class="x">
	<p class="skipNav"><a href="#content">Skip Navigation</a></p>
	<div class="header">
		<h1><a href="<?php echo getUrl('','module','admin') ?>"><img src="<?php echo getUrl('') ?><?php echo $__Context->gnb_title_info->adminLogo ?>" alt="<?php echo $__Context->gnb_title_info->adminTitle ?>" /> <?php echo $__Context->gnb_title_info->adminTitle ?></a></h1>
		<p class="site"><a href="<?php echo getFullUrl('') ?>"><?php echo getFullUrl('') ?></a></p>
		<div class="account">
			<ul>
				<li><a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispMemberAdminInfo', 'is_admin', 'Y', 'member_srl', $__Context->logged_info->member_srl) ?>"><?php echo $__Context->logged_info->email_address ?></a></li>
				<li><a href="<?php echo getUrl('', 'module','admin','act','procAdminLogout') ?>">Log-out</a></li>
				<li><a href="#language" class="tgAnchor language" data-effect="slide" data-duration="100"><?php echo $__Context->lang_supported[$__Context->lang_type] ?></a>
					<ul class="tgContent" id="language">
						<?php if($__Context->lang_supported&&count($__Context->lang_supported))foreach($__Context->lang_supported as $__Context->key=>$__Context->val){ ?><li<?php if($__Context->key==$__Context->lang_type){ ?> class="selected"<?php } ?>><a href="<?php echo getUrl('l',$__Context->key) ?>" data-langcode="<?php echo $__Context->key ?>" onclick="doChangeLangType('<?php echo $__Context->key ?>'); return false;"><?php echo $__Context->val ?></a></li><?php } ?>
					</ul>
				</li>
			</ul>
		</div>
		<div class="gnb">
			<ul class="nav">
				<?php if($__Context->gnbUrlList&&count($__Context->gnbUrlList))foreach($__Context->gnbUrlList as $__Context->key=>$__Context->value){ ?><li<?php if($__Context->parentSrl==$__Context->key){ ?> class="activeOn"<?php } ?>><a href="<?php echo getFullUrl('') ?><?php echo $__Context->value['href'] ?>"><span><?php echo $__Context->value['text'] ?></span></a>
					<?php if(count($__Context->value['list'])){ ?><ul>
						<?php if($__Context->value['list']&&count($__Context->value['list']))foreach($__Context->value['list'] as $__Context->key2=>$__Context->value2){ ?><li><a href="<?php echo getFullUrl('') ?><?php echo $__Context->value2['href'] ?>"><?php echo $__Context->value2['text'] ?></a></li><?php } ?>
					</ul><?php } ?>
				</li><?php } ?>
			</ul>
			<select class="mnv">
			<?php if($__Context->gnbUrlList&&count($__Context->gnbUrlList))foreach($__Context->gnbUrlList as $__Context->key=>$__Context->value){ ?>
				<?php if(count($__Context->value['list']) > 0){ ?><optgroup label="<?php echo $__Context->value['text'] ?>">
					<?php if($__Context->value['list']&&count($__Context->value['list']))foreach($__Context->value['list'] as $__Context->key2=>$__Context->value2){ ?><option value="<?php echo getFullUrl('') ?><?php echo $__Context->value2['href'] ?>"<?php if($__Context->value2['text'] == $__Context->subMenuTitle){ ?> selected="selected"<?php } ?>><?php echo $__Context->value2['text'] ?></option><?php } ?>
				</optgroup><?php } ?>
				<?php if(count($__Context->value['list']) == 0){ ?><option value="<?php echo getFullUrl('') ?><?php echo $__Context->value['href'] ?>"<?php if(!$__Context->subMenuTitle){ ?> selected="selected"<?php } ?>><?php echo $__Context->value['text'] ?></option><?php } ?>
			<?php } ?>
			</select>
			<div class="bmk active">
				<a href="#bmk" class="bmAnchor" data-effect="fade" data-duration="200"><?php echo $__Context->lang->favorite ?></a>
				<ul id="bmk" class="bmContent">
					<?php if($__Context->favorite_list&&count($__Context->favorite_list))foreach($__Context->favorite_list as $__Context->favorite){ ?><li>
						<a href="<?php echo getUrl('', 'module', 'admin', 'act', $__Context->favorite->admin_index_act) ?>"><?php echo $__Context->favorite->title ?></a>
						<form class="action" action=""><input type="hidden" name="error_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
							<input type="hidden" name="module" value="admin" />
							<input type="hidden" name="act" value="procAdminToggleFavorite" />
							<input type="hidden" name="site_srl" value="0" />
							<input type="hidden" name="module_name" value="<?php echo $__Context->favorite->module ?>" />
							<input type="hidden" name="success_return_url" value="<?php echo getUrl('', 'module', 'admin') ?>" />
							<button type="submit" class="text" title="<?php echo $__Context->lang->cmd_delete ?>">x</button>
						</form>
					</li><?php } ?>
					<?php if(!is_array($__Context->favorite_list) || count($__Context->favorite_list) < 1){ ?><li><?php echo $__Context->lang->no_data ?></li><?php } ?>
				</ul>
			</div>
			<select class="mnv">
				<option><?php echo $__Context->lang->favorite ?></option>
				<?php if($__Context->favorite_list&&count($__Context->favorite_list))foreach($__Context->favorite_list as $__Context->favorite){ ?><option value="<?php echo getUrl('', 'module', 'admin', 'act', $__Context->favorite->admin_index_act) ?>"><?php echo $__Context->favorite->title ?></option><?php } ?>
			</select>
		</div>
	</div>
	<div class="body"> 
