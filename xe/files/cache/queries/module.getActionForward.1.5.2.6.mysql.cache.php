<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getActionForward");
$query->setAction("select");
$query->setPriority("");
if(isset($args->act)) {
${'act9_argument'} = new ConditionArgument('act', $args->act, 'equal');
${'act9_argument'}->createConditionValue();
if(!${'act9_argument'}->isValid()) return ${'act9_argument'}->getErrorMessage();
} else
${'act9_argument'} = null;if(${'act9_argument'} !== null) ${'act9_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_action_forward`', '`action_forward`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`act`',$act9_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>