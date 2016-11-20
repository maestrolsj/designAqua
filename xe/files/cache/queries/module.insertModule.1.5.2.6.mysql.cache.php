<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("insertModule");
$query->setAction("insert");
$query->setPriority("");

${'site_srl11_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl11_argument'}->ensureDefaultValue('0');
${'site_srl11_argument'}->checkNotNull();
if(!${'site_srl11_argument'}->isValid()) return ${'site_srl11_argument'}->getErrorMessage();
if(${'site_srl11_argument'} !== null) ${'site_srl11_argument'}->setColumnType('number');

${'module_srl12_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl12_argument'}->checkNotNull();
if(!${'module_srl12_argument'}->isValid()) return ${'module_srl12_argument'}->getErrorMessage();
if(${'module_srl12_argument'} !== null) ${'module_srl12_argument'}->setColumnType('number');

${'module_category_srl13_argument'} = new Argument('module_category_srl', $args->{'module_category_srl'});
${'module_category_srl13_argument'}->ensureDefaultValue('0');
if(!${'module_category_srl13_argument'}->isValid()) return ${'module_category_srl13_argument'}->getErrorMessage();
if(${'module_category_srl13_argument'} !== null) ${'module_category_srl13_argument'}->setColumnType('number');

${'mid14_argument'} = new Argument('mid', $args->{'mid'});
${'mid14_argument'}->checkNotNull();
if(!${'mid14_argument'}->isValid()) return ${'mid14_argument'}->getErrorMessage();
if(${'mid14_argument'} !== null) ${'mid14_argument'}->setColumnType('varchar');
if(isset($args->skin)) {
${'skin15_argument'} = new Argument('skin', $args->{'skin'});
if(!${'skin15_argument'}->isValid()) return ${'skin15_argument'}->getErrorMessage();
} else
${'skin15_argument'} = null;if(${'skin15_argument'} !== null) ${'skin15_argument'}->setColumnType('varchar');

${'is_skin_fix16_argument'} = new Argument('is_skin_fix', $args->{'is_skin_fix'});
${'is_skin_fix16_argument'}->ensureDefaultValue('Y');
if(!${'is_skin_fix16_argument'}->isValid()) return ${'is_skin_fix16_argument'}->getErrorMessage();
if(${'is_skin_fix16_argument'} !== null) ${'is_skin_fix16_argument'}->setColumnType('char');
if(isset($args->mskin)) {
${'mskin17_argument'} = new Argument('mskin', $args->{'mskin'});
if(!${'mskin17_argument'}->isValid()) return ${'mskin17_argument'}->getErrorMessage();
} else
${'mskin17_argument'} = null;if(${'mskin17_argument'} !== null) ${'mskin17_argument'}->setColumnType('varchar');

${'browser_title18_argument'} = new Argument('browser_title', $args->{'browser_title'});
${'browser_title18_argument'}->checkNotNull();
if(!${'browser_title18_argument'}->isValid()) return ${'browser_title18_argument'}->getErrorMessage();
if(${'browser_title18_argument'} !== null) ${'browser_title18_argument'}->setColumnType('varchar');
if(isset($args->layout_srl)) {
${'layout_srl19_argument'} = new Argument('layout_srl', $args->{'layout_srl'});
if(!${'layout_srl19_argument'}->isValid()) return ${'layout_srl19_argument'}->getErrorMessage();
} else
${'layout_srl19_argument'} = null;if(${'layout_srl19_argument'} !== null) ${'layout_srl19_argument'}->setColumnType('number');
if(isset($args->description)) {
${'description20_argument'} = new Argument('description', $args->{'description'});
if(!${'description20_argument'}->isValid()) return ${'description20_argument'}->getErrorMessage();
} else
${'description20_argument'} = null;if(${'description20_argument'} !== null) ${'description20_argument'}->setColumnType('text');
if(isset($args->content)) {
${'content21_argument'} = new Argument('content', $args->{'content'});
if(!${'content21_argument'}->isValid()) return ${'content21_argument'}->getErrorMessage();
} else
${'content21_argument'} = null;if(${'content21_argument'} !== null) ${'content21_argument'}->setColumnType('bigtext');
if(isset($args->mcontent)) {
${'mcontent22_argument'} = new Argument('mcontent', $args->{'mcontent'});
if(!${'mcontent22_argument'}->isValid()) return ${'mcontent22_argument'}->getErrorMessage();
} else
${'mcontent22_argument'} = null;if(${'mcontent22_argument'} !== null) ${'mcontent22_argument'}->setColumnType('bigtext');

${'module23_argument'} = new Argument('module', $args->{'module'});
${'module23_argument'}->checkNotNull();
if(!${'module23_argument'}->isValid()) return ${'module23_argument'}->getErrorMessage();
if(${'module23_argument'} !== null) ${'module23_argument'}->setColumnType('varchar');

