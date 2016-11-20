<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("deleteModuleTags");
$query->setAction("delete");
$query->setPriority("");

${'module_srl19_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl19_argument'}->checkFilter('number');
${'module_srl19_argument'}->checkNotNull();
${'module_srl19_argument'}->createConditionValue();
if(!${'module_srl19_argument'}->isValid()) return ${'module_srl19_argument'}->getErrorMessage();
if(${'module_srl19_argument'} !== null) ${'module_srl19_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_tags`', '`tags`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl19_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>