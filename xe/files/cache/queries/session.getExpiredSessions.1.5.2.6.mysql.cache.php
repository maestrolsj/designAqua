<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getExpiredSession");
$query->setAction("select");
$query->setPriority("");

$query->setColumns(array(
new SelectExpression('`session_key`')
));
$query->setTables(array(
new Table('`xe_session`', '`session`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`expired`',"'".date("YmdHis")."'","less")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>