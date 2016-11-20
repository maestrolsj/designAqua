<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getMidInfo");
$query->setAction("select");
$query->setPriority("");
if(isset($args->mid)) {
${'mid20_argument'} = new ConditionArgument('mid', $args->mid, 'equal');
${'mid20_argument'}->createConditionValue();
if(!${'mid20_argument'}->isValid()) return ${'mid20_argument'}->getErrorMessage();
} else
${'mid20_argument'} = null;if(${'mid20_argument'} !== null) ${'mid20_argument'}->setColumnType('varchar');
if(isset($args->module_srl)) {
${'module_srl21_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl21_argument'}->createConditionValue();
if(!${'module_srl21_argument'}->isValid()) return ${'module_srl21_argument'}->getErrorMessage();
} else
${'module_srl21_argument'} = null;if(${'module_srl21_argument'} !== null) ${'module_srl21_argument'}->setColumnType('number');
if(isset($args->site_srl)) {
${'site_srl22_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl22_argument'}->createConditionValue();
if(!${'site_srl22_argument'}->isValid()) return ${'site_srl22_argument'}->getErrorMessage();
} else
${'site_srl22_argument'} = null;if(${'site_srl22_argument'} !== null) ${'site_srl22_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`mid`',$mid20_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl21_argument,"equal", 'and')
,new ConditionWithArgument('`site_srl`',$site_srl22_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>