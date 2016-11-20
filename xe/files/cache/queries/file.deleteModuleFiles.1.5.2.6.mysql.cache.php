<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("deleteModuleFiles");
$query->setAction("delete");
$query->setPriority("");

${'module_srl18_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl18_argument'}->checkFilter('number');
${'module_srl18_argument'}->checkNotNull();
${'module_srl18_argument'}->createConditionValue();
if(!${'module_srl18_argument'}->isValid()) return ${'module_srl18_argument'}->getErrorMessage();
if(${'module_srl18_argument'} !== null) ${'module_srl18_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl18_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>