${'is_default24_argument'} = new Argument('is_default', $args->{'is_default'});
${'is_default24_argument'}->ensureDefaultValue('N');
${'is_default24_argument'}->checkNotNull();
if(!${'is_default24_argument'}->isValid()) return ${'is_default24_argument'}->getErrorMessage();
if(${'is_default24_argument'} !== null) ${'is_default24_argument'}->setColumnType('char');
if(isset($args->menu_srl)) {
${'menu_srl25_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl25_argument'}->checkFilter('number');
if(!${'menu_srl25_argument'}->isValid()) return ${'menu_srl25_argument'}->getErrorMessage();
} else
${'menu_srl25_argument'} = null;if(${'menu_srl25_argument'} !== null) ${'menu_srl25_argument'}->setColumnType('number');

${'open_rss26_argument'} = new Argument('open_rss', $args->{'open_rss'});
${'open_rss26_argument'}->ensureDefaultValue('Y');
${'open_rss26_argument'}->checkNotNull();
if(!${'open_rss26_argument'}->isValid()) return ${'open_rss26_argument'}->getErrorMessage();
if(${'open_rss26_argument'} !== null) ${'open_rss26_argument'}->setColumnType('char');
if(isset($args->header_text)) {
${'header_text27_argument'} = new Argument('header_text', $args->{'header_text'});
if(!${'header_text27_argument'}->isValid()) return ${'header_text27_argument'}->getErrorMessage();
} else
${'header_text27_argument'} = null;if(${'header_text27_argument'} !== null) ${'header_text27_argument'}->setColumnType('text');
if(isset($args->footer_text)) {
${'footer_text28_argument'} = new Argument('footer_text', $args->{'footer_text'});
if(!${'footer_text28_argument'}->isValid()) return ${'footer_text28_argument'}->getErrorMessage();
} else
${'footer_text28_argument'} = null;if(${'footer_text28_argument'} !== null) ${'footer_text28_argument'}->setColumnType('text');

${'regdate29_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate29_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate29_argument'}->isValid()) return ${'regdate29_argument'}->getErrorMessage();
if(${'regdate29_argument'} !== null) ${'regdate29_argument'}->setColumnType('date');
if(isset($args->mlayout_srl)) {
${'mlayout_srl30_argument'} = new Argument('mlayout_srl', $args->{'mlayout_srl'});
if(!${'mlayout_srl30_argument'}->isValid()) return ${'mlayout_srl30_argument'}->getErrorMessage();
} else
${'mlayout_srl30_argument'} = null;if(${'mlayout_srl30_argument'} !== null) ${'mlayout_srl30_argument'}->setColumnType('number');

${'use_mobile31_argument'} = new Argument('use_mobile', $args->{'use_mobile'});
${'use_mobile31_argument'}->ensureDefaultValue('N');
if(!${'use_mobile31_argument'}->isValid()) return ${'use_mobile31_argument'}->getErrorMessage();
if(${'use_mobile31_argument'} !== null) ${'use_mobile31_argument'}->setColumnType('char');

$query->setColumns(array(
new InsertExpression('`site_srl`', ${'site_srl11_argument'})
,new InsertExpression('`module_srl`', ${'module_srl12_argument'})
,new InsertExpression('`module_category_srl`', ${'module_category_srl13_argument'})
,new InsertExpression('`mid`', ${'mid14_argument'})
,new InsertExpression('`skin`', ${'skin15_argument'})
,new InsertExpression('`is_skin_fix`', ${'is_skin_fix16_argument'})
,new InsertExpression('`mskin`', ${'mskin17_argument'})
,new InsertExpression('`browser_title`', ${'browser_title18_argument'})
,new InsertExpression('`layout_srl`', ${'layout_srl19_argument'})
,new InsertExpression('`description`', ${'description20_argument'})
,new InsertExpression('`content`', ${'content21_argument'})
,new InsertExpression('`mcontent`', ${'mcontent22_argument'})
,new InsertExpression('`module`', ${'module23_argument'})
,new InsertExpression('`is_default`', ${'is_default24_argument'})
,new InsertExpression('`menu_srl`', ${'menu_srl25_argument'})
,new InsertExpression('`open_rss`', ${'open_rss26_argument'})
,new InsertExpression('`header_text`', ${'header_text27_argument'})
,new InsertExpression('`footer_text`', ${'footer_text28_argument'})
,new InsertExpression('`regdate`', ${'regdate29_argument'})
,new InsertExpression('`mlayout_srl`', ${'mlayout_srl30_argument'})
,new InsertExpression('`use_mobile`', ${'use_mobile31_argument'})
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>