<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getModulePartConfig");
$query->setAction("select");
$query->setPriority("");

${'module15_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module15_argument'}->checkNotNull();
${'module15_argument'}->createConditionValue();
if(!${'module15_argument'}->isValid()) return ${'module15_argument'}->getErrorMessage();
if(${'module15_argument'} !== null) ${'module15_argument'}->setColumnType('varchar');

${'module_srl16_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl16_argument'}->checkNotNull();
${'module_srl16_argument'}->createConditionValue();
if(!${'module_srl16_argument'}->isValid()) return ${'module_srl16_argument'}->getErrorMessage();
if(${'module_srl16_argument'} !== null) ${'module_srl16_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`config`')
));
$query->setTables(array(
new Table('`xe_module_part_config`', '`module_part_config`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module`',$module15_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl16_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>