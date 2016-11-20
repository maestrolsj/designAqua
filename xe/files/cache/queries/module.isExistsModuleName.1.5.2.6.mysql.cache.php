<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("isExistsModuleName");
$query->setAction("select");
$query->setPriority("");

${'site_srl7_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl7_argument'}->ensureDefaultValue('0');
${'site_srl7_argument'}->checkNotNull();
${'site_srl7_argument'}->createConditionValue();
if(!${'site_srl7_argument'}->isValid()) return ${'site_srl7_argument'}->getErrorMessage();
if(${'site_srl7_argument'} !== null) ${'site_srl7_argument'}->setColumnType('number');

${'mid8_argument'} = new ConditionArgument('mid', $args->mid, 'equal');
${'mid8_argument'}->checkNotNull();
${'mid8_argument'}->createConditionValue();
if(!${'mid8_argument'}->isValid()) return ${'mid8_argument'}->getErrorMessage();
if(${'mid8_argument'} !== null) ${'mid8_argument'}->setColumnType('varchar');

${'module_srl9_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'notequal');
${'module_srl9_argument'}->ensureDefaultValue('0');
${'module_srl9_argument'}->checkNotNull();
${'module_srl9_argument'}->createConditionValue();
if(!${'module_srl9_argument'}->isValid()) return ${'module_srl9_argument'}->getErrorMessage();
if(${'module_srl9_argument'} !== null) ${'module_srl9_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl7_argument,"equal")
,new ConditionWithArgument('`mid`',$mid8_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl9_argument,"notequal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>