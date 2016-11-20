<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getModuleGrants");
$query->setAction("select");
$query->setPriority("");

${'module_srl23_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl23_argument'}->checkFilter('number');
${'module_srl23_argument'}->checkNotNull();
${'module_srl23_argument'}->createConditionValue();
if(!${'module_srl23_argument'}->isValid()) return ${'module_srl23_argument'}->getErrorMessage();
if(${'module_srl23_argument'} !== null) ${'module_srl23_argument'}->setColumnType('number');

${'sort_index24_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index24_argument'}->ensureDefaultValue('group_srl');
if(!${'sort_index24_argument'}->isValid()) return ${'sort_index24_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_module_grants`', '`module_grants`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl23_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index24_argument'}, "asc")
));
$query->setLimit();
return $query; ?>