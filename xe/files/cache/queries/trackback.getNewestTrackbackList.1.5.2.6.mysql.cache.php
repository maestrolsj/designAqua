<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getNewestTrackbackList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->site_srl)) {
${'site_srl19_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl19_argument'}->checkFilter('number');
${'site_srl19_argument'}->createConditionValue();
if(!${'site_srl19_argument'}->isValid()) return ${'site_srl19_argument'}->getErrorMessage();
} else
${'site_srl19_argument'} = null;if(${'site_srl19_argument'} !== null) ${'site_srl19_argument'}->setColumnType('number');
if(isset($args->module_srl)) {
${'module_srl20_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl20_argument'}->checkFilter('number');
${'module_srl20_argument'}->createConditionValue();
if(!${'module_srl20_argument'}->isValid()) return ${'module_srl20_argument'}->getErrorMessage();
} else
${'module_srl20_argument'} = null;if(${'module_srl20_argument'} !== null) ${'module_srl20_argument'}->setColumnType('number');

${'list_count22_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count22_argument'}->ensureDefaultValue('20');
if(!${'list_count22_argument'}->isValid()) return ${'list_count22_argument'}->getErrorMessage();

${'sort_index21_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index21_argument'}->ensureDefaultValue('trackbacks.list_order');
if(!${'sort_index21_argument'}->isValid()) return ${'sort_index21_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`trackbacks`.*')
));
$query->setTables(array(
new Table('`xe_trackbacks`', '`trackbacks`')
,new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`modules`.`site_srl`',$site_srl19_argument,"equal", 'and')
,new ConditionWithArgument('`modules`.`module_srl`',$module_srl20_argument,"in", 'and')
,new ConditionWithoutArgument('`trackbacks`.`module_srl`','`modules`.`module_srl`',"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index21_argument'}, "asc")
));
$query->setLimit(new Limit(${'list_count22_argument'}));
return $query; ?>