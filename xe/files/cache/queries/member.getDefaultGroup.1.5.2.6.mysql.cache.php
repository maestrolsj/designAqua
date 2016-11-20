<?php if(!defined('__ZBXE__')) exit();
$query = new Query();
$query->setQueryId("getDefaultGroup");
$query->setAction("select");
$query->setPriority("");
if(isset($args->site_srl)) {
${'site_srl26_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl26_argument'}->createConditionValue();
if(!${'site_srl26_argument'}->isValid()) return ${'site_srl26_argument'}->getErrorMessage();
} else
${'site_srl26_argument'} = null;if(${'site_srl26_argument'} !== null) ${'site_srl26_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_member_group`', '`member_group`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`is_default`',"'Y'","equal")
,new ConditionWithArgument('`site_srl`',$site_srl26_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